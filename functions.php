<?php
/**
 * Golden Devices theme functions
 */

if (!defined('ABSPATH')) exit;

/**
 * Theme support
 */
function golden_devices_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);
    add_theme_support('responsive-embeds');
    add_theme_support('custom-logo', [
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    // Image sizes for content
    add_image_size('gd-card', 720, 480, true);
    add_image_size('gd-feature', 1200, 720, true);

    // Register nav menus (so admin can manage links)
    register_nav_menus([
        'primary' => __('Primary Navigation', 'golden_devices'),
        'footer'  => __('Footer Navigation',  'golden_devices'),
    ]);
}
add_action('after_setup_theme', 'golden_devices_setup');

/**
 * Enqueue styles & scripts
 *
 * Uses filemtime() of style.css as the version string so the browser is
 * forced to re-download the file every time it actually changes. This
 * eliminates the "I changed the CSS but nothing happens" problem caused
 * by browser/WordPress caching.
 */
function golden_devices_assets() {
    $style_path = get_template_directory() . '/style.css';
    $style_ver  = file_exists($style_path) ? filemtime($style_path) : '1.0';

    wp_enqueue_style(
        'golden-devices-style',
        get_stylesheet_uri(),
        [],
        $style_ver
    );

    // Optional nav script (only if file exists)
    $nav_js = get_template_directory() . '/assets/js/navigation.js';
    if (file_exists($nav_js)) {
        wp_enqueue_script(
            'golden-devices-nav',
            get_template_directory_uri() . '/assets/js/navigation.js',
            [],
            filemtime($nav_js),
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'golden_devices_assets');

/**
 * Add body class so we can scope styles to home vs sub-pages
 */
function golden_devices_body_classes($classes) {
    if (is_404()) $classes[] = 'is-error-404';
    if (is_page()) $classes[] = 'is-subpage';
    return $classes;
}
add_filter('body_class', 'golden_devices_body_classes');

/**
 * Clean up <head>
 */
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');

/**
 * Open Graph + basic SEO meta in <head>
 */
function golden_devices_meta_tags() {
    if (is_front_page()) {
        $title = get_bloginfo('name') . ' — Precision mmWave components';
        $desc  = 'Precision-engineered mmWave antenna and waveguide components — manufactured in Erlangen, Germany.';
    } elseif (is_singular()) {
        $title = get_the_title() . ' | ' . get_bloginfo('name');
        $desc  = wp_strip_all_tags(get_the_excerpt());
        if (!$desc) $desc = get_bloginfo('description');
    } else {
        $title = wp_get_document_title();
        $desc  = get_bloginfo('description');
    }
    $url = (is_singular() ? get_permalink() : home_url(add_query_arg(null, null)));

    echo "\n<meta name=\"description\" content=\"" . esc_attr($desc) . "\">\n";
    echo '<meta property="og:title" content="' . esc_attr($title) . "\">\n";
    echo '<meta property="og:description" content="' . esc_attr($desc) . "\">\n";
    echo '<meta property="og:url" content="' . esc_url($url) . "\">\n";
    echo '<meta property="og:type" content="website">' . "\n";
    echo '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . "\">\n";
    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
}
add_action('wp_head', 'golden_devices_meta_tags', 5);
