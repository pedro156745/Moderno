<?php

namespace Src\model\SQL;


class CategoriaSQL
{

    public static function INSERIR_CATEGORIA()
    {

        $sql = 'INSERT into tb_categoria (nome_categoria) VALUES(?)';

        return $sql;
    }

    public static function CONSULTAR_CATEGORIA()
    {

        $sql = 'SELECT id_categoria, nome_categoria 
                        FROM tb_categoria';

        return $sql;
    }

    public static function FILTRAR_CATEGORIA($nome_filtro)
    {

        $sql = 'SELECT id_categoria, nome_categoria 
                        FROM tb_categoria';

        if (!empty($nome_filtro))

            $sql .= ' WHERE nome_categoria LIKE ?';

        return $sql;
    }

    public static function ALTERAR_CATEGORIA()
    {
        $sql = 'UPDATE tb_categoria 
        SET nome_categoria = ?
        WHERE id_categoria = ?
                        ';
        return $sql;
    }

    public static function EXCLUIR_CATEGORIA()
    {
        $sql = 'DELETE FROM tb_categoria 
        WHERE id_categoria = ?
                        ';
        return $sql;
    }
}

?>
