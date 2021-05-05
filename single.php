<?php get_header("inner"); ?>

    <div class="row services">

        <?php while ( have_posts() ) : the_post(); ?>

             <div class="row">
                <div class="col-11 offset-1">
                    <h2 class="wh-border"><?php the_title(); ?></h2>
                </div>
            </div>
    
            <div class="row justify-content-center">
                <div class="col-10">
                    <p><?php the_content(); ?></p>
                </div>
            </div>
           
        <?php endwhile; ?>

   </div>

<?php get_footer(); ?>