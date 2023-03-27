<?php
namespace Src\model;

use Src\vo\LogErro;

// Configurações do site
define('HOST', 'localhost'); //IP
define('USER', 'root'); //usuario
define('PASS', null); //Senha
define('DB', 'db_moderno'); //Banco
/**
 * Conexao.class TIPO [Conexão]
 * Descricao: Estabelece conexões com o banco usando SingleTon
 * @copyright (c) year, WMBarros
 */

class Conexao {

    /** @var PDO */
    private static $Connect;

    private static function Conectar() {
        try {

            //Verifica se a conexão não existe
            if (self::$Connect == null):

                $dsn = 'mysql:host=' . HOST . ';dbname=' . DB;
                self::$Connect = new \PDO($dsn, USER, PASS, null);
            endif;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
       
        //Seta os atributos para que seja retornado as excessões do banco
        self::$Connect->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
       
        return  self::$Connect;
    }

    public static function retornarConexao() {
        return  self::Conectar();
    }

    public static function GravarLogErrO($vo){

        $arquivo = PATH_URL . '/model/logs/log_erro.txt';

        if(!file_exists($arquivo)):

            $arquivo = fopen($arquivo, 'w');

        else:

            $arquivo = fopen($arquivo, 'a+');

        endif;


        $texto_msg = '-------------------------------------------------------------------------' . PHP_EOL;
        $texto_msg .= 'DATA: ' . $vo->getDataerro() . PHP_EOL;
        $texto_msg .= 'HORA: ' . $vo->getHoraerro() . PHP_EOL;
        $texto_msg .= 'Função: ' . $vo->getFuncaoerro() . PHP_EOL;
        $texto_msg .= 'Cod.Logado: ' . $vo->getIdlogado() . PHP_EOL;
        $texto_msg .= 'Erro:' . $vo->getMsgerro() . PHP_EOL;


        fwrite($arquivo , $texto_msg);
        fclose($arquivo);
    }
    
    
}