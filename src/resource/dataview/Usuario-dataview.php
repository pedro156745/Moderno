<?php

include_once '_inculde_autoload.php';

use Src\_public\Util;
use Src\controller\UsuarioCTRL;
use Src\vo\FornecedorVO;
use Src\vo\UsuarioVO;


$ctrl = new UsuarioCTRL;


if (isset($_POST['btn_gravar'])) {

    $vo = new UsuarioVO;

    $vo->setNome($_POST['nome_usuario']);
    $vo->setLogin($_POST['email_usuario']);
    $vo->setTelefone($_POST['telefone_usuario']);
    $vo->setTipo($_POST['tipo']);

    $ret = $ctrl->InserirUsuarioCTRL($vo);
}


else if (isset($_POST['btn_acessar'])) {

    $ret = $ctrl->ValidarLoginCTRL($_POST['login'], $_POST['senha']);
} 
