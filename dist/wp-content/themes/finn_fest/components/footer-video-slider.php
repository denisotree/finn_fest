<?php

$frontpage_id = get_option( 'page_on_front' );

$footer_video_slider_title = CFS()->get('footer_video_slider_title', $frontpage_id);
$footer_video_slider = CFS()->get('footer_video_slider', $frontpage_id);
if (!is_null($footer_video_slider)) {
	?>

	<div class="container-fluid container-fluid__festivalvideo">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://www.youtube.com/iframe_api"></script>
		<div class="container container__festival-video">
			<h3 class="header-video"><?= $footer_video_slider_title ?></h3>
			<div class="owl-carousel owl-carousel-video owl-theme">
				<?php 

				

				foreach($footer_video_slider as $i => $slide) {?>
					<div class="item myitem" data-toggle="modal" data-target="#modal-video<?= $i ?>">
						<a href="#video" name="video">
							<img src="<?= $slide['slide_preview'] ?>" alt="<?= $slide['slide_video_title'] ?>">
							<span class="icon-play play"></span>
						</a>
					</div>
				<?php } ?>
			</div>
			<?php foreach($footer_video_slider as $i => $slide) {?>
				<div class="modal" id="modal-video<?= $i ?>">
					<div class="modal-dialog modal-dialog-centered modal-dialog__video">
						<div class="modal-content modal-content__video">
							<div class="modal-body">
								<iframe class="embed-responsive-item" src="" id="video<?= $i ?>"  frameborder="0" gesture="media" allowfullscreen allow="autoplay"></iframe>
							</div>
						</div>
					</div>
				</div>
				<script>
					$(document).ready(function (){

						$('#modal-video<?= $i ?>').on('shown.bs.modal', function (e) {
							$("#video<?= $i ?>").attr('src', "<?= $slide['slide_video'] ?>?modestbranding=1&amp;showinfo=0" ); 
						})
						$('#modal-video<?= $i ?>').on('hide.bs.modal', function (e) {
							$("#video<?= $i ?>").attr('src', ''); 
						}) 

					})
				</script>
			<?php } ?>
		</div>
	</div>

	<?php

}