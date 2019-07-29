<?php

if (!function_exists('finn_fest_setup')) :
    function finn_fest_setup()
    {

        load_theme_textdomain('finn_fest', get_template_directory() . '/languages');

        add_theme_support('automatic-feed-links');

        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');

        add_theme_support( 'responsive-embeds' );

        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'finn_fest'),
        ));


        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        add_theme_support('custom-background', apply_filters('finn_fest_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        add_theme_support('customize-selective-refresh-widgets');

        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'finn_fest_setup');

function finn_fest_scripts()
{
    wp_enqueue_style('basic-styles', get_stylesheet_uri(), array(), '1.0.0');

    wp_enqueue_style('finn_fest-styles', get_template_directory_uri() . '/css/styles.min.css', array(), '0.1.1');

    wp_enqueue_script('finn_fest-navigation', get_template_directory_uri() . '/js/scripts.min.js', array(), '0.0.5', true);

}

add_action('wp_enqueue_scripts', 'finn_fest_scripts');

/**
 * Подключаем файлы с кастомными функциями
 *
 * Функции админ панели
 *
 */

require_once __DIR__ . '/includes/admin-panel-hooks/admin-panel-switcher.php';

require_once __DIR__ . '/includes/admin-panel-hooks/additional-settings.php';

require_once __DIR__ . '/includes/admin-panel-hooks/admin-panel-styles.php';

/**
 *  Функции ядра
 */

require_once __DIR__ . '/includes/core_hooks/get-component.php';

require_once __DIR__ . '/includes/core_hooks/archive-title-filter.php';


/**
*  Полезные тулзы
*/

require_once __DIR__ . '/includes/tools/get_phone_link.php';

require_once __DIR__ . '/includes/tools/get_host_from_link.php';



