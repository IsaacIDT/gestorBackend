<?php
namespace App\Services\BO;

use Carbon\Carbon;

class MarcaServiceBO{
    public static function marcaCreate($bodyContent){
        // ...
        $marca['marca_id'] = $bodyContent['marca_id'];
        $marca['nombre'] = $bodyContent['nombre'];
        $mytime = Carbon::now(); 
        $marca['registro_fecha'] = $mytime;
        $marca['registro_autor_id'] = $bodyContent['registro_autor_id'];
        $marca['actualizacion_fecha'] = $mytime;
        $marca['actualizacion_autor_id'] = $bodyContent['actualizacion_autor_id'];
        $marca['status'] = $bodyContent['status'];
        return $marca;
        //$response = UsuarioServiceAction::userSet($marca);
        //return $response;
    }

    public static function marcaUpdate($bodyContent){
        $marca['marca_id'] = $bodyContent['marca_id'];
        $marca['nombre'] = $bodyContent['nombre'];
        $mytime = Carbon::now(); 
        $marca['registro_fecha'] = $bodyContent['registro_fecha'];
        $marca['registro_autor_id'] = $bodyContent['registro_autor_id'];
        $marca['actualizacion_fecha'] = $mytime;
        $marca['actualizacion_autor_id'] = $bodyContent['actualizacion_autor_id'];
        $marca['status'] = $bodyContent['status'];
        return $marca;
    }
}