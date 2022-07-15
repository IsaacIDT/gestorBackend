<?php
namespace App\Services\BO;

use Carbon\Carbon;

class CategoriaServiceBO{
    public static function createCategoria($bodyContent){
        // ...
        $categoria['categoria_id'] = $bodyContent['categoria_id'];
        $categoria['nombre'] = $bodyContent['nombre'];
        $mytime = Carbon::now(); 
        $categoria['registro_fecha'] = $mytime;
        $categoria['registro_autor_id'] = $bodyContent['registro_autor_id'];
        $categoria['status'] = 200;
        return $categoria;
        //$response = UsuarioServiceAction::userSet($categoria);
        //return $response;
    }

    public static function createCategoriaUpdate($bodyContent){
        $categoria['nombre'] = $bodyContent['nombre'];
        $mytime = Carbon::now(); 
        $categoria['actualizacion_fecha'] = $mytime;
        $categoria['actualizacion_autor_id'] = $bodyContent['actualizacion_autor_id'];
        return $categoria;
    }
}