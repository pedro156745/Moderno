<?php

include_once '_inculde_autoload.php';

use Src\controller\ContaCTRL;
use Src\vo\ContaVO;
use Src\_public\Util;

Util::VerificarLogado();

$ctrl = new ContaCTRL;

if(isset($_POST['btn_cadastrar1'])){

    $vo = new ContaVO;

    $vo->setBancoConta($_POST['nome_banco']);
    $vo->setAgenciaConta($_POST['agencia_conta']);
    $vo->setNumeroConta($_POST['numero_conta']);
    $vo->setSaldoConta($_POST['saldo_conta']);

    $ret = $ctrl->InserirContaCTRL($vo);

    
}else {

    $saldo = $ctrl->ConsultarSaldoContaCTRL();
 }
