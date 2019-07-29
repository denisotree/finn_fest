<div class="social-info__widgets">
    <div class="h2">Присоединяйтесь к нам</div>
    <div class="widgets">
        <div class="vizittravel-instagram">
            <iframe src='<?= get_template_directory_uri() ?>/includes/inwidget/index.php?width=250&inline=2&view=6&toolbar=false&preview=large' scrolling='no' frameborder='no' style='border:none;width:250px;height:415px;overflow:hidden;'></iframe>
        </div>
        <div id="fest_vk_widget"></div>
        <!-- VK Widget -->
        <div id="widget-visitravel"></div>
    </div>
</div>

<script src="https://vk.com/js/api/openapi.js" type="text/javascript"></script>
<script type="text/javascript">VK.Widgets.Group("widget-visitravel", {mode: 3, width: "250", height: "400", no_cover: 0}, 180617);</script>
<?php if ($vk_fest) {?>
<script type="text/javascript">VK.Widgets.Group("fest_vk_widget", {mode: 3, width: "250", height: "400", no_cover: 0}, <?= $vk_fest ?>);</script>
<?php } ?>