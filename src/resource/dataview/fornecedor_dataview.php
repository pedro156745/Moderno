
<?php

include_once '_inculde_autoload.php';

use Src\_public\Util;
use Src\controller\FornecedorCTRL;
use Src\vo\FornecedorVO;



$ctrl = new FornecedorCTRL;

if(isset($_POST['btn_gravar'])){
    
    $vo = new FornecedorVO;

    $vo->setNomeFornecedor($_POST['nome_fornecedor']);
    $vo->setEmailFornecedor($_POST['email_fornecedor']);
    $vo->setCNPJ($_POST['cnpj']);
    

    $ret = $ctrl->InserirFornecedorCTRL($vo);
}