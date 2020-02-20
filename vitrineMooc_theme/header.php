

    <!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/estilo.css">
</head>
<body <?php body_class(); ?>>

<header>



<nav class="navbar navbar-expand-md">
      <div class="container">
              <img class="navbar-brand topo-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_ifes_topo.png"/>
               <a class="navbar-brand topo-logo" href="<?php echo get_site_url(); ?>">CURSOS ABERTOS</a>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Menu Principal">
                  <span class="icon-bar"></span>
                  <span class="icon-bar mt-04"></span>
                  <span class="icon-bar mt-04"></span>
              </button>
              <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            </div>
      </div>

    </nav>
 </header>