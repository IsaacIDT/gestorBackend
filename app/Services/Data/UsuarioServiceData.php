<?php
namespace App\Services\Data;

use Illuminate\Support\Facades\DB;
Use App\Repositories\Data\UsuarioRepoData;

class UsuarioServiceData{
    public static function listUsers(){
        $users = UsuarioRepoData::retornaUsuarios();
        return $users;
    }

    public static function listUser($id){
        $usuario = UsuarioRepoData::retornaUsuario($id);
        if(count($usuario)>0){
            return $usuario;
        }else{
            return false;
        }
    }

    public static function existUser($usuario, $correo){
        $uCorreo = UsuarioRepoData::existeCorreo($correo); 
        $uUsuario = UsuarioRepoData::existeUsuario($usuario); 
        if(count($uCorreo)+count($uUsuario)>0){
            return true;
        }else{
            return false;
        }
    }
}
