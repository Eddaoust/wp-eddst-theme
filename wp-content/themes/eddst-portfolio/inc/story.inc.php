<section id="<?php echo lcfirst(get_the_title($section->ID)); ?>" <?php post_class('', $section->ID); ?>>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-sm-12 col-xs-12">
                <h1>MY </br><span><?php echo strtoupper(get_the_title($section->ID)); ?></span></h1>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-9 col-sm-12 col-xs-12">
                <?php
                    $firstItteration = true;
                    $fields = get_post_meta($section->ID);
                    $test = explode('/',$fields[strtolower(get_the_title($section->ID))][1]);

                    foreach ($fields[strtolower(get_the_title($section->ID))] as $field):
                        $data = explode('/', $field);
                    if ($firstItteration):
                ?>
                <div class="first-margin indi-box container-fluid">
                    <div class="row">
                        <div class="col-lg-2 col-sm-2 col-xs-2">
                            <div class="storyBox"><?php echo $data[0] ?></div>
                        </div>
                        <div class="col-lg-10 col-sm-10 col-xs-10">
                            <h6><?php echo $data[1] ?></h6>
                            <p><?php echo strtoupper($data[2]) ?></p>
                        </div>
                    </div>
                </div>
                <?php $firstItteration = false; ?>
                <?php else: ?>
                    <div class="indi-box container-fluid">
                        <div class="row">
                            <div class="col-lg-2 col-sm-2 col-xs-2">
                                <div class="storyBox"><?php echo $data[0] ?></div>
                            </div>
                            <div class="col-lg-10 col-sm-10 col-xs-10">
                                <h6><?php echo $data[1] ?></h6>
                                <p><?php echo strtoupper($data[2]) ?></p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>