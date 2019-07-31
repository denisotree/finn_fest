<?php

$template_path = get_template_directory_uri();

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<base href="<?php home_url(); ?>" />
	<meta charset="<?php bloginfo('charset'); ?>" />
	<?php wp_head(); ?>
</head>
<body>
	
	<header>
		<div class="container">
			<div class="header-contact">
				<a class="toggle-nav" href="#">&#9776;</a>
				<div class="header-contact-phone">
					<span>Тел.: </span>
					<a href="<?= get_phone_link(get_option('contact_phone')); ?>" target="_blank" class="tel"><?= get_option('contact_phone') ?></a>
				</div>
				<div class="header-contact-time">
					<span>Время работы: </span>
					ПН&ndash;ПТ, с 10:00 до&nbsp;19:00
				</div>

				<?php get_component('components/header-logo', []) ?>
				<?php get_component('components/header-social', [
					'vk' => get_option('vk_link'),
					'instagram' => get_option('instagram_link')
				]) ?>
			</div>
		</div>
		<div class="container-fluid container-fluid-header-menu">
			<div class="container">
				<img src="<?= wp_get_attachment_image_url(get_option('second_logo_image')) ?>" class="hor_logo hide_logo" alt="<?= get_bloginfo('title') ?>">
				<div class="header-menu">
					<button type="button" class="close-mobile">
						<span class="icon-close mobile-close"></span>
					</button>
					<?php
					if(is_front_page()) {
						wp_nav_menu([
							'menu' => 'main',
							'container' => '',
							'menu_class' => 'header-menu__list'
						]);
					} else {
						wp_nav_menu([
							'menu' => 'common',
							'container' => '',
							'menu_class' => 'header-menu__list'
						]);
					}

					?>
				</div>
			</div>
		</div>
	</header>

	<main>