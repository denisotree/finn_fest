<?php
/**
 * Вывод заголовка архива без слова архив
 */

add_filter('get_the_archive_title', function ($title) {
    return preg_replace('~^[^:]+: ~', '', $title);
});
