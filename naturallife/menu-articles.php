<!-- Navbar OK-->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('home')}}" class="nav-link">Home</a>
      </li>
       <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link" data-target="#help" data-toggle="modal">Ajuda</a>
      </li>
       <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link" data-target="#contato" data-toggle="modal">Sobre Nós</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
    
            <div class="media">
              <img src="../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
 
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
     
            <div class="media">
              <img src="../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
     
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
       
            <div class="media">
              <img src="../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
      
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
    
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container OK -->
  <aside style="background-color:#05031b;" class="main-sidebar sidebar-dark-primary elevation-4">
   
    <a href="#" class="brand-link">
      <img src="../imagens/logo.png" alt="Ferrameta" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Natural<b>Life</b></span>
    </a>


    <div class="sidebar">

      <!-- Área do Usuário>
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="adminlte/dist/img/avatar.png" class="img-circle elevation-2">
        </div>
        <div class="info">
          <a href="" class="d-block text-light"></a>
        </div>
      </div -->


      <!-- Listas das opções do menu lateral-->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
              <p>
                Produtos <span class="badge badge-pill badge-danger">New</span>
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fa fa-cutlery" aria-hidden="true"></i>
                  <p>Alimentação</p>
                </a>
              </li>
              
              
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fa fa-medkit" aria-hidden="true"></i>
                  <p>Saúde e Beleza</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fa fa-bolt" aria-hidden="true"></i>
                  <p>Suplementação</p>
                </a>
              </li>
            
              <!--li class="nav-item">
                <a href="../index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li-->
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-suitcase" aria-hidden="true"></i>
              <p>
                Produtos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('novoProduto') }}" class="nav-link">
                  <i class="fa fa-plus" aria-hidden="true"></i>
                  <p>Novo Produto</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('formpesquisaProduto') }}" class="nav-link">
                  <i class="fa fa-search" aria-hidden="true"></i>
                  <p>Pesquisar</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="{{ route('logout')}}" class="nav-link">
              <i class="fa fa-power-off text-danger" aria-hidden="true"></i>
              <p>Sair</p>
            </a>
          </li>
        </ul>

    </div>

  </aside >