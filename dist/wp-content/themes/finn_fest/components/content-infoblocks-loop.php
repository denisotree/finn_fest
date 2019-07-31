<?php

$infoblocks_query = new WP_Query($query_args);

if ($infoblocks_query->have_posts())
{

    ?>
    <div class="container">
        <?php
        while ($infoblocks_query->have_posts())
        {
            $infoblocks_query->the_post();
            $tabs = CFS()->get('tabs');
            $is_button = CFS()->get('tabs_button');
            $title = get_the_title();
            $thumbnail = get_the_post_thumbnail_url('', 'large');
            $n = $infoblocks_query->current_post;

            $tag = CFS()->get('infoblock_tag');

            ?>

            <section class="content-block <?= $n % 2 ? "content-block__text-right" : "content-block__text-left" ?>" id="<?= $tag ?>">
                <div class="content-block__text">
                    <h2><?= $title ?></h2>
                    <ul class="nav tabs-menu-universal universal-menu" id="myTab" role="tablist">
                        <?php foreach($tabs as $i => $tab) {?>
                            <li>
                                <a href="<?= $tab['tab_nav_link'] ?>" class="<?php if ($i == 0) echo 'active'?>" <?php if($tab['tab_nav_external'] != 1) echo 'data-toggle="tab"' ?> role="tab" aria-controls="<?= $tab['tab_nav_link'] ?>" <?php if ($i == 0) echo 'aria-selected="true"'?>><?= $tab['tab_nav_text'] ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                    <div class="tab-content universal__description">
                        <?php foreach($tabs as $i => $tab) {?>
                            <div class="tab-pane <?php if ($i == 0) echo 'active'?>" id="<?=preg_replace('~[#]~', '', $tab['tab_nav_link']); ?>" role="tabpanel">
                                <div class="tabs-content__text">
                                    <?= $tab['tab_content'] ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <?php if ($is_button) {?>
                        <div class="likely likely-big mylikely">
                            <div class="facebook">Поделиться</div>
                            <div class="vkontakte">Поделиться</div>
                        </div>
                        <div class="share">
                            <a href="#" class="banner__btn-action" data-tikettype="Тур на 1 день - индивидуально" data-toggle="modal" data-target="#modal-buyticket">
                                <span>Купить тур</span><span class="icon-left-arrow btn-ticket__arrow"></span>
                            </a>
                        </div>
                    <?php } ?>
                </div>
                <div class="content-block_image">
                    <img id="lineupimg" src="<?= $thumbnail ?>" alt="<?= $title ?>">
                </div>
            </section>
        <?php } 
        wp_reset_postdata();
        ?>
    </div>
<?php } ?>
