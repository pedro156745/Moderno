<?php

namespace Src\model\SQL;


class FornecedorSQL{

    public static function INSERIR_FORNECEDOR()
    {

        $sql = 'INSERT INTO tb_fornedor (fornecedor_id, nome_fornecedor, email_fornecedor, cnpj) 
                    VALUES(?,?,?,?)';
        return $sql;
    }
}

