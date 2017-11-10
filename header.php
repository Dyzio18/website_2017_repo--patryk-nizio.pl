<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php bloginfo('title'); ?></title>

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <?php wp_head();?>

</head>
<body>


<nav style="width: 100%; height: 60px; position:fixed; top: 0; background: #e0a800;">
    <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/base/logo_first_test.png" alt="Website Logo" style="max-height: 50px"/>
    </a>
    NAVBAR
</nav>
<br><br>