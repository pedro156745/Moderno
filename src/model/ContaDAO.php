<?php

namespace Src\model;

use Exception;
use Src\_public\Util;
use Src\model\Conexao;
use Src\model\SQL\ContaSQL;
use Src\vo\ContaVO;

class ContaDAO extends Conexao
{

    private $conexao;

    public function __construct()
    {
        $this->conexao = parent::retornarConexao();
    }

    public function InserirContaDAO(ContaVO $vo)
    {

        $sql = $this->conexao->prepare(ContaSQL::INSERIR_CONTA());
        
        $i = 1;

        $sql->bindValue($i++, $vo->getBancoConta());
        $sql->bindValue($i++, $vo->getAgenciaConta());
        $sql->bindValue($i++, $vo->getNumeroConta());
        $sql->bindValue($i++, $vo->getSaldoConta());
        $sql->bindValue($i++, Util::CodigoLogado());
        
        try {
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            $vo->setMsgerro($ex->getMessage());
            parent::GravarLogErrO($vo);
            return -1;
        }
    }

    public function ConsultarSaldoContaDAO(){
        $sql = $this->conexao->prepare(ContaSQL::TOTAL_CONTA());
        $sql->execute();
        return $sql->fetchAll(\PDO::FETCH_ASSOC);
    }
}
