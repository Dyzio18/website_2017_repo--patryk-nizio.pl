<?php get_header(); ?>

    <header style="height:100vh; background: url('https://blog.spoongraphics.co.uk/wp-content/uploads/2015/flat-planet/vector-planet.jpg') no-repeat center center fixed;   background-size: cover;
">


    </header>


    <section id="content" class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12">
                <?php
                $args = array (
                    'showposts' => '1',
                    'category_name' => 'wyroznione',
                    'paged' => $paged
                );
                $the_query = new WP_Query( $args );

                if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();?>
                    <article class="post__primary">
                        <a href="<?php the_permalink(); ?>" class="post__primary--crop">
                            <img src="<?php the_post_thumbnail_url('medium');?>" alt="<?php the_title_attribute(); ?>" class="postPrimary__img" />
                        </a>
                        <h3 class="title"> <?php echo the_title() ; ?> </h3>
                        <p class="text"> <?php echo the_excerpt(); ?><p>
                    </article>
                <?php endwhile;
                endif; ?>
            </div> <!-- .column 1 (with one post) -->

            <div class="col-lg-7 col-md-12 col-sm-12 ">
                <div class="post__list--aside">
                    <?php
                    if ( have_posts() ) :
                        if ( is_home() && ! is_front_page() ) : ?>
                            <header>
                                <h2 class="title"><?php single_post_title(); ?></h2>
                            </header>
                            <?php
                        endif;

                        // START POST LOOP
                        $args = array (
                            'showposts' => '3',
                            'cat'=> '-10'
                        );
                        $recent = new WP_Query($args); // Excludes promoted category
                        while($recent->have_posts()):$recent->the_post();
                            ?>

                            <article class="post__thumbnail">
                                <div class="thumbnail__box">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="thumbnail__img--crop">
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <img src="<?php the_post_thumbnail_url('medium');?>" alt="<?php the_title_attribute(); ?>" class="thumbnail__img" />
                                        <?php else: ?>
                                            <img src="https://i.ytimg.com/vi/Bor5lkRyeGo/hqdefault.jpg" alt="<?php the_title_attribute(); ?>" class="thumbnail__img" />
                                        <?php endif; ?>
                                    </a>
                                    <a class="thumbnail__category" href="#"> Kategoria </a>
                                </div>
                                <!--/ Thumbnail -->
                                <div class="thumbnail__desc">
                                    <span class="thumbnail__date"><?php echo get_the_date(); ?></span>
                                    <a href="<?php the_permalink(); ?>" class="thumbnail__header"> <h3><?php echo the_title() ; ?> </h3></a>
                                    <div class="thumbnail__text"> <?php echo the_excerpt(); ?><div>
                                </div>
                            </article>

                            <?php
                        endwhile; // END POST LOOP
                    //the_posts_navigation();
                    else :
                        get_template_part( 'template-parts/content', 'none' );
                    endif; ?>
                </div>
            </div> <!-- .column 2 (with posts) -->
        </div> <!-- .row -->
    </section> <!-- .container -->
<section class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 ">
            <div class="post__list--aside">
                <?php
                if ( have_posts() ) :
                    if ( is_home() && ! is_front_page() ) : ?>
                        <header>
                            <h2 class="title"><?php single_post_title(); ?></h2>
                        </header>
                        <?php
                    endif;

                    // START POST LOOP (JS)
                    $args = array (
                        'showposts' => '3',
                        'cat'=> '-10'
                    );
                    $recent = new WP_Query($args); // Excludes promoted category
                    while($recent->have_posts()):$recent->the_post();
                        ?>

                        <article class="post__thumbnail">
                            <div class="thumbnail__box">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="thumbnail__img--crop">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <img src="<?php the_post_thumbnail_url('medium');?>" alt="<?php the_title_attribute(); ?>" class="thumbnail__img" />
                                    <?php else: ?>
                                        <img src="https://i.ytimg.com/vi/Bor5lkRyeGo/hqdefault.jpg" alt="<?php the_title_attribute(); ?>" class="thumbnail__img" />
                                    <?php endif; ?>
                                </a>
                                <a class="thumbnail__category" href="#"> Kategoria </a>
                            </div>
                            <!--/ Thumbnail -->
                            <div class="thumbnail__desc">
                                <span class="thumbnail__date"><?php echo get_the_date(); ?></span>
                                <a href="<?php the_permalink(); ?>" class="thumbnail__header"> <h3><?php echo the_title() ; ?> </h3></a>
                                <div class="thumbnail__text"> <?php echo the_excerpt(); ?><div>
                                    </div>
                        </article>

                        <?php
                    endwhile; // END POST LOOP
                //the_posts_navigation();
                else :
                    get_template_part( 'template-parts/content', 'none' );
                endif; ?>
            </div>
        </div> <!-- .column 2 (with posts) -->
    </div>
</section>

<?php
//get_sidebar();
get_footer();
