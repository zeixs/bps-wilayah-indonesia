<?php

namespace App\Http\Controllers\Api;

use App\Helpers\BpsApiHelper;
use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Jobs\GetDistricts;
use App\Jobs\GetRegencies;
use App\Models\District;
use App\Models\Province;
use App\Models\Regency;

class BpsController extends Controller
{
    public function getProvinces()
    {
        $task = BpsApiHelper::ProvinceList();
        foreach ($task as $code => $name) {
            $province = Province::where('code', $code)->firstOrNew();
            $province->code = $code;
            $province->name = $name;
            $province->save();
        }
        $db = Province::get();
        $data = [
            'Fetch' => $task,
            'Saved' => $db,
            'Summary' => [
                'Fetched Data' => collect($task)->count(),
                'Saved Data' => $db->count()
            ]
        ];
        return ResponseHelper::json(200, 'ok', $data);
    }

    public function getRegencies()
    {
        $provinces = Province::get();
        foreach ($provinces as $province) {
            GetRegencies::dispatch($province->code);
        }
        $fetched = Province::with('regencies')->get();
        return ResponseHelper::json(200, 'ok', $fetched);
    }

    public function getDistricts()
    {
        $regencies = Regency::get();
        foreach ($regencies as $regency) {
            $prov_code = str($regency->parent_code);
            $reg_code = str_replace($prov_code, '', $regency->code);
            GetDistricts::dispatch($prov_code, $reg_code);
        }
        return ResponseHelper::json(200, 'ok');
    }
}
