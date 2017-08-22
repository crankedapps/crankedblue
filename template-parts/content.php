<?php
/**
 * Template part for displaying posts
 *
 * @package CrankedBlue
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_title( '<a href="' . esc_url( get_permalink() ) . '" class="post-title">', '</a>' ); ?>
    <i class="fa fa-user"></i> <span class="post-author"><a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ); ?></a></span> 
    <i class="fa fa-calendar"></i>  <span class="post-date"><?php echo get_the_date('F j, Y'); ?></span>
    <div class="post-content">
    <?php
    
    the_content( sprintf(
        wp_kses(
            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'crankedblue' ),
            array(
                    'span' => array(
                            'class' => array(),
                    ),
            )
        ),
        get_the_title()
    ) );
    
    //the_excerpt();

    wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'crankedblue' ),
        'after'  => '</div>',
    ) );
    ?>
    </div>
    <p><?php crankedblue_entry_footer(); ?></p>
</article><!-- #post-<?php the_ID(); ?> -->