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
        try {
            $fetchDistricts = BpsApiHelper::getDistrict($this->prov_code, $this->reg_code);
            foreach ($fetchDistricts as $code => $name) {
                $district = District::where([['province_code', $this->prov_code],['regency_code', $this->reg_code],['code', $code]])->firstOrNew();
                $district->code = $code;
                $district->name = $name;
                $district->province()->associate($this->prov_code);
                $district->regency()->associate($this->reg_code);
                $district->save();
            }
            sleep(1);
        } catch (Throwable $exception) {
            JobsErrorLogs::create([
                'name' => 'District Job',
                'log' => $exception
            ]);
        }
    }
}
