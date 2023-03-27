<?php

namespace Src\model;

use Exception;
use Src\model\Conexao;
use Src\model\SQL\ProdutoSQL;
use Src\vo\ProdutoVO;

class ProdutoDAO extends Conexao
{

    private $conexao;

    public function __construct()
    {
        $this->conexao = parent::retornarConexao();
    }

    public function InserirProdutoDAO(ProdutoVO $vo)
    {
        $sql = $this->conexao->prepare(ProdutoSQL::INSERIR_PRODUTO());

        $i = 1;

        $sql->bindValue($i++, $vo->getNomeProduto());
        $sql->bindValue($i++, $vo->getQuantidade());
        $sql->bindValue($i++, $vo->getPreco());
        $sql->bindValue($i++, $vo->getNomeURL());
        $sql->bindValue($i++, $vo->getIdCategoria());

        try {
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            $vo->setMsgerro($ex->getMessage());
            parent::GravarLogErrO($vo);
            return -1;
        }
    }

    public function ConsultarProdutoDAO()
    {
        $sql = $this->conexao->prepare(ProdutoSQL::CONSULTAR_PRODUTO());
        $sql->execute();
        return $sql->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function ExcluirProdutoDAO()
    {
        $sql = $this->conexao->prepare(ProdutoSQL::CONSULTAR_PRODUTO());
        $sql->execute();
        return $sql->fetchAll(\PDO::FETCH_ASSOC);
    }
}
