<?php require_once dirname(__DIR__, 2) . '/resource/dataview/Usuario-dataview.php';
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
                            <h1>Novo Usuario</h1>
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
                        <h3 class="card-title">Nesta pagina você podera cadastrar seus usuarios</h3>


                    </div>

                    <form action="novo_usuario.php" method="post" id="form_usuario">

                        <div class="card-body">
                            <div class="form-group">
                                <label>Tipo</label>
                                <select class="form-control obg" name="tipo" id="tipo" onchange="EscolherUsuario(this.value)">
                                    <option value="">Selecione</option>
                                    <option value="<?= PERFIL_ADM ?>">Administrador</option>
                                    <option value="<?= PERFIL_FUNCIONARIO ?>">Funcionário</option>
                                    <option value="<?= PERFIL_FORNECEDOR ?>">Fornecedor</option>
                                </select>
                            </div>

                            <div class="ocultar" id="divgeral">

                                <div class="form-group">
                                    <label>Nome</label>
                                    <input class="form-control obg" placeholder="Digite aqui..." name="nome_usuario" id="nome_usuario">
                                </div>



                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input class="form-control obg" placeholder="Digite aqui..." name="email_usuario" id="email_usuario">
                                </div>

                                <div class="form-group">
                                    <label>Telefone</label>
                                    <input class="form-control obg cel" placeholder="Digite aqui..." name="telefone_usuario" id="telefone_usuario">
                                </div>

                                <div class="form-group">
                                    <label>CEP</label>
                                    <input class="form-control obg cep" placeholder="Digite aqui..." name="cep" id="cep" onblur="BuscarCep()">
                                </div>

                                <div class="form-group">
                                    <label>Rua</label>
                                    <input class="form-control obg" placeholder="Digite aqui..." name="rua" id="rua">
                                </div>


                                <div class="form-group">
                                    <label>Bairro</label>
                                    <input class="form-control obg" placeholder="Digite aqui..." name="bairro" id="bairro">
                                </div>

                                <div class="form-group">
                                    <label>Cidade</label>
                                    <input class="form-control obg" placeholder="Digite aqui..." name="cidade" id="cidade">
                                </div>


                                <div class="form-group">
                                    <label>Estado</label>
                                    <input class="form-control obg" placeholder="Digite aqui..." name="estado" id="uf">
                                </div>

                            </div>

                            <div class="form-group ocultar" id="divButton">

                                <button class="btn btn-success" onclick="return Notificar('form_usuario')" name="btn_gravar">Gravar</button>

                            </div>
                            <!-- /.card-body -->
                        </div>

                        <!-- /.card -->
                </div>

        </div>

        </form>

        <div id="divLoad">


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

    <script src="../../resource/ajax/buscar_cep-ajax.js"></script>
</body>

</html>