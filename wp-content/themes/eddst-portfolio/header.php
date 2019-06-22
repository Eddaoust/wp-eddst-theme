<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(); ?></title>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open() ?>
    <header>
        <?php get_template_part('template-parts/navigation/navbar') ?>
    </header>
    <div id="welcome">
        <div class="container">
            <div class="row">
                <?php if(have_posts()) : ?>
                    <?php while(have_posts())  : the_post(); ?>
                        <div class="col-lg-6 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>



