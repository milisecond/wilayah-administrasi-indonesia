<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Repository\RegionRepository;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class RegionFactory {
     static function Find(Request $request, RegionRepository $repository): Collection{
          $result = [];
          $keyword = $request->region_id ?? $request->region_name;

          if($request->region_id){
              $result = $repository->FindById($keyword);
          }elseif($request->region_name){
              $result = $repository->FindByName($keyword);
          }

          return $result;
     }
}
