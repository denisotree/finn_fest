<?php
get_header();

while (have_posts()) :
    the_post();

    ?>
    <div class="section__container">
        <?php get_component('components/single-page.php', []); ?>
    </div>
<?php
endwhile;

get_footer();
