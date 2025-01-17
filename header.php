<?php
$venuLogo = get_theme_mod('venue_logo', get_template_directory_uri() . '/img/logo.png');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php wp_title('|', true, 'right');
    bloginfo('name'); ?></title>

    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>

</head>

<body>

    <div class="wrap"></div>
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 flex justify-between">
                    <button id="primary-nav-button" type="button">Menu</button>

                    <!-- venu logo -->
                    <?php if (!empty($venuLogo)): ?>
                        <div class="logo">
                            <a class="flex" href="<?php echo home_url(); ?>">
                                <img src="<?php echo $venuLogo; ?>" alt="<?php bloginfo('name'); ?>">
                            </a>
                        </div>
                    <?php endif; ?>
                    <!-- end venu logo -->

                    <!-- venu main menu -->
                    <?php get_template_part('template_parts/navmenu'); ?>
                    <!-- end venu main menu -->
                </div>
            </div>
        </div>
    </header>
    </div>