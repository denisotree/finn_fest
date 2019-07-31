<?php

$template_path = get_template_directory_uri();

?>

<div class="container-fluid container-fluid__header-banner slide-img-0">
    <div class="slider-banner__items">
        <?php
        foreach($slides as $item) {
            ?>
            <div class="slider-banner__item slider-banner__item-0" style="background: url('<?= $item['slide'] ?>') center no-repeat; background-size: cover;"></div>
        <?php } ?>
    </div>
    
    <div class="container container__banner">
        <div class="banner">
            <div class="banner-text">
                <h1 class="banner-text__head"><?= $title ?></h1>
                <p class="banner-text__desc"><?= $tags ?></p>
            </div>
            <a href="#" onclick="yaCounter46915254.reachGoal('bannerBuyTicket'); return true;" class="banner__btn-action-header" data-tikettype="Требуется информация" data-toggle="modal" data-target="#modal-buyticket">
                <span><?= $button_text ?></span><span class="icon-left-arrow btn-ticket__arrow"></span>
            </a>
        </div>
    </div>
</div>