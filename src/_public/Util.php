<?php

namespace Src\_public;


class Util
{



    public static function TratarDados($palavras)
    {
        return strip_tags(trim($palavras));
    }

    public static function remove_especial_char($string)
    {
        $especiais = array(".", ",", ";", "!", "@", "#", "%", "¨", "*", "(", ")", "+", "-", "=", "§", "$", "|", "\\", ":", "/", "<", ">", "?", "{", "}", "[", "]", "&", "'", '"', "´", "`", "?", '“', '”', '$', "'", "'", ' ');
        $string = str_replace($especiais, "", strip_tags(trim($string)));
        return $string;
    }

    private static function SetarFusohorario()
    {
        date_default_timezone_set('America/Sao_Paulo');
    }

    public static function HoraAtual()
    {
        self::SetarFusohorario();
        return date('H:i:s');
    }

    public static function DataAtual()
    {
        self::SetarFusohorario();
        return date('d/m/Y');
    }

    public static function DataAtualBD()
    {
        self::SetarFusohorario();
        return date('Y-m-d H:i:s');
    }

    public static function   MostrarArray($arr)
    {
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    }

    public static function CarregarPg($pg)
    {
        header("location: $pg");
        exit;
    }

    public static function CriarSenha($palavra)
    {

        $senha_array = explode('@', $palavra);

        return password_hash($senha_array[0], PASSWORD_DEFAULT);
    }

    public static function ValidarSenhaBanco($senha, $senha_hash) //*  /*cOLOCAR CONTROLLER
    {

        return password_verify($senha, $senha_hash);
    }

    public static function DescricaooTipo($tipo): string
    {

        $nome = '';

        switch ($tipo) {

            case PERFIL_ADM:

                $nome = 'Administrador';

                break;

            case PERFIL_FUNCIONARIO:

                $nome = 'Funcionario';

                break;

        }

        return $nome;
    }


    public static function DescricaooStatus($status): string
    {

        $situacao = '';

        switch ($status) {

            case STATUS_ATIVO:

                $situacao = 'Ativo';

                break;

            case STATUS_INATIVO:

                $situacao = 'Inativo';

                break;
        }

        return $situacao;
    }

    public static function IniciarSessao()
    {

        if (!isset($_SESSION))
            session_start();
    }

    public static function CriarSessao($id_usuario, $nome)
    {

        self::IniciarSessao();
        $_SESSION['id_usuario'] = $id_usuario;
        $_SESSION['nome'] = $nome;
    }

    public static function CodigoLogado()
    {

        self::IniciarSessao();
        return isset($_SESSION['id_usuario']) ? $_SESSION['id_usuario'] : 0;
    }

    public static function NomeLogado()
    {

        self::IniciarSessao();
        return $_SESSION['nome'];
    }



    public static function Deslogar()
    {

        self::IniciarSessao();
        unset($_SESSION['id_usuario']);
        unset($_SESSION['nome']);
        self::IrParaLogin();
    }

    public static function IrParaLogin()
    {

        header('location: http://localhost/Moderno/src/view/admin/login.php');
        exit;
    }

    public static function VerificarLogado()
    {
        self::IniciarSessao();
        if (!isset($_SESSION['id_usuario']))
            self::IrParaLogin();
    }


    /*public static function CreateTokenAuthentication(array $dados_user)
    {

        $header = [
            'typ' => 'JWT',
            'alg' => 'HS256'
        ];

        $payload = $dados_user;
        $header = json_encode($header);
        $payload = json_encode($payload);
        $header = base64_encode($header);
        $payload = base64_encode($payload);
        $sign = hash_hmac(
            "sha256",
            $header . '.' . $payload,
            SECRET_JWT_FUNC,
            true
        );
        $sign = base64_encode($sign);
        $token = $header . '.' . $payload . '.' . $sign;
        return $token;
    }*/


    /*public static function AuthenticationTokenAccess()
    {
        //Recupera todo o cabeçalho da requisição
        $http_header = apache_request_headers();
        //Se n for nulo
        if (
            $http_header['Authorization']
            
        ) :
            //quebra o bearer(autenticação de token)
            $bearer = explode(' ', $http_header['Authorization']);
            $token = explode('.', $bearer[1]);
            //quebrando os valores e jogango em seus significados
            $header = $token[0];
            $payload = $token[1];
            $sign = $token[2];
            //Faz a criptografia novamente para ver se bate com a chave
            $valid = hash_hmac(
                'sha256',
                $header . '.' . $payload,
                SECRET_JWT_FUNC,
                true
            );
            $valid = base64_encode($valid);

            if ($valid === $sign)
                return true;
            else

                return false;
        endif;
        return false;
    }*/

   
    public static function VerificarSenha($pass, $hash)
    {
        return password_verify($pass, $hash);
    }

    public static function CreateNameFile($ext): string
    {
        return md5(microtime()) . ".$ext";
    }
    public static function MoverAnexoPasta($nome_anexo, $anexo)
    {
        $ret = true;

            PERFIL_ADM:
                $ret = move_uploaded_file($anexo['tmp_name'], PATH_PRODUTOS . $nome_anexo);
        

        return $ret;
    }
    public static function ExcluirAnexoPasta($tipo, $nome_anexo)
    {
        return unlink($nome_anexo);
        // $ret = true;

        // switch ($tipo) {
        //     case PERFIL_PACIENTE:
        //         $ret = unlink(PATH_PACIENTE . $nome_anexo);
        //         break;

        //     case PERFIL_FUNCIONARIO:
        //         $ret = unlink(PATH_FUNCIONARIO . $nome_anexo);
        //         break;

        //     case PERFIL_PROFISSIONAL:
        //         $ret = unlink(PATH_PROFISSIONAL . $nome_anexo);
        //         break;
        // }

        // return $ret;
    }

   public static function RetornarPathAnexo()
    {
        $path = "";
        
        PERFIL_ADM:
                $path = PATH_PRODUTOS;
               

        
        return $path;
    }
    
}



