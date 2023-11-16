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
use Illuminate\Http\Request;

class BpsController extends Controller
{
    public function getProvinces(){
        $task = BpsApiHelper::ProvinceList();
        foreach($task as $code => $name){
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

    public function getRegencies(){
        $provinces = Province::get();
        foreach($provinces as $province){
            GetRegencies::dispatch($province->code);
        }
        $fetched = Province::with('regencies')->get();
        return ResponseHelper::json(200, 'ok', $fetched);
    }

    public function getDistricts(){
        // GetDistricts::dispatch(33, 10);
        $regencies = Regency::get();
        foreach($regencies as $regency){
            GetDistricts::dispatch($regency->province_code, $regency->code);
        }
        return ResponseHelper::json(200, 'ok');
    }

    public function singleDistrict(Request $request){
        $data = BpsApiHelper::getDistrict($request->province_code, $request->regency_code);
        // $data = District::where([['province_code', 33], ['regency_code', 10]])->get();
        return ResponseHelper::json(200, 'ok', $data);
    }
}
