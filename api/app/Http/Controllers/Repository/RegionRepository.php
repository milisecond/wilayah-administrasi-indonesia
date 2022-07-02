<?php

namespace App\Http\Controllers\Repository;

use App\Models\RegionModel;
use Illuminate\Database\Eloquent\Collection;

class RegionRepository {
     function FindAll(): Collection {
          $query = RegionModel::whereRaw("LENGTH(kode) < 4");

          return $query->get();
     }     

     function Find(string $region_id): Collection {
          $n = 2;
          if(strlen($region_id) < 8){
               $n = strlen($region_id) + 3;
          }else{
               $n = 13;
          }

          $query = RegionModel::where('kode', 'like', $region_id.'%')
          ->whereRaw("LENGTH(kode) = ".$n)
          ->orderBy('nama', 'asc');

          return $query->get();
     }
}
