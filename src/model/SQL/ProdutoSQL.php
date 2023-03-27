<?php

namespace Src\model\SQL;

class ProdutoSQL
{

    public static function INSERIR_PRODUTO()
    {

        $sql = 'INSERT INTO tb_produto (nome_produto, quantidade, preco, nome_url, categoria_id)
         VALUES(?,?,?,?,?)';
        return $sql;
    }

    public static function CONSULTAR_PRODUTO()
    {
        $sql = 'SELECT id_produto, 
        nome_produto, 
           quantidade,
           preco, 
           nome_url, 
           ct.nome_categoria 
            FROM tb_produto as pt
            INNER JOIN tb_categoria as ct
            on pt.categoria_id = ct.id_categoria
               ';

        return $sql;
    }

    public static function EXCLUIR_PRODUTO(){
        $sql = 'DELETE FROM tb_produto
        WHERE id_produto = ?';

        return $sql;
    }
}
