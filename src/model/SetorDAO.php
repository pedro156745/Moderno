<?php

namespace Src\model;

use Exception;
use Src\model\Conexao;
use Src\model\SQL\SetorSQL;
use Src\vo\SetorVO;

class SetorDAO extends Conexao{
    private $conexao;


    public function __construct()
    {
        $this->conexao = parent::retornarConexao() ;
    }

    public function InserirSetorDAO(SetorVO $vo){

        $sql = $this->conexao->prepare(SetorSQL::INSERIR_SETOR());

        $i= 1;

        $sql->bindValue($i++, $vo->getNomeSetor());
        
        try{
            $sql->execute();
            return 1;
        }
        catch(Exception $ex){
            echo $ex->getMessage();
            return -1;
        }
    }
}