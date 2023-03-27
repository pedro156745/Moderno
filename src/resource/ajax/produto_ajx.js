function Excluir() {
    let id_produto = $("#id_altexcluir").val();

    $.ajax({
        type: "POST",
        url: BASE_URL_AJAX("Produto-dataview"),
        data: {
            btnexcluir: 'ajx',
            id_altexcluir: id_produto
        },
        success: function (ret) {
            $("#excluir").modal("hide");

            switch (ret) {
                case '1':
                    MensagemSucesso();
                    ConsultarProdutoAJX();
                    break;

                case '-1':
                    MensagemErro();
                    break;
            }
        }
    })
    return false;
}

function ConsultarProdutoAJX()
{
    $.ajax({
        type:'post',
        url: BASE_URL_AJAX("Produto-dataview"),
        data: {
            ConsultarProdutoAJX: 'ajx',
        },success: function (resultado){
            $("#resultado").html(resultado);
        }
    })
}
