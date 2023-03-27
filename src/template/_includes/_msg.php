<?php

if (isset($ret)) {
    switch ($ret):


        case -2:


        echo ' <script>
        Mensagem();
        </script>';

         break;

        case 0:


            echo '<script>
                MensagemCamposObrigatorios();
            </script>';

            break;

        case 1:

            echo '<script>
            MensagemSucesso();
            </script>';
            break;

        case -1:

            echo ' <script>
                MensagemErro();
                </script>';


            break;

            case -4:

                echo ' <script>
                MensagemLoginInvalido();
                    </script>';
    
    
                break;

                case -5:

                    echo ' <script>
                    MensagemSenhaInvalida();
                        </script>';
        
        
                    break;


    endswitch;
}
