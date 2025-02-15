<?php
function bluetide_widgets()
{
  require_once dirname(__FILE__) . '/headerSocialNetworks.php';
  require_once dirname(__FILE__) . '/carouselProducts.php';
  require_once dirname(__FILE__) . '/carouselTeam.php';
  require_once dirname(__FILE__) . '/cardServices.php';
}

add_action('widgets_init', 'bluetide_widgets');
