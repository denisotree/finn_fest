<?php

/**
 * Добавляет кастомный CSS в админ панель
 */

add_action('admin_init', 'custom_css_settings');

function custom_css_settings()
{
    add_settings_section(
        'css_options',
        'Пользовательские стили для админ панели',
        '',
        'general'
    );

    add_settings_field(
        'custom_css',
        'CSS',
        'custom_css_field',
        'general',
        'css_options'
    );

    register_setting('general', 'custom_css');
}

function custom_css_field()
{
    echo '<textarea 
		name="custom_css"
		
		class="code2"
		rows="8"
	 >' . get_option('custom_css') . '</textarea>';
}

add_action('admin_head', 'admin_panel_styles');

function admin_panel_styles() {
    echo '<style>' . get_option('custom_css') . '</style>';
}
