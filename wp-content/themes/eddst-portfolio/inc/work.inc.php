<section id="work">
    <div class="container">
        <div class="row">
            <div class="pics-margin col-lg-10">
                <div class="row">
                    <?php
                    $args = [
                        'post_type' => 'post',
                        'category_name' =>  strtolower(get_the_title($section->ID))
                    ];
                    $query = new WP_Query($args);
                    foreach ($query->posts as $key => $post):
                        $link = get_post_meta($post->ID);
                        //var_dump($post);
                        ?>
                        <div class="work-img col-lg-4 col-sm-12" id="img<?php echo $key + 1 ?>" data-toggle="modal" data-target="#modalCenter<?php echo $key + 1 ?>">
                            <?php if (get_the_post_thumbnail($post->ID)): ?>
                            <?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?>
                            <?php else: ?>
                            <img src="<?php echo get_template_directory_uri().'/assets/img/default.png'?>" alt="default">
                            <?php endif; ?>
                        </div>

                        <div class="modal fade" id="modalCenter<?php echo $key + 1 ?>" tabindex="-1" role="dialog" aria-labelledby="modalCenterTitle<?php echo $key + 1 ?>" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalCenterTitle<?php echo $key + 1 ?>"><?php echo ucfirst($post->post_title); ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo $post->post_content; ?>
                                    </div>
                                    <div class="modal-footer">
                                        <?php if (isset($link['article_link'])):
                                            $data = explode('+', $link['article_link'][0]);
                                        ?>
                                        <a href="<?php echo $data[0] ?>" target="_blank" class="btn btn-secondary"><?php echo $data[1] ?></a>
                                        <?php endif; ?>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </div>

            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-1">
                <h1>MY <br><span><?php echo strtoupper(get_the_title($section->ID)); ?></span></h1>
            </div>
        </div>
    </div>
</section>