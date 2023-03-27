<?php

namespace Src\model\SQL;


class ContaSQL
{


    public static function INSERIR_CONTA()
    {
        $sql = 'INSERT INTO tb_conta (banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario) 
        VALUES(?,?,?,?,?)
         ';
        return $sql;
    }
    public static function TOTAL_CONTA()
    {
        $sql = 'SELECT saldo_conta
        FROM tb_conta';

        return $sql;
    }
}
