<?php get_header(); ?>


<?php get_search_form(); ?>

<h1> SEARCH PAGE </h1>
<?php
global $wp_query;
$total_results = $wp_query->found_posts;
?>


<h2> RESULT </h2>

<h2><?php printf( __( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>'); ?></h2>



<?php get_footer(); ?>
