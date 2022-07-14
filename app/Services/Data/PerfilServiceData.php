<?php
namespace App\Services\Data;

Use App\Repositories\Data\PerfilRepoData;

class PerfilServiceData{
    public static function listPerfiles(){
        $perfiles = PerfilRepoData::retornaPerfiles();
        return $perfiles;
    }

    public static function listPerfil($id){
        $perfil = PerfilRepoData::retornaPerfil($id);
        if(count($perfil)>0){
            return $perfil;
        }else{
            return false;
        }
    }

    public static function existProfile($nombre){
        $existe = PerfilRepoData::existePerfil($nombre);
        if(count($existe)>0){
            return true;
        }else{
            return false;
        }
    }
}
