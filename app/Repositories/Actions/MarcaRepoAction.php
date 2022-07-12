<?php

namespace App\Repositories\Actions;

use Illuminate\Support\Facades\DB;

class MarcaRepoAction{
    public static function brandSet($marca){
        DB::table('cat_marcas')
                ->insert($marca);
    }
    public static function brandEdit($marca, $id){
        DB::table('cat_marcas')
            ->where('marca_id', '=', $id)
            ->update([
                'marca_id' => $marca->marca_id,
                'nombre' => $marca->nombre,
                'registro_fecha' => $marca->registro_fecha,
                'registro_autor_id' => $marca->registro_autor_id,
                'actualizacion_fecha' => $marca->actualizacion_fecha,
                'actualizacion_autor_id' => $marca->actualizacion_autor_id,
                'status' => $marca->status,
            ]);
    }
    public static function brandDelete($id){
        DB::table('cat_marcas')
            ->where('marca_id', '=', $id)
            ->update(['status' => 300]);
    
    }
}