<section id="<?php echo lcfirst(get_the_title($section->ID)); ?>" <?php post_class('', $section->ID); ?>>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-sm-12 col-xs-12">
                <h1><?php echo strtoupper(get_the_title($section->ID)); ?> </br><span>ME</span></h1>
            </div>
            <div class="col-lg-5 col-sm-12 ">
                <?php echo $section->post_content; ?>
                <h6><?php echo get_post_meta(get_the_ID(), 'fullname', true); ?></h6>
                <div class="container-fluid ">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'weblink',
                        'menu_class' => 'row justify-content-between',

                    ]);
                    ?>
                </div>
            </div>
            <div class="col-lg-5 col-sm-12 col-xs-12 about-wrap">
                <?php echo get_the_post_thumbnail($section->ID); ?>
            </div>
        </div>
    </div>
</section>
