        <footer class="syn_anchoCompleto">
            <div class=" syn_footer syn_anchoPagina syn_footer_cont">
                <div class="syn_footer_cont_superior">
                    <div class="syn_footer_superior_box_1">
                        <?php if( is_active_sidebar( 'md-footer-logo' ) ){ dynamic_sidebar( 'md-footer-logo' ); } ?>
                        <p class="syn_footer_superior_titulo">Confident care. Intelligent imaging</p>
                    </div>
                    <div class="syn_footer_superior_box_2">
                        <h4 class="syn_footer_superior_titulo">Information</h4>
                        <?php 
                            $args= array(
                                'menu_class' 		=> 	'syn_footer_menu', //clases del menu
                                'container_id' 		=> 	'syn_footer_menu_cont', //ID del contenedor principal
                                'container_class'	=> 	'syn_footer_menu_cont', //Clases del contenedor
                                'theme_location' 	=> 	'menuFooterInformation'
                            );
                            wp_nav_menu($args);
                        ?>
                    </div>
                    <div class="syn_footer_superior_box_3">
                        <div class="syn_footer_superior_cont_info">
                            <h4 class="syn_footer_superior_titulo">SyntheticMR</h4>
                            <div class="syn_footer_superior_contenido">
                                <?php if( is_active_sidebar( 'footer-synthetic' ) ){ dynamic_sidebar( 'footer-synthetic' ); } ?>
                            </div>
                        </div>
                        <div class="syn_footer_superior_cont_info">
                            <h4 class="syn_footer_superior_titulo">Investor Relations</h4>
                            <div class="syn_footer_superior_contenido">
                                <?php if( is_active_sidebar( 'footer-investor' ) ){ dynamic_sidebar( 'footer-investor' ); } ?>
                            </div>
                        </div>
                    </div>
                    <div class="syn_footer_superior_box_4">
                        <div class="syn_footer_superior_cont_info">
                            <h4 class="syn_footer_superior_titulo">Customer Support</h4>
                            <div class="syn_footer_superior_contenido">
                                <?php if( is_active_sidebar( 'footer-customer' ) ){ dynamic_sidebar( 'footer-customer' ); } ?>
                            </div>
                        </div>
                    </div>
                    <div class="syn_footer_superior_box_5">
                        <div class="syn_footer_superior_cont_redes">
                            <a href="#" ><img src="<?php echo  get_template_directory_uri().'/assets/images/redes/facebook.svg';?>"></a>
                            <a href="#" ><img src="<?php echo  get_template_directory_uri().'/assets/images/redes/twitter.svg';?>"></a>
                            <a href="#" ><img src="<?php echo  get_template_directory_uri().'/assets/images/redes/youtube.svg';?>"></a>
                            <a href="#" ><img src="<?php echo  get_template_directory_uri().'/assets/images/redes/instagram.svg';?>"></a>
                        </div>
                    </div>
                </div>
                <div class="syn_footer_cont_medio">
                    <div class="syn_footer_texto"><?php if( is_active_sidebar( 'footer-texto' ) ){ dynamic_sidebar( 'footer-texto' ); } ?></div>
                </div>
                <div class="syn_footer_cont_bajo">
                    <div class="syn_footer_cont_bajo_box_1">
                    <?php if( is_active_sidebar( 'footer-sidebar-5' ) ){ dynamic_sidebar( 'footer-sidebar-5' ); } ?>
                    
                    </div>
                    <div class="syn_footer_cont_bajo_box_2">
                    <?php 
                            $args= array(
                                'menu_class' 		=> 	'syn_footer_politicas_menu', //clases del menu
                                'container_id' 		=> 	'syn_footer_politicas_menu_cont', //ID del contenedor principal
                                'container_class'	=> 	'syn_footer_politicas_menu_cont', //Clases del contenedor
                                'theme_location' 	=> 	'menuFooterPoliticas'
                            );
                            wp_nav_menu($args);
                        ?>
                    </div>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html> 

<!-- <script src="http://syntethicmr.local/new-site/wp-content/themes/Syntethicmr/assets/js/fondoPuntos.js"></script> -->
<!-- <script src="https://syntheticmr.com/new-site/wp-content/themes/Syntethicmr/assets/js/fondoPuntos.js"></script> -->