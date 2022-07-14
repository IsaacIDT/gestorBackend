<?php

namespace App\Repositories\Actions;

use Illuminate\Support\Facades\DB;

class PerfilRepoAction{
    public static function setProfile($perfil){
        DB::table('sys_perfiles')
                ->insert($perfil);
    }
    //clave nombre y descripcion
    public static function editProfile($perfil, $id){
        DB::table('sys_perfiles')
            ->where('perfil_id', '=', $id)
            ->update([
                'nombre' => $perfil['nombre'],
                'clave' => $perfil['clave'],
                'descripcion' => $perfil['descripcion'],
                'actualizacion_fecha' => $perfil['actualizacion_fecha'],
                'actualizacion_autor_id' => $perfil['actualizacion_autor_id'],
            ]);
    }
    public static function deleteProfile($id){
        DB::table('sys_perfiles')
            ->where('perfil_id', '=', $id)
            ->update(['status' => 300]);
    
    }
}