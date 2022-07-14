<?php
namespace App\Http\Controllers;

use App\Services\Actions\PerfilServiceAction;
use App\Services\Data\PerfilServiceData;
use Illuminate\Http\Request;

class PerfilController extends Controller{
    public function getPerfiles(){
        $perfiles = PerfilServiceData::listPerfiles();
        return $perfiles;
    }

    public function getPerfil($id){
        $perfil = PerfilServiceData::listPerfil($id);
        return $perfil; 
    }

    //PAGE EXPIRED CAUSADO POR CRF TOKEN VERIFICAR PERMISOS EN HTTP/MIDDLEWARE/VERIFYcsrf...
    public function createPerfil(Request $request){
        $success = PerfilServiceAction::setPerfil($request);
        return $success;
    }

    public function editPerfil($id, Request $request){
        $success = PerfilServiceAction::editPerfil($request, $id);
        return $success;
    }

    public function deletePerfil($id){
        $success = PerfilServiceAction::deletePerfil($id);
        return $success;
    }
}
