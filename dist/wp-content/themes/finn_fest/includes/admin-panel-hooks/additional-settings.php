<?php

/**
 *  Функция добавляет дополнительные настройки в основной блок настроек админки
 */


add_action('admin_init', 'additional_settings');

function additional_settings()
{
    add_settings_section(
        'over_options',
        'Дополнительные настройки сайта',
        'over_option_description',
        'general'
    );

    add_settings_field(
        'contact_phone',
        'Контактный телефон',
        'contact_phone_field',
        'general',
        'over_options'
    );

    register_setting('general', 'contact_phone');

    add_settings_field(
        'vk_link',
        'VK',
        'vk_link_field',
        'general',
        'over_options'
    );

    register_setting('general', 'vk_link');

    add_settings_field(
        'instagram_link',
        'Instagram',
        'instagram_link_field',
        'general',
        'over_options'
    );

    register_setting('general', 'instagram_link');

    add_settings_field(
        'vk_fest_page_id',
        'ID группы VK фестиваля',
        'vk_fest_page_id_field',
        'general',
        'over_options'
    );

    register_setting('general', 'vk_fest_page_id');

    add_settings_field(
        'contact_email',
        'Контактный email',
        'contact_email_field',
        'general',
        'over_options'
    );

    register_setting('general', 'contact_email');

    add_settings_field(
        'footer_banner_text',
        'Текст баннера в футере',
        'footer_banner_text_field',
        'general',
        'over_options'
    );

    register_setting('general', 'footer_banner_text');

    add_settings_field(
        'order_form_shortcode',
        'Шорткод формы заказа билета',
        'order_form_shortcode_field',
        'general',
        'over_options'
    );

    register_setting('general', 'order_form_shortcode');
}

function over_option_description()
{
    echo '<p>Настройки для главной страницы сайта</p>';
}

function contact_phone_field()
{
    echo '<input 
    name="contact_phone"  
    type="text" 
    value="' . get_option('contact_phone') . '" 
    class="code2"
    />';
}

function vk_link_field()
{
    echo '<input 
    name="vk_link"  
    type="text" 
    value="' . get_option('vk_link') . '" 
    class="code2"
    />';
}

function instagram_link_field()
{
    echo '<input 
    name="instagram_link"  
    type="text" 
    value="' . get_option('instagram_link') . '" 
    class="code2"
    />';
}

function contact_email_field()
{
    echo '<input 
    name="contact_email"  
    type="text" 
    value="' . get_option('contact_email') . '" 
    class="code2"
    />';
}

function vk_fest_page_id_field()
{
    echo '<input 
    name="vk_fest_page_id"  
    type="text" 
    value="' . get_option('vk_fest_page_id') . '" 
    class="code2"
    />';
}

function order_form_shortcode_field()
{
    echo '<input 
    name="order_form_shortcode"  
    type="text" 
    value="' . get_option('order_form_shortcode') . '" 
    class="code2"
    />';
}

function footer_banner_text_field()
{
    $text= get_option('footer_banner_text');
    wp_editor($text, 'terms_wp_content', $settings = ['textarea_name'=>'footer_banner_text', 'wpautop'=>false]);
}
