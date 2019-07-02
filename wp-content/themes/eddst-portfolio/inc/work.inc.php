<div id="work">
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
                        //var_dump($post);
                        ?>
                        <div class="work-img col-4" id="img<?php echo $key + 1 ?>" data-toggle="modal" data-target=".bd-example-modal-x<?php echo $key + 1 ?>">
                            <?php echo get_the_post_thumbnail($post->ID); ?>
                        </div>

                        <div class="modal fade bd-example-modal-x<?php echo $key + 1 ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-x<?php echo $key + 1 ?>">
                                <div class="modal-content">
                                    <h1>Hello</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consequuntur cum cumque delectus dicta ea esse, eveniet ipsa iste laboriosam libero natus non nostrum officia quasi rerum sit tempore, ut.</p>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </div>

            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-1">
                <h1>MY </br><span><?php echo strtoupper(get_the_title($section->ID)); ?></span></h1>
            </div>
        </div>
    </div>
</div>