<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php bloginfo('title'); ?></title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:400,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <?php wp_head(); ?>

</head>
<body>


<nav style="width: 100%; height: 60px; position:fixed; top: 0; background: #dedede; z-index: 100;">
    <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/base/logo_first_test.png" alt="Website Logo" style="max-height: 50px; display: inline"/>
    </a>
        <?php get_search_form(); ?>
    <div class="d-flex flex-row-reverse" style="display: inline; float: right; padding-top: 10px;">
        <button> Blog</button>
        <button> Projekty</button>
        <button> O mnie</button>
    </div>
</nav>
<br><br>