<?php

namespace App\Repositories\Actions;

use Illuminate\Support\Facades\DB;

class UsuarioRepoAction{
    public static function userSet($usuario){
        DB::table('usuarios')
                ->insert($usuario);
    }
    public static function userEdit($usuario, $id){
        DB::table('usuarios')
            ->where('id', '=', $id)
            ->update([
                'nombre' => $usuario->nombre,
                'password' => $usuario->password,
                'correo' => $usuario->correo,
                'usuario' => $usuario->usuario
            ]);
    }
    public static function userDelete($id){
        DB::table('usuarios')
            ->where('id', '=', $id)
            ->update(['status' => 300]);
    
    }
}