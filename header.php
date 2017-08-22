<?php
/**
 * The header for our theme
 *
 * @package CrankedBlue
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
            <meta charset="<?php bloginfo( 'charset' ); ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="profile" href="http://gmpg.org/xfn/11">
            <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <header>
            <nav id="main-navigation" class="main-navigation">
                <span role="button" aria-controls="primary-menu" aria-expanded="false" id="menuButton"><i class="fa fa-bars"></i></span>
                <div class="nav-container">
                    <?php
                    wp_nav_menu( array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                    ) );
                    ?>
                </div>
                <div class="spacer" style="clear: both;"></div>
            </nav>
            <div class="container">
                <div class="logo">
                    <?php the_custom_logo(); ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><h1><?php if (strtolower(get_bloginfo('name')) == "crankedblue") { echo 'Cranked<span>Blue</span>'; } else { bloginfo('name'); } ?></h1></a>
                    <?php
                    $description = get_bloginfo( 'description', 'display' );
                    if ( $description || is_customize_preview() ) {
                    ?>
                    <span class="subtitle"><?php echo $description; /* WPCS: xss ok. */ ?></span>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </header>
        <section class="showcase">
            <div class="container">
                <img src="<?php
                if (!empty(get_header_image())) {
                    echo get_header_image();
                } else {
                    echo get_template_directory_uri()."/img/showcase.jpg";
                }
                ?>" alt="Showcase"/>
            </div>
        </section>