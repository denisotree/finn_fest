<?php
get_header();

while (have_posts()) :
    the_post();

    ?>
    <div class="section__container">
        <?php get_component('components/content/single-page.php', []); ?>
        <?= get_the_content() ?>
    </div>
<?php
endwhile;

get_footer();
