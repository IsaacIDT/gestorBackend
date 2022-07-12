<?php
namespace App\Repositories\Data;

use Illuminate\Support\Facades\DB;

class MarcaRepoData{


    public static function retornaMarcas(){
        $all_marcas = DB::select('select * from cat_marcas');
        return $all_marcas;
    }

    public static function retornaMarca($id){
        $marca = DB::table('cat_marcas')
            ->where('marca_id', '=', $id)
            ->get();
        return $marca;
    }

    public static function existeMarca($nombre){
        $existe = DB::table('cat_marcas')
            ->where('nombre', '=', $nombre)
            ->get();
        return $existe;
    }
}