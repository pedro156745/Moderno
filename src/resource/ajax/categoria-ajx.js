function InserirCategoria(id_form) {
    if (Notificar(id_form)) {
        var endpoint_cliente = "GravarCategoria";
        var dados = {
            endpoint: endpoint_cliente,
            nome_categoria: $("#nome_categoria").val().trim()
        }
        $.ajax({
            type: "POST",
            url: BASE_URL_AJAXapi('adm_api'),
            data: JSON.stringify(dados),
            headers: {
                'Content-Type': 'application/json'
            },
            success: function (dados_ret) {
                var resultado = dados_ret['result'];
                RemoverLoad();
                if (resultado == 1) {
                    MensagemSucesso();
                    LimparCampos(id_form);
                    ConsultarCategoriaAJX();
                }
                else {
                    MensagemErro();
                }
            }
        })
    }
    return false;
}

function AlterarCategoria() {

    let nome_categoria = $("#nome_alt").val().trim();
    let id_categoria = $("#id_alt").val();

    $.ajax({
        type: "POST",
        url: BASE_URL_AJAX("categoria_dataview"),
        data: {
            btnalterar: 'ajx',
            id_alt: id_categoria,
            nome_alt: nome_categoria
        },
        success: function (ret) {
            $("#alterar-categoria").modal("hide");

            if (ret == '1') {
                MensagemSucesso();
                ConsultarCategoriaAJX();
            }
            else {
                MensagemErro();
            }
        }
    })
    return false;
}

function Excluir() {

    let id_categoria = $("#id_altexcluir").val();

    $.ajax({
        type: "POST",
        url: BASE_URL_AJAX("categoria_dataview"),
        data: {
            btnexcluir: 'ajx',
            id_altexcluir: id_categoria
        },
        success: function (ret) {
            $("#excluir").modal("hide");

            switch (ret) {
                case '1':
                    MensagemSucesso();
                    ConsultarCategoriaAJX();
                    break;

                case '-1':
                    MensagemErro();
                    break;
            }
        }
    })
    return false;
}



/*function ConsultarCategoria() {


    var dados = {
        endpoint: 'ConsultarCategoria'
    }

    $.ajax({
        type: "POST",
        url: BASE_URL_AJAXapi("adm_api"),
        data: JSON.stringify(dados),
        headers: {
            'Content-Type': 'application/json'
        },
        success: function (resultado) {
            var chamado = resultado["result"];
            if (chamado != "") {


                var table_head = '';
                var table_start = '';
                var table_data = '';
                var table_end = '';



                table_start = '<table class="table table-hover" id="tableResult"><thead>';

                table_head = '<tr>';
                table_head += '<th><th>';
                table_head += '<th>ID</th>';
                table_head += '<th>Nome Categoria</th>';
                table_head += '</tr></thead><tbody>';

                $(chamado).each(function () {
                    table_data += '<tr>';
                    table_data += '<td>';
                    table_data += '<td>';

                    table_data += '<a href="#" data-toggle="modal" data-target="#alterar-categoria" onclick="CarregarAlteracaoCategoria(' + this.id_categoria + ', ' + "'" + this.nome_categoria + "'" + ')" class="btn bg-gradient-warning btn-xs">Alterar</a>';
                    table_data += '<a href="#" data-toggle="modal" data-target="#excluir" onclick="CarregarExclusaoCategoria(' + this.id_categoria + ',' + "'" + this.nome_categoria + "'" + ')"  class="btn bg-gradient-danger btn-xs">Excluir</a>';


                    table_data += '<td>' + this.id_categoria + '</td>';
                    table_data += '<td>' + this.nome_categoria + '</td>';


                    table_data += '</tr>';

                })

                table_end = '</tbody></table>';

                var vaso = table_start + table_head + table_data + table_end;

                $("#tableResult").html(vaso);
                $("#divResult").show();




            }

        }
    })
    return false;
}/*/


function FiltrarCategoria(nome_filtro) {
    $.ajax({
        type: "POST",
        url: BASE_URL_AJAX("categoria_dataview"),
        data: {
            FiltrarAJX: 'ajx',
            nome_filtro: nome_filtro.trim()
        },
        success: function (resultado) {
            $("#tableResultS").html(resultado);
        }
    })
}


function ConsultarCategoriaAJX() {
    $.ajax({
        type: "POST",
        url: BASE_URL_AJAX("categoria_dataview"),
        data: {
            ConsultarAJX: "OK"
        }, success: function (tabela_preenchida) {
            $("#tableResultS").html(tabela_preenchida);
        }
    })
}