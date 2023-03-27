<?php

namespace Src\controller;

use Src\vo\ContaVO;
use Src\_public\Util;
use Src\model\ContaDAO;


class ContaCTRL
{

    private $dao;

    public function __construct()
    {
        $this->dao = new ContaDAO;
    }

    public function InserirContaCTRL(ContaVO $vo)
    {

        if (
            empty($vo->getBancoConta()) || empty($vo->getAgenciaConta()) ||
            empty($vo->getNumeroConta()) || empty($vo->getSaldoConta())
        )
            return 0;

        $vo->setFuncaoerro(INSERIR_CONTA);
        $vo->setIdlogado(Util::CodigoLogado());

        return $this->dao->InserirContaDAO($vo);
    }

    public function ConsultarSaldoContaCTRL()
    {
        return $this->dao->ConsultarSaldoContaDAO();
    }

}
