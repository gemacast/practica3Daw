<?php get_header(); ?>

<main class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    the_title('<h1 class="text-center">', '</h1>');
                    the_content();
                endwhile;
            else :
                echo '<p>No hay contenido aún.</p>';
            endif;
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
