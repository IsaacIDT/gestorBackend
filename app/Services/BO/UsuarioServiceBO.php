<?php
namespace App\Services\BO;

use Carbon\Carbon;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Application;
use App\Services\Actions\UsuarioServiceAction;
class UsuarioServiceBO{
    public static function userCreate($bodyContent){
        // ...
        $usuario['usuario'] = $bodyContent['usuario'];
        $usuario['password'] = $bodyContent['password'];
        $usuario['nombre'] = $bodyContent['nombre'];
        $usuario['correo'] = $bodyContent['correo'];
        $mytime = Carbon::now(); 
        $usuario['fechaRegistro'] = $mytime->toDateString();
        $usuario['status'] = 200;
        $usuario['autor'] = "Isaac";
        return $usuario;
        //$response = UsuarioServiceAction::userSet($usuario);
        //return $response;
    }
}

// "usuario": "asfadvom",
//     "password": "verysecurepassword",
//     "nombre": "Andrea Cortes Norigea",
//     "correo": "andrea.noriega@correo.com",
//     "fechaRegistro": "2022-01-01",
//     "status": 200,
//     "autor": "Isaac"