<?php 


namespace Src\vo;

use  Src\_public\Util;


class FornecedorVO extends UsuarioVO {


    private $fornecedor_id;
    private $email_fornecedor;
    private $nome_fornecedor;
    private $cnpj;
    
    public function setFornecedorId($fornecedor_id){
        $this->fornecedor_id = $fornecedor_id;
    }
    public function getFornecedorId(){
        return $this->fornecedor_id;
    }
    public function setNomeFornecedor($nome_fornecedor){
        $this->nome_fornecedor = (Util::TratarDados($nome_fornecedor));
    }
    public function getNomeFornecedor(){
        return $this->nome_fornecedor;
    }
    public function setCNPJ($cnpj){
        $this->cnpj = (Util::TratarDados($cnpj));
    }
    public function getCNPJ(){
        return $this->cnpj;
    }

    public function setEmailFornecedor($email_fornecedor){
        $this->email_fornecedor = (Util::TratarDados($email_fornecedor));
    }
    public function getEmailFornecedor(){
        return $this->email_fornecedor;
    }
    
   
    
}

?>