<div class="logo">
    <a href="/">
        <?php
        $logo_img = '';
        if( $custom_logo_id = get_theme_mod('custom_logo') ){
            $logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
                'class'    => 'logo-icon',
                'itemprop' => 'logo',
            ) );
        }
        echo $logo_img;
        ?>
    </a>
</div>