<?php get_header();?> 

    <!--Contenido Articulo-->
    
    <div class="container">
        <div class="row">
            <!-- articulo -->
            <div class="col-12 col-md-9 my-5">
                <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
                <h2 class="my-3"><?php the_title();?></h2>
                <p class="lead"><?php echo get_the_date();?></p>
                <div class="tex-justify">
                     <?php the_content();?>
                    <h3><?php get_the_title();?></h3>
                    <?php get_the_content();?>
                    
                </div>
                <?php endwhile; endif; ?>
            </div>
             <!-- aside-->
            <div class="col-12 col-md-3">
                <?php get_sidebar(); ?> <!-- de forma dinamica vamos a estar llamando a la hoja sidebar.php-->
            </div>
        </div>
    </div>
        
    </div>
    
     <!-- Footer --> 
     <?php get_footer();?> 