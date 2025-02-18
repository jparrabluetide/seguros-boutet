<?php get_header(); ?>
<div class="container mx-auto px-4 text-center">
    <p class="text-blue-500 mb-4 md:mb-10 font-lato font-bold text-2xl md:text-4xl lg:text-7xl">404</p>
    <h1 class="text-blue-500 text-2xl md:text-4xl font-bold font-lato mb-4 md:mb-10"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'bluetide' ); ?></h1>
    <p class="text-black text-base font-lato"><?php esc_html_e( 'It looks like nothing was found at this location.', 'bluetide' ); ?></p>
</div>
<?php get_footer(); ?>