<?php


namespace Src\vo;

use Src\_public\Util;

class LogErro{

    private $idlogado;
    private $hora;
    private $data;
    private $msg_erro;
    private $funcao;


   

    public function getDataerro(){
        $this->data = Util::DataAtual();

        return $this->data;
    }

    public function getHoraerro(){

        $this->hora = Util::HoraAtual();

        return $this->hora;

    }


    public function setIdlogado($id) :void{
        $this->idlogado = $id;
    }

    public function getIdlogado() : int{
        return $this->idlogado;
    }

    public function setMsgerro($msg_erro) :void{
        $this->msg_erro = $msg_erro;
    }

    public function getMsgerro(): string{
        return $this->msg_erro;
    }

    public function setFuncaoerro($funcao):void {
        $this->funcao = $funcao;
    }

    public function getFuncaoerro() :string{
        return $this->funcao;
    }
}