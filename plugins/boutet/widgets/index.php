<?php
function bluetide_widgets()
{
  require_once dirname(__FILE__) . '/headerSocialNetworks.php';
  require_once dirname(__FILE__) . '/carouselProducts.php';
}

add_action('widgets_init', 'bluetide_widgets');
