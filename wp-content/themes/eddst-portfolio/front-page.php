<?php get_header(); ?>

<?php
$id = get_the_ID();

$sections = get_posts([
    'post_type' => 'page',
    'post_parent' => $id
    ]);

foreach ($sections as $key => $section) :
?>

<section id="<?php echo lcfirst(get_the_title($section->ID)); ?>" <?php post_class('', $section->ID); ?>>
    <h1><?php echo get_the_title($section->ID); ?></h1>
</section>

<?php endforeach; ?>

<?php get_footer(); ?>
