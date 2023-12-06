<?php

namespace App\Jobs;

use App\Helpers\BpsApiHelper;
use App\Models\District;
use App\Models\JobsErrorLogs;
use App\Models\Regency;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Laravel\Prompts\Output\ConsoleOutput;
use Throwable;

class GetDistricts implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $reg_code;
    public $prov_code;
    public function __construct($province_code, $regency_code)
    {
        $this->reg_code = $regency_code;
        $this->prov_code = $province_code;
    }

    public function handle(): void
    {
        $output = new ConsoleOutput();
        try {
            $prov_code = $this->prov_code;
            $reg_code = $this->reg_code;
            $fetchDistricts = BpsApiHelper::getDistrict($prov_code, $reg_code);
            $parent = Regency::where('code', $prov_code . $reg_code)->first();
            foreach ($fetchDistricts as $code => $name) {
                $stringify_district_code = str($parent->code) . str($code);
                $district = District::where([
                    ['parent_code', $parent->code],
                    ['code', $stringify_district_code]
                ])->firstOrNew();
                $district->parent_code = $parent->code;
                $district->code = $stringify_district_code;
                $district->name = $name;
                $district->regency()->associate($parent);
                $district->save();
            }
            $output->writeln('Procesing for ' . $parent->name . ' With Regency Code ' . $parent->code);
            sleep(1);
        } catch (Throwable $exception) {
            JobsErrorLogs::create([
                'name' => 'District Job',
                'log' => $exception
            ]);
        }
    }
}
