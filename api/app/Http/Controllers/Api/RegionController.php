<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\RegionRepository;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    protected $data;

    function __construct()
    {
        $this->data = [];
    }

    function Index(RegionRepository $repository) {
        $data = $repository->FindAll();

        return response()->json($data);
    }

    function Find(Request $request,RegionRepository $repository, RegionFactory $factory) {
        $data = $factory::Find($request, $repository);

        return response()->json($data);
    }
}
