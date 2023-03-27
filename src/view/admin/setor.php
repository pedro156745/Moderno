<?php require_once dirname(__DIR__, 3) . '/vendor/autoload.php' ;
use Src\_public\Util;
Util::VerificarLogado();
?>

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
                            <h1>Gerenciar Setor</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <a href="dashboard.php" class="fas fa-arrow-circle-left"> Inicio</a>


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
                        <h3 class="card-title">Nesta pagina você podera gerenciar seu setor</h3>


                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <button type="button" class="btn btn-block btn-outline-primary" id="btnMostrarEsconder">Novo Setor</button>

                            </div>
                        </div>
                    </div>

                    <form action="setor.php" method="post" id="form-setor">

                        <div class="card-body" id="divConteudo">

                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Nome do setor</label>
                                        <input type="text" class="form-control obg" placeholder="Digite aqui.." name="nome_setor" id="nome_setor">
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <button class="btn btn-success" onclick="return InserirSetor('form-setor')" name="btn_cadastrar">Cadastrar</button>
                        </div>

                    </form>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h1 class="card-title">Categorias de Produtos</h1>

                                        <div class="card-tools">
                                            <div class="input-group input-group-sm" style="width: 150px;">
                                                <input type="text" name="table_search" onkeyup="FiltrarCategoria(this.value)" class="form-control float-right" placeholder="Search">

                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover" id="tabela">

                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Categoria</th>
                                                    <th>Ação</th>
                                                   


                                                </tr>
                                            </thead>
                                            <tbody>
                                               
                                                    <tr>
                                                        <td>></td>
                                                        <td></td>
                                                        <td><a href="#" data-toggle="modal" data-target="#alterar-categoria" onclick="CarregarAlteracaoCategoria('<?= $categorias[$i]['id_categoria'] ?>', '<?= $categorias[$i]['nome_categoria'] ?>')" class="btn btn-warning btn-xs">Alterar</a>
                                                        <a href="#" data-toggle="modal" data-target="#excluir" onclick="CarregarExclusaoCategoria('<?= $categorias[$i]['id_categoria'] ?>', '<?= $categorias[$i]['nome_categoria'] ?>')" class="btn btn-danger btn-xs">Excluir</a></td>

                                                    </tr>
                                               
                                            </tbody>

                                        </table>
                                        <form action="setor.php" method="post">
                                            <?php include_once 'Modals/alterar_categoria.php';
                                            include_once 'Modals/excluir.php';  ?>
                                        </form>

                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>

                        <!-- /.card -->

                        <!-- STACKED BAR CHART -->


                        <!--</div> -->


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
        <script src="../../resource/ajax/setor-ajx.js"></script>
</body>

</html>