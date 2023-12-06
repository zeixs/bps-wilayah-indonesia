<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Contracts\Database\Query\Builder as QueryBuilder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class IndonesiaController extends Controller
{
    public function searchProvince(Request $request)
    {
        $search = Str::upper($request->search);
        $data = Province::where('name', 'like', '%' . $search . '%')->get();
        return ResponseHelper::json(200, 'ok', $data);
    }
    public function searchRegency(Request $request)
    {
        $search = Str::upper($request->search);
        $data = Regency::where('name', 'like', '%' . $search . '%')->get();
        return ResponseHelper::json(200, 'ok', $data);
    }
    public function searchDistrict(Request $request)
    {
        $search = Str::upper($request->search);
        $data = District::where('name', 'like', '%' . $search . '%')->get();
        return ResponseHelper::json(200, 'ok', $data);
    }
}