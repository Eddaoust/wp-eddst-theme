<section id="<?php echo lcfirst(get_the_title($section->ID)); ?>" <?php post_class('', $section->ID); ?>>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-sm-12 col-xs-12">
                <h1 id="trig">MY <br><span><?php echo strtoupper(get_the_title($section->ID)); ?></span></h1>
            </div>
            <div class="thumb-ed col-lg-6 col-sm-12 col-xs-12">
                <?php echo get_the_post_thumbnail($section->ID); ?>
            </div>
            <div class="block-barre col-lg-4 col-sm-12 col-xs-12">

            </div>
        </div>
    </div>
</section>
