<?php

namespace App\Jobs;

use App\Helpers\BpsApiHelper;
use App\Models\JobsErrorLogs;
use App\Models\Province;
use App\Models\Regency;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Throwable;

class GetRegencies implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $prov_code;

    public function __construct($province_code)
    {
        $this->prov_code = $province_code;
    }

    public function handle(): void
    {
        try{
            $prov_code = $this->prov_code;
            $fetchRegency = BpsApiHelper::getRegency($prov_code);
            $province = Province::where('code', $prov_code)->first();
            foreach ($fetchRegency as $code => $name) {
                $regency = Regency::where([['code', $code], ['parent_code', $prov_code]])->firstOrNew();
                $regency->parent_code = $prov_code;
                $regency->code = $prov_code . $code;
                $regency->name = $name;
                $regency->province()->associate($province);
                $regency->save();
            }
        } catch (Throwable $exception){
            JobsErrorLogs::create([
                'name' => 'Regency Job',
                'log' => $exception
            ]);
        }
        sleep(1);
    }
}
