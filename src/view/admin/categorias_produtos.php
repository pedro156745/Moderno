<?php require_once dirname(__DIR__, 2) . '/resource/dataview/categoria_dataview.php' ?>


<!DOCTYPE html>
<html>

<head>
    <?php include_once PATH_URL . '/template/_includes/_head.php' ?>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php include_once PATH_URL . '/template/_includes/_topo.php' ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include_once PATH_URL . '/template/_includes/_menu.php' ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Categorizar Produtos</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <a href="dashboard.php" class="fas fa-arrow-circle-left">Inicio</a>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Nesta pagina você podera cadastrar suas categorias</h3>


                    </div>

                    <div class="card-body">
                        <div class="row">

                            <div class="col-3">
                                <button type="button" class="btn btn-block btn-outline-primary" id="btnMostrarEsconder">Cadastrar Categoria</button>
                            </div>
                        </div>
                    </div>

                    <form action="categorias_produtos.php" method="post" id="form_categoria">
                        <div class="card-body" id="divConteudo">
                            <div class="form-group">
                                <label for="">Categoria do produto</label>
                                <input type="text" class="form-control obg" placeholder="Digite aqui.." name="nome_categoria" id="nome_categoria">
                            </div>
                            <!-- /.card-body -->
                            <!-- /.card -->
                            <button class="btn btn-success" onclick="return InserirCategoria('form_categoria')" name="btn_cadastrar">Cadastrar</button>
                        </div>
                    </form>

                    <div id="divLoad">

                    </div>


                    <div class="card-body">
                        <div class="row" >
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Resultado encontrado</h3>

                                        <div class="card-tools">
                                            <div class="input-group input-group-sm" style="width: 150px;">
                                                <input type="text" onkeyup="FiltrarCategoria(this.value)" name="table_search" class="form-control float-right" placeholder="Pesquisar">


                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover" id="tableResultS">
                                        <thead>
                                                <tr>
                                                    <th>Ação</th>
                                                    <th>Nome da Categoria</th>

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
                                    </div>

                                    <?php
                                    include_once './Modals/alterar_categoria.php';
                                    include_once './Modals/excluir.php';
                                    ?>


                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>

                    </div>

                    <!-- /.card-body -->

                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php include_once PATH_URL . '/template/_includes/_footer.php' ?>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <?php include_once PATH_URL . '/template/_includes/scripts.php' ?>

        <?php include_once PATH_URL . '/template/_includes/_msg.php' ?>

        <script src="../../resource/ajax/categoria-ajx.js"></script>


</body>

</html>