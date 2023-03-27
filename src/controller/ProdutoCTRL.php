<?php

namespace Src\controller;

use Src\vo\ProdutoVO;
use Src\model\ProdutoDAO;
use Src\_public\Util;


class ProdutoCTRL
{


    private $dao;

    public function __construct()
    {
        $this->dao = new ProdutoDAO;
    }

    public function InserirProdutoCTRL(ProdutoVO $vo, $anexo)
    {

        if ($anexo['type'] != 'image/jpeg')
            return -4;
        $nome_file = Util::CreateNameFile('jpg');
        if (Util::MoverAnexoPasta($nome_file, $anexo)) {
            $vo->setNomeURL($nome_file);
        }

        if (
            empty($vo->getNomeProduto()) || empty($vo->getQuantidade())
            || empty($vo->getPreco()) || empty($vo->getPreco()) ||  empty($vo->getIdCategoria())
        )
            return 0;

        $vo->setFuncaoerro(INSERIR_PRODUTO);
        $vo->setIdlogado(Util::CodigoLogado());

        return (new ProdutoDAO)->InserirProdutoDAO($vo);
    }

    public function ConsultarProdutoCTRL(ProdutoVO $vo)
    {
       
        $list = $this->dao->ConsultarProdutoDAO($vo->getIdPessoa());
        
        for ($i = 0; $i < count($list); $i++) {
            $list[$i]['nome_url'] =  Util::RetornarPathAnexo($vo->getTipoAnexo()) .  $list[$i]['nome_url'];
        }

        return $list;
    }
}
