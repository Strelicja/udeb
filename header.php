<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package udeb_pazdziernik_pazdziernik
 */

?>
    <!doctype html>
    <html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <!-- <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css"> -->
        <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>

        <?php wp_head(); ?>
        <!-- Global Site Tag (gtag.js) - Google Analytics -->
<!-- <script async src=“https://www.googletagmanager.com/gtag/js?id=UA-106776295-1“></script>
<script>window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments)};
gtag(‘js’, new Date()); gtag(‘config’, ‘UA-106776295-1’);
</script> -->

    </head>

    <body <?php body_class(); ?>>



        <div id="page" class="site container-fluid main_width">
            <div class="row">
<!--header_box-->
            <header id="masthead" class="site-header         site_box">
      <!-- site-branding -->
                <div class="site-branding">
           <!-- logo -->
                    <div class="noPadding logo col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <?php
                			the_custom_logo();
                			if ( is_front_page() && is_home() ) : ?>
                				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                			<?php else : ?>

                			<?php
                			endif;
                			$description = get_bloginfo( 'description', 'display' );
                			if ( $description || is_customize_preview() ) : ?>
                				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                			<?php
                			endif; ?>
                		</div><!-- /logo -->
            <!--site-navigation-->
                    <div class="noPadding nava col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <nav id="site-navigation" class="nav-container  navbar nav_box nav  main-navigation">
                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'udeb_pazdziernik' ); ?></button>
                        <?php
                          wp_nav_menu( array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                            'container' 		 => false,
                            'menu_class' 		 => 'nav_buttons nav nav-pills '
                          ) );
                        ?>
                      </nav>
                    </div>
                    <!-- </div> <!-- #site-navigation -->
                  <!-- </div> <!-- /site-branding -->
             </header> <!-- /header -->
            <!-- #masthead -->
        </div>
      </div>
        </div>

            <div id="content" class="site-content main_width container-fluid">
