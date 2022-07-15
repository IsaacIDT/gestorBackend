<?php
namespace App\Http\Controllers;

use App\Services\Actions\CategoriaServiceAction;
use App\Services\Data\CategoriaServiceData;
use Illuminate\Http\Request;

class CategoriaController extends Controller{
    public function getCategorias(){
        $categorias = CategoriaServiceData::listCategorias();
        return $categorias;
    }

    public function getCategoria($id){
        $categoria = CategoriaServiceData::listCategoria($id);
        return $categoria; 
    }

    //PAGE EXPIRED CAUSADO POR CRF TOKEN VERIFICAR PERMISOS EN HTTP/MIDDLEWARE/VERIFYcsrf...
    public function createCategoria(Request $request){
        $success = CategoriaServiceAction::setCategoria($request);
        return $success;
    }

    public function editCategoria($id, Request $request){
        $success = CategoriaServiceAction::editCategoria($request, $id);
        return $success;
    }

    public function deleteCategoria($id){
        $success = CategoriaServiceAction::deleteCategoria($id);
        return $success;
    }
}
