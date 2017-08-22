<?php
/**
 * The template for displaying the footer
 *
 * @package CrankedBlue
 */

?>

        <footer class="mainFooter">
            <p>
                <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'crankedblue' ) ); ?>"><?php
                    /* translators: %s: CMS name, i.e. WordPress. */
                    printf( esc_html__( 'Proudly powered by %s', 'crankedblue' ), 'WordPress' );
                ?></a>
                <span class="sep"> | </span>
                <a href="<?php echo esc_url( __( 'https://crankedapps.com/', 'crankedblue' ) ); ?>"><?php
                    /* translators: 1: Theme name, 2: Theme author. */
                    printf( esc_html__( 'Theme: %1$s', 'crankedblue' ), 'CrankedBlue');
                ?></a>
            </p>
        </footer>

        <?php wp_footer(); ?>

    </body>
</html>