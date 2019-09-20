<?php
          $curlHandler = curl_init();

          $userName = 'integracao-mooc';

          $password = '123';

          curl_setopt_array($curlHandler, [

              CURLOPT_URL => 'http://troia.cefor.cefetes.br:8082/mooc-api/buscar-quantidade-matriculas',

              CURLOPT_RETURNTRANSFER => true,

              CURLOPT_HTTPAUTH => CURLAUTH_BASIC,

              CURLOPT_USERPWD => $userName . ':' . $password,

          ]);

          $response = curl_exec($curlHandler);

          $obj = json_decode($response);

          

          curl_close($curlHandler);

        ?>

<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="estilo.css">

    <title>Cursos Abertos - Ifes</title>


  </head>
  <body>



<header id="topo">
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
    <a class="navbar-brand" href="http://ifes.edu.br"><img src="images/logo_ifes_topo.png"></a>
    <a class="navbar-brand-mooc" href="https://mooc.cefor.ifes.edu.br/moodle/">Cursos abertos</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mr-auto w-100 justify-content-end">
          <li class="nav-item active">
            <a class="nav-link" href="#topo">Home</a>
          </li>          
          <li class="nav-item">
            <a class="nav-link" href="#cursos">Nossos Cursos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#como-funciona">Como Funciona</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#ferramentas">Ferramentas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link entrar" href="#area-do-estudante">Entrar</a>
          </li>

        </ul>
        
      </div>
    </div>
  </nav>
</header>


<div class="hero-image-1">
  <div class="hero-text">
    <p>Totalmente GRATUITOS |  100% ONLINE  |  Certificados Reconhecidos pelo MEC</p>
    <h1 style="font-size:40px">Cursos Abertos do Ifes</h1>
    <h1 style="font-size:50px">O futuro da educação hoje.</h1>
    
    <a class="btn1-b" href="#cursos"> Escolher Curso</a>
  </div>
</div>


<div class="container-fluid" id="cursos">
    <div class="container">
      <div class="top-section">        
        <h2 class="titulo-section2">Nossos Cursos</h2>
      </div>
    
    <div class="row">      
       
      <div class="card-curso">
        <img class="img-curso" src="images/cursos/mooc_drive_colab.png" alt="" >
        <div class="descricao">
          <a class="card-link" href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=11">
          <h6>Google Drive: Colaboração na prática</h6>
          <a href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=11" class=" btn2">Acessar curso</a>
          </a>
        </div>
      </div>

      <div class="card-curso">
        <img class="img-curso" src="images/cursos/curso_validacao.png" alt="" >
        <div class="descricao">
          <a class="card-link" href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=10">
            <h6>Validação de curso MOOC: O curso para a comissão do Cefor. Entre já!</h6>
            <a href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=10" class=" btn2">Acessar curso</a>
          </a>
        </div>
      </div>

      <div class="card-curso">
        <img class="img-curso" src="images/cursos/vitrine_emBreve_ComoCriarMOOC.jpg" alt="" >
        <!--div class="descricao">
          <a class="card-link" href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=10">
            <h6>Validação de curso MOOC: O curso para a comissão do Cefor. Entre já!</h6>
            <a href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=10" class=" btn2">Acessar curso</a>
          </a>
        </div-->
      </div>

      <div class="card-curso">
        <img class="img-curso" src="images/cursos/vitrine_emBreve_FerramentaGravacaoVideo.jpg" alt="" >
        <!--div class="descricao">
          <a class="card-link" href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=10">
            <h6>Validação de curso MOOC: O curso para a comissão do Cefor. Entre já!</h6>
            <a href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=10" class=" btn2">Acessar curso</a>
          </a>
        </div-->
      </div>

      <div class="card-curso">
        <img class="img-curso" src="images/cursos/vitrine_emBreve_InclusaoSociedaddeSmartphone.jpg" alt="" >
        <!--div class="descricao">
          <a class="card-link" href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=10">
            <h6>Validação de curso MOOC: O curso para a comissão do Cefor. Entre já!</h6>
            <a href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=10" class=" btn2">Acessar curso</a>
          </a>
        </div-->
      </div>

      <div class="card-curso">
        <img class="img-curso" src="images/cursos/vitrine_emBreve_LessonStudyEN.jpg" alt="" >
<!--div class="descricao">
          <a class="card-link" href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=10">
            <h6>Validação de curso MOOC: O curso para a comissão do Cefor. Entre já!</h6>
            <a href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=10" class=" btn2">Acessar curso</a>
          </a>
        </div-->
      </div>

      <div class="card-curso">
        <img class="img-curso" src="images/cursos/vitrine_emBreve_LessonStudyPT.jpg" alt="" >
<!--div class="descricao">
          <a class="card-link" href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=10">
            <h6>Validação de curso MOOC: O curso para a comissão do Cefor. Entre já!</h6>
            <a href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=10" class=" btn2">Acessar curso</a>
          </a>
        </div-->
      </div>

      <div class="card-curso">
        <img class="img-curso" src="images/cursos/vitrine_emBreve_MoocLovelace_pensamentoComputacional.jpg" alt="" >
        <!--div class="descricao">
          <a class="card-link" href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=10">
            <h6>Validação de curso MOOC: O curso para a comissão do Cefor. Entre já!</h6>
            <a href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=10" class=" btn2">Acessar curso</a>
          </a>
        </div-->
      </div>

      <div class="card-curso">
        <img class="img-curso" src="images/cursos/vitrine_emBreve_MoocLovelace_ProgramacaoPython.jpg" alt="" >
        <!--div class="descricao">
          <a class="card-link" href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=10">
            <h6>Validação de curso MOOC: O curso para a comissão do Cefor. Entre já!</h6>
            <a href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=10" class=" btn2">Acessar curso</a>
          </a>
        </div-->
      </div>

      <div class="card-curso">
        <img class="img-curso" src="images/cursos/vitrine_emBreve_MoocLovelace_RoboticaEducacional.jpg" alt="" >
        <!--div class="descricao">
          <a class="card-link" href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=10">
            <h6>Validação de curso MOOC: O curso para a comissão do Cefor. Entre já!</h6>
            <a href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=10" class=" btn2">Acessar curso</a>
          </a>
        </div-->
      </div>

      <div class="card-curso">
        <img class="img-curso" src="images/cursos/vitrine_emBreve_Moodlevisaoaluno.jpg" alt="" >
        <!--div class="descricao">
          <a class="card-link" href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=10">
            <h6>Validação de curso MOOC: O curso para a comissão do Cefor. Entre já!</h6>
            <a href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=10" class=" btn2">Acessar curso</a>
          </a>
        </div-->
      </div>

      <div class="card-curso">
        <img class="img-curso" src="images/cursos/vitrine_emBreve_ProgramacaobasicaScratch.jpg" alt="" >
        <!--div class="descricao">
          <a class="card-link" href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=10">
            <h6>Validação de curso MOOC: O curso para a comissão do Cefor. Entre já!</h6>
            <a href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=10" class=" btn2">Acessar curso</a>
          </a>
        </div-->
      </div>

      <div class="card-curso">
        <img class="img-curso" src="images/cursos/vitrine_emBreve_RedacaoCientifica.jpg" alt="" >
        <!--div class="descricao">
          <a class="card-link" href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=10">
            <h6>Validação de curso MOOC: O curso para a comissão do Cefor. Entre já!</h6>
            <a href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=10" class=" btn2">Acessar curso</a>
          </a>
        </div-->
      </div>

      <div class="card-curso">
        <img class="img-curso" src="images/cursos/vitrine_emBreve_RVcomoapoioEnsino.jpg" alt="" >
        <!--div class="descricao">
          <a class="card-link" href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=10">
            <h6>Validação de curso MOOC: O curso para a comissão do Cefor. Entre já!</h6>
            <a href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=10" class=" btn2">Acessar curso</a>
          </a>
        </div-->
      </div>

      <div class="card-curso">
        <img class="img-curso" src="images/cursos/vitrine_emBreve_ScratchApoioMatematica.jpg" alt="" >
        <!--div class="descricao">
          <a class="card-link" href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=10">
            <h6>Validação de curso MOOC: O curso para a comissão do Cefor. Entre já!</h6>
            <a href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=10" class=" btn2">Acessar curso</a>
          </a>
        </div-->
      </div>

      <div class="card-curso">
        <img class="img-curso" src="images/cursos/vitrine_emBreve_Unit.jpg" alt="" >
        <!--div class="descricao">
          <a class="card-link" href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=10">
            <h6>Validação de curso MOOC: O curso para a comissão do Cefor. Entre já!</h6>
            <a href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=10" class=" btn2">Acessar curso</a>
          </a>
        </div-->
      </div>

      <div class="card-curso">
        <img class="img-curso" src="images/cursos/vitrine_emBreve_UsoEducacionalCanva.jpg" alt="" >
        <!--div class="descricao">
          <a class="card-link" href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=10">
            <h6>Validação de curso MOOC: O curso para a comissão do Cefor. Entre já!</h6>
            <a href="https://mooc.cefor.ifes.edu.br/moodle/course/view.php?id=10" class=" btn2">Acessar curso</a>
          </a>
        </div-->
      </div>

    </div>
  </div>

</div>

<div class="container-fluid" id="matriculados">
    <div class="container">
      <h3> Junte-se aos <strong><span class="count"><?php echo $obj->{'quantidade'}?> </span> alunos</strong> matriculados em nossa plataforma! </h3>
    </div>
</div>

<div class="hero-image-2">
  <div class="hero-text">
    <p>Reconecte-se com o saber.</p>
    <h1 style="font-size:40px">Cursos Abertos do Ifes</h1>
    <h1 style="font-size:50px">O futuro da educação hoje.</h1>
    
    <button>CRIAR CONTA</button>
  </div>
</div>

<div class="container-fluid" id="como-funciona">
  <div class="container" >

    <div class="top-section">
           <h2 class="titulo-section">O que é?</h2>
      </div>
      
      <div class="mooc">


        <p>Os <strong>Cursos Abertos do Ifes</strong> seguem a tendência mundial na oferta de cursos 100% online, no formato <strong>Mooc</strong> (do inglês, Massive open online courses).</p>

        São cursos:
        <ul>

        
          <li> Totalmente <strong>gratuitos e sem tutoria</strong></li>
          <li> <strong>Abertos</strong> porque você só precisa se inscrever e cursar, sem passar por processo seletivo</li>
          <li> <strong>Certificados pelo Ifes</strong> após aproveitamento mínimo de 60% do curso</li>
          <li> Possuem carga horária máxima de 60 (sessenta) horas</li>
          <li> Do seu jeito, <strong>você escolhe</strong> a melhor hora e lugar para estudar</li>
        </ul>

      </div>


     
      <div class="top-section">
          <h2 class="titulo-section">Como Funciona</h2>
      </div>

      

      <div class="row">
        <div class="card-howTo">
          <img class="icone1" src="images/icones/perfil.png" alt="Cadastre-se">
          <h6>Cadastre-se</h6>
          <p> Crie sua conta agora mesmo. Você terá acesso a todos os cursos oferecidos na Plataforma do Ifes por meio de smartphone, tablet ou computador.</p>
          <a class="btn1" href="https://mooc.cefor.ifes.edu.br/moodle/login/index.php">CRIAR CONTA</a>
        </div>

        <div class="card-howTo">
          <img class="icone1" src="images/icones/curso.png" alt="curso">
          <h6>Escolha o Curso</h6>
          <p> É hora de se reconectar com o saber. Escolha um dos Cursos Abertos do Ifes e amplie seus conhecimentos. </p>
          <a class="btn1" href="#cursos">ESCOLHER O CURSO</a>
        </div>

        <div class="card-howTo">
          <img class="icone1" src="images/icones/organize.png" alt="organização">
          <h6>Faça o curso</h6>
          <p> Estudar sozinho tem vantagens como escolher seu próprio horário para cumprir o prazo do curso. Então, organize sua rotina de estudos e bom curso!<p>
        </div>

        <div class="card-howTo">
          <img class="icone1" src="images/icones/certificado.png" alt="Certificado">
          <h6>Emita seu certificado</h6>
          <p> Ao final de cada curso, após sua aprovação, você poderá emitir seu próprio Certificado na Plataforma dos Cursos Abertos do Ifes.</p>
        </div>
      </div>

  </div>
</div>

<div class="hero-image-3">
  <div class="hero-text">
    <p>O curso da sua vida é você quem faz.</p>
    <h1 style="font-size:40px">Cursos Abertos do Ifes</h1>
    <h1 style="font-size:50px">O futuro da educação hoje.</h1>
    
    <button>Escolher Curso</button>
  </div>
</div>

<div class="container-fluid" id="ferramentas">
  <div class="container" >
      <div class="top-section">
          <h2 class="titulo-section2">Ferramentas</h2>
      </div>
      
      <div class="row">
        
        <div class="card-tools">
          <img class="icone2" src="images/icones/video.png" alt="Vídeos">
          <p> <strong>Vídeos</strong> são o coração dos Cursos Abertos do Ifes. Você aprende com aulas curtas, preparadas por educadores altamente qualificados.</p>
        </div>
        <div class="card-tools">
          <img class="icone2" src="images/icones/forum.png" alt="fórum">
          <p> <strong>Fóruns</strong> são espaços para interação com colegas de curso. Você pode construir trabalhos de modo colaborativo e compartilhado.</p>
        </div>
        <div class="card-tools">
          <img class="icone2" src="images/icones/caderno.png" alt="Cadernos">
          <p> <strong>Materiais Textuais</strong> são arquivos digitais para leitura. Você tem acesso a conteúdos atualizados, no formato de livros, artigos e afins.</p>
        </div>
        <div class="card-tools">
          <img class="icone2" src="images/icones/podcast.png" alt="Podcast">
          <p> <strong>Outras mídias</strong> podem ser utilizadas nos cursos, como podcasts, ilustrações e páginas web que contribuem para o seu jeito de estudar.</p>
        </div>
        
    </div>
  </div>
</div>

<div class="hero-image-4">
  <div class="hero-text">
    <p>Cursos Mooc do Ifes + Você = Transformação para o futuro</p>
    <h1 style="font-size:40px">Cursos Abertos do Ifes</h1>
    <h1 style="font-size:50px">O futuro da educação hoje.</h1>
    
  </div>
</div>

<div class="container-fluid" id="area-do-estudante">
  <div class="container">       
    <div class="top-section">
          <h2 class="titulo-section2">Área do estudante</h2>
      </div>
    <div class="row">
      <div class="col-sm um">
        <h5>Esta é a sua primeira vez aqui?</h5>
        <p>Crie seu perfil e seja bem-vindo à Plataforma de Cursos Abertos do Ifes.</p>
        <p>A cada curso, mais conhecimento. Quanto melhor o conhecimento, maior a transformação.</p>
    

        <a class="btn1" href="https://mooc.cefor.ifes.edu.br/moodle/login/signup.php?">CRIAR MINHA CONTA</a><br>
      </div>
      
      <div class="col-sm dois text-center">
        <h5>Já possui uma conta?</h5>
        <P>Use seu login e senha para acessar a Plataforma de Cursos Abertos do Ifes.</P>
        <form  class="loginVitrine text-left" name="login" method="post" action="https://mooc.cefor.ifes.edu.br/moodle/login/index.php">
          <div class="form-group">
            <label for="formGroupExampleInput">Nome de usuário:</label>
            <input type="text" class="form-control" id="useLogin" placeholder="Usuário" name="username">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Senha:</label>
            <input type="password" class="form-control" id="passwordLogin" placeholder="Senha" name="password">
          </div>

          <button class="btn1-b" name="submit" value="login" type="submit">ENTRAR</button>
        </form>
      </div>
    </div>



  


  </div>
</div>



<footer>
  <div class="container">
    <div class="row">

      <div class="col-md-4 site-map">
        <h5 class="titulo-rodape"> Cursos Abertos</h5>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><a href="#">Validar Certificado</a></li>
          <li class="list-group-item"><a href="#">Perguntas Frequentes</a></li>
          <li class="list-group-item"><a href="#">Termos de Uso</a></li>
          <li class="list-group-item"><a href="#">Política de Privacidade</a></li>
        </ul>
      </div>

      <div class="col-md-4 site-map">
        <h5 class="titulo-rodape">Institucional</h5>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><a href="http://ifes.edu.br" target="new">O IFES</a></li>
          <li class="list-group-item"><a href="http://cefor.ifes.edu.br" target="new">O CEFOR</a></li>
          <li class="list-group-item"><a href="http://conhecimento.cefor.ifes.edu.br" target="new">Base de Conhecimento</a></li>
          <li class="list-group-item"><a href="#">Política de Privacidade</a></li>
        </ul>
      </div>

      <div class="col-md-4">
        
        <a class="logo-cefor-footer" href="http://cefor.ifes.edu.br"><img src="images/logo_ifes_cefor.svg"> </a>
        
      </div>

    </div>

  </div>



</footer>

   
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
   

    <script>
        // Select all links with hashes
        $('a[href*="#"]')
          // Remove links that don't actually link to anything
          .not('[href="#"]')
          .not('[href="#0"]')
          .not('[href="#carousel"]') // remover carousel da rolagem 
          .click(function(event) {
            // On-page links
            if (
              location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
              && 
              location.hostname == this.hostname
            ) {
              // Figure out element to scroll to
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
              // Does a scroll target exist?
              if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                  scrollTop: target.offset().top
                }, 800, function() {
                  // Callback after animation
                  // Must change focus!
                  var $target = $(target);
                  $target.focus();
                  if ($target.is(":focus")) { // Checking if the target was focused
                    return false;
                  } else {
                    $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                    $target.focus(); // Set focus again
                  };
                });
              }
            }
          });

    </script>

    <script type="text/javascript">
      
      $(".jumbotron").css({ height: $(window).height() + "px" });

$(window).on("resize", function() {
  $(".jumbotron").css({ height: $(window).height() + "px" });
});

    </script>

  </body>
</html>
