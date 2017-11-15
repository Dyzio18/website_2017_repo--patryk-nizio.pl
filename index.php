<?php get_header(); ?>

<div class="row" style="margin-top: 90px;"></div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="background: #eee; height: 160px; display: flex; padding-top: 40px; justify-content: center"> IMAGE | AWESOME INTRO</div>
            <div class="col-md-6" style="height: 200px;">
                <h1 class="jumbo__title">Patryk Nizio</h1>
                <h2>Junior front-end developer</h2>
            </div>
        </div>
    </div>
</section>
<section class="container panel_intro">
    <div class="row">
        <div class="col-sm-12 col-md-4 panel-intro__card">
            <h3>Blog</h3>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.
                Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.
            </p>
            <div class="d-flex flex-row justify-content-around">
                <span> </span>
                <button>Więcej</button>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 panel-intro__card">
            <h3>Projekty</h3>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.
                Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.
            </p>
            <div class="d-flex flex-row justify-content-around">
                <a href="https://github.com/dyzio18" target="_blank">github</a>
                <button>Więcej</button>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 panel-intro__card">
            <h3>O mnie</h3>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.
                Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.
            </p>
            <div class="d-flex flex-row justify-content-around">
                <a href="https://www.linkedin.com/in/patryk-nizio/" target="_blank">linkedin</a>
                <button>Więcej</button>
            </div>
        </div>
    </div>
</section>
<section class="container">
    <div>
        <h2 class="h2"> Popularne wpisy </h2>
    </div>
    <div class="row">
        <article class="col-sm-12 col-md-6">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <img src=" " style="width: 100%; height: 300px; background: #eee;">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                <?php the_excerpt(); ?>
            <?php endwhile; else: ?>
                <?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
            <?php endif; ?>
        </article>
        <div class="col-sm-12 col-md-6 flex-column">
            <article>
                <?php
                // the query
                $the_query = new WP_Query( array(
                    'category_name' => 'programowanie',
                    'posts_per_page' => 3,
                ));
                ?>

                <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <?php the_title(); ?>
                        <?php the_excerpt(); ?>

                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>

                <?php else : ?>
                    <p><?php __('No News'); ?></p>
                <?php endif; ?>

            </article>
            <article>
                eeee
            </article>
            <article>
                vvvv
            </article>
        </div>
    </div>
</section>
<section class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-6 d-flex justify-content-center  align-items-center cta_square__projects">
                <button>Projekty</button>
        </div>
        <div class="col-sm-12 col-md-6 d-flex justify-content-center  align-items-center cta_square__about_me">
            <button>O mnie</button>
        </div>
    </div>

</section>

<?php get_footer(); ?>

