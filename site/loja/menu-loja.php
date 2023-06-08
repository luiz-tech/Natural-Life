<!-- Navbar OK-->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block border-left border-right border-primary">
        <a href="../index.php" class="nav-link">Home</a>
      </li>
      <li data-toggle="modal" data-target="#ajuda" class="nav-item d-none d-sm-inline-block border-left border-right border-primary">
        <a class="nav-link">Ajuda</a>
      </li>
      <li data-toggle="modal" data-target="#sobrenos" class="nav-item d-none d-sm-inline-block border-left border-right border-primary">
        <a href="#" class="nav-link">Sobre Nós</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto border-left border-right border-primary">
      
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown border-right border-primary">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-cart-arrow-down text-success" aria-hidden="true"></i>
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
        
      <!-- ==============================================================================  -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-user" aria-hidden="true"></i>
          <span class="badge badge-warning navbar-badge"><i class="text-white fa fa-bell" aria-hidden="true"></i></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header"><?php echo $_SESSION['nome']; ?></span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-id-card" aria-hidden="true"></i> <b>CPF:</b> <?php echo $_SESSION['cpf']; ?>
            <span class="float-right text-muted text-sm"></span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-phone" aria-hidden="true"></i> <b>Telefone:</b> <?php echo $_SESSION['telefone']; ?>
            <span class="float-right text-muted text-sm"></span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-user-plus" aria-hidden="true"></i> <b>Nível:</b>
            <?php 
                switch($_SESSION['nivel'])
                {
                    case "A":
                        echo " Administrador";
                        break;
                    
                    case "C":
                        echo " Cliente";
                        break;
                }
            
            ?>
            <span class="float-right text-muted text-sm"></span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="" class="dropdown-item dropdown-footer">Editar Meu Perfil <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container OK -->
  <aside style="background-color:#05031b;" class="main-sidebar sidebar-dark-primary elevation-4">
   
    <a href="../index.php" class="brand-link">
      <img src="../imagens/logo.png" alt="Ferrameta" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Natural<b>Life</b></span>
    </a>

    <div class="sidebar">

      <!--Área do Usuário -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex text-center">
        <div class="image">
          <img src="adminlte/dist/img/avatar.png" class="img-circle elevation-2">
        </div>
        <div class="info">
          <a href="" class="d-block text-light"><?php $nome = explode(" ",$_SESSION['nome']); echo $nome[0]." ".$nome[1]." ".$nome[2] ?></a>
        </div>
      </div >


      <!-- Listas das opções do menu lateral-->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-shopping-basket" aria-hidden="true"></i>
              <p>
                Produtos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fa fa-bolt" aria-hidden="true"></i>
                  <p>Suplementos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fa fa-recycle" aria-hidden="true"></i>
                  <p>Guarda-Roupas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fa fa-coffee" aria-hidden="true"></i>
                  <p>Alimentação</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a onClick="exit();" class="nav-link">
              <i class="fa fa-power-off text-danger" aria-hidden="true"></i>
              <p>Sair</p>
            </a>
          </li>
          <inpu type="hidden" id="session_nome" value="<?php echo $_SESSION['nome']; ?>">
          <script type="text/javascript">
              function exit()
              { 
                  var nome = document.getElementById("session_nome").value;
                  
                  var dados = { "nome": nome, "metodo": "sair"};
                  
                  $.post('../home-controller.php', dados , function(response){
                     
                     console.log(response);
                     if(response == "200"){
                         location.href = "../index.php";
                     } else {
                         alert("ERRO");
                     }
                      
                  });
              }
          </script>
          
        </ul>

    </div>

  </aside >
  
 <div id="welcome-store" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Olá, <?php echo $_SESSION['nome'];?> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>É muito bom ter você conosco aqui ! Fique à vontade pra desfrutar e aproveitar da
        nossa loja e de nossos conteúdos !</p>
        
        <p>Ah ! Uma dica: Se precisar falar com um de nossos atendentes, deixamos nosso link do
        instagram pra que você possa entrar e nos mandar uma mensagem. Tá bom ?</p>
      </div>
      <div class="modal-footer">
        <button role="button" class="btn btn-info" href="https://www.instagram.com/urbaniff22.ambiental.campos/">Fale Conosco <i class="fa fa-phone" aria-hidden="true"></i></button>
        <button type="button" class="btn btn-success" class="close" data-dismiss="modal" onClick="window.location.href = window.location.href.replace('?msg=welcome', '?');">Não, Obrigado(a) <i class="fa fa-thumbs-o-up text-info" aria-hidden="true"></i></button>
      </div>
    </div>
  </div>
</div>

<div id="ajuda" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Em que podemos ajudar ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Assista o vídeo tutorial abaixo. Caso ainda esteje com dúvidas. Mande -nos uma mensagem</p>
        
        <video class="container-fluid" width="400" height="400" controls>
          <source src="imagens/tutorial.mp4" type="video/mp4">
        </video>
        
      </div>
      <div class="modal-footer">
        <a role="button" class="btn btn-info" href="https://www.instagram.com/urbaniff22.ambiental.campos/">Fale Conosco <i class="fa fa-instagram" aria-hidden="true"></i></a>
        <button type="button" class="btn btn-success" class="close" data-dismiss="modal">Entendi</button>
      </div>
    </div>
  </div>
</div>


<div id="welcome-store" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Olá, <?php $_SESSION['nome'];?> ! Seja Bem-Vindo(a) !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>É muito bom ter você conosco aqui ! Fique à vontade pra desfrutar e aproveitar da
        nossa loja e de nossos conteúdos !</p>
        
        <p>Ah ! Uma dica: Se precisar falar com um de nossos atendentes, deixamos nosso link do
        instagram pra que você possa entrar e nos mandar uma mensagem. Tá bom ?</p>
      </div>
      <div class="modal-footer">
        <a role="button" class="btn btn-info" href="https://www.instagram.com/urbaniff22.ambiental.campos/">Fale Conosco <i class="fa fa-instagram" aria-hidden="true"></i></a>
        <button type="button" class="btn btn-success" class="close" data-dismiss="modal" onClick="window.location.href = window.location.href.replace('?msg=welcome', '?');">Não, Obrigado(a) <i class="fa fa-thumbs-o-up text-info" aria-hidden="true"></i></button>
      </div>
    </div>
  </div>
</div>