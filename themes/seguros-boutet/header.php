<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
  </script>
  <?php wp_head(); ?>
  <script>
    var siteConfig = {
      ajaxurl: '<?php echo admin_url('admin-ajax.php'); ?>',
      homeurl: '<?php echo esc_url(home_url('/')); ?>',
      nonce: '<?php echo wp_create_nonce('wp_rest'); ?>',
      lang: '<?php echo get_locale(); ?>',
    }
  </script>
</head>

<body <?php body_class(); ?> class="font-lato">
  <?php wp_body_open(); ?>
  <div class="bg-blue-500 w-full py-5">
    <div class="container mx-auto px-4">
      <?php dynamic_sidebar('social-networks-1'); ?>
    </div>
  </div>
  <div class="container mx-auto px-4">
    <div class="flex items-center justify-between">
      <div class="max-w-[130px] md:max-w-[209px]">
        <?php if (has_custom_logo()): ?>
          <?php the_custom_logo(); ?>
        <?php endif; ?>
      </div>
      <div class="hidden md:block">
        <?php wp_nav_menu(array('theme_location' => 'menu-1', 'menu_id' => 'menu-menu-1')); ?>
      </div>
      <div class="flex items-center gap-4">
        <p class="text-blue-500 font-bold font-lato">English</p>
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
          <mask id="mask0_172_468" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="35"
            height="35">
            <rect width="35" height="35" fill="#D9D9D9" />
          </mask>
          <g mask="url(#mask0_172_468)">
            <path
              d="M8.53121 24.9375C9.77079 23.9896 11.1562 23.2422 12.6875 22.6953C14.2187 22.1485 15.8229 21.875 17.5 21.875C19.177 21.875 20.7812 22.1485 22.3125 22.6953C23.8437 23.2422 25.2291 23.9896 26.4687 24.9375C27.3194 23.941 27.9817 22.8108 28.4557 21.5469C28.9296 20.283 29.1666 18.934 29.1666 17.5C29.1666 14.2674 28.0303 11.5148 25.7578 9.24221C23.4852 6.96964 20.7326 5.83335 17.5 5.83335C14.2673 5.83335 11.5147 6.96964 9.24215 9.24221C6.96958 11.5148 5.83329 14.2674 5.83329 17.5C5.83329 18.934 6.07027 20.283 6.54423 21.5469C7.01819 22.8108 7.68052 23.941 8.53121 24.9375ZM17.5 18.9584C16.0659 18.9584 14.8567 18.4662 13.8724 17.4818C12.888 16.4974 12.3958 15.2882 12.3958 13.8542C12.3958 12.4202 12.888 11.211 13.8724 10.2266C14.8567 9.24221 16.0659 8.75002 17.5 8.75002C18.934 8.75002 20.1432 9.24221 21.1276 10.2266C22.1119 11.211 22.6041 12.4202 22.6041 13.8542C22.6041 15.2882 22.1119 16.4974 21.1276 17.4818C20.1432 18.4662 18.934 18.9584 17.5 18.9584ZM17.5 32.0834C15.4826 32.0834 13.5868 31.7005 11.8125 30.9349C10.0382 30.1693 8.49475 29.1302 7.18225 27.8177C5.86975 26.5052 4.83069 24.9618 4.06506 23.1875C3.29944 21.4132 2.91663 19.5174 2.91663 17.5C2.91663 15.4827 3.29944 13.5868 4.06506 11.8125C4.83069 10.0382 5.86975 8.49481 7.18225 7.18231C8.49475 5.86981 10.0382 4.83075 11.8125 4.06512C13.5868 3.2995 15.4826 2.91669 17.5 2.91669C19.5173 2.91669 21.4132 3.2995 23.1875 4.06512C24.9618 4.83075 26.5052 5.86981 27.8177 7.18231C29.1302 8.49481 30.1692 10.0382 30.9349 11.8125C31.7005 13.5868 32.0833 15.4827 32.0833 17.5C32.0833 19.5174 31.7005 21.4132 30.9349 23.1875C30.1692 24.9618 29.1302 26.5052 27.8177 27.8177C26.5052 29.1302 24.9618 30.1693 23.1875 30.9349C21.4132 31.7005 19.5173 32.0834 17.5 32.0834ZM17.5 29.1667C18.7882 29.1667 20.0034 28.9783 21.1458 28.6016C22.2882 28.2248 23.3333 27.684 24.2812 26.9792C23.3333 26.2743 22.2882 25.7335 21.1458 25.3568C20.0034 24.9801 18.7882 24.7917 17.5 24.7917C16.2118 24.7917 14.9965 24.9801 13.8541 25.3568C12.7118 25.7335 11.6666 26.2743 10.7187 26.9792C11.6666 27.684 12.7118 28.2248 13.8541 28.6016C14.9965 28.9783 16.2118 29.1667 17.5 29.1667ZM17.5 16.0417C18.1319 16.0417 18.6545 15.8351 19.0677 15.4219C19.4809 15.0087 19.6875 14.4861 19.6875 13.8542C19.6875 13.2222 19.4809 12.6997 19.0677 12.2865C18.6545 11.8733 18.1319 11.6667 17.5 11.6667C16.868 11.6667 16.3454 11.8733 15.9323 12.2865C15.5191 12.6997 15.3125 13.2222 15.3125 13.8542C15.3125 14.4861 15.5191 15.0087 15.9323 15.4219C16.3454 15.8351 16.868 16.0417 17.5 16.0417Z"
              fill="#0045A0" />
          </g>
        </svg>
        <div class="text-blue-500 relative block md:hidden">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
            id="btnMainMenu">
            <g id="SVGRepo_bgCarrier" stroke-width="0" />
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />
            <g id="SVGRepo_iconCarrier">
              <path d="M4 6H20M4 12H20M4 18H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
            </g>
          </svg>
          <div class="absolute top-6 right-0">
            <?php wp_nav_menu(array('theme_location' => 'menu-1', 'menu_id' => 'mobile-menu-1', 'menu_class' => 'hidden')); ?>
          </div>
        </div>
      </div>
    </div>
  </div>