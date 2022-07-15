<?php
namespace App\Services\Actions;

use App\Repositories\Actions\CategoriaRepoAction;
use App\Services\Data\CategoriaServiceData;
use App\Services\BO\CategoriaServiceBO;

class CategoriaServiceAction{

    public static function setCategoria($data){
        $BO = CategoriaServiceBO::createCategoria($data);
        CategoriaRepoAction::setCategory($BO);
    }

    public static function editCategoria($data, $id){
        //validar que el id exista y que las condiciones indicadas en el txt se cumplan
        $encontro = CategoriaServiceData::listCategoria($id);
        if($encontro){
            $BO = CategoriaServiceBO::createCategoriaUpdate($data);
            CategoriaRepoAction::editCategory($BO, $id);
        }else{
            echo "No se pudo editar ya que el id no coincidió con ninguno";
        }
    }

    public static function deleteCategoria($id){
        $encontro = CategoriaServiceData::listcategoria($id);
        if($encontro){
            CategoriaRepoAction::deleteCategory($id);
            return "Consulta con exito";
        }else{
            echo "El arca no fue encontrado";
        }
    }
}
