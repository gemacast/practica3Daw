
<?php get_header();?> 
    <!-- contenido -->
     <div class="container my-5">
        <!-- articulo -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4"> 
            <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="col">
                    <div class="card h-100">
                    <!--card-img-top img-fluid -->
                    <a href="<?php the_permalink(); ?>">
                            <?php if ( has_post_thumbnail() ) {the_post_thumbnail('post-thumbnails', array( 'class' => 'card-img-top img-fluid' ) );}
                            ?></a>
                        
                        <div class="card-body">
                            <a href="<?php the_permalink(); ?>"><h5 class="card-title"><?php the_title();?></h5></a>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                        </div>
                        <div class="card-footer text-body-secondary">
                            <small class="text-body-secondary"> <?php echo get_the_date();?> / <?php the_category(',');?></small>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </div>    
<?php get_footer();?> 
     
  