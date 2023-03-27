function Load() {
    $("#divLoad").addClass("overlay").html(' <i class="fas fa-2x fa-sync-alt fa-spin"></i>');
}

function RemoverLoad() {
    $("#divLoad").removeClass("overlay").html('');
}
function NotificarCampo(nome_id) {

    if ($("#" + nome_id).val().trim() == '')
        $("#" + nome_id).addClass("is-invalid");

    else {
        $("#" + nome_id).removeClass("is-invalid").addClass('is-valid');
    }
}

function ValidarAnexo(id_form) {

    if (Notificar(id_form)) {

        if (!ValidarAnexo()) {
            MensagemGenerica("O anexo deverá ser no formato JPG");
            return false;
        }
    } else
        return false;

}





function Notificar(form_id) {

    var ret = true;

    $("#" + form_id + " input," + "#" + form_id + " select ," + "#" + form_id + " textarea").each(function () {

        if ($(this).hasClass("obg")) {

            if ($(this).val().trim() == '') {
                ret = false;
                $(this).addClass("is-invalid");
            }
            else {
                $(this).removeClass("is-invalid").addClass('is-valid');

            }
        }




    })
    if (!ret)
        MensagemCamposObrigatorios();

    else

        Load();

    return ret;

}

function BASE_URL_AJAX(dataview) {
    return "../../resource/dataview/" + dataview + ".php";
}


function CarregarSetores(){

    $.ajax({
        type: "POST",
        url: BASE_URL_AJAX("usuario-dataview"),
        data: {
            carregar_setor: 'ajx'
            
        },
        success: function (dados) {

        $("#setor").html(dados);
        }
    })

}


function BASE_URL_AJAXapi(file_ajax) {
    return "http://localhost/Moderno/src/resource/api/" + file_ajax + ".php";
}

function LimparCampos(form_id) {


    $("#" + form_id + " input, " + "#" + form_id + " select ," + "#" + form_id + " textarea").each(function () {

        $(this).val('');

    })


}



function CarregarAlteracaoCategoria(id, nome) {
    $("#id_alt").val(id);
    $("#nome_alt").val(nome);
}

function CarregarExclusaoCategoria(id, nome_excluir) {
    $("#id_altexcluir").val(id);
    $("#nome_reg").html(nome_excluir);
}
function CarregarALteracaoModelo(id, modelo) {
    $("#id_alt").val(id);

    $("#modelo_alt").val(modelo);
}




function CarregarDeletacao(id_excluir, nome_excluir) {
    $("#id_altexcluir").val(id_excluir);
    $("#nome_reg").html(nome_excluir);


}

function CarregarMudarStatus(id, nome,status) {
    $("#id_status").val(id);
    $("#status_atual").val(status);
    $("#nome_user_status").html(nome);


}

function CarregarSetores(){

    $.ajax({
        type: "POST",
        url: BASE_URL_AJAX("usuario-dataview"),
        data: {
            carregar_setor: 'ajx'
            
        },
        success: function (dados) {

        $("#setor").html(dados);
        }
    })

}

function EscolherUsuario(tipo , form_id) {

    LimparNotificacoes(form_id);

    switch (tipo) {
        case '2': //tipo funcionario
            $("#divfunc").show();
            $("#divgeral").show();
            $("#divButton").show();
            $("#divfornecedor").hide();
            $("#setor").addClass("obg");

            CarregarSetores();
            break;

        case '1': //
            $("#divfunc").hide();
            $("#divgeral").show();
            $("#divfornecedor").hide();
            $("#divButton").show();
            $("#setor").removeClass("obg");
            break;

        case '3':
            $("#divfornecedor").show();
            $("#divfunc").hide();
            $("#divgeral").show();
            $("#divButton").show();
            $("#nome_empresa").addClass("obg");
            $("#cnpj_empresa").addClass("obg");

            break;

        default:
            $("#divfunc").hide();
            $("#divgeral").hide();
            $("#divButton").hide();
            $("#divfornecedor").hide();
            break;
    }

}

function LimparNotificacoes(form_id) {
    $("#" + form_id + " input," + "#" + form_id + " select ," + "#" + form_id + " textarea").each(function () {

        $(this).removeClass('is-valid');
        $(this).removeClass("is-invalid");
    })
}


