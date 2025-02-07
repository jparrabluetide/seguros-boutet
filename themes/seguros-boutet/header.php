<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <script>
    var siteConfig = {
      ajaxurl: '<?php echo admin_url('admin-ajax.php'); ?>',
      homeurl: '<?php echo esc_url(home_url('/')); ?>',
      nonce: '<?php echo wp_create_nonce('wp_rest'); ?>',
      lang: '<?php echo get_locale(); ?>',
    }
  </script>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="bg-blue-500 w-full py-5">
    <div class="container mx-auto px-4">
      <?php dynamic_sidebar('social-networks-1'); ?>
    </div>
  </div>