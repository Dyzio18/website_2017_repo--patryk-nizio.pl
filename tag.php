<?php
/**
 * Created by PhpStorm.
 * User: Dyzio
 * Date: 2017-11-13
 * Time: 23:43
 */
?>

<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        the_title();
        //
        // Post Content here
        //
    } // end while
} // end if
?>