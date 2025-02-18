<?php
if (!defined('ABSPATH')) exit;

get_header();

if (\Elementor\Plugin::$instance->documents->get(get_the_ID())->is_built_with_elementor()) {
  while (have_posts()) : the_post();
    the_content();
  endwhile;
} else {
?>
  <div class="recipe-container">
    <h1><?php the_title(); ?></h1>
    <div class="recipe-thumbnail">
      <?php if (has_post_thumbnail()) {
        the_post_thumbnail('large');
      } ?>
    </div>
    <div class="recipe-content">
      <?php the_content(); ?>
    </div>
  </div>
<?php
}

get_footer();
