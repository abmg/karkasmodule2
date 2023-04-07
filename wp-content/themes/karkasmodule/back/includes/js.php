<?php

/** Регистрирует js */
function km_add_js()
{
    $templateDirectory = get_template_directory_uri();
    $jss = [
        [
            'name' => 'jquery',
            'src' => 'https://yastatic.net/jquery/3.3.1/jquery.min.js',
            'deps' => [],
            'ver' => '',
            'inFooter' => true
        ],
        [
            'name' => 'bootstrap',
            'src' => $templateDirectory . '/front/lib/bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js',
            'deps' => [],
            'ver' => '',
            'inFooter' => true
        ],
        [
            'name' => 'fontawesome',
            'src' => $templateDirectory . '/front/js/common.js',
            'deps' => [],
            'ver' => '',
            'inFooter' => true
        ],
    ];

    foreach ($jss as $js) {
        wp_enqueue_script($js['name'], $js['src'], $js['deps'], $js['ver'], $js['inFooter']);
    }
}