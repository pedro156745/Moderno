<?php require_once dirname(__DIR__, 3) . '/vendor/autoload.php' ?>


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
                            <h1>Estoque</h1>
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
                        <h3 class="card-title">Nesta pagina você podera gerenciar seus fornecedores</h3>


                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                            <button type="button" class="btn btn-block btn-outline-primary" id="btnMostrarEsconder">Novo Produto</button>

                            </div>
                        </div>
                    </div>


                    <form action="vendas.php" method="post">

                        <div class="card-body" id="divConteudo">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nome</label>
                                        <input type="text" class="form-control" placeholder="Digite aqui..">
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">CPF/CNPJ</label>
                                        <input type="text" class="form-control" placeholder="Digite aqui..">
                                    </div>
                                    <!-- /.card-body -->
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Telefone</label>
                                        <input type="tel" class="form-control" placeholder="Digite aqui..">
                                    </div>
                                    <!-- /.card-body -->
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" placeholder="Digite aqui..">
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <button class="btn btn-success" name="btn_cadastrar">Cadastrar</button>
                        </div>

                    </form>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h1 class="card-title">Produtos</h1>

                                        <div class="card-tools">
                                            <div class="input-group input-group-sm" style="width: 150px;">
                                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Nome</th>
                                                    <th>Descricao</th>
                                                    <th>Estoque</th>
                                                    <th>Valor</th>
                                                    <th>Fornecedor</th>
                                                    <th>Tipo</th>
                                                    <th>Foto</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>2</td>
                                                    <td>3</td>
                                                    <td><span class="tag tag-success">Approved</span></td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td><a href="" class="btn fas fa-edit"></a> <a href="" class="btn fas fa-trash-alt" style="color:red"></a></td>
                                                </tr>
                                                <tr>
                                                    <td>219</td>
                                                    <td>Alexander Pierce</td>
                                                    <td>11-7-2014</td>
                                                    <td><span class="tag tag-warning">Pending</span></td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td><a href="" class="btn fas fa-edit"></a> <a href="" class="btn fas fa-trash-alt" style="color:red"></a></td>
                                                </tr>
                                                <tr>
                                                    <td>657</td>
                                                    <td>Bob Doe</td>
                                                    <td>11-7-2014</td>
                                                    <td><span class="tag tag-primary">Approved</span></td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                   
                                                    <td><a href="" class="btn fas fa-edit"></a> <a href="" class="btn fas fa-trash-alt" style="color:red"></a></td>
                                                </tr>
                                                <tr>
                                                    <td>175</td>
                                                    <td>Mike Doe</td>
                                                    <td>11-7-2014</td>
                                                    <td><span class="tag tag-danger">Denied</span></td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td><a href="" class="btn fas fa-edit"></a> <a href="" class="btn fas fa-trash-alt" style="color:red"></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
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
</body>

</html>