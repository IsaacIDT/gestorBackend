<?php
namespace App\Http\Controllers;

use App\Services\Actions\MarcaServiceAction;
use App\Services\Data\MarcaServiceData;
use Illuminate\Http\Request;

class MarcaController extends Controller{
    public function getMarcas(){
        $marcas = MarcaServiceData::listMarcas();
        return $marcas;
    }

    public function getMarca($id){
        $marca = MarcaServiceData::listMarca($id);
        return $marca; 
    }

    //PAGE EXPIRED CAUSADO POR CRF TOKEN VERIFICAR PERMISOS EN HTTP/MIDDLEWARE/VERIFYcsrf...
    public function createMarca(Request $request){
        MarcaServiceAction::marcaSet($request);
        return ["Exito(?"];
    }

    // public function setUser(){
    //     //$response = UsuarioServiceAction::userSet();
    //     return ["Result" => "Data has been saved"];
    // }

    public function editMarca($id, Request $request){
        MarcaServiceAction::marcaEdit($request, $id);
    }

    // public function updateUser(Request $request, $id){
    //     UsuarioServiceAction::userUpdate($id);
    // }

    public function deleteMarca($id){
        MarcaServiceAction::marcaDelete($id);
    }
}
