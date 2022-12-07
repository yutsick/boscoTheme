<?php wp_head(); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
   
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html">Start Bootstrap</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <!-- nav menu -->
                        <?php 

                        wp_nav_menu( array(

                            'menu_class'		=> "navbar-nav ms-auto mb-2 mb-lg-0", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                            'menu_id'			=> "", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
                            'container'			=> "div", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
                            'container_class'	=> "collapse navbar-collapse", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
                            'container_id'		=> "navbarSupportedContent", // (string) The ID that is applied to the container.
                            
                             'depth'				=> 2, // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
                            
                            'theme_location'	=> "top_menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                            
                        ) );

                        ?>
                    <!-- end nav menu -->
                    <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                            <li class="nav-item"><a class="nav-link" href="pricing.html">Pricing</a></li>
                            <li class="nav-item"><a class="nav-link" href="faq.html">FAQ</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                    <li><a class="dropdown-item" href="blog-home.html">Blog Home</a></li>
                                    <li><a class="dropdown-item" href="blog-post.html">Blog Post</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Portfolio</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                    <li><a class="dropdown-item" href="portfolio-overview.html">Portfolio Overview</a></li>
                                    <li><a class="dropdown-item" href="portfolio-item.html">Portfolio Item</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </nav>