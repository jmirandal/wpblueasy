
<?php get_header("inner"); ?>

        <!-- services -->
        <div class="row services">
           
            <div class="row">
                <div class="col-11 offset-1">
                    <h2 class="wh-border">SERVICES</h2>
                </div>
            </div>
            <div class="row justify-content-center">

                <div class="col-10">
                    <div class="row">
                        <div class="col-sm">
                            <img src="<?php echo get_template_directory_uri()."/imgs/basket.png"; ?>" alt="coffee">
                            <h3>COFFEE</h3>
                            <p>Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll liquorice bear
                                claw. Jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake jujubes.
                            </p>
                        </div>
                        <div class="col-sm">
                            <img src="<?php echo get_template_directory_uri()."/imgs/polaroid.png"; ?>" alt="instant">
                            <h3>INSTANT</h3>
                            <p>Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll liquorice bear
                                claw. Jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake jujubes.
                            </p>
                        </div>
                        <div class="col-sm">
                            <img src="<?php echo get_template_directory_uri()."/imgs/camera.png"; ?>" alt="serious">
                            <h3>SERIOUS</h3>
                            <p>Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll liquorice bear
                                claw. Jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake jujubes.
                            </p>
                        </div>
                        <div class="col-sm">
                            <img src="<?php echo get_template_directory_uri()."/imgs/picture.png"; ?>" alt="frame">
                            <h3>FRAME</h3>
                            <p>Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll liquorice bear
                                claw. Jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake jujubes.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <p>
                            <?php the_field('extra_descripcion_de_servicio'); ?>
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- services -->

        <div class="row justify-content-center">

            <div class="col-11 offset-1">
                <h2>NEWS FROM OUR BLOG</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="row">
                        <?php 
                            // the query
                            $wpb_all_query = new WP_Query(
                                array(
                                    'post_type'=>'post',
                                    'post_status'=>'publish',
                                    'posts_per_page'=>-1
                                )
                            );
                        ?>
                        
                        <?php if ( $wpb_all_query->have_posts() ) : ?>               
                                <!-- loop -->
                                <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                                    
                                        <div class="col-4">
                                            <?php
                                                if ( has_post_thumbnail()) {
                                                    $thumb_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail');
                                                }else{
                                                    $thumb_image_url[0] = 'https://via.placeholder.com/150';
                                                }
                                            ?>
                                            <img class="img-fluid" src="<?php echo $thumb_image_url[0]; ?>" alt="">
                                            <p><?php the_title(); ?></p>
                                            <p><a href="<?php the_permalink(); ?>">Read more...</a></p>
                                        </div>
                                
                                <?php endwhile; ?>
                                <!-- end loop -->
                            
                            <?php wp_reset_postdata(); ?>
                            
                        <?php else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <?php get_template_part("includes/testimonials") ?>
        <?php get_template_part("includes/contact") ?>

       <?php get_footer(); ?>