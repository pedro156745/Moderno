<?php

namespace Src\controller;

use Src\model\FornecedorDAO;
use Src\_public\Util;
use Src\vo\FornecedorVO;

class FornecedorCTRL{

    private $dao;

    public function __construct()
    {
        $this->dao = new FornecedorDAO;
    }


    public function InserirFornecedorCTRL(FornecedorVO $vo)
    {
        if (empty($vo->getNomeFornecedor()) || empty($vo->getEmailFornecedor()) || empty($vo->getCNPJ()))
            return 0;

        $vo->setStatus(STATUS_ATIVO);
        $vo->setSenha(Util::CriarSenha($vo->getLogin()));

        $vo->setFuncaoerro(CADASTRAR_FORNECEDOR);
        $vo->setIdlogado(Util::CodigoLogado());

        return $this->dao->InserirFornecedorDAO($vo);
    }
}