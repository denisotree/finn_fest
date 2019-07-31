</main>

<footer>
	<?php

	$contacts__email = get_option( 'contact_email' );
	$contacts__vk = get_option( 'vk_link' );

	get_component('components/footer-contacts.php', [
		'email' => $contacts__email,
		'vk' => $contacts__vk
	]);

	?>

	<div class="container container__social-info">
		<?php

		get_component('components/footer-social-widgets.php', [
			'vk_fest' => get_option('vk_fest_page_id')
		]);

		get_component('components/footer-info-banner.php', [
			'banner_text' => get_option('footer_banner_text')
		]);

		?>
	</div>
	<?php
	get_component('components/footer-photo-slider.php', []);

	get_component('components/footer-video-slider.php', []);

	get_component('components/footer-copyright.php', []);

	get_component('components/footer-modal-form.php', []);

	?>
</footer>



</body>

<?php wp_footer();?>