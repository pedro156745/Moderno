<?php

namespace Src\model\SQL;


class UsuarioSQL
{


    public static function INSERIR_USUARIO()
    {

        $sql = 'INSERT into tb_usuario (tipo, nome , email ,senha ,status , telefone) 
        VALUES(?,?,?,?,?,?)';

        return $sql;
    }




    public static function BUSCAR_DADOS_ACESSO()
    {
        $sql = 'SELECT id_usuario, 
                       nome,
                       senha
                  FROM tb_usuario
                 WHERE email = ?
                   AND status = ?
                   AND tipo = ?';
        return $sql;
    }
}
