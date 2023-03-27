<?php 


namespace Src\vo;

use  Src\_public\Util;


class ContaVO extends UsuarioVO{


    private $id_conta;
    private $banco_conta;
    private $agencia_conta;
    private $numero_conta; 
    private $saldo_conta;

    public function setIdConta($id_conta){
        $this->id_conta = $id_conta;
    }
    public function getIdConta(){
        return $this->id_conta;
    }
    public function setBancoConta($banco_conta){
        $this->banco_conta = (Util::TratarDados($banco_conta));
    }
    public function getBancoConta(){
        return $this->banco_conta;
    }
    public function setAgenciaConta($agencia_conta){
        $this->agencia_conta = (Util::TratarDados($agencia_conta));
    }
    public function getAgenciaConta(){
        return $this->agencia_conta;
    }
    public function setNumeroConta($numero_conta){
        $this->numero_conta = (Util::TratarDados($numero_conta));
    }
    public function getNumeroConta(){
        return $this->numero_conta;
    }
    public function setSaldoConta($saldo_conta){
        $this->saldo_conta = (Util::TratarDados($saldo_conta));
    }
    public function getSaldoConta(){
        return $this->saldo_conta;
    }
    
}