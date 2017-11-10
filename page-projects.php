<?php
/*
 Template Name:  projekt
*/
?>

<?php get_header();?>

<div class="project container-fluid ">
    <div class="row justify-content-lg-center">
        <!--/ Project ===================== -->


        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
        endwhile; else: ?>
            <p class="display-3">Przepraszamy nie ma strony spełnaiającej te kryteria</p>
        <?php endif; ?>


        <!--/ Project ======================== -->
    </div>
</div>

<?php get_footer();?>
