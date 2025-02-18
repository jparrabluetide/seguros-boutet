<?php
class BannerProduct extends WP_Widget
{
  public function __construct()
  {
    parent::__construct(
      'BannerProduct',
      __('Banner product', 'bluetide'),
      array(
        'description' => __('Banner product', 'bluetide')
      )
    );
  }

  public function widget($args, $instance)
  {

    $product_id = get_the_ID();

    $image_banner_image_id = get_post_meta($product_id, 'bluetide_fields_product_banner_image_id', true);
    $image_banner_image_size = 'product-banner';
    $image_banner_image_src = wp_get_attachment_image_src($image_banner_image_id, $image_banner_image_size);

?>
    <div class="w-full h-[280px] md:h-[360px] bg-gray-300 bg-cover bg-no-repeat bg-center" style="background-image: url(<?php echo $image_banner_image_src[0]; ?>);">
      <div class="container px-4 max-w-7xl mx-auto h-full">
        <div class="flex flex-col w-full h-full justify-center items-center">
          <h1 class="text-center text-white text-2xl md:text-4xl font-lato font-bold mb-2 md:mb-4"><?php the_title(); ?></h1>
          <p class="text-center text-sm md:text-lg text-white font-lato uppercase">Home > nuestros productos > <?php the_title(); ?></p>
        </div>
      </div>
    </div>
<?php
  }

  public function update($new_instance, $old_instance)
  {
    return $new_instance;
  }

  public function form($instance) {}
}

register_widget('BannerProduct');
