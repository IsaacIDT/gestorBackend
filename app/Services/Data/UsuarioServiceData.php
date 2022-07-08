<?php
namespace App\Services\Data;

use Illuminate\Support\Facades\DB;

class UsuarioServiceData{
    public static function listUsers(){
        $all_users = DB::select('select * from usuarios');
        return $all_users;
    }

    public static function listUser($id){
        $user = DB::table('usuarios')
            ->where('id', '=', $id)
            ->get();
        return response()->json($user);
    }
}
