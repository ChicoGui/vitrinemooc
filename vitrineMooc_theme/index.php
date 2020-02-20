<?php get_header(); ?>


<div id="conteudo">
        <h2> template index</h2>
         
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                   
                    <?php the_content(); ?>
                       
            <?php endwhile?>
                 
                 
            <?php endif; ?>
             
        
    </div>

<?php get_footer(); ?>