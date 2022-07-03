<?php

namespace App\Http\Controllers\Repository;

use App\Models\RegionModel;
use Illuminate\Database\Eloquent\Collection;

class RegionRepository {
     function FindAll(): Collection {
          $query = RegionModel::whereRaw("LENGTH(kode) < 4");

          return $query->get();
     }     

     function FindById(string $region_id): Collection {
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


     function FindByName(string $region_name): Collection {

          $query = RegionModel::where('nama', 'ilike', '%' . $region_name . '%')
          ->whereRaw("LENGTH(kode) = ". 8)
          ->orderBy('nama', 'asc');

          return $query->get();
     }
}
