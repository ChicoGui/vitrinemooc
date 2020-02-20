<?php /* Template Name: Pagina */ ?>

<?php
get_header(); ?>

<div id="conteudo">

	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("teste") ) : ?>
<?php endif;?>


         
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                   
                    <?php the_content(); ?>
                       
            <?php endwhile?>
                 
                 
            <?php endif; ?>
             
        
    </div>

 
<?php get_footer(); ?>
