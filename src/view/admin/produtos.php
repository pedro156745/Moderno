<?php require_once dirname(__DIR__, 2) . '/resource/dataview/Produto-dataview.php' ?>


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
                            <h1>Gerenciar Produtos</h1>
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
                        <h3 class="card-title">Nesta pagina você podera gerenciar seus fornecedores</h3><br>


                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <button type="button" class="btn btn-block btn-outline-primary" id="btnMostrarEsconder">Novo Produto</button>

                            </div>

                            <div class="col-md-3">
                                <a class="btn btn-block btn-outline-primary" href="categorias_produtos.php">Cadastrar Categoria</a>

                            </div>
                        </div>
                    </div>

                    <form action="produtos.php" method="post" id="form_produto" enctype="multipart/form-data">

                        <div class="card-body" id="divConteudo">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Categoria do produto</label>
                                        <select name="categoria_id" id="categoria_id" class="form-control">
                                            <option>
                                                Selecione
                                            </option>

                                            <?php foreach ($categorias as $item) { ?>
                                                <option value="<?= $item['id_categoria'] ?>">
                                                    <?= $item['nome_categoria'] ?>

                                                <?php } ?>

                                                </option>
                                        </select>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nome do produto</label>
                                        <input type="text" class="form-control obg" name="nome_produto" id="nome_produto" placeholder="Digite aqui..">
                                    </div>
                                    <!-- /.card-body -->
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Quantidade</label>
                                        <input type="number" class="form-control obg" placeholder="Digite aqui.." name="quantidade_produto" id="quantidade_produto">
                                    </div>
                                    <!-- /.card-body -->
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Preço</label>
                                        <input type="text" class="form-control obg" placeholder="Digite aqui.." name="preco" id="preco">
                                    </div>
                                    <!-- /.card-body -->
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Imagem do Produto</label>
                                        <span><i class="fas fa-solid fa-upload"></i></span>
                                        <input type="file" class="form-control" name="foto">


                                    </div>
                                    <!-- /.card-body -->
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Descrição do Produto</label>
                                        <textarea name="desc_produto" id="desc_produto" class="form-control obg" placeholder="Digite aqui.."></textarea>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <button class="btn btn-success" name="btn_cadastrar" onclick="return Notificar('form_produto')">Cadastrar</button>
                        </div>

                    </form>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h1 class="card-title">Produtos</h1>

                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Categoria</th>
                                                    <th>Produto</th>
                                                    <th>Quantidade</th>
                                                    <th>Preço</th>
                                                    <th>Imagem</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php for ($i = 0; $i < count($anexos); $i++) { ?>
                                                    <tr>
                                                        <td><?= $anexos[$i]['nome_categoria'] ?></td>
                                                        <td><?= $anexos[$i]['nome_produto'] ?></td>
                                                        <td><?= $anexos[$i]['quantidade'] ?></td>
                                                        <td>R$<?= $anexos[$i]['preco'] ?></td>
                                                        <td><a href="<?= $anexos[$i]['nome_url'] ?>" target="_blank"> <img src=" <?= $anexos[$i]['nome_url'] ?>" height="50" width="50px"></a></td>
                                                        <td><i class="btn fas fa-edit"></i> <i class="btn fas fa-trash-alt" style="color:red"></i></td>
                                                    </tr>

                                                <?php } ?>
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


        <?php include_once PATH_URL . '/template/_includes/_msg.php' ?>

</body>

</html>