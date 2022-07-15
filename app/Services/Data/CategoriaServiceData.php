<?php
namespace App\Services\Data;

use Illuminate\Support\Facades\DB;
Use App\Repositories\Data\CategoriaRepoData;

class CategoriaServiceData{
    public static function listCategorias(){
        $categorias = CategoriaRepoData::retornaCategorias();
        return $categorias;
    }

    public static function listcategoria($id){
        $categoria = CategoriaRepoData::retornaCategoria($id);
        if(count($categoria)>0){
            return $categoria;
        }else{
            return false;
        }
    }

    public static function existCategory($nombre){
        $existe = CategoriaRepoData::existeCategoria($nombre);
        if(count($existe)>0){
            return true;
        }else{
            return false;
        }
    }
}
