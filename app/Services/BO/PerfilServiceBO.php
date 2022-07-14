<?php
namespace App\Services\BO;

use Carbon\Carbon;

class PerfilServiceBO{
    public static function createPerfil($bodyContent){
        // ...
        $perfil['perfil_id'] = $bodyContent['perfil_id'];
        $perfil['nombre'] = $bodyContent['nombre'];
        $perfil['clave'] = $bodyContent['clave'];
        $perfil['descripcion'] = $bodyContent['descripcion'];  
        $mytime = Carbon::now(); 
        $perfil['registro_fecha'] = $mytime;
        $perfil['registro_autor_id'] = $bodyContent['registro_autor_id'];
        $perfil['status'] = 200;
        return $perfil;
        //$response = UsuarioServiceAction::userSet($perfil);
        //return $response;
    }

    public static function createPerfilUpdate($bodyContent){
        $perfil['nombre'] = $bodyContent['nombre'];
        $perfil['clave'] = $bodyContent['clave'];
        $perfil['descripcion'] = $bodyContent['descripcion'];  
        $mytime = Carbon::now(); 
        $perfil['actualizacion_fecha'] = $mytime;
        $perfil['actualizacion_autor_id'] = $bodyContent['actualizacion_autor_id'];
        return $perfil;
    }
}