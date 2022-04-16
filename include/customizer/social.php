<?php
function dm_social_customizer($wp_customize) {
    // Settings
    $wp_customize->add_setting("dm_facebook", [ "default" => "" ]);
    $wp_customize->add_setting("dm_googleplus", [ "default" => "" ]);
    $wp_customize->add_setting("dm_instagram", [ "default" => "" ]);
    $wp_customize->add_setting("dm_twitter", [ "default" => "" ]);
    $wp_customize->add_setting("dm_youtube", [ "default" => "" ]);

    // Sections
    $wp_customize->add_section("dm_social_section", [
        "title" => "Redes sociais",
        "priority" => "1",
        "panel" => "opcoes"
    ]);

    // Controllers
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            "dm_facebook",
            [
                "label" => "Link do facebook",
                "section" => "dm_social_section",
                "settings" => "dm_facebook",
                "type" => "text"
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            "dm_googleplus",
            [
                "label" => "Link do Google Plus",
                "section" => "dm_social_section",
                "settings" => "dm_googleplus",
                "type" => "text"
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            "dm_instagram",
            [
                "label" => "Link do Instagram",
                "section" => "dm_social_section",
                "settings" => "dm_instagram",
                "type" => "text"
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            "dm_twitter",
            [
                "label" => "Link do Twitter",
                "section" => "dm_social_section",
                "settings" => "dm_twitter",
                "type" => "text"
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            "dm_youtube",
            [
                "label" => "Link do Youtube",
                "section" => "dm_social_section",
                "settings" => "dm_youtube",
                "type" => "text"
            ]
        )
    );

}