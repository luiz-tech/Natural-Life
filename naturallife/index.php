<?php include("header.php")?>

  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-white">
        <a class="navbar-brand" href="#">NaturalLife <i class="fa fa-pagelines text-success" aria-hidden="true"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto ">
            <li class="nav-item border-right order-success">
              <a class="nav-link text-primary" href="login.php">Lojinha</a>
            </li>
            <li class="nav-item border-right order-success">
              <a class="nav-link text-primary" href="educacao_ambiental/">Projeto Ambiental</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <a role="button" href="login.php" class="btn btn-outline-success my-2 my-sm-0">Entrar</a>
          </form>
        </div>
      </nav>
    </header>

    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="imagens/slide1.png" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Seja Bem-vindo(a)!</h1>
                <p>Olá! Seja bem-vindo(a) ao nosso site. Sinta -se à vontade para usufruir
                de nosso conteúdo, interativdade e, claro, nossos produtos  imperdivéis.</p>
                <p><a class="btn btn-lg btn-primary" href="https://www.instagram.com/urbaniff22.ambiental.campos/" role="button">Siga -nos <i class="fa fa-instagram" aria-hidden="true"></i></a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="imagens/slide2.png" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Ei! Você sabe como está a situação ambiental ao seu redor?</h1>
                <p>Não? Então fique tranquilo(a)! Aqui você descobrirá muitos dos problemas urbanos que
                podem estar ocorrendo pertinho de você e o mais importante é que você saberá 
                como evitá-los.</p>
                <p><a class="btn btn-lg btn-primary" href="educacao_ambiental/" role="button">Descobrir <i class="fa fa-search" aria-hidden="true"></i></a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="imagens/slide3.png" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1 class="text-dark">Tá sabendo da novidade?</h1>
                <p class="text-secondary">Inalguramos uma lojinha de produtos naturais, sustentáveis e  amigos do planeta Terra.
                 Aqui você encontra produtos exclusivos e de alta qualidade!</p>
                <p><a class="btn btn-lg btn-primary" href="loja/" role="button">Dê uma olhada <i class="fa fa-shopping-bag" aria-hidden="true"></i></a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            
          <div class="col-lg-4 transparencia-success">
            <img class="rounded-circle" src="data:image/jpeg;base64,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" alt="Generic placeholder image" width="140" height="140">
            <h2>Saúde</h2>
            <p class="text-justify" >Seguindo essa linha mais abrangente, a Organização Mundial da Saúde (OMS), em 1946, 
            definiu saúde como um estado de completo bem-estar físico, mental e social, e não apenas
            como a ausência de doença ou enfermidade. A percepção do conceito de qualidade de vida também
            tem muitos pontos em comum com a definição de saúde.</p>
          </div><!-- /.col-lg-4 -->
          
          <div class="col-lg-4 transparencia-success">
            <img class="rounded-circle" src="data:image/jpeg;base64,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" alt="Generic placeholder image" width="140" height="140">
            <h2>Boa Alimentação</h2>
            <p class="text-justify" >Se alimentar de forma saudável e equilibrada é essencial 
            para garantir qualidade de vida. Isso porque, além de fornecer
            energia e bem-estar geral, através de uma boa alimentação é
            possível prevenir e combater doenças, manter o peso corporal 
            saudável e ter um bom desenvolvimento físico.</p>
          </div><!-- /.col-lg-4 -->
          
          <div class="col-lg-4 transparencia-success">
            <img class="rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzDYs9yhnYS8vpWXZfC5u7vCKINSzXORda5w&usqp=CAU" alt="Generic placeholder image" width="140" height="140">
            <h2>Qualidade de Vida</h2>
            <p class="text-justify" >Qualidade de vida indica o nível das condições básicas e 
            suplementares do ser humano. Estas condições envolvem desde 
            o bem-estar físico, mental, psicológico e emocional, os relacionamentos 
            sociais, como família e amigos, e também a saúde, a educação e
            outros parâmetros que afetam a vida humana.</p>
          </div><!-- /.col-lg-4 -->
          
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class=" transparencia-success row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Saúde</h2>
            <span class=" font-italic text-muted">
                <h4>Com certeza nosso bem <i class="fa fa-plus" aria-hidden="true"></i> precisoso</h4>
            </span>
            <p class="lead">Nos últimos dias, tem estado difícil manter a saúde e boa forma.
            Sempre estamos cheios de compromissos que urgem por nossa atenção e muitas vezes
            nos vemos em situações em que violamos nosso sagrado corpo de 1001 maneiras, incluindo
            evitar cuidar de si mesmo. Nosso objetivo é te dar orientações sobre esse assunto para
            que <b class="text-info">você tenha mais saúde e saúde em abundância.</b></p>
          </div>
          <div class="col-md-5">
              <img width=500 height=500 class="transparencia img-circle featurette-image img-fluid mx-auto mb-1" src="imagens/moca-deitada-na-grama.png">
              <img width=500 height=500 class="transparencia img-circle featurette-image img-fluid mx-auto mt-1" src="http://abreucardiologia.com.br/wp-content/uploads/2020/04/check-up-saude-do-coracao-1579176464276_v2_1920x1083.jpg">
          </div> 
        </div>

        <hr class="featurette-divider">

        <div class="transparencia-success row featurette">
          <div class="col-md-7 order-md-2 text-right">
            <h2 class="featurette-heading">Boa Alimentação</h2>
            <span class=" font-italic text-muted"><h4>É importante colocar o combustível correto !</h4></span>
            <p class="lead">Nosso corpo é uma plena usina bioquímica funcional capaz de realizar
            das mais brutas e violentas ações até as mais exatas reações químicas cirurgicamente
            balanceadas a fim de manter-nos de pé em plena atvidade. Com isso, portanto, é nescessário
            que haja um combustível adequado para que tal mecanismo funcione e se desenvolva corretamente.
            .</p>
            <p class="lead">Muito se fala em dieta A, B, C e até Z. Mas ao lembrar que cada ser vivo sobre a Terra é
            único e excluisvamente único, é indispensável, dessa forma, que além dos tratamentos das diversas
            enfermidades que hoje se fazem presentes, façamos nossa parte procurando o melhor combustível para
            continuar na estrada da vida - visto que  grande parte das doenças atuais são provenientes de distúrbios
            limentar</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img width=500 height=500 class="transparencia img-circle featurette-image img-fluid mx-auto mb-1" src="https://redepara.com.br/imagens/galeria/118801/thumbs/0c545841aa8d4eab98c011437cc930e2.jpg" alt="Generic placeholder image">
            <img width=500 height=500 class=" transparencia img-circle featurette-image img-fluid mx-auto mt-2" src="https://static.todamateria.com.br/upload/al/im/alimentacaosaudauvel.jpg" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="transparencia-success row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Qualidade de Vida</h2>
            <span class=" font-italic text-muted"><h4>Coisa que o dinheiro não compra !</span>            
            <p class="lead">Possuir bens, dinheiro, fama não são de nada se você não tem sossego e tranqilidade
            . Quando uma pessoa  vem a falecer, tudo isso perde o significado e o que valeu, no fim, foi o momento vivido,
            sobretudo, a qualidade desse momento. Todas as medididas de cuidado alimentar são possíveis para todos. O que 
            propomos e lutamos é para que isso seja ainda mais acesível a você que busca viver mais e melhor e ao mesmo tempo 
            usar da natureza de forma justa, digna e honesta; afinal ela é nosso lar.</p>
          </div>
          <div class="col-md-5">
            <img width=500 height=500 class="transparencia img-circle featurette-image img-fluid mx-auto" src="https://cebds.org/wp-content/uploads/2021/01/cebds.org-para-entender-as-solucoes-baseadas-na-natureza-nature.jpeg">
            <img width=500 height=500 class="transparencia img-circle featurette-image img-fluid mx-auto" src="imagens/qualidade-de-vida.jpg">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


     
    </main>

  <?php include("footer.php"); ?>
  </body>
</html>
