<?php

/** Регистрирует стили */
function km_add_css()
{
    $templateDirectory = get_template_directory_uri();
    $csss = [
        [
            'name' => 'fonts',
            'src' => 'https://fonts.googleapis.com/css?family=Exo+2:400,600,600italic,400italic&subset=latin,cyrillic',
            'deps' => [],
            'ver' => '',
            'inFooter' => false
        ],
        [
            'name' => 'bootstrap',
            'src' => $templateDirectory . '/front/lib/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css',
            'deps' => [],
            'ver' => '',
            'inFooter' => false
        ],
        [
            'name' => 'fontawesome',
            'src' => $templateDirectory . '/front/lib/fontawesome-free-6.3.0-web/css/all.min.css',
            'deps' => [],
            'ver' => '',
            'inFooter' => false
        ],
        [
            'name' => 'style',
            'src' => $templateDirectory . '/front/css/style.css',
            'deps' => [],
            'ver' => '',
            'inFooter' => false
        ]
    ];

    foreach ($csss as $css) {
        wp_enqueue_style($css['name'], $css['src'], $css['deps'], $css['ver'], $css['inFooter']);
    }
}