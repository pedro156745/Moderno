<?php

include_once '_inculde_autoload.php';

use Src\_public\Util;
use Src\controller\CategoriaCTRL;
use Src\vo\CategoriaVO;

Util::VerificarLogado();

$ctrl = new CategoriaCTRL;


if (isset($_POST['btn_cadastrar'])) {

   $vo = new CategoriaVO;

   $vo->setNomecategoria($_POST['nome_categoria']);

   $ret = $ctrl->InserirCategoriaCTRL($vo);
} else if (isset($_POST['btnalterar'])) {

   $vo = new CategoriaVO;

   $vo->setIdCategoria($_POST['id_alt']);
   $vo->setNomecategoria($_POST['nome_alt']);


   $ret = $ctrl->AlterarCategoriaCTRL($vo);

   if ($_POST['btnalterar'] == 'ajx')

      echo $ret;

   else {
      $tipos = $ctrl->ConsultarCategoriaCTRL();
   }
} else if (isset($_POST['btnexcluir'])) {

   $vo = new CategoriaVO;

   $vo->setIdCategoria($_POST['id_altexcluir']);


   $ret = $ctrl->ExcluirCategoriaCTRL($vo);

   if ($_POST['btnexcluir'] == 'ajx') {
      echo $ret;
   } else {
      $tipos = $ctrl->ConsultarCategoriaCTRL();
   }
} 


else if (isset($_POST['ConsultarAJX']) && $_POST['ConsultarAJX'] == "OK") {

   $tipos = $ctrl->ConsultarCategoriaCTRL(); ?>

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
                  <a href="#" data-toggle="modal" data-target="#alterar-categoria" onclick="CarregarAlteracaoCategoria('<?= $tipos[$i]['id_categoria'] ?>','<?= $tipos[$i]['nome_categoria'] ?>')" class="btn btn-warning btn-xs">Alterar</a>
                  <a href="#" data-toggle="modal" data-target="#excluir" onclick="CarregarDeletacao('<?= $tipos[$i]['id_categoria'] ?>' ,'<?= $tipos[$i]['nome_categoria'] ?>')" class="btn btn-danger btn-xs">Excluir</a>
               </td>

               <td>
                  <?= $tipos[$i]['nome_categoria'] ?>
               </td>

            </tr>
         <?php } ?>
      </tbody>
   </table>

<?php } else if (isset($_POST['FiltrarAJX']) && isset($_POST['nome_filtro'])) {
 $nome_filtro = $_POST['nome_filtro'];
 $tipos = $ctrl->FiltrarCategoriaCTRL($nome_filtro); ?> 

<?php if (count($tipos) > 0)  { ?>

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
                  <a href="#" data-toggle="modal" data-target="#alterar-categoria" onclick="CarregarAlteracaoCategoria('<?= $tipos[$i]['id_categoria'] ?>','<?= $tipos[$i]['nome_categoria'] ?>')" class="btn btn-warning btn-xs">Alterar</a>
                  <a href="#" data-toggle="modal" data-target="#excluir" onclick="CarregarDeletacao('<?= $tipos[$i]['id_categoria'] ?>' ,'<?= $tipos[$i]['nome_categoria'] ?>')" class="btn btn-danger btn-xs">Excluir</a>
               </td>

               <td>
                  <?= $tipos[$i]['nome_categoria'] ?>
               </td>

            </tr>
         <?php } ?>
      </tbody>
   </table>

   <?php } 


   else {

      echo "<h6><center>NENHUM REGISTRO ENCONTRADO</center></h6>";
   } ?>

<?php } else {

   $tipos = $ctrl->ConsultarCategoriaCTRL();
}
