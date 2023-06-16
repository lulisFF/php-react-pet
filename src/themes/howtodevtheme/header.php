<?php
/**
 * The main header of the theme
 *
 * @package HowToDev
 */
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>Document</title>
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="site" id="page">
    <header id="masthead" class="site-header">
        <div class="site-branding">
            LOGO
        </div><!--     .site-branding-->
        <nav id="site-navigation" class="main-navigation">
            <?php wp_nav_menu(array('theme_location' => 'header-menu')) ?>
        </nav>
        <nav id="secondary-navigation" class="secondary-navigation">
	        <?php wp_nav_menu(array('theme_location' => 'header-secondary-menu')) ?>
        </nav>
    </header><!--    #masterhead-->