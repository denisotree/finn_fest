<div class="modal modal-ticet" id="modal-buyticket" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog__buy-ticket modal-dialog-centered">
        <div class="modal-content modal-content__buy-ticket">
            <div class="modal-header">
                <button type="button" class="close btn-modal-close" data-dismiss="modal" aria-label="Close">
                    <span class="icon-close modal-close"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="howorder">Как вы хотите заказать тур?</div>
                <div class="tabs">
                    <ul class="nav tabs-menu-universal universal-menu" id="myTab" role="tablist">
                        <li>
                            <a href="#radario" data-toggle="tab" role="tab" aria-controls="#radario">Купить онлайн через партнера</a>
                        </li>
                        <li>
                            <a href="#order" class="active" aria-selected="true" data-toggle="tab">Заполнить форму</a>
                        </li>
                        <li>
                            <a href="#vkgroup" data-toggle="tab">Менеджер онлайн через vk</a>
                        </li>
                    </ul>
                    <div class="tab-content modal-body modal-body__form">
                        <div role="tabpanel" class="tab-pane" id="radario">
                            <a href="https://radario.ru/events/40431" target="_blank" class="banner__btn-action modal__btn-action">
                                <div class="form-radario">
                                    Купить на radario.ru
                                </div>
                            </a>
                        </div>
                        <div role="tabpanel" class="tab-pane active show" id="order">
                            <div class="modal-body__form-oreder">
                                <?= do_shortcode(get_option('order_form_shortcode'))?>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="vkgroup">
                            <a href=https://vk.me/vizittravel target="_blank" class="banner__btn-action modal__btn-action">
                                Перейти в нашу группу vk
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>