<?php
namespace App\Services\Actions;

use App\Exceptions\Exception;
use App\Services\BO\UsuarioServiceBO;
use Illuminate\Support\Facades\DB;
use App\Repositories\Actions\UsuarioRepoAction;
use App\Services\Data\UsuarioServiceData;
use Error;

class UsuarioServiceAction{

    public static function userSet($data){
        $BO = UsuarioServiceBO::userCreate($data);
        $encontro = UsuarioServiceData::existUser($BO['usuario'], $BO['correo']);
        if($encontro){
            echo "No se dio de alta ya que las credenciales existen";
        }else{
            UsuarioRepoAction::userSet($BO);
        }
    }

    public static function userEdit($data, $id){
        //validar que el id exista y que las condiciones indicadas en el txt se cumplan
        var_dump($id);
        $encontro = UsuarioServiceData::listUser($id);
        if($encontro){
            $duplicado = UsuarioServiceData::existUser($data['usuario'], $data['correo']);
            if($duplicado){
                echo "No se pudo editar ya que las credenciales nuevas ya existen en la base de datos";
            }else{
                $BO = UsuarioServiceBO::userCreate($data);
                UsuarioRepoAction::userEdit($BO, $id);            
            }    
        }else{
            echo "No se pudo editar ya que el id no coincidió con ninguno";
        }
    }

    // public static function userUpdate($id){
    //     $update = DB::table('usuarios')
    //         ->where('id', '=', $id)
    //         ->update([
    //                 'nombre' => 'Nombre updated'
    //         ]);
    //     return $update;
    // }

    public static function userDelete($id){
        $encontro = UsuarioServiceData::listUser($id);
        if($encontro){
            UsuarioRepoAction::userDelete($id);
            echo "Consulta con exito";
        }else{
            echo "El usuario no fue encontrado";
        }
    }
}
