<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\RegionRepository;

class RegionController extends Controller
{
    function Index(RegionRepository $repository) {
        $data = $repository->FindAll();

        return response()->json($data);
    }

    function Find(string $region_id, RegionRepository $repository) {
        $data = $repository->Find($region_id);

        return response()->json($data);
    }
}
