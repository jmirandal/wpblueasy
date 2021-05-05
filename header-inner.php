<!doctype html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
   <!-- container -->
    <div class="container-fluid">

        <!-- header -->
        <header class="row justify-content-center" style="background:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>);">

            <div class="col-10">
                <div class="row">
                     <!-- nav -->
                     <nav class="fixed-top nav-top navbar navbar-expand-md navbar-light" role="navigation">

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
		                    <span class="navbar-toggler-icon"></span>
	                    </button>
                        <a class="logo" href="#">BLU<span class="light-blue">E</span>ASY</a>
                        
                        <?php
                            wp_nav_menu( array(
                                'theme_location'    => 'primary',
                                'depth'             => 1,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'bs-example-navbar-collapse-1',
                                'menu_class'        => 'navbar-nav mr-auto',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker()
                            ) );
                        ?>
                        
                     </nav>
                     <!-- nav -->
                </div>
           

                <div class="row">
                    <h1><span class="around-title">"I'M LOOKING FOR THE UNEXPECTED.</span> <br><span class="around-title">I'M LOOKING FOR THINGS I'VE NEVER SEEN BEFORE."</span></h1>
                </div>

            </div>
           
        </header>
        <!-- header -->