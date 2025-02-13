<?php
add_action('cmb2_admin_init', 'bluetide_fields_product');
function bluetide_fields_product()
{

  $prefix = 'bluetide_fields_product_';

  $cmb = new_cmb2_box(
    array(
      'id' => $prefix . 'product',
      'title' => esc_html__('Product info', 'bluetide'),
      'object_types' => array('product'),
      'context' => 'normal',
      'priority' => 'high',
      'show_in_rest' => true,
    )
  );

  $cmb->add_field(
    array(
      'name' => esc_html__('Excerpt', 'bluetide'),
      'id' => $prefix . 'excerpt',
      'type' => 'textarea_small',
      'attributes' => array(
        'required' => 'required',
      )
    )
  );

  $cmb->add_field(
    array(
      'id' => $prefix . 'icon',
      'name' => esc_html__('Image icon', 'bluetide'),
      'desc' => esc_html__('Add an image.', 'bluetide'),
      'type' => 'file',
      'attributes' => array(
        'required' => 'required',
        'accept' => 'image/*',
      ),
      'text' => array(
        'add_upload_file_text' => esc_html__('Add icon', 'bluetide'),
      ),
      'options' => array(
        'url' => false, // Hide the text input for the url
      ),
      'query_args' => array(
        'type' => 'image',
      ),
      'preview_size' => 'medium',
    )
  );

  $cmb->add_field(
    array(
      'id' => $prefix . 'card_image',
      'name' => esc_html__('Image card', 'bluetide'),
      'desc' => esc_html__('Add an image.', 'bluetide'),
      'type' => 'file',
      'attributes' => array(
        'required' => 'required',
        'accept' => 'image/*',
      ),
      'text' => array(
        'add_upload_file_text' => esc_html__('Add image', 'bluetide'),
      ),
      'options' => array(
        'url' => false, // Hide the text input for the url
      ),
      'query_args' => array(
        'type' => 'image',
      ),
      'preview_size' => 'medium',
    )
  );

  $cmb->add_field(
    array(
      'id' => $prefix . 'banner_image',
      'name' => esc_html__('Image banner', 'bluetide'),
      'desc' => esc_html__('Add an image.', 'bluetide'),
      'type' => 'file',
      'attributes' => array(
        'required' => 'required',
        'accept' => 'image/*',
      ),
      'text' => array(
        'add_upload_file_text' => esc_html__('Add image', 'bluetide'),
      ),
      'options' => array(
        'url' => false, // Hide the text input for the url
      ),
      'query_args' => array(
        'type' => 'image',
      ),
      'preview_size' => 'medium',
    )
  );

  $cmb->add_field(
    array(
      'name' => esc_html__('Description', 'bluetide'),
      'id' => $prefix . 'description',
      'type' => 'textarea',
      'attributes' => array(
        'required' => 'required',
      )
    )
  );

}
