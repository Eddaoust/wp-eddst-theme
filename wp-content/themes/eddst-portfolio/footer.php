    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-sm-12 col-xs-12">
                    <?php
                        $parent = get_pages([
                                'parent' => 0
                        ]);
                    ?>
                    <h1><?php echo get_post_meta($parent[0]->ID, 'nickname', true) ?></h1>
                </div>
                <div class="col-lg-5 col-sm-12 col-xs-12">
                    <h4>Contact</h4>
                    <p>Email : <?php echo get_option('admin_email'); ?></p>
                    <p>Phone : <?php echo get_post_meta($parent[0]->ID, 'phone', true) ?></p>
                </div>
                <div class="col-lg-5 col-sm-12 col-xs-12">
                    <h4>Get in touch</h4>
                    <div class="container-fluid">
                        <?php
                        wp_nav_menu([
                            'theme_location' => 'weblink',
                            'menu_class' => 'row justify-content-between',

                        ]);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>
