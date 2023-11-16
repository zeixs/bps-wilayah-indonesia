<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class BpsApiHelper {
    public static function ProvinceList(){
        try {
            $param = '?thn=2023';
            $response = Http::get('https://sipedas.pertanian.go.id/api/wilayah/list_pro' . $param);
            $data = json_decode($response->body());
            return $data;
          } catch (\Throwable $th) {
            return $th->getMessage();
          }
    }

    public static function getRegency($provinceCode){
        try {
            $param = '?thn=2023&lvl=11&pro=' . $provinceCode;
            $response = Http::get('https://sipedas.pertanian.go.id/api/wilayah/list_kab' . $param);
            $data = json_decode($response->body());
            return $data;
          } catch (\Throwable $th) {
            return $th->getMessage();
          }
    }

    public static function getDistrict($provinceCode, $regencyCode){
        try {
            $param = '?thn=2023&lvl=12&pro=' . $provinceCode . '&kab=' . $regencyCode;
            $response = Http::get('https://sipedas.pertanian.go.id/api/wilayah/list_kec' . $param);
            $data = json_decode($response->body());
            return $data;
          } catch (\Throwable $th) {
            return $th->getMessage();
          }
    }
}