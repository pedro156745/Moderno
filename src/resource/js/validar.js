function ValidarCampos(n_tela) {

    var ret = true;

    switch (n_tela) {

        case 1: //Setor

            if ($("#nome").val().trim() == '')

                ret = false;

            Notificar(form_setor);

            break;

        case 2: //Novo funcionario


            if ($("#tipo").val().trim() == '')

                ret = false;

            if ($("#setor").val().trim() == '')

                ret = false;

            if ($("#nome").val().trim() == '')

                ret = false;

            if ($("#nome_empresa_tec").val().trim() == '')

                ret = false;

            if ($("#email").val().trim() == '')


                ret = false;

            if ($("#telefone").val().trim() == '')

                ret = false;


            if ($("#bairro").val().trim() == '')


                ret = false;



            Notificar(form_funcionario);

            break;

        case 3: //Alocar

            if ($("#equipamento").val().trim() == '')
                ret = false;


            if ($("#setor").val().trim() == '')

                ret = false;

            Notificar(form_alocar)

            break;


        case 4: // equipamento

            if ($("#tipo").val().trim() == '')
                ret = false;

            if ($("#modelo").val().trim() == '')
                ret = false;

            if ($("#identificacao").val().trim() == '')

                ret = false;

            if ($("#descricao").val().trim() == '')

                ret = false;

            Notificar(form_equip);

            break;

        case 5: //Consultar usuario


            if ($("#tipo").val().trim() == '')

                ret = false;

            Notificar(form_consultusuario);

            break;

        case 6:

            if ($("#tipo").val().trim() == '')

                ret = false;


            Notificar(form_consulteq);



            break;

        case 6: //Gerenciar modelo


            if ($("#nome").val().trim() == '')

                ret = false;

            Notificar(form_gerenciartipoeq);

            break;

        case 7: //Gerenciar tipo

            if ($("#nome").val().trim() == '')

                ret = false;

            Notificar(form_gerenciarmodeloeq);

            break;


        case 8: //Modelo equipamento
            if ($("#nome").val().trim() == '')

                ret = false;

            Notificar(form_modeloeq);

            break;

        case 9: //remover equipamento


            if ($("#equipamento").val().trim() == '')

                ret = false;

            Noticar(form_removereq);
            break;

        case 10://tipo

            if ($("#tipo").val().trim() == '')

                ret = false;

            Notificar(form_tipo);

            break;

        case 11: ///novo chamado


            if ($("#equipamento").val().trim() == '')

                ret = false;

            if ($("#descricao").val().trim() == '')

                ret = false;

            Notificar(form_novochamado);


        case 12: //meus chamados

            if ($("#situacao").val().trim() == '')

                ret = false;

            Notificar(form_meuschamados);


            break;


        case 13: //meus dados

            if ($("#nome").val().trim() == '')

                ret = false;

            if ($("#email").val().trim() == '')

                ret = false;


            if ($("#telefone").val().trim() == '')

                ret = false;


            if ($("#endereco").val().trim() == '')

                ret = false;

            Notificar(form_meusdados);

            break;


        case 14: //mudar senha

            if ($("#senha").val().trim() == '')

                ret = false;

            if ($("#novasenha").val().trim() == '')

                ret = false;


            if ($("#rsenha").val().trim() == '')

                ret = false;


            Notificar(form_mudarsenha);



            break;

        case 15:


            if ($("#data").val().trim() == '')
                ret = false;



            if ($("#funcionario").val().trim() == '')

                ret = false;


            if ($("#setor").val().trim() == '')

                ret = false;


            if ($("#equipamento").val().trim() == '')

                ret = false;

            if ($("#observacao").val().trim() == '')

                ret = false;
            if ($("#laudo").val().trim() == '')

                ret = false;

            Notificar(form_atenderchamado)
            break;

        case 16:

            if ($("#nome").val().trim() == '')


                ret = false;


            if ($("#email").val().trim() == '')

                ret = false;


            if ($("#telefone").val().trim() == '')

                ret = false;


            if ($("#endereco").val().trim() == '')

                ret = false;

            Notificar(form_meusdadostecnico);

            break

        case 17:


            if ($("#senha").val().trim() == '')

                ret = false;


            if ($("#nova_senha").val().trim() == '')


                ret = false;


            if ($("#rsenha").val().trim() == '')

                ret = false;


            Noticar(form_mudarsenhatecnico);

            break;

        case 20:

            if ($("#nome_categoria").val().trim() == '')

                ret = false;


            Notificar(form_categoria);
            break;



















    }

















}






