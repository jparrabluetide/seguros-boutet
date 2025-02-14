<?php
add_action('cmb2_admin_init', 'bluetide_fields_team');
function bluetide_fields_team()
{

  $prefix = 'bluetide_fields_team_';

  $cmb = new_cmb2_box(
    array(
      'id' => $prefix . 'team',
      'title' => esc_html__('Team info', 'bluetide'),
      'object_types' => array('team'),
      'context' => 'normal',
      'priority' => 'high',
      'show_in_rest' => true,
    )
  );

  $cmb->add_field(
    array(
      'name' => esc_html__('Position', 'bluetide'),
      'id' => $prefix . 'position',
      'type' => 'text',
      'attributes' => array(
        'required' => 'required',
      )
    )
  );

  $cmb->add_field(
    array(
      'id' => $prefix . 'photo',
      'name' => esc_html__('Image photo', 'bluetide'),
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

}
