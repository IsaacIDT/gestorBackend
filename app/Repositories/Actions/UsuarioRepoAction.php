<?php

namespace App\Repositories\Actions;

use Illuminate\Support\Facades\DB;

class UsuarioRepoAction{
    public static function userSet($usuario){
        DB::table('usuarios')
                ->insert($usuario);
    }
}