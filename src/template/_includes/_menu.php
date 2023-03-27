
<?php require_once dirname(__DIR__, 2) . '/resource/dataview/Produto-dataview.php';



use Src\_public\Util;

if(isset($_GET['close']) && $_GET['close'] == 1){
  Util::Deslogar();
}

?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="../../index3.html" class="brand-link">
    <img src="../../template/dist/img/coringa.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../../template/dist/img/lord.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?=Util::NomeLogado() ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">

            <i class="nav-icon fas fa-solid fa-money-bill"></i>

            <p>
              Gestão financeira
              <i class="fas fa-angle-left right"></i>

            </p>


          </a>
          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="dashboard.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Controle</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="conta.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Conta</p>
              </a>
            </li>

          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">

            <i class="nav-icon fas fa-solid fa-building"></i>

            <p>
              Empresa
              <i class="fas fa-angle-left right"></i>

            </p>


          </a>
          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="gerenciar_empresa.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Cadastrar Empresa</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="conta.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Conta</p>
              </a>
            </li>

          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">

            <i class="nav-icon fas solid fa-briefcase"></i>

            <p>
              Fornecedores
              <i class="fas fa-angle-left right"></i>

            </p>
          </a>
          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="gerenciar_fornecedores.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Gerenciar Fornecedores</p>
              </a>
            </li>

          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cart-arrow-down"></i>


            <p>
              Vendas
              <i class="fas fa-angle-left right"></i>

            </p>
          </a>
          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="vendas.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Gerenciar suas vendas</p>

              </a>
            </li>

          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-box"></i>


            <p>
              Estoque
              <i class="fas fa-angle-left right"></i>

            </p>
          </a>
          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="produtos.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Produto</p>

              </a>
            </li>
            <li class="nav-item">
              <a href="categorias_produtos.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Categoria do Produto</p>

              </a>
            </li>



          </ul>

        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>


            <p>
              Usuarios
              <i class="fas fa-angle-left right"></i>

            </p>
          </a>
          <ul class="nav nav-treeview">


            <li class="nav-item">
              <a href="../../view/admin/novo_usuario.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Cadastrar Usuarios</p>

              </a>
            </li>
            <li class="nav-item">
              <a href="usuarios.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Usuarios Ativos</p>

              </a>
            </li>

            <li class="nav-item">
              <a href="usuarios.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Usuarios Inativos</p>

              </a>
            </li>

          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="cadastro_contatos.php" class="nav-link">
            <i class="nav-icon fas fa-solid fa-phone"></i>
            <p>
              Contatos
            </p>
          </a>

        </li>

        <li class="nav-item has-treeview">
          <a href="../../template/_includes/_menu.php?close=1" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              Sair

            </p>
          </a>

        </li>

    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>