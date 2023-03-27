<?php

namespace Src\model;

use Exception;
use Src\model\Conexao;
use Src\model\SQL\UsuarioSQL;
use Src\vo\FornecedorVO;
use Src\vo\UsuarioVO;

class UsuarioDAO extends Conexao
{

    private $conexao;

    public function __construct()
    {
        $this->conexao = parent::retornarConexao();
    }


    public function InserirUsuarioDAO(UsuarioVO $vo)
    {

        $sql = $this->conexao->prepare(UsuarioSQL::INSERIR_USUARIO());

        $i = 1;

        $sql->bindValue($i++, $vo->getTipo());
        $sql->bindValue($i++, $vo->getNome());
        $sql->bindValue($i++, $vo->getLogin());
        $sql->bindValue($i++, $vo->getSenha());
        $sql->bindValue($i++, $vo->getStatus());
        $sql->bindValue($i++, $vo->getTelefone());

        try {
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            $vo->setMsgerro($ex->getMessage());
            parent::GravarLogErrO($vo);
            return -1;
        }
    }

   
    public function ValidarLoginDAO($login, $status, $tipo)
    {
        $sql = $this->conexao->prepare(UsuarioSQL::BUSCAR_DADOS_ACESSO());
        $sql->bindValue(1, $login);
        $sql->bindValue(2, $status);
        $sql->bindValue(3, $tipo);

        $sql->execute();
        return $sql->fetch(\PDO::FETCH_ASSOC);
    }

}
