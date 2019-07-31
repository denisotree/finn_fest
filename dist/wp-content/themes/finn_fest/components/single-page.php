<div class="container">
	<div class="finn-fest__article">
		<div class="finn-fest__article-title"><h1><?= get_the_title(); ?></h1></div>
		<div class="finn-fest__article-content"><?= get_the_content(); ?></div>
	</div>	
</div>
<?php

$frontpage_id = get_option( 'page_on_front' );
$banner_text = CFS()->get('banner_text', $frontpage_id);
$tikets_block = CFS()->get('tikets_block', $frontpage_id);

get_component('components/content-welcome-banner', [
	'banner_text' => $banner_text
]);

get_component('components/content-infoblocks-loop.php', [
	'query_args' => [
		'post_type' => 'infoblocks',
		'p' => $tikets_block
	]
]);

