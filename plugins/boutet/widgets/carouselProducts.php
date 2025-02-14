<?php
class carouselProductsWidget extends WP_Widget
{
  public function __construct()
  {
    parent::__construct(
      'carouselProductsWidget',
      __('Carousel products widget', 'bluetide'),
      array(
        'description' => __('Carousel products widget', 'bluetide')
      )
    );
  }

  public function widget($args, $instance)
  {
    $products = new WP_Query(
      array(
        'post_type' => 'product',
        'posts_status' => 'publish',
        'order_by' => 'date',
        'order' => 'DESC',
        'posts_per_page' => '-1',
      )
    );

    ?>
    <div class="container mx-auto px-4 max-w-7xl pb-5">
      <?php if ($products->have_posts()): ?>
        <div class="swiper carousel1">
          <div class="swiper-wrapper">
            <?php while ($products->have_posts()):
              $products->the_post(); ?>
              <?php
              $product_id = get_the_ID();
              $image_icon_id = get_post_meta($product_id, 'bluetide_fields_product_icon_id', true);
              $image_icon_size = 'product-icon';
              $image_icon_src = wp_get_attachment_image_src($image_icon_id, $image_icon_size);
              ?>
              <div class="swiper-slide pb-20 !h-auto">
                <div class="bg-[#F2F5F9] rounded-3xl px-5 md:px-10 pt-8 pb-20 relative h-full">
                  <img src="<?php echo $image_icon_src[0]; ?>" alt="<?php the_title(); ?>" width="110" height="110"
                    class="mx-auto w-[110px] h-[110px] object-cover" />
                  <p class="text-2xl font-bold text-blue-500 text-center my-5"><?php the_title(); ?></p>
                  <p class="text-sm text-black">
                    <?php echo get_post_meta(get_the_ID(), 'bluetide_fields_product_excerpt', true); ?>
                  </p>
                  <div class="absolute -bottom-[55px] left-1/2 -ml-[55px]">
                    <a href="<?php echo get_permalink($product_id, false) ?>">
                      <svg xmlns="http://www.w3.org/2000/svg" width="110" height="110" viewBox="0 0 110 110" fill="none">
                        <circle cx="55" cy="55" r="50" fill="#0045A0" stroke="white" stroke-width="10" />
                        <path
                          d="M42.7633 69.5873L40 66.8258L62.8961 43.945H49.869V40H69.607V59.7248H65.6594V46.7064L42.7633 69.5873Z"
                          fill="white" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
          </div>
        </div>
        <div class="swiper-pagination swiper-pagination-carousel1"></div>
      <?php else: ?>
        <div class="col-span-12">
          <p class="text-center text-xl text-primary-500"><?php _e('No posts found', 'bluetide'); ?></p>
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

register_widget('carouselProductsWidget');
