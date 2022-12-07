</main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; <?php echo get_bloginfo('name');?> - <?php echo date("Y"); ?></div></div>
                    <div class="col-auto">
                        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    
 
                    <!-- nav menu -->
                        <?php 

                        wp_nav_menu( array(

                            'menu_class'		=> "navbar-nav ms-auto mb-2 mb-lg-0", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                            'menu_id'			=> "", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
                            'container'			=> "div", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
                            'container_class'	=> "text-center navbar-collapse", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
                            'container_id'		=> "navbarSupportedContent", // (string) The ID that is applied to the container.
                            
                             'depth'				=> 2, // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
                            
                            'theme_location'	=> "bottom_menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                            
                        ) );

                        ?>
                   
                </div>
            </nav>
                        <!-- <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a> -->
                        
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
<?php wp_footer(); ?>