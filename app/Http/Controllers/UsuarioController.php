<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Services\Actions\UsuarioServiceAction;
use App\Services\Data\UsuarioServiceData;
use App\Services\BO\UsuarioServiceBO;
use Illuminate\Http\Request;

class UsuarioController extends Controller{
    public function getUsers(){
        $users = UsuarioServiceData::listUsers();
        return $users;
    }

    public function getUser($id){
        $user = UsuarioServiceData::listUser($id);
        return $user;
    }

    //PAGE EXPIRED CAUSADO POR CRF TOKEN VERIFICAR PERMISOS EN HTTP/MIDDLEWARE/VERIFYcsrf...
    public function createUser(Request $request){
        UsuarioServiceAction::userSet($request);
        return ["Exito(?"];
    }

    // public function setUser(){
    //     //$response = UsuarioServiceAction::userSet();
    //     return ["Result" => "Data has been saved"];
    // }

    public function editUser(Request $request, $id){
        UsuarioServiceAction::userEdit($request, $id);
        return ["Exito¡??"];
    }

    // public function updateUser(Request $request, $id){
    //     UsuarioServiceAction::userUpdate($id);
    // }

    public function deleteUser($id){
        UsuarioServiceAction::userDelete($id);
    }
}
