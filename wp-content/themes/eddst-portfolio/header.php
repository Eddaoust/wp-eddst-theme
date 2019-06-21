<!DOCTYPE html>
<html>
<head>
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(); ?></title>
</head>
<body <?php body_class(); ?>>
    <header>
        <?php get_template_part('template-parts/navigation/navbar') ?>
        <div id="welcome" class="container">
            <div class="row">

            </div>
        </div>
    </header>


