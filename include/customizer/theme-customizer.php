<?php
require get_template_directory()."/include/customizer/social.php";
require get_template_directory()."/include/customizer/layout.php";

function dm_customize_register($wp_customizer) {

    // $wp_customizer->get_section("title_tagline")->title = "Informações principais";
    $wp_customizer->get_section("custom_css")->description = "";

    $wp_customizer->add_panel("opcoes", [
        "title" => "Opções do tema",
        "priority" => 200
    ]);

    dm_social_customizer($wp_customizer);

    dm_layout_customizer($wp_customizer);

    // echo "<pre>";
    // print_r($wp_customizer);
    // echo "</pre>";

}