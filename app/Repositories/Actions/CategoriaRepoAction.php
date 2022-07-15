<?php

namespace App\Repositories\Actions;

use Illuminate\Support\Facades\DB;

class CategoriaRepoAction{
    public static function setCategory($categoria){
        DB::table('categorias')
                ->insert($categoria);
    }
    //clave nombre y descripcion
    public static function editCategory($categoria, $id){
        DB::table('categorias')
            ->where('categoria_id', '=', $id)
            ->update([
                'nombre' => $categoria['nombre'],
                'actualizacion_fecha' => $categoria['actualizacion_fecha'],
                'actualizacion_autor_id' => $categoria['actualizacion_autor_id'],
            ]);
    }
    public static function deleteCategory($id){
        DB::table('categorias')
            ->where('categoria_id', '=', $id)
            ->update(['status' => 300]);
    
    }
}