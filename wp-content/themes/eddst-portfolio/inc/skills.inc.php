<section id="<?php echo lcfirst(get_the_title($section->ID)); ?>" <?php post_class('', $section->ID); ?>>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-sm-12 col-xs-12">
                <h1 id="trig">MY </br><span><?php echo strtoupper(get_the_title($section->ID)); ?></span></h1>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12">
                <?php echo get_the_post_thumbnail($section->ID); ?>
            </div>
            <?php
                $data = get_post_meta($section->ID);
                var_dump($data);
            ?>
            <div class="block-barre col-lg-4 col-sm-12 col-xs-12">
                <p id="first-barre">HTML & CSS</p>
                <div class="barre"><div id="html"></div></div>
                <p>JAVASCRIPT</p>
                <div class="barre"><div id="javascript"></div></div>
                <p>PHP & MYSQL</p>
                <div class="barre"><div id="php"></div></div>
                <p>WORDPRESS</p>
                <div class="barre"><div id="wordpress"></div></div>
                <p>REACT</p>
                <div class="barre"><div id="react"></div></div>
                <p>PHOTOSHOP</p>
                <div class="barre"><div id="photoshop"></div></div>
            </div>
        </div>
    </div>
</section>
