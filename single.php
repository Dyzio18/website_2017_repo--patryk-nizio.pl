<?php get_header(); ?>


<!-- Post loop -->
<section class="container" style="margin-bottom: 120px;">
    <div class="row">
        <?php while (have_posts()) : the_post(); ?>
            <article class="col-lg-12 col-md-12 col-sm-12">
                <h1 class="display-4"><?php the_title(); ?></h1>
                <p>
                    <span class=""><?php the_time('j F, Y');?></span>
                    <span class="float-right"><?php the_tags(); ?></span>
                </p>
                <?php the_content('Read More'); ?>

                <a href="<?php echo get_home_url();?>" class="btn">Wróć do strony głównej</a>

            </article>
        <?php endwhile; ?>
    </div>
</section>
<!--/ Post loop -->

<?php get_footer(); ?>
