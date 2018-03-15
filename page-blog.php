<?php
/*
 * Template Name: blog
 * description: Blog
 */

get_header(); ?>

<header style="padding-top:300px;padding-bottom:120px;">
    <h1 class="title--awarded text--center">Blog</h1>
</header>

<section id="content" class="container">
        <div class="grid__mesh">
            <div class="post__thumbnail"><!-- Greetings -->
                <div class="thumbnail__box">
                    <h2 class="title h1 text--center p-t-45"> 
                        Hello World!
                    </h2>
                </div> 
            </div><!-- Greetings -->

                    <?php
                    if ( have_posts() ) :
                        if ( is_home() && ! is_front_page() ) : ?>
                            <header>
                                <h2 class="title"><?php single_post_title(); ?></h2>
                                <button> COLOR </button>
                            </header>
                            <?php 
                        endif;

                        // START POST LOOP
                        $args = array (
                            'showposts' => '9',
                            'cat'=> '-10'
                        );
                        $recent = new WP_Query($args); // Excludes promoted category
                        while($recent->have_posts()):$recent->the_post();
                            ?>

                            <article class="  post__thumbnail">
                                <div class="thumbnail__box">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="thumbnail__img--crop">
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <img src="<?php the_post_thumbnail_url('medium');?>" alt="<?php the_title_attribute(); ?>" class="thumbnail__img" />
                                        <?php else: ?>
                                            <img src="http://maxpixel.freegreatpicture.com/static/photo/1x/Island-Flat-Design-Ocean-Ducks-Sea-Deserted-Island-3028648.png" alt="<?php the_title_attribute(); ?>" class="thumbnail__img" />
                                        <?php endif; ?>
                                        <h3 class="link--clear thumbnail__title   h3"> <?php echo the_title() ; ?> </h3>
                                        <span class="thumbnail__date"><?php echo get_the_date(); ?></span>
                                    </a>

                                    <?php   
                                    $categories = get_the_category();  $separator = ' '; $output = '';
                                    if ( ! empty( $categories ) ) {
                                        foreach( $categories as $category ) {
                                            $output .= '<a class="thumbnail__category" href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
                                        }
                                        echo trim( $output, $separator );
                                    }
                                    ?>
                                </div>


                                <!--/ Thumbnail
                                <div class="thumbnail__desc">
                                    <span class="thumbnail__date"><?php echo get_the_date(); ?></span>
                                    <a href="<?php the_permalink(); ?>" class="thumbnail__header"> <h3><?php echo the_title() ; ?> </h3></a>
                                    <div class="thumbnail__text"> <?php echo the_excerpt(); ?><div>
                                </div> -->
                            </article>

                            <?php
                        endwhile; // END POST LOOP
                    //the_posts_navigation();
                    else :
                        get_template_part( 'template-parts/content', 'none' );
                    endif; ?>
            
    </div>
</section>


<?php get_footer(); ?>