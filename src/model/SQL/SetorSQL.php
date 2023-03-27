<?php

namespace Src\model\SQL;


class SetorSQL
{
    public static function INSERIR_SETOR()
    {
        $sql = 'INSERT INTO tb_setor (nome_setor) VALUES(?)';
        return  $sql;
    }
}
