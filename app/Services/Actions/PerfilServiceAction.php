<?php
namespace App\Services\Actions;

use App\Repositories\Actions\PerfilRepoAction;
use App\Services\Data\PerfilServiceData;
use App\Services\BO\PerfilServiceBO;

class PerfilServiceAction{

    public static function setPerfil($data){
        $BO = PerfilServiceBO::createPerfil($data);
        PerfilRepoAction::setProfile($BO);
    }

    public static function editPerfil($data, $id){
        //validar que el id exista y que las condiciones indicadas en el txt se cumplan
        $encontro = PerfilServiceData::listPerfil($id);
        if($encontro){
            $BO = PerfilServiceBO::createPerfilUpdate($data);
            PerfilRepoAction::editProfile($BO, $id);
        }else{
            echo "No se pudo editar ya que el id no coincidió con ninguno";
        }
    }

    public static function deletePerfil($id){
        $encontro = PerfilServiceData::listPerfil($id);
        if($encontro){
            PerfilRepoAction::deleteProfile($id);
            return "Consulta con exito";
        }else{
            echo "El arca no fue encontrado";
        }
    }
}
