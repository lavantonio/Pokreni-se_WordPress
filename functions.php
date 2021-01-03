<?php

function pokreni_se_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    // navigacija
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
    ));

}
add_action('after_setup_theme', 'pokreni_se_theme_setup');


function sidebar() {
    register_sidebar(array(
        'name' => 'Sidebar1',
        'id' => 'sidebar1',
        'before_widget' => '<aside>',
        'after_widget' => '</aside>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => 'Sidebar2',
        'id' => 'sidebar2',
        'before_widget' => '<aside>',
        'after_widget' => '</aside>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    }
add_action('widgets_init', 'sidebar');
