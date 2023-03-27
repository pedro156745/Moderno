<?php

namespace Src\resource\api\_Classe;

use Src\controller\ChamadoCTRL;
use Src\resource\api\_Classe\Apirequest;
use Src\controller\SetorCTRL;
use Src\controller\EquipamentoCTRL;
use Src\model\EquipamentoDAO;
use Src\vo\ChamadoVO;
use Src\vo\SetorVO;
use Src\vo\UsuarioVO;

class FuncionarioApi extends Apirequest
{


    private $params;

    public function AddParameters($p)
    {
        $this->params = $p;
    }

    public function CheckEndPoint($endpoint)
    {
        return method_exists($this, $endpoint);
    }

    public function GravarSetor(){
        $vo = new SetorVO;

        $vo->setNomeSetor($this->params['nome_setor']);

        return (new SetorCTRL)->InserirSetorCTRL($vo);
    }

  }
