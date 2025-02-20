<?php
class CardServicesWidget extends WP_Widget
{
  public function __construct()
  {
    parent::__construct(
      'CardServicesWidget',
      __('Cards services widget', 'bluetide'),
      array(
        'description' => __('Cards services widget', 'bluetide')
      )
    );
  }

  public function widget($args, $instance)
  {
    $data = new WP_Query(
      array(
        'post_type' => 'product',
        'posts_status' => 'publish',
        'order_by' => 'date',
        'order' => 'DESC',
        'posts_per_page' => '-1',
      )
    );

?>
    <div class="container mx-auto px-4">
      <?php if ($data->have_posts()): ?>
        <div class="grid grid-cols-12 gap-6">
          <?php while ($data->have_posts()):
            $data->the_post(); ?>
            <?php
            $dataId = get_the_ID();

            $imageCardId = get_post_meta($dataId, 'bluetide_fields_product_card_image_id', true);
            $imageCardSize = 'product-card';
            $imageCardSrc = wp_get_attachment_image_src($imageCardId, $imageCardSize);

            $imageIconId = get_post_meta($dataId, 'bluetide_fields_product_icon_id', true);
            $imageIconSize = 'product-icon';
            $imageIconSrc = wp_get_attachment_image_src($imageIconId, $imageIconSize);


            ?>
            <div class="col-span-12 md:col-span-6 lg:col-span-4 bg-[#F2F5F9]">
              <div class="relative">
                <img src="<?php echo $imageCardSrc[0]; ?>" alt="<?php the_title(); ?>"
                  class="w-full object-cover rounded-t-lg" />
                <div class="absolute -bottom-8 right-6">
                  <a class="bg-white relative block rounded-md p-2" href="<?php the_permalink(); ?>">
                    <img src="<?php echo $imageIconSrc[0]; ?>" alt="icon <?php the_title(); ?>" class="w-16 h-16">
                  </a>
                </div>
              </div>
              <div class="pt-16 px-4 md:px-6 pb-6 h-auto">
                <p class="text-blue-500 uppercase text-2xl font-bold"><?php the_title(); ?></p>
                <p class="text-base text-black mt-4">
                  <?php echo get_post_meta($dataId, 'bluetide_fields_product_description', true); ?>
                </p>
              </div>
            </div>
          <?php endwhile;
          wp_reset_postdata(); ?>
        </div>
      <?php else: ?>
        <div class="col-span-12">
          <p class="text-center text-xl text-black"><?php _e('No posts found', 'bluetide'); ?></p>
        </div>
      <?php endif; ?>
    </div>
  <?php
  }

  public function update($new_instance, $old_instance)
  {
    // Update widget options
    $instance['numberPost'] = strip_tags($new_instance['numberPost']);
    return $instance;
  }

  public function form($instance)
  {
    // Retrieve widget options from $instance
    $numberPost = isset($instance['numberPost']) ? $instance['numberPost'] : 9;
    // Display widget settings form
  ?>
    <p>
      <label for="<?php echo $this->get_field_id('numberPost'); ?>">
        <?php _e('Number of posts'); ?>:
      </label>
      <input class="widefat" id="<?php echo $this->get_field_id('numberPost'); ?>"
        name="<?php echo $this->get_field_name('numberPost'); ?>" type="number" min="1" max="6"
        value="<?php echo esc_attr($numberPost); ?>" />
    </p>
<?php
  }
}

register_widget('CardServicesWidget');
