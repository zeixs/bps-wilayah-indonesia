<?php

namespace App\Jobs;

use App\Helpers\BpsApiHelper;
use App\Models\JobsErrorLogs;
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
            $fetchRegency = BpsApiHelper::getRegency($this->prov_code);
            foreach ($fetchRegency as $code => $name) {
                $regency = Regency::where([['code', $code], ['province_code', $this->prov_code]])->firstOrNew();
                $regency->code = $code;
                $regency->name = $name;
                $regency->province()->associate($this->prov_code);
                $regency->save();
            }
        } catch (Throwable $exception){
            JobsErrorLogs::create([
                'name' => 'Regency Job',
                'log' => $exception
            ]);
        }
    }
}
