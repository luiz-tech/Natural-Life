<?php include("header.php"); ?>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>Natural</b>Life</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Oba ! Hora de logar e desfrutar de nossos serviços</p>

      <form action="home-controller.php" method="POST">
          <input type="hidden" name="metodo" value="login"/>
          
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Informe seu melhor e-mail">
          <div class="input-group-append">
            <div class="input-group-text">
              <i class="fa fa-envelope-o" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="senha" class="form-control" placeholder="Informe sua Senha">
          <div class="input-group-append">
            <div class="input-group-text">
              <i class="fa fa-key" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="col-12 social-auth-links text-center mb-3">
        <p>Você também pode usar sua conta Google+</p>
        <!-- a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a -->
        <div class="g-signin2" data-onsuccess="onSignIn"></div>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <!-- a href="forgot-password.html">Recuperar Acesso</a -->
      </p>
      <p class="mb-0">
        <a href="register.php" class="text-center">Não é cadastrado ? Cadastre -se Aqui</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->



<div id="nosession" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 id="title" class="modal-title">Humm acho que você foi descuidado(a)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="text">Suas credenciais (email ou senha) não estão de acordo com o que consta em nosso sistema. Pense com calma !
        <br>
        Se ainda  tiver problemas, contate-nos com uma DM no instagram <a href="https://www.instagram.com/urbaniff22.ambiental.campos/" target="_blanck">Por aqui</a></p>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" class="close" data-dismiss="modal">Entendi</button>
      </div>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="adminlte/dist/js/adminlte.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- API GoogLE OAuth-->
<script src="https://apis.google.com/js/platform.js" async defer></script>

<script type="text/javascript">
    function onSignIn(googleUser) {
    
    //configuração das varáveis
      var profile = googleUser.getBasicProfile();
      var userId = profile.getId(); // Do not send to your backend! Use an ID token instead.
      var userName = profile.getName();
      var userImage = profile.getImageUrl();
      var userEmail = profile.getEmail(); // This is null if the 'email' scope is not present.
    
    console.log("Peeguei os dados da conta google de: "+userName+" de ID => "+userId );
    //preparando array de dados para envio via POST
      var dados = {
          "id": userId,
          "nome": userName,
          "email": userEmail,
          "imagem": userImage,
          
          "metodo": "login-google"
      };
    
        if(userId == null){
            //aviso de erro
            swal({
              title: "Ops...Usuário não encontrado",
              text: "Esse usuário não possui uma conta Google ! Cadastre -se e obtenha acesso!",
              icon: "danger",
              button: "Entendi"
          });
          
        } else {
            //continue à validar
            $.post("home-controller.php", dados, function(response){
                
               console.log("Requisição AJAX realizada com sucesso e obteve uma resposta:\n "+response);
                
                //validação da resposta e tomada de decisão
                switch(response)
                {
                    case "200":
                        swal({
                            title: "Yeap ! Usuário "+dados.nome+" foi autenticado",
                            text: "Seu usuário foi autenticado automaticamente pelo nosso sistema através da conta Google de: "+dados.nome,
                            icon: "success",
                            buttons: {
                                
                                //mesmo e-mail
                                "continue": { text:"Usar esse e-mail", value: "continue" },
                                
                                //usar credenciais
                                "change":   { text:"Usar Credenciais", value: "change" },
                            },
                         }) .then((value) => {
                         
                            switch(value)
                            {
                                case "continue":
                                    location.href='loja/?msg=welcome' ;
                                    break;
                                
                                case "change":
                                    swal({
                                        title: "Entendido",
                                        icon: "success",
                                        text: "Entre com suas credenciais pra iniciar sua sessão"
                                    });
                                    break;
                            }
                         
                         });
                        break;
                        
                    case "2":
                        swal({
                            title: "Usuário Inativo",
                            text: "Tentamos autenticar o usuário "+ dados.nome+" por sua conta Google ,mas esse se encontra inativo no sistema",
                            button: "Entendi",
                            icon: "info"
                         });
                        break;
                        
                    case "1":
                        swal({
                            title: "Usuário Não Encontrado",
                            text: "Seu usuário não foi encontrado em nossos dados. Cadastre -se para acessar !",
                            icon: "info",
                            button: "Entendi"
                         });
                        break;
                        
                }
                    
            });
        }
        
    
    }
    
    
</script>


<!---------- SCRIPT DE VERIFICAÇÃO DE VALORES GET -------->
<script type="text/javascript">
    
    var URL = window.location.href ;
    
    if( URL.match(/nosession/) ) 
    {
        swal({
              title: "Ops...Você está sem sessão!",
              text: "Sem problemas ! Basta entrar com suas crenciais ou pelo Google!",
              icon: "warning",
              button: "Entendi"
        });
    }        
</script>

<script type="text/javascript">
    if( window.location.href. match(/success/))
    {
        swal("Insira as credenciais pedidas e vamos nessa !", {
          buttons: { text: "Ótimo Trabalho" },
          timer: 5000,
          title: "Ótimo Trabalho"
        });
    }
</script>