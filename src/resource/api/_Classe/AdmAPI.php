<?php

namespace Src\resource\api\_Classe;

use Src\controller\CategoriaCTRL;
use Src\controller\ChamadoCTRL;
use Src\resource\api\_Classe\Apirequest;
use Src\controller\SetorCTRL;
use Src\model\EquipamentoDAO;
use Src\vo\CategoriaVO;
use Src\vo\SetorVO;
use Src\vo\UsuarioVO;

class AdmApi extends Apirequest
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

    public function GravarCategoria(){
        
        $vo = new CategoriaVO;

        $vo->setNomecategoria($this->params['nome_categoria']);

        return (new CategoriaCTRL)->InserirCategoriaCTRL($vo);
    }

    public function AlterarCategoria(){
        
        $vo = new CategoriaVO;

        $vo->setIdCategoria($this->params['id_categoria']);
        $vo->setNomecategoria($this->params['nome_categoria']);

        return (new CategoriaCTRL)->AlterarCategoriaCTRL($vo);
    }

    public function ExcluirCategoria(){
        
        $vo = new CategoriaVO;

        $vo->setIdCategoria($this->params['id_categoria']);

        return (new CategoriaCTRL)->ExcluirCategoriaCTRL($vo);
    }


    public function ConsultarCategoria(){
        
        

        return(new CategoriaCTRL)->ConsultarCategoriaCTRL();
    }


    public function FiltrarCategoria(){
    
        return(new CategoriaCTRL)->FiltrarCategoriaCTRL($this->params['nome_filtro']);
    }

  }
