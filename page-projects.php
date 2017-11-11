<?php
/*
 Template Name:  projekt
*/
?>

<?php get_header();?>

<div class="container-fluid ">
    <h1>PROJEKTY</h1>
    <div class="row">
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
