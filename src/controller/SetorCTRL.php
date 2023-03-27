<?php

namespace Src\controller;

use Src\vo\SetorVO;
use Src\model\SetorDAO;


class SetorCTRL
{

    private $dao;

    public function __construct()
    {
        $this->dao = new SetorDAO;
    }

    public function InserirSetorCTRL(SetorVO $vo)
    {

        if (empty($vo->getNomeSetor()))

            return 0;

        return $this->dao->InserirSetorDAO($vo);
    }
}
