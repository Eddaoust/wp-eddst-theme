<nav class="navbar navbar-expand-md navbar-light" style="background-color: black;">
    <h1 class="navbar-brand">Ed</h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <?php
    wp_nav_menu([
        'theme_location' => 'navbar',
        'container'       => 'div',
        'container_class' => 'collapse navbar-collapse',
        'container_id'    => 'navbarTogglerDemo01',
        'menu_class'      => 'navbar-nav ml-auto mt-2 mt-lg-0',
    ]);
    ?>
</nav>
