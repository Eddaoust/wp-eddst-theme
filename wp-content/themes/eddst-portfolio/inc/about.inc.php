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
                    <div class="row">
                        <div class="col-lg-3 col-sm-3 col-xs-3">
                            <a href="https://twitter.com/edmonddaoust" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-lg-3 col-sm-3 col-xs-3">
                            <a href="https://www.linkedin.com/in/edmond-daoust-09431b86/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-lg-3 col-sm-3 col-xs-3">
                            <a href="https://github.com/Eddaoust" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-lg-3 col-sm-3 col-xs-3">
                            <a href="https://www.freecodecamp.org/eddaoust" target="_blank"><i class="fa fa-free-code-camp" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-sm-12 col-xs-12">
                <?php echo get_the_post_thumbnail($section->ID); ?>
            </div>
        </div>
    </div>
</section>
