<?php require_once dirname(__DIR__, 3) . '/vendor/autoload.php';
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
                            <h1>Dashboard</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Blank Page</li>
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
                        <h3 class="card-title">Title</h3>


                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="card card-primary card-outline">
                                        <div class="card-body box-profile">
                                            <div class="text-center">
                                                <img class="profile-user-img img-fluid img-circle" src="../../template/dist/img/user4-128x128.jpg" alt="User profile picture">
                                            </div>

                                            <h3 class="profile-username text-center">Nina Mcintire</h3>

                                            <p class="text-muted text-center">Administrador</p>
                                            <div class="form-group">
                                                <label>Anexar imagem</label>
                                                <input type="file" name="arquivo">
                                            </div>

                                            <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>

                                </div>

                            </div>




                            <div class="card card-primary col-md-8">

                                <div class="card-header">
                                    <h3 class="card-title">Meus Dados</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form group col-md-12">
                                            <strong><i class="fas fa-book mr-1"></i>Minha empresa</strong>

                                            <input type="text" class="form-control">
                                        </div>
                                        <hr>
                                        <div class="form group col-md-12">

                                            <strong><i class="fas fa-map-marker-alt mr-1"></i>Endereço</strong>

                                            <input type="text" class="form-control">
                                            <hr>
                                        </div>

                                        <div class="form group col-md-12">
                                            <strong><i class="fas fa-book mr-1"></i>Telefone</strong>

                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <!-- /.card-body -->

                            <!-- /.card -->
                        </div>
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
</body>

</html>