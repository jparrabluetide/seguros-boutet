<?php

function bluetide_post_types()
{
  require_once dirname(__FILE__) . '/products.php';
}

add_action('init', 'bluetide_post_types');
