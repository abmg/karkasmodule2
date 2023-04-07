<?php

require_once ('back/includes/css.php');
require_once ('back/includes/js.php');

/** Активация меню */
add_theme_support( 'menus' );

/** Активация кастомных title */
add_theme_support( 'title-tag');

/** Убираем внутренние скрипты и ссылки */
remove_action('wp_head', 'rsd_link');
remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');

/** Подключаем и регистрируем css / js */
add_action('wp_enqueue_scripts', 'km_add_css');
add_action('wp_enqueue_scripts', 'km_add_js');