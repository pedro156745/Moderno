<?php require_once dirname(__DIR__,2) . '/resource/dataview/Usuario-dataview.php' ?>

<!DOCTYPE html>
<html>

<head>
    <?php
    require_once PATH_URL . "/template/_includes/_head.php";
    ?>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            Login Usuário
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Faça seu acesso</p>

                <form action="login.php" method="post" id="form_login">
                    <div class="input-group mb-3">
                        <input name="login" id="login" class="form-control obg" placeholder="E-mail" value="<?= isset($_POST['login']) ? $_POST['login'] : '' ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="senha" id="senha" type="password" class="form-control obg" placeholder="Senha">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-4">
                            <button name="btn_acessar" class="btn btn-primary btn-block" onclick="return Notificar('form_login')">Acessar</button>
                        </div>
                       
                        <!-- /.col -->
                    </div>
                   
                </form>
                Não possui cadastro?<a href="cadastrar_usuario.php">Clique Aqui</a>



            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
    <?php
    include_once PATH_URL . "/template/_includes/scripts.php";
    include_once PATH_URL . "/template/_includes/_msg.php";
    ?>

<script src="../resource/ajax/funcionario-ajx.js"></script>

</body>

</html>