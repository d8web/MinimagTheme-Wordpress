<?php

function dm_layout_customizer( $wp_customize ) {

    // Settings
    $wp_customize->add_setting("dm_topmenushow", [ "default" => "yes" ]);
    $wp_customize->add_setting("dm_searchshow", [ "default" => "yes" ]);
    $wp_customize->add_setting("dm_privacy_url", [ "default" => "" ]);

    // Sections
    $wp_customize->add_section("dm_layout_section", [
        "title" => "Opções de layout",
        "priority" => 2,
        "panel" => "opcoes"
    ]);

    // Controllers
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            "dm_topmenushow",
            [
                "label" => "Mostrar menu superior",
                "section" => "dm_layout_section",
                "settings" => "dm_topmenushow",
                "type" => "checkbox", // text, checkbox, textarea, select, radio, dropdown-pages
                "choices" => [
                    "yes" => "Sim"
                ]
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            "dm_searchshow",
            [
                "label" => "Mostrar busca",
                "section" => "dm_layout_section",
                "settings" => "dm_searchshow",
                "type" => "checkbox", // text, checkbox, textarea, select, radio, dropdown-pages
                "choices" => [
                    "yes" => "Sim"
                ]
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            "dm_privacy_url",
            [
                "label" => "Página de Política de Privacidade",
                "section" => "dm_layout_section",
                "settings" => "dm_privacy_url",
                "type" => "dropdown-pages", // text, checkbox, textarea, select, radio, dropdown-pages
            ]
        )
    );

}