<?php

		$frontpage_id = get_option( 'page_on_front' );

		$footer_photo_slider_title = CFS()->get('footer_photo_slider_title', $frontpage_id);
		$footer_photo_slider = CFS()->get('footer_photo_slider', $frontpage_id);
if (!is_null($footer_photo_slider)) {
		?>

<div class="container-fluid container-fluid__festivalphoto">
	<div class="container container__festival-photo">
		<h3 class="header-photo"><?= $footer_photo_slider_title ?></h3>
		<div class="owl-carousel owl-carousel-photos owl-theme">
			<?php foreach($footer_photo_slider as $slide) {?>
				<div class="item">
					<a href="<?= $slide['slide_img'] ?>" data-lightbox="photos-gallery">
						<img src="<?= $slide['slide_preview'] ?>" alt="<?= $footer_photo_slider_title ?>">
					</a>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

<?php }