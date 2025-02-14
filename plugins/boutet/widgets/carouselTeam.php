<?php
class carouselTeamWidget extends WP_Widget
{
  public function __construct()
  {
    parent::__construct(
      'carouselTeamWidget',
      __('Carousel team widget', 'bluetide'),
      array(
        'description' => __('Carousel team widget', 'bluetide')
      )
    );
  }

  public function widget($args, $instance)
  {
    $data = new WP_Query(
      array(
        'post_type' => 'team',
        'posts_status' => 'publish',
        'order_by' => 'date',
        'order' => 'DESC',
        'posts_per_page' => '-1',
      )
    );

    ?>
    <div class="container mx-auto px-4 max-w-7xl pb-5">
      <?php if ($data->have_posts()): ?>
        <div class="swiper carousel2">
          <div class="swiper-wrapper">
            <?php while ($data->have_posts()):
              $data->the_post(); ?>
              <?php
              $product_id = get_the_ID();
              $image_team_id = get_post_meta($product_id, 'bluetide_fields_team_photo_id', true);
              $image_team_size = 'team-card';
              $image_team_src = wp_get_attachment_image_src($image_team_id, $image_team_size);
              ?>
              <div class="swiper-slide pb-12 !h-auto">
                <div class="h-full bg-[#F2F5F9] pt-5 rounded-t-lg max-w-[300px] mx-auto">
                  <h4 class="text-blue-500 text-center text-xl px-4 mb-2 font-bold"><?php the_title(); ?></h4>
                  <p class="px-4 text-black text-center text-md mb-3 font-bold">
                    <?php echo get_post_meta($product_id, 'bluetide_fields_team_position', true); ?>
                  </p>
                  <img src="<?php echo $image_team_src[0]; ?>" alt="<?php the_title(); ?>" class="rounded-lg" />
                </div>
              </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
          </div>
        </div>
        <div class=" swiper-pagination swiper-pagination-carousel2">
        </div>
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

register_widget('carouselTeamWidget');
