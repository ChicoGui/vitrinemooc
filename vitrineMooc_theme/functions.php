<?php

wp_enqueue_style( 'estilo', get_template_directory_uri() . '/estilo.css');

function register_menuPrincipal() {
  register_nav_menu('header-menu',__( 'Menu Principal' ));
}
add_action( 'init', 'register_menuPrincipal' );

add_theme_support( 'post-thumbnails' ); 

/*----------------------------------------------------------------------------------------
CRIAÇÃO DE CUSTOM POST TYPES
----------------------------------------------------------------------------------------*/

// Register Custom Post Type
function banner_post_type() {

	$labels = array(
		'name'                  => _x( 'banners', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'banner', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Banner', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'todos os banners', 'text_domain' ),
		'add_new_item'          => __( 'Add novo banner', 'text_domain' ),
		'add_new'               => __( 'novo banner', 'text_domain' ),
		'new_item'              => __( 'novo banner', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'não encontrato', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'banner', 'text_domain' ),
		'description'           => __( 'banner full width', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'banner_post_type', $args );

}
add_action( 'init', 'banner_post_type', 0 );


// Register Custom Post Type
function howTo_post_type() {

    $labels = array(
        'name'                  => _x( 'Como Funciona', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Como Funciona', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Como Funciona', 'text_domain' ),
        'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'todos os cards', 'text_domain' ),
        'add_new_item'          => __( 'Add novo card', 'text_domain' ),
        'add_new'               => __( 'novo card', 'text_domain' ),
        'new_item'              => __( 'novo card', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'não encontrato', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Como Funciona', 'text_domain' ),
        'description'           => __( 'Como Funciona', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'howTo_post_type', $args );

}
add_action( 'init', 'howTo_post_type', 0 );

//--------------------------------------------------------------------

// Register Custom Post Type
function faq_post_type() {

	$labels = array(
		'name'                  => _x( 'F.A.Q', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'F.A.Q', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'F.A.Q', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'todos as pegruntas frequentes', 'text_domain' ),
		'add_new_item'          => __( 'Add nova pergunta', 'text_domain' ),
		'add_new'               => __( 'nova pergunta', 'text_domain' ),
		'new_item'              => __( 'nova pergunta', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'não encontrato', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'F.A.Q', 'text_domain' ),
		'description'           => __( 'F.A.Q', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'faq_post_type', $args );

}
add_action( 'init', 'faq_post_type', 0 );

//--------------------------------------------------------------------

// Register Custom Post Type
function cursos_post_type() {

    $labels = array(
        'name'                  => _x( 'cursos', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'curso', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'cursos', 'text_domain' ),
        'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'Todos os cursos', 'text_domain' ),
        'add_new_item'          => __( 'Add nova pergunta', 'text_domain' ),
        'add_new'               => __( 'novo cursoa', 'text_domain' ),
        'new_item'              => __( 'nova pergunta', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'não encontrato', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'cursos', 'text_domain' ),
        'description'           => __( 'cursos', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'cursos_post_type', $args );

}
add_action( 'init', 'cursos_post_type', 0 );



//--------------------------------------------------------------------

// Register Custom Post Type
function classTools_post_type() {

    $labels = array(
        'name'                  => _x( 'Ferramentas', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'ferramenta', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Ferramenta', 'text_domain' ),
        'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'todas as ferramentas', 'text_domain' ),
        'add_new_item'          => __( 'Add novaferramenta', 'text_domain' ),
        'add_new'               => __( 'nova ferramenta', 'text_domain' ),
        'new_item'              => __( 'nova ferramenta', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'não encontrado', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'ferramentas', 'text_domain' ),
        'description'           => __( 'ferramentas', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'classTools_post_type', $args );

}
add_action( 'init', 'classTools_post_type', 0 );



/*--------------------------------------------------------------------
CGTE FAQ WIDGET
--------------------------------------------------------------------*/

add_action( 'widgets_init', 'cgte_article_widgets' );

function cgte_article_widgets() {

    register_widget( 'cgte_Article_Widget' );

}



//========= Custom CGTE Article Widget Body

class cgte_Article_Widget extends WP_Widget {





    function __construct() {

        parent::__construct(

            'cgte_article_widgets', // Base ID

            __( 'F.A.Q cursos abertos', 'cgte' ), // Name

            array( 'description' => __('F.A.Q cursos abertos', 'cgte'),

                    'classname' => 'cgte' ), // Args

            array( 'width' => 300, 'height' => 300, 'id_base' => 'cgte_article_widgets' )

        );

    }


    function widget($args, $widgetData) {

        echo $before_widget;


 $args = array( 
 'orderby' => 'name',
 'post_type' => 'faq_post_type',
 );
 $the_query = new WP_Query( $args );

$contHeading = 1;
$contCollapse = 1;

 if ( $the_query->have_posts() ) : 

 echo '<div class="container-fluid" id="perguntas-frequentes">
  			<div class="container" > 
  			 <div class="top-section">
          <h2 class="titulo-section-faq">Perguntas Frequentes</h2>
      </div>      

      <div class="row">
      <div class="accordion" id="faq">';

  while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

	<div class="card">
            <div class="card-header" id="heading<?php echo $contHeading ?>">
              <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $contCollapse ?>" aria-expanded="true" aria-controls="collapse<?php echo $contCollapse ?>">
                	
                	<?php the_title();?>
                </button>
              </h5>
 			</div>

 			 <div id="collapse<?php echo $contCollapse ?>" class="collapse" aria-labelledby="heading<?php echo $contHeading ?>" data-parent="#faq">
              <div class="card-body">
                <ul><?php the_content(); ?></ul>
            </div>
        </div>
    </div>

 <?php $contHeading = $contHeading + 1;
 $contCollapse = $contCollapse + 1;

endwhile;
endif; 
  wp_reset_query(); 

echo '</div></div>
		<div class="faq-text">

        	<P>Não encontrou o que procura?</P>
        	<a class="btn-faq" href="https://mooc.cefor.ifes.edu.br/suporte/">PERGUNTE AQUI</a><br>
     	 </div>
      </div></div>';

	    echo $after_widget;

    }





    function update($new_widgetData, $old_widgetData) {


    }



    function form($widgetData) {


    }

}


/*--------------------------------------------------------------------
CGTE LOGIN WIDGET
--------------------------------------------------------------------*/


add_action( 'widgets_init', 'cgte_login_widgets' );

function cgte_login_widgets() {

    register_widget( 'cgte_login_Widget' );

}


class cgte_login_Widget extends WP_Widget {


    function __construct() {

        parent::__construct(

            'cgte_login_widgets', // Base ID

            __( 'area do estudante', 'cgte' ), // Name

            array( 'description' => __('area do estudante', 'cgte'),

                    'classname' => 'cgte' ), // Args

            array( 'width' => 300, 'height' => 300, 'id_base' => 'cgte_login_widgets' )

        );

    }


    function widget($args, $widgetData) {


        echo $before_widget;
?>

<div class="container-fluid" id="area-do-estudante">
  <div class="container">       
    <div class="top-section">
          <h2 class="titulo-section2">Área do estudante</h2>
      </div>
    <div class="row">
      <div class="col-sm um">
        <div class="texto-texto">
        <h5>Esta é a sua primeira vez aqui?</h5>
        <p>Crie seu perfil e seja bem-vindo à Plataforma de Cursos Abertos do Ifes.</p>
        <p>Se você é servidor do Ifes, pode acessar a Plataforma usando seu SIAPE.</p>
        <p>A cada curso, mais conhecimento. Quanto melhor o conhecimento, maior a transformação.</p>
    

        <a class="btn1" href="https://mooc.cefor.ifes.edu.br/moodle/login/signup.php?">CRIAR MINHA CONTA</a><br>
      </div>
      </div>
      
      <div class="col-sm dois">
        <div class="texto-texto">

            <h5>Já possui uma conta?</h5>
            <P>Use seu login e senha para acessar a Plataforma de Cursos Abertos do Ifes.</p>
            <p>Se você é servidor do Ifes, use seu SIAPE.</p>
        </div>

        <form  class="loginVitrine text-left" name="login" method="post" action="https://mooc.cefor.ifes.edu.br/moodle/login/index.php">
          <div class="form-group">
            <!--label for="formGroupExampleInput">Nome de usuário:</label-->
            <input type="text" class="form-control" id="useLogin" placeholder="Usuário" name="username">
          </div>
          <div class="form-group">
            <!--label for="formGroupExampleInput2">Senha:</label-->
            <input type="password" class="form-control" id="passwordLogin" placeholder="Senha" name="password">
          </div>

          <button class="btn1-b" name="submit" value="login" type="submit">ENTRAR</button>

          <a class="recuperar-senha" href="https://mooc.cefor.ifes.edu.br/moodle/login/forgot_password.php"> Esqueceu o seu usuário ou senha? </a>

        </form>
      </div>
    </div> 


  </div>
</div>

<?php
	    echo $after_widget;

    }




    function update($new_widgetData, $old_widgetData) {


    }



    function form($widgetData) {


    }

}


/*----------------------------------------------------------------------------------------
WIDGET CONTADOR
----------------------------------------------------------------------------------------*/


add_action( 'widgets_init', 'cgte_contador_widgets' );

function cgte_contador_widgets() {

    register_widget( 'cgte_contador_Widget' );

}




class cgte_contador_Widget extends WP_Widget {



    //=======> Widget setup

    function __construct() {

        parent::__construct(

            'cgte_login_widgets', // Base ID

            __( 'cantador de matriculas', 'cgte' ), // Name

            array( 'description' => __('contador de matriculas', 'cgte'),

                    'classname' => 'cgte' ), // Args

            array( 'width' => 300, 'height' => 300, 'id_base' => 'cgte_contador_widgets' )

        );

    }



    function widget($args, $widgetData) {


        echo $before_widget;


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

?>

<div class="container-fluid" id="matriculados">
    <div class="container">
      <h3>Junte-se a nós! <strong><span class="count"><?php echo $obj->{'quantidade'}?> </span></strong> matrículas realizadas. </h3>
    </div>
</div>




<?php
curl_close($curlHandler);


	    echo $after_widget;

    }





    function update($new_widgetData, $old_widgetData) {


    }



    function form($widgetData) {


    }

}

/*-----------------------------------------------------------------------------------
CGTE CURSOS WIDGET
-----------------------------------------------------------------------------------*/


add_action( 'widgets_init', 'cgte_cursos_widgets' );

function cgte_cursos_widgets() {

    register_widget( 'cgte_cursos_Widget' );

}



//========= Custom CGTE Article Widget Body

class cgte_cursos_Widget extends WP_Widget {



    //=======> Widget setup

    function __construct() {

        parent::__construct(

            'cgte_login_widgets', // Base ID

            __( 'Cursos', 'cgte' ), // Name

            array( 'description' => __('cursos com matricular abertas', 'cgte'),

                    'classname' => 'cgte' ), // Args

            array( 'width' => 300, 'height' => 300, 'id_base' => 'cgte_cursos_widgets' )

        );

    }



    //=======> How to display the widget on the screen.

    function widget($args, $widgetData) {

        //=======> widget body

        echo $before_widget;


		
		$curlHandler = curl_init();

		$userName = 'integracao-mooc';

		$password = '123';

		curl_setopt_array($curlHandler, [

		    CURLOPT_URL => 'http://troia.cefor.cefetes.br:8082/mooc-api/buscar-cursos-inscricoes-abertas',

		    CURLOPT_RETURNTRANSFER => true,

		    CURLOPT_HTTPAUTH => CURLAUTH_BASIC,

		    CURLOPT_USERPWD => $userName . ':' . $password,

		]);

		$response = curl_exec($curlHandler);
;

		$json_str = $response;
		$jsonObj = json_decode($json_str);
		$cursos = $jsonObj->cursos;

		?>

<div class="container-fluid" id="cursos">
  <div class="container">
    <div class="top-section">        
      <h2 class="titulo-section2">Nossos Cursos</h2>
    </div>
    
    <div class="row">  


    	<?php
		 
		//navega pelos elementos do array, imprimindo cada empregado
		/*foreach ( $cursos as $curso)
		    {
		    echo "<div class='card-curso'>

		    		<img class='img-curso' src='/images/cursos/vitrine_FerramentaGravacaoVideo.jpg' alt='$curso->nome'>
		    		<div class='descricao'>
		    			<h6> $curso->nome</h6>
		    			<a href='$curso->link' target='_blank' class='btn2'>Acessar curso</a>
		    	  	</div>
		    	  </div>"; 
                  echo "<br>";
		    }*/


        $args = array(
            'post_type' => 'cursos_post_type'
            ); 
            // the query
            $the_query = new WP_Query( $args );

        
                       
             
            if ( $the_query->have_posts() ) {
                

            
                $lista_post_curso = [];

                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                      
                    $titulo = get_the_title();
                    $resumo = get_the_excerpt();
                    echo "<div class='card-curso'>";

                    if ( has_post_thumbnail() ) {
                           the_post_thumbnail('medium', array('class' => 'img-curso'));
                        } 

                    echo"
                    <div class='descricao'>
                        <h6> $titulo</h6>
                        $resumo
                        <a href='$meta' target='_blank' class='btn2'>Acessar curso</a>
                    </div>
                  </div>"; 
                  echo "<br>"; 

                    
                    array_push($lista_post_curso, $titulo);                     
             
                 
             
        
                }
            }


                wp_reset_postdata();
               
               /* $lista_moodle_curso = []; 

                foreach ($cursos as $curso){

                    $nome = $curso->nome;

                    array_push($lista_moodle_curso, $nome);  


                }

                print_r($lista_post_curso);
                echo "<BR>";
                print_r($lista_moodle_curso);
                $testar = in_array($lista_post_curso, $cursos);           

		curl_close($curlHandler);*/
		?>

       



		</div>
	</div>
</div>

<?php
	    echo $after_widget;

    }



    //Update the widget

    function update($new_widgetData, $old_widgetData) {


    }



    function form($widgetData) {


    }

}

/*-----------------------------------------------------------------------------------
CGTE como funciona WIDGET
-----------------------------------------------------------------------------------*/
//========= Custom CGTE Article Widget

add_action( 'widgets_init', 'cgte_como_funciona_widgets' );

function cgte_como_funciona_widgets() {

    register_widget( 'cgte_como_funciona_Widget' );

}



//========= Custom CGTE Article Widget Body

class cgte_como_funciona_Widget extends WP_Widget {



    //=======> Widget setup

    function __construct() {

        parent::__construct(

            'cgte_como_funciona_widgets', // Base ID

            __( 'Como Funciona', 'cgte' ), // Name

            array( 'description' => __('Como Funciona', 'cgte'),

                    'classname' => 'cgte' ), // Args

            array( 'width' => 300, 'height' => 300, 'id_base' => 'cgte_como_funciona_widgets' )

        );

    }



    //=======> How to display the widget on the screen.

    function widget($args, $widgetData) {

        //=======> widget body

        echo $before_widget;
?>

<div class="container-fluid" id="como-funciona">
  <div class="container" >

    <?php
        $args = array(
            'post_type' => 'howTo_post_type'
            ); 
            // the query
            $the_query = new WP_Query( $args );?>

    <div class="top-section">
           <h2 class="titulo-section">O que é?</h2>
      </div>    


      <?php if ( $the_query->have_posts() ) {
                

            
                $lista_post_curso = [];

                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    $conteudo = get_the_content();
                      
                    $titulo = get_the_title();

                    if ($titulo === 'O que é?'){

                        echo ' <div class="mooc">';
                        the_content();
                        echo '</div>
                        <div class="top-section">
                            <h2 class="titulo-section">Como Funciona</h2> 
                        </div>

                        <div class="row">';

                    }else{

                    echo "<div class='card-howTo'>";

                        if ( has_post_thumbnail() ) {
                           the_post_thumbnail('medium', array('class' => 'icone1'));
                        } 

                        echo"<h6> $titulo</h6>
                        $conteudo
                    </div>
                  "; 
                  echo "<br>"; 
                  }

                    
                    
             
                 
             
        
                }
            }


                wp_reset_postdata();
            ?>

       

  </div>
</div>
</div>

<?php
        echo $after_widget;

    }



    //Update the widget

    function update($new_widgetData, $old_widgetData) {


    }



    function form($widgetData) {


    }

}


/*-----------------------------------------------------------------------------------
CGTE FERRAMENTAS WIDGET
-----------------------------------------------------------------------------------*/
//========= Custom CGTE Article Widget

add_action( 'widgets_init', 'cgte_ferramentas_widgets' );

function cgte_ferramentas_widgets() {

    register_widget( 'cgte_ferramentas_Widget' );

}




class cgte_ferramentas_Widget extends WP_Widget {


    function __construct() {

        parent::__construct(

            'cgte_ferramentas_widgets', // Base ID

            __( 'Ferramentas', 'cgte' ), // Name

            array( 'description' => __('Ferramentas', 'cgte'),

                    'classname' => 'cgte' ), // Args

            array( 'width' => 300, 'height' => 300, 'id_base' => 'cgte_ferramentas_widgets' )

        );

    }



    function widget($args, $widgetData) {



        echo $before_widget;
?>

<div class="container-fluid" id="ferramentas">
  <div class="container" >
      <div class="top-section">
          <h2 class="titulo-section2">Ferramentas</h2>
      </div>
      
            <div class="row">

        <?php
        $args = array(
            'post_type' => 'classTools_post_type'
            ); 
            $the_query = new WP_Query( $args );
    
            if ( $the_query->have_posts() ) {             

                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    $conteudo = get_the_content();
                      
                    $titulo = get_the_title();
                    echo "<div class='card-tools'>";

                    if ( has_post_thumbnail() ) {
                           the_post_thumbnail('medium', array('class' => 'icone1'));
                        } 

                    echo"<h6> $titulo</h6>
                    $conteudo
                    </div>
                  "; 



                  echo "<br>";                   
                    
                }
            }

                wp_reset_postdata();
            ?>

  </div>
  </div>
</div>

<?php
        echo $after_widget;

    }


    function update($new_widgetData, $old_widgetData) {


    }


    function form($widgetData) {


    }

}

function hstngr_register_widget() {
register_widget( 'hstngr_widget' );
}

add_action( 'widgets_init', 'hstngr_register_widget' );

class hstngr_widget extends WP_Widget {

function __construct() {
parent::__construct(
// widget ID
'hstngr_widget',
// widget name
__('Hostinger Sample Widget', ' hstngr_widget_domain'),
// widget description
array( 'description' => __( 'Hostinger Widget Tutorial', 'hstngr_widget_domain' ), )
);
}
public function widget( $args, $instance ) {
$titulo = apply_filters( 'widget_title', $instance['titulo'] );
$sub_titulo_um = apply_filters( 'widget_sub_title', $instance['sub_titulo_um'] );
$sub_titulo_dois = apply_filters( 'widget_sub_title', $instance['sub_titulo_dois'] );
$imagem = apply_filters( 'widget_image', $instance['imagem'] );

echo $args['before_widget'];
//if title is present

echo "<h3 class='hero-branco'>" ;
    echo $titulom;
echo"</h3>";
echo "<h3 class='hero-branco'>" ;
    echo $sub_titulo_um;
echo"</h3>";
echo "<h3 class='hero-branco'>" ;
    echo $sub_titulo_dois;
echo"</h3>";


//output

echo $args['after_widget'];
}
public function form( $instance ) {
if ( isset( $instance[ 'titulo'], $instance['sub_titulo_um'], $instance['sub_titulo_dois'], $instance['imagem' ] ) )
$titulo = $instance[ 'titulo' ];
else
$titulo = __( 'Default Title', 'hstngr_widget_domain' );
?>

<label for="<?php echo $this->get_field_id( 'titulo' ); ?>"><?php _e( 'titulo:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'titulo' ); ?>" name="<?php echo $this->get_field_name( 'titulo' ); ?>" type="text" value="<?php echo esc_attr( $titulo ); ?>" />

<label for="<?php echo $this->get_field_id( 'sub_titulo_um' ); ?>"><?php _e( 'sub Title:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'sub_titulo_um' ); ?>" name="<?php echo $this->get_field_name( 'sub_titulo_um' ); ?>" type="text" value="<?php echo esc_attr( $sub_titulo_um ); ?>" />

<label for="<?php echo $this->get_field_id( 'sub_titulo_dois' ); ?>"><?php _e( 'sub Title:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'sub_titulo_dois' ); ?>" name="<?php echo $this->get_field_name( 'sub_titulo_dois' ); ?>" type="text" value="<?php echo esc_attr( $sub_titulo_dois ); ?>" />


<label for="<?php echo $this->get_field_id( 'imagem-hero' ); ?>">imagem</label>
<input class="widefat" id="<?php echo $this->get_field_id( 'imagem' ); ?>" name="<?php echo $this->get_field_name( 'imagem' ); ?>" type="file" value="<?php echo esc_attr( $imagem ); ?>" />

<?php
}
public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['titulo'] = ( ! empty( $new_instance['titulo'] ) ) ? strip_tags( $new_instance['titulo'] ) : '';
    $instance['sub_titulo_um'] = ( ! empty( $new_instance['sub_titulo_um'] ) ) ? strip_tags( $new_instance['sub_titulo_um'] ) : '';
    $instance['sub_titulo_dois'] = ( ! empty( $new_instance['sub_titulo_dois'] ) ) ? strip_tags( $new_instance['sub_titulo_dois'] ) : '';
    return $instance;
}

}