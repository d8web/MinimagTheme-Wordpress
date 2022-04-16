<?php
// Include
require get_template_directory()."/include/setup.php";
require get_template_directory()."/include/customizer/theme-customizer.php";

// Hooks
add_action("wp_enqueue_scripts", "dm_theme_styles");
add_action("after_setup_theme", "dm_after_setup");
add_action("widgets_init", "dm_widgets");

add_action("customize_register", "dm_customize_register");