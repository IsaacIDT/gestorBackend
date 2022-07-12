<?php
namespace App\Services\Actions;

use App\Repositories\Actions\MarcaRepoAction;
use App\Services\Data\MarcaServiceData;
use App\Services\BO\MarcaServiceBO;

class MarcaServiceAction{

    public static function marcaSet($data){
        $BO = MarcaServiceBO::marcaCreate($data);
        $encontro = MarcaServiceData::existBrand($BO['nombre']);
        if($encontro){
            echo "No se dio de alta ya que las credenciales existen";
        }else{
            MarcaRepoAction::brandSet($BO);
        }
    }

    public static function marcaEdit($data, $id){
        //validar que el id exista y que las condiciones indicadas en el txt se cumplan
        echo $id;
        $encontro = MarcaServiceData::listMarca($id);
        if($encontro){
            $duplicado = MarcaServiceData::existBrand($data['nombre']);
            if($duplicado){
                echo "No se pudo editar ya que las credenciales nuevas ya existen en la base de datos";
            }else{
                MarcaRepoAction::brandEdit($data, $id);            
            }    
        }else{
            echo "No se pudo editar ya que el id no coincidió con ninguno";
        }
    }

    // public static function userUpdate($id){
    //     $update = DB::table('arcas')
    //         ->where('id', '=', $id)
    //         ->update([
    //                 'nombre' => 'Nombre updated'
    //         ]);
    //     return $update;
    // }

    public static function marcaDelete($id){
        $encontro = MarcaServiceData::listMarca($id);
        if($encontro){
            MarcaRepoAction::brandDelete($id);
            echo "Consulta con exito";
        }else{
            echo "El arca no fue encontrado";
        }
    }
}
