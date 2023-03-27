<?php

include_once '_inculde_autoload.php';

use Src\_public\Util;
use Src\controller\ProdutoCTRL;
use Src\controller\CategoriaCTRL;
use Src\vo\CategoriaVO;
use Src\vo\ProdutoVO;
$vo = new ProdutoVO;

Util::VerificarLogado();

$ctrl = new ProdutoCTRL;
$ctrl_categoria = new CategoriaCTRL;



if (isset($_POST['btn_cadastrar'])) {

    $vo = new ProdutoVO;

    $vo->setNomeProduto($_POST['nome_produto']);
    $vo->setQuantidade($_POST['quantidade_produto']);
    $vo->setPreco($_POST['preco']);
    $vo->setDescCategoria($_POST['desc_produto']);
    $vo->setIdCategoria($_POST['categoria_id']);

    $ret = $ctrl->InserirProdutoCTRL($vo, $_FILES['foto']);

    $anexos = $ctrl->ConsultarProdutoCTRL($vo);
} else if (isset($_POST['ConsultarAJX']) && $_POST['ConsultarAJX'] == "OK") {

    $categorias = $ctrl_categoria->ConsultarCategoriaCTRL(); ?>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Ação</th>
                <th>Nome do setor</th>

            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < count($tipos); $i++) { ?>
                <tr>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#alterar-setor" onclick="CarregarAlteracaoSetor('<?= $tipos[$i]['id'] ?>','<?= $tipos[$i]['nome_setor'] ?>')" class="btn btn-warning btn-xs">Alterar</a>
                        <a href="#" data-toggle="modal" data-target="#modalexcluir" onclick="CarregarDeletacao('<?= $tipos[$i]['id'] ?>' ,'<?= $tipos[$i]['nome_setor'] ?>')" class="btn btn-danger btn-xs">Excluir</a>
                    </td>

                    <td>
                        <?= $tipos[$i]['nome_setor'] ?>
                    </td>

                </tr>
            <?php } ?>
        </tbody>
    </table>

<?php } else {

    $anexos = $ctrl->ConsultarProdutoCTRL($vo);
    $categorias = $ctrl_categoria->ConsultarCategoriaCTRL();
}
