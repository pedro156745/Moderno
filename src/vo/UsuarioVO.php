<?php

namespace Src\vo;

use Src\_public\Util;
use Src\vo\EnderecoVO;

class UsuarioVO extends LogErro
{

    private $idUser;
    private $tipo;
    private $nome;
    private $login;
    private $senha;
    private $status;
    private $telefone;
    //*private $sobrenome;//*


    public function setId($id)
    {
        $this->idUser = ($id);
    }
    public function getId()
    {
        return $this->idUser;
    }
    public function setTipo($tipo)
    {
        $this->tipo = Util::TratarDados($tipo);
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function setNome($nome)
    {
        $this->nome =Util::TratarDados($nome);
    }
    public function getNome()
    {
        return  $this->nome;
    }
    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getLogin()
    {
        return  $this->login;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
    public function getSenha()
    {
        return $this->senha;
    }
    public function setStatus($status)
    {
        $this->status = trim($status);
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setTelefone($telefone)
    {
        $this->telefone = Util::remove_especial_char($telefone);
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

   /* public function setSobrenome($sobrenome)
    {
        $this->sobrenome = Util::TratarDados($sobrenome);
    }
    public function getSobrenome()
    {
        return $this->sobrenome;
    }*/
}
