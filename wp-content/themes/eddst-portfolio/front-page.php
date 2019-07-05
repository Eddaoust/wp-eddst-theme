<?php get_header(); ?>

<?php
$id = get_the_ID();

$sections = get_posts([
    'post_type' => 'page',
    'post_parent' => $id,
    'order' => 'asc'
    ]);

foreach ($sections as $key => $section) :
    if (lcfirst(get_the_title($section->ID)) == 'about'):
        require_once 'inc/about.inc.php';
?>

<?php elseif (lcfirst(get_the_title($section->ID)) == 'skills'):
        require_once 'inc/skills.inc.php';
?>

<?php elseif (lcfirst(get_the_title($section->ID)) == 'story'):
        require_once 'inc/story.inc.php';
?>

<?php elseif (lcfirst(get_the_title($section->ID)) == 'work'):
        require_once 'inc/work.inc.php';
?>

<?php elseif (lcfirst(get_the_title($section->ID)) == 'contact'):
        require_once 'inc/contact.inc.php';
?>
<?php endif; ?>
<?php endforeach; ?>

<?php get_footer(); ?>
