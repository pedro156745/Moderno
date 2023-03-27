<?php

namespace Src\resource\api\_Classe;

use Src\controller\ChamadoCTRL;
use Src\resource\api\_Classe\Apirequest;
use Src\controller\UsuarioCTRL;
use Src\controller\EquipamentoCTRL;
use Src\model\EquipamentoDAO;
use Src\vo\ChamadoVO;
use Src\vo\FuncionarioVO;
use Src\vo\TecnicoVO;



class FornecedorAPI extends Apirequest {


    private $params;

    public function AddParameters($p)
    {
        $this->params = $p;
    }

    public function CheckEndPoint($endpoint)
    {
        return method_exists($this, $endpoint);
    }

   




  

}