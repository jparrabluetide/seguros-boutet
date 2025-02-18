<?php
class InfoProduct extends WP_Widget
{
  public function __construct()
  {
    parent::__construct(
      'InfoProduct',
      __('Information product', 'bluetide'),
      array(
        'description' => __('Information product', 'bluetide')
      )
    );
  }

  public function widget($args, $instance)
  {
    $dataId = get_the_ID();
?>
    <div class="font-lato px-4">
      <h3 class="text-lg text-black uppercase mb-4"><?php _e('Nuestros productos', 'bluetide') ?></h3>
      <p class="text-blue-500 text-xl md:text-2xl font-bold mb-4"><?php the_title(); ?></p>
      <p class="text-black mb-4"><?php echo get_post_meta($dataId, 'bluetide_fields_product_description', true); ?></p>
    </div>
<?php
  }

  public function update($new_instance, $old_instance)
  {
    return $new_instance;
  }

  public function form($instance) {}
}

register_widget('InfoProduct');
