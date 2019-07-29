<div class="container-fluid container-fluid__contacts" id="contacts">
	<div class="contacts__questions">Интересно? Пишите, и мы ответим на все вопросы:</div>
	<div class="contacts__info">
		<div class="contacts__info-vk">
			<span class="icon-vk vk-icon"></span>&nbsp;
			<a href="<?= $vk ?>" target="_blank" class="contacts__vk-page">
				<?= get_host_from_link($vk) ?>
			</a>
		</div>
		<div class="contacts__info-email">
			<span class="icon-envelope envelope"></span>&nbsp;
			<a href="mailto:<?= $email ?>" target="_blank" class="contacts__email">
				<span><?= $email ?></span>
			</a>
		</div>
	</div>
</div>