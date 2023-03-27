<?php 


namespace Src\vo;

use  Src\_public\Util;


class SetorVO{

    private $id_setor;
    private $nome_setor;

    public function setIdSetor($id_setor){
        $this->id_setor = $id_setor;
    }
    public function getIdSetor(){
        return $this->id_setor;
    }

    public function setNomeSetor($nome_setor){
        $this->nome_setor = $nome_setor;
    }
    public function getNomeSetor(){
        return $this->nome_setor;
    }
}