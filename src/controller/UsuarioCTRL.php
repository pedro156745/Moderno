<?php

namespace Src\controller;

use Src\vo\UsuarioVO;
use Src\model\UsuarioDAO;
use Src\_public\Util;
use Src\vo\FornecedorVO;

class UsuarioCTRL
{

    private $dao;

    public function __construct()
    {
        $this->dao = new UsuarioDAO;
    }

    public function InserirUsuarioCTRL(UsuarioVO $vo)
    {
        if (empty($vo->getTipo()) || empty($vo->getNome()) || empty($vo->getTelefone()) || empty($vo->getLogin()))
            return 0;

        $vo->setStatus(STATUS_ATIVO);
        $vo->setSenha(Util::CriarSenha($vo->getLogin()));

        $vo->setFuncaoerro(CADASTRAR_USUARIO);
        $vo->setIdlogado(Util::CodigoLogado());

        return $this->dao->InserirUsuarioDAO($vo);
    }

  


    public function ValidarLoginCTRL($login, $senha)
    {

        if (empty($login) || empty($senha))
            return 0;

        $usuario = $this->dao->ValidarLoginDAO($login, STATUS_ATIVO, PERFIL_ADM);

        #Testa a variavel para ver se encontrou o usuario com o login digitado

        if (empty($usuario))
            return -4;


        if (!Util::ValidarSenhaBanco($senha, $usuario['senha']))
            return -5;


        #Testa a senha digitada, se bate com criptografia do BD


        Util::CriarSessao($usuario['id_usuario'], $usuario['nome']);
        Util::CarregarPg('produtos.php');
    }
}
