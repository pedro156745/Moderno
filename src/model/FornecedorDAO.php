<?php

namespace Src\model;

use Exception;
use Src\model\Conexao;
use Src\model\SQL\FornecedorSQL;
use Src\vo\FornecedorVO;

class FornecedorDAO extends Conexao{


    private $conexao;

    public function __construct()
    {
        $this->conexao = parent::retornarConexao();
    }

    public function InserirFornecedorDAO(FornecedorVO $vo){
        $sql = $this->conexao->prepare(FornecedorSQL::INSERIR_FORNECEDOR());

        $i = 1;

        $sql->bindValue($i++, $vo->getFornecedorId());
        $sql->bindValue($i++, $vo->getNomeFornecedor());
        $sql->bindValue($i++, $vo->getEmailFornecedor());
        $sql->bindValue($i++, $vo->getCNPJ());

        try {
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            $vo->setMsgerro($ex->getMessage());
            parent::GravarLogErrO($vo);
            return -1;
        }
        
    }


}