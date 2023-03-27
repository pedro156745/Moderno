function RetornarMsg(n) {
    var msg = '';

    switch (n) {


        case -2:



            break;

        case -5:

            msg = "Senha inválida";

            break;

        case -4:

            msg = "O login é invalido";

            break;



        case 0:
            msg = "Preencher os campos obrigatorios";

            break;



        case 1:

            msg = "Ação realizada com sucesso";

            break;


        case -1:

            msg = "Ocoreu um erro na operação. Tente mais tarde";

            break;


        case -3:

            msg = "Nenhum registro encontrado";

            break;

    }

    return msg;



}

function MensagemCamposObrigatorios() {
    toastr.warning(RetornarMsg(0));
}

function MensagemLoginInvalido() {
    toastr.warning(RetornarMsg(-4));


}

function MensagemSenhaInvalida() {
    toastr.warning(RetornarMsg(-5));

}

function MensagemSucesso() {
    toastr.success(RetornarMsg(1));

}


function MensagemErro() {
    toastr.error(RetornarMsg(-1));




}

function Mensagem() {
    toastr.error(RetornarMsg(-2));
}

function MensagemRegistronaoencontrado() {
    toastr.info(RetornarMsg(-3));
}

function MensagemGenerica(texto) {
    toastr.info(RetornarMsg(texto));
}






