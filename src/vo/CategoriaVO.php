<?php 


namespace Src\vo;

use  Src\_public\Util;


class CategoriaVO extends LogErro{


    private $id_categoria;
    private $nome_categoria;

    public function setIdCategoria($id_categoria){
        $this->id_categoria = $id_categoria;
    }
    public function getIdCategoria(){
        return $this->id_categoria;
    }
    public function setNomecategoria($nome_categoria){
        $this->nome_categoria = (Util::TratarDados($nome_categoria));
    }
    public function getNomecategoria(){
        return $this->nome_categoria;
    }
}