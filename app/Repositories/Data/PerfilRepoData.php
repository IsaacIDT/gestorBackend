<?php
namespace App\Repositories\Data;

use Illuminate\Support\Facades\DB;

class PerfilRepoData{


    public static function retornaPerfiles(){
        $all_perfiles = DB::select('select * from sys_perfiles');
        return $all_perfiles;
    }

    public static function retornaPerfil($id){
        $perfil = DB::table('sys_perfiles')
            ->where('perfil_id', '=', $id)
            ->get();
        return $perfil;
    }

    public static function existePerfil($nombre){
        $existe = DB::table('sys_perfiles')
            ->where('nombre', '=', $nombre)
            ->get();
        return $existe;
    }
}