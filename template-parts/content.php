<?php
/**
 * Template part for displaying posts
 * DISPLAY SPECIFIC POST CONTENT
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package dyzio_theme
 */
?>

<article id="post-<?php the_ID(); ?>">
    <div class="container main">
        <header class="article__header ">
            <?php
            if ( is_singular() ) :
                the_title( '<h1 class="post__title">', '</h1>' );
            else :
                the_title( '<h2 class="post__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            endif;
            /*
            if ( 'post' === get_post_type() ) : ?>
                <div class="entry-meta">
                    <?php dyzio_theme_posted_on(); ?>
                </div><!-- .entry-meta -->
                <?php
            endif; */?>
        </header><!-- .entry-header -->

        <?php dyzio_theme_post_thumbnail(); ?>
        <div class="post__content ">
            <?php
            the_content( sprintf(
                wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'dyzio_theme' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                get_the_title()
            ) );

            /* wp_link_pages( array(
                 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dyzio_theme' ),
                 'after'  => '</div>',
             ) );*/
            ?>
        </div>
    </div><!-- .container CONTENT-->

    <!--<footer class="entry-footer">
		<?php // dyzio_theme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->




