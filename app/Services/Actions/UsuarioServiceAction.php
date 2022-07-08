<?php
namespace App\Services\Actions;

use App\Exceptions\Exception;
use App\Services\BO\UsuarioServiceBO;
use Illuminate\Support\Facades\DB;
use App\Repositories\Actions\UsuarioRepoAction;

class UsuarioServiceAction{
    public static function userSet($data){
        $BO = UsuarioServiceBO::userCreate($data);
        UsuarioRepoAction::userSet($BO);
    }

    public static function userEdit($id){
        $update = DB::table('usuarios')
            ->where('id', '=', $id)
            ->update([
                    'nombre' => 'Nombre updated'
            ]);
            return $update;
    }

    public static function userUpdate($id){
        $update = DB::table('usuarios')
            ->where('id', '=', $id)
            ->update([
                    'nombre' => 'Nombre updated'
            ]);
        return $update;
    }

    public static function userDelete($id){
        $delete = DB::table('usuarios')
            ->where('id', '=', $id)
            ->delete();
        return $delete;
    }
}
