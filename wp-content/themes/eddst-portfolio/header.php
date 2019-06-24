<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
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
                <div class="col-lg-6 col-sm-12 col-xs-12"></div>
                <div class="col-lg-6 col-sm-12 col-xs-12">
                    <h1><strong>Hi, </strong>my name is <span><?php echo get_post_meta(get_the_ID(), 'nickname', true) ?></span></h1>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12"></div>
                <div class="col-lg-6 col-sm-12 col-xs-12">
                    <h6><?php echo get_post_meta(get_the_ID(), 'job', true) ?></h6>
                </div>
            </div>
        </div>
    </div>



