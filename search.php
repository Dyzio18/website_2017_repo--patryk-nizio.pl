<?php get_header(); ?>

<section class="container mt-l" style="height: 80%; margin-top: 120px">
    <div class="row">
        <?php
        $s = get_search_query();
        $args = array(
            's' => $s
        );
        // The Query
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) {
            echo("<h2 style='font-weight:bold;color:#000'>Rezultat wyszukiwania dla: " . get_query_var('s') . "</h2>");
            echo('Wyników:  ' . count($posts) . ' <br> ');

            while ($the_query->have_posts()) {
                $the_query->the_post();
                ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
                <?php
            }
        } else {
            ?>
            <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
            <div class="alert alert-info">
                <p style="margin-top: 100px;">Sorry, but nothing matched your search criteria. Please try again with
                    some different keywords.</p>
            </div>
        <?php } ?>


    </div>
</section>
<?php get_footer(); ?>
