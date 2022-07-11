<?php
namespace App\Repositories\Data;

use Illuminate\Support\Facades\DB;

class UsuarioRepoData{


    public static function retornaUsuarios(){
        $all_users = DB::select('select * from usuarios');
        return $all_users;
    }

    public static function retornaUsuario($id){
        $user = DB::table('usuarios')
            ->where('id', '=', $id)
            ->get();
        return $user;
    }

    public static function existeUsuario($usuario){
        $user = DB::table('usuarios')
            ->where('usuario', '=', $usuario)
            ->get();
        return $user;
    }

    public static function existeCorreo($correo){
        $user = DB::table('usuarios')
            ->where('correo', '=', $correo)
            ->get();
        return $user;
    }
}