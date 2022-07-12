<?php
namespace App\Services\Data;

use Illuminate\Support\Facades\DB;
Use App\Repositories\Data\MarcaRepoData;

class MarcaServiceData{
    public static function listMarcas(){
        $marcas = MarcaRepoData::retornaMarcas();
        return $marcas;
    }

    public static function listMarca($id){
        $marca = MarcaRepoData::retornaMarca($id);
        if(count($marca)>0){
            return $marca;
        }else{
            return false;
        }
    }

    public static function existBrand($nombre){
        $existe = MarcaRepoData::existeMarca($nombre);
        if(count($existe)>0){
            return true;
        }else{
            return false;
        }
    }
}
