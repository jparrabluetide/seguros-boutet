<?php
function boutet_widgets()
{
  require_once dirname(__FILE__) . '/headerSocialNetworks.php';
}

add_action('widgets_init', 'boutet_widgets');
