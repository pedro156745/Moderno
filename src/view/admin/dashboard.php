<?php require_once dirname(__DIR__, 2) . '/resource/dataview/Conta-dataview.php';

use Src\_public\Util;

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
                        <h3 class="card-title">Controle </h3>


                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-lg-3 col-6">
                                <!-- small card -->
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <h3>44</h3>

                                        <p>Usuarios Ativos</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-user-plus"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">
                                        Mais informações <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small card -->
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>150</h3>

                                        <p>Estoque</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>
                                    <a href="vendas.php" class="small-box-footer">
                                        Mais informações <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>


                            <div class="col-lg-3 col-6">
                                <!-- small card -->
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <h3> R$ <?= $saldo[0]['saldo_conta'] != '' ? number_format($saldo[0]['saldo_conta'], 2, ',', '.') : '0' ?><sup style="font-size: 20px"></sup>
                                       
                                    </h3>

                                        <p>Financeiro</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">
                                        Mais informações<i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6">
                                <!-- small card -->
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                        <h3>44</h3>

                                        <p>Usuarios Inativos</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-user-plus"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">
                                        Mais informações <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="info-box bg-success">
                                    <span class="info-box-icon"><i class="ion ion-stats-bars"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Entrada</span>
                                        <span class="info-box-number">41,410</span>

                                        <div class="progress">
                                            <div class="progress-bar" style="width: 70%"></div>
                                        </div>
                                        <span class="progress-description">
                                            Este Mes
                                        </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>

                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="info-box bg-danger">
                                    <span class="info-box-icon"><i class="ion ion-stats-bars"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Saida</span>
                                        <span class="info-box-number">41,410</span>

                                        <div class="progress">
                                            <div class="progress-bar" style="width: 70%"></div>
                                        </div>
                                        <span class="progress-description">
                                            Este Mes
                                        </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>



                            
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h1 class="card-title">Ultimos Movimentos</h1>

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
                                                            <th>CPF/CNPJ</th>
                                                            <th>Telefone</th>
                                                            <th>Email</th>
                                                            <th>Ação</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>2</td>
                                                            <td>3</td>
                                                            <td><span class="tag tag-success">Approved</span></td>
                                                            <td><i class="btn fas fa-edit"></i> <i class="btn fas fa-trash-alt" style="color:red"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>219</td>
                                                            <td>Alexander Pierce</td>
                                                            <td>11-7-2014</td>
                                                            <td><span class="tag tag-warning">Pending</span></td>
                                                            <td><i class="btn fas fa-edit"></i> <i class="btn fas fa-trash-alt" style="color:red"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>657</td>
                                                            <td>Bob Doe</td>
                                                            <td>11-7-2014</td>
                                                            <td><span class="tag tag-primary">Approved</span></td>
                                                            <td><a href="" class="btn fas fa-edit"></a> <i class="btn fas fa-trash-alt" style="color:red"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>175</td>
                                                            <td>Mike Doe</td>
                                                            <td>11-7-2014</td>
                                                            <td><span class="tag tag-danger">Denied</span></td>
                                                            <td><a href="" class="btn fas fa-edit"></a> <a href="" class="btn fas fa-trash-alt" style="color:red"></a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                   

                                <!-- /.card -->

                                <!-- STACKED BAR CHART -->


                                <!--</div> -->


                            </div>


                        </div>






                        <!-- /.card -->

                        <!-- STACKED BAR CHART -->

                        <!-- ./col -->
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