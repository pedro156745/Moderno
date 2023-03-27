function InserirSetor(id_form) {


    if (Notificar(id_form)) {

        var endpoint_cliente = "GravarSetor";
        var dados = {
            endpoint: endpoint_cliente,
            nome_setor: $("#nome_setor").val().trim()
        }

        $.ajax({

            type: 'POST',
            url: BASE_URL_AJAXapi('adm_api'),
            data: JSON.stringify(dados),
            headers: {
                'Content-Type': 'application/json'
            },success: function (dados_ret){
                var resultado = dados_ret['result'];
                console.log(resultado);
                if(resultado ==1){
                    MensagemSucesso();
                    LimparCampos(id_form);
                }else{
                    MensagemErro();
                }
            }
        })
    }
    return false;

}