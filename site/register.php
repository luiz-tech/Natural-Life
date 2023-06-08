<?php include("header.php"); ?>

<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="naturallife/"><b>Natural</b>Life</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Cadastre -se você mesmo para ter acesso aos nossos serviços</p>

      <form action="home-controller.php" method="POST">
        <input type="hidden" name="metodo" value="autocadastro"/>
                
        <div class="input-group mb-3">
          <input required name="nome" class="form-control" placeholder="Informe seu nome completo">
          <div class="input-group-append">
            <div class="input-group-text">
              <i class="fa fa-user-circle" aria-hidden="true"></i>  
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input required name="email" type="email" class="form-control" placeholder="Informe seu e-mail">
          <div class="input-group-append">
            <div class="input-group-text">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="senha" placeholder="Informe sua Senha">
          <div class="input-group-append">
            <div class="input-group-text">
              <i class="fa fa-unlock-alt" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <!-- div class="input-group mb-3">
          <input type="password" class="form-control" name="senha" placeholder="Reescreva a senha acima">
          <div class="input-group-append">
            <div class="input-group-text">
              <i class="fa fa-unlock-alt" aria-hidden="true"></i>
            </div>
          </div>
        </div -->
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="cpf" placeholder="Informe seu CPF">
          <div class="input-group-append">
            <div class="input-group-text">
              <i class="fa fa-list-alt" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="number" class="form-control" name="telefone" placeholder="Informe um telefone para contato">
          <div class="input-group-append">
            <div class="input-group-text">
              <i class="fa fa-phone" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="icheck-primary">
              <input required type="checkbox" id="agreeTerms" name="termos" value="agree">
              <label for="agreeTerms">
               Aceito os termos de privacidade<a href="#">Termos</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-12">
            <button id="btn" type="submit" class="btn btn-primary btn-block">Cadastrar -me</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


      <a role="button" href="login.html" class="text-center btn btn-outline-success">Já sou membro</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="adminlte/dist/js/adminlte.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
    if( window.location.href. match(/founded/))
    {
        swal("Esse usuário já consta na base de dados. Vá para o Login !", {
          buttons: { text: "Entendi" },
          timer: 5000,
          title: "Calma, sabemos que você está animado !"
        });
    }
    
</script>

</body>