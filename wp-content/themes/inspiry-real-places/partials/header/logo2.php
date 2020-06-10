<div id="site-logo" class="site-logo">

    <div class="logo-inner-wrapper">
        <?php
        global $inspiry_options;
        $inspiry_site_name  = get_bloginfo( 'name' );
        $inspiry_tag_line   = get_bloginfo ( 'description' );

        if ( !empty( $inspiry_options['inspiry_logo'] ) && !empty( $inspiry_options['inspiry_logo']['url'] ) ) {

            /*
             * Image based logo
             */
            ?><a href="<?php echo esc_url( home_url('/contact/') ); ?>"><img src="<?php echo esc_url( $inspiry_options['inspiry_logo']['url'] ); ?>" alt="<?php echo esc_attr( $inspiry_site_name ); ?>" /></a><?php

        } else {

            /*
             * Text based logo
             */
            if ( is_front_page() || is_home() || is_page_template( 'page-templates/home.php' ) ) {
                ?><h1 class="site-title"><a href="<?php echo esc_url( home_url('/') ); ?>" rel="home"><?php echo esc_html( $inspiry_site_name ); ?></a></h1><?php
            } else {
                ?><h2 class="site-title"><a href="<?php echo esc_url( home_url('/') ); ?>" rel="home"><?php echo esc_html( $inspiry_site_name ); ?></a></h2><?php
            }

        }

        if( ! empty( $inspiry_tag_line ) ) {
            ?><small class="tag-line"><?php echo esc_html( $inspiry_tag_line ); ?></small><?php
        }

        ?>
    </div>
    <!-- end of .logo-inner-wrapper -->

</div>
<!-- end of #site-logo -->