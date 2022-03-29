<?php 

//Load Bootstrap & Custom CSS
function load_css() {
    //Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css');

    //Animate CSS
    wp_enqueue_style('animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');

    //Lightbox CSS
    wp_enqueue_style('animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css');

    //Owl Carousel CSS
    wp_enqueue_style('animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');

    //Owl Theme CSS
    wp_enqueue_style('animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css');

    //Plugins CSS
    wp_register_style('pluginscss', get_template_directory_uri() . '/css/plugins.css', array(), false, 'all');
    wp_enqueue_style('plugincss');

    //Custom CSS
    wp_register_style('main',get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts','load_css');

//Load Bootstrap JS & Custom JS
function load_js() {


//Bootsrap JS Bundle
wp_enqueue_script('jquery');
wp_enqueue_script('bootstrap-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js');
wp_enqueue_script('bootstrap-js-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js');

//Plugins JS
wp_register_script('pluginsjs', get_template_directory_uri() . '/js/plugins.js', 'jquery', false, true);
wp_enqueue_script('pluginsjs');


//Waypoints JS
wp_enqueue_script('waypoints-js', 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js');

//Lightbox JS
wp_enqueue_script('lightbox-js', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js');

//Owl Carousel JS
wp_enqueue_script('owl-carousel-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js');



//Load Custom JS
wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', 'jquery', false, true);
wp_enqueue_script('custom');
}

add_action('wp_enqueue_scripts','load_js');


/*




Add Theme Functionaility




*/


