<?php

namespace Src\controller;

use Src\vo\CategoriaVO;
use Src\model\CategoriaDAO;


class CategoriaCTRL
{
    private $dao;

    public function __construct()
    {
        $this->dao = new CategoriaDAO;
    }

    public function InserirCategoriaCTRL(CategoriaVO $vo)
    {
        if (empty($vo->getNomecategoria()))

            return 0;

        return $this->dao->InserirCategoriaDAO($vo);
    }

    public function AlterarCategoriaCTRL(CategoriaVO $vo)
    {
        if (empty($vo->getNomecategoria())|| empty($vo->getIdCategoria()))

            return 0;

        return $this->dao->AlterarCategoriaDAO($vo);
    }

    public function ExcluirCategoriaCTRL(CategoriaVO $vo)
    {
        if (empty($vo->getIdCategoria()))

            return 0;

        return $this->dao->ExcluirCategoriaDAO($vo);
    }

    public function ConsultarCategoriaCTRL()
    {
        return $this->dao->ConsultarCategoriaDAO();
    }

    public function FiltrarCategoriaCTRL($nome_filtro)
    {
        return $this->dao->FiltrarCategoriaDAO($nome_filtro);
    }
}
