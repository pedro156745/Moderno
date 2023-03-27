<?php

namespace Src\model;

use Exception;
use Src\model\Conexao;
use Src\model\SQL\CategoriaSQL;
use Src\vo\CategoriaVO;

class CategoriaDAO extends Conexao
{

    private $conexao;

    public function __construct()
    {
        $this->conexao = parent::retornarConexao();
    }

    public function InserirCategoriaDAO(CategoriaVO $vo)
    {

        $sql = $this->conexao->prepare(CategoriaSQL::INSERIR_CATEGORIA());

        $i = 1;

        $sql->bindValue($i++, $vo->getNomecategoria());

        try {
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            return -1;
        }
    }

    public function ConsultarCategoriaDAO()
    {

        $sql = $this->conexao->prepare(CategoriaSQL::CONSULTAR_CATEGORIA());
        $sql->execute();
        return $sql->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function FiltrarCategoriaDAO($nome_filtro)
    {
        $sql = $this->conexao->prepare(CategoriaSQL::FILTRAR_CATEGORIA($nome_filtro));
        if (!empty($nome_filtro))
            $sql->bindValue(1, '%' . $nome_filtro . '%');
        $sql->execute();

        return $sql->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function AlterarCategoriaDAO(CategoriaVO $vo)
    {

        $sql = $this->conexao->prepare(CategoriaSQL::ALTERAR_CATEGORIA());

        $i = 1;

        $sql->bindValue($i++, $vo->getNomecategoria());
        $sql->bindValue($i++, $vo->getIdCategoria());

        try {
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            return -1;
        }
    }

    public function ExcluirCategoriaDAO(CategoriaVO $vo)
    {

        $sql = $this->conexao->prepare(CategoriaSQL::EXCLUIR_CATEGORIA());

        $i = 1;
        $sql->bindValue($i++, $vo->getIdCategoria());

        try {
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            return -1;
        }
    }

    public function SelecionarCategoriaDAO(CategoriaVO $vo)
    {

       
    }
}
