<?php

//Require custom navigation walker
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
//Require customizer
require get_template_directory() . '/inc/customizer.php';

function fancy_lab_scripts()
{
    wp_enqueue_script('bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/js/bootstrap.min.js', array('jquery'), '4.5.3', true);
    wp_enqueue_style('bootstrap-css', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/css/bootstrap.min.css', NULL, '4.5.3', 'all');
    wp_enqueue_style('fancy-lab-style', get_template_directory_uri() . '/style.css', NULL, microtime(), 'all'); //get_stylesheet_uri() -> path to fancy-lab/style.css

    //google fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&family=Seaweed+Script&display=swap');

    //flexslider
    wp_enqueue_script('flexslider-min-js', get_template_directory_uri() . '/inc/flexslider/jquery.flexslider-min.js', array('jquery'), '', true);
    wp_enqueue_style('flexslider-css', get_template_directory_uri() . '/inc/flexslider/flexslider.css', array(), '', 'all');
    //user run flexslider custom file
    wp_enqueue_script('flexslider-js', get_template_directory_uri() . '/inc/flexslider/flexslider.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'fancy_lab_scripts');


function fancy_lab_config()
{
    register_nav_menus(
        [
            'fancy_lab_main_menu' => __('Fancy Lab Main Menu', 'fancy-lab'),
            'fancy_lab_footer_menu' => __('Fancy Lab Footer Menu', 'fancy-lab')
        ]
    );

    $textdomain = 'fancy-lab';
    load_theme_textdomain($textdomain, get_stylesheet_directory() . '/languages/'); //for child theme support
    load_theme_textdomain($textdomain, get_template_directory() . '/languages/');

    add_theme_support('woocommerce', [
        'thumbnail_image_width' => 255,
        'single_image_width' => 255,
        'product_grid' => [
            'default_rows' => 10,
            'min_rows' => 5,
            'max_rows' => 10,
            'default_columns' => 1,
            'min_columns' => 1,
            'max_columns' => 1,
        ]
    ]);
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
    add_theme_support('custom-logo', [
        'height' => 85,
        'width' => 160,
        'flex_height' => true,
        'flex_width' => true,
    ]);

    add_theme_support('post-thumbnails');
    add_image_size('fancy-lab-slider', 1920, 800, array('center', 'center'));
    add_image_size('fancy-lab-blog', 960, 640, array('center', 'center'));

    if (!isset ($content_width)) {
        $content_width = 600;
    }

    add_theme_support('title-tag');

}

add_action('after_setup_theme', 'fancy_lab_config', 0);

if (class_exists('WooCommerce')) {
    require get_template_directory() . '/inc/wc-modifications.php';
}

/**
 * Show cart contents / total Ajax
 */
add_filter('woocommerce_add_to_cart_fragments', 'fancy_lab_woocommerce_header_add_to_cart_fragment');

function fancy_lab_woocommerce_header_add_to_cart_fragment($fragments)
{
    global $woocommerce;

    ob_start();

    ?>
    <span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
    <?php
    $fragments['span.items'] = ob_get_clean();
    return $fragments;
}

add_action('widgets_init', 'fancy_lab_sidebars');

function fancy_lab_sidebars()
{
    register_sidebar([
        'name' => __('Fancy lab Main Sidebar', 'fancy-lab'),
        'id' => 'fancy-lab-sidebar-1',
        'description' => __('Drag and drop widgets here', 'fancy-lab'),
        'before_widget' => '<div id="%1$s" class="widget-wrapper widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ]);

    register_sidebar([
        'name' => __('Sidebar Shop', 'fancy-lab'),
        'id' => 'fancy-lab-sidebar-shop',
        'description' => __('Drag and drop WooCommerce widgets here', 'fancy-lab'),
        'before_widget' => '<div id="%1$s" class="widget-wrapper widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ]);

    register_sidebar([
        'name' => __('Footer sidebar 1', 'fancy-lab'),
        'id' => 'fancy-lab-sidebar-footer1',
        'description' => __('Drag and drop widgets here', 'fancy-lab'),
        'before_widget' => '<div id="%1$s" class="widget-wrapper widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ]);

    register_sidebar([
        'name' => __('Footer sidebar 2', 'fancy-lab'),
        'id' => 'fancy-lab-sidebar-footer2',
        'description' => __('Drag and drop widgets here', 'fancy-lab'),
        'before_widget' => '<div id="%1$s" class="widget-wrapper widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ]);

    register_sidebar([
        'name' => __('Footer sidebar 3', 'fancy-lab'),
        'id' => 'fancy-lab-sidebar-footer3',
        'description' => __('Drag and drop widgets here', 'fancy-lab'),
        'before_widget' => '<div id="%1$s" class="widget-wrapper widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ]);
}