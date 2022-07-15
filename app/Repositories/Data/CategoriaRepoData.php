<?php
namespace App\Repositories\Data;

use Illuminate\Support\Facades\DB;

class CategoriaRepoData{


    public static function retornaCategorias(){
        $all_categorias = DB::select('select * from categorias');
        return $all_categorias;
    }

    public static function retornaCategoria($id){
        $categoria = DB::table('categorias')
            ->where('categoria_id', '=', $id)
            ->get();
        return $categoria;
    }

    public static function existeCategoria($nombre){
        $existe = DB::table('categorias')
            ->where('nombre', '=', $nombre)
            ->get();
        return $existe;
    }
}