<?php

/**
 * Template name: Front page
 */

get_header(); 

$template_path = get_template_directory_uri();

while (have_posts()) {
	the_post();

$slides = CFS()->get('main_slider');
$slider_title = CFS()->get('main_slider_title');
$slider_tags = CFS()->get('main_slider_tags');
$slider_button = CFS()->get('main_slider_button');

$banner_text = CFS()->get('banner_text');

get_component('components/content-main-slider', [
	'slides' => $slides,
	'title' => $slider_title,
	'tags' => $slider_tags,
	'button_text' => $slider_button
]);

get_component('components/content-welcome-banner', [
	'banner_text' => $banner_text
]);

get_component('components/content-infoblocks-loop.php', [
	'query_args' => [
		'post_type' => 'infoblocks'
	]
]);

?>

<?php

}
get_footer();