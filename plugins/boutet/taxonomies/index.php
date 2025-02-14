<?php

function bluetide_taxonomies()
{
  require_once dirname(__FILE__) . '/product.php';
}

add_action('init', 'bluetide_taxonomies');
