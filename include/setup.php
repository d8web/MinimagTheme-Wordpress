<?php

function dm_theme_styles() {
    wp_enqueue_style("bootstrap_css", get_template_directory_uri()."/assets/css/bootstrap.min.css");
    wp_enqueue_style("template_css", get_template_directory_uri()."/assets/css/template.css");

    wp_enqueue_script("bootstrap_bundle_js", get_template_directory_uri()."/assets/js/bootstrap.bundle.min.js", [], false, true);
    wp_enqueue_script("script_js", get_template_directory_uri()."/assets/js/script.js", ["bootstrap_bundle_js"], false, true);
}

function dm_after_setup() {
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    add_theme_support("custom-logo");

    add_theme_support("post-formats", [ "video", "audio" ]);

    register_nav_menu("primary", "Menu primário");
    register_nav_menu("top", "Menu Superior");
}

function dm_widgets() {
    register_sidebar([
        "name" => "Sidebar Lateral",
        "id" => "dm_sidebar",
        "description" => "Sidebar lateral",
        "before_widget" => '<div id="%1$s" class="widget %2$s">',
        "after_widget" => "</div>",
        "before_title" => '<h4 class="widget-title">',
        "after_title" => '</h4>'
    ]);

    register_sidebar([
        "name" => "Sidebar Rodapé",
        "id" => "dm_footersidebar",
        "description" => "Sidebar rodapé",
        "before_widget" => '<div id="%1$s" class="widget %2$s">',
        "after_widget" => "</div>",
        "before_title" => '<h4 class="widget-title">',
        "after_title" => '</h4>'
    ]);
}