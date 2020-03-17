<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ) ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php wp_head(); ?>

  <title>Cursos Abertos - Ifes</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="/estilo.css">

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-96660984-4"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-96660984-4');
  </script>
</head>

<body <?php body_class(); ?>>

<header>

  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="http://ifes.edu.br"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_ifes_topo.png" alt="Instituto Federal do Espírito Santo"></a>
      <a class="navbar-brand-mooc" href="#topo">Cursos abertos</a>
      <button class="navbar-hamburg" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/hamburg.svg" alt="Instituto Federal do Espírito Santo"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mr-auto w-100 justify-content-end">
            <li class="nav-item active">
              <a class="nav-link" href="#navbar">Home</a>
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
            <!-- wp_nav_menu(array('theme_location' => 'header-menu' ) ); ?-->            

    </div>
  </nav>
</header>