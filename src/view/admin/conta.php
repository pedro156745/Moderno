<?php require_once dirname(__DIR__, 2) . '/resource/dataview/Conta-dataview.php' ?>


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
                            <h1>Gerenciar Conta</h1>
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
                        <h3 class="card-title">Nesta pagina você podera gerenciar suas categorias</h3>


                    </div>

                    <div class="card-body">
                        <div class="row">

                            <div class="col-3">
                                <button type="button" class="btn btn-block btn-outline-primary" id="btnMostrarEsconder">Cadastrar Conta</button>
                            </div>
                        </div>
                    </div>

                    <form action="conta.php" method="post" id="form_conta">
                        
                        <div class="card-body" id="divConteudo">
                            <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">Nome do banco</label>
                                <input type="text" class="form-control obg" placeholder="Digite aqui.." name="nome_banco" id="nome_banco">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="">Agência</label>
                                <input type="text" class="form-control obg" placeholder="Digite aqui.." name="agencia_conta" id="agencia_conta" maxlength="20">
                            </div>


                            <div class="form-group col-md-6">
                                <label for="">Numero da conta</label>
                                <input type="text" class="form-control obg" placeholder="Digite aqui.." name="numero_conta" id="numero_conta" maxlength="12">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="">Saldo</label>
                                <input type="text" class="form-control obg" placeholder="Digite aqui.." name="saldo_conta" id="saldo_conta" maxlength="8">
                            </div>
                            <!-- /.card-body -->
                            <!-- /.card -->

                            <div class="form-group col-md-6">
                              
                                <button class="btn btn-success" onclick="return Notificar('form_conta')" name="btn_cadastrar1">Cadastrar</button>
                            </div>
                           
                        </div>
                        </div>
                    </form>

                    <div id="divLoad">

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