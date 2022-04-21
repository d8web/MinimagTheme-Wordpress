<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?=bloginfo("charset")?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>

    <header>

        <?php if(get_theme_mod("dm_topmenushow") == "yes"): ?>
            <div class="top-header">
                <div class="container">
                    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
                        <button
                            class="navbar-toggler"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#navbarNav"
                            aria-controls="navbarNav"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                        >
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">

                            <?php if(has_nav_menu("top")): ?>
                                <?php
                                    wp_nav_menu([
                                        "theme_location" => "top",
                                        "container" => false,
                                        "fallback_cb" => false,
                                        "menu_class" => "navbar-nav"
                                    ]);
                                ?>
                            <?php endif ?>

                        </div>
                    </nav>
                </div>
            </div>
        <?php endif ?>

        <div class="main-header">
            <div class="container">
                <div class="logo">
                    <?php if(has_custom_logo()): ?>
                        <?php the_custom_logo() ?>
                    <?php endif ?>
                </div>
                <div class="main-nav-border">
                    <div class="main-nav">
                        <?php if(has_nav_menu("primary")): ?>
                            <?php
                                wp_nav_menu([
                                    "theme_location" => "primary",
                                    "container" => false,
                                    "fallback_cb" => false,
                                    "menu_class" => "menu-primary"
                                ]);
                            ?>
                        <?php endif ?>
                        <div class="search-area">
                            <?php if(get_theme_mod("dm_searchshow") == "yes"): ?>
                                <?php get_search_form() ?>
                            <?php endif ?>
                        </div>
                    </div>

                    <?php if(is_home()): // is_single, verifica se é um post, is_page, se está dentro de uma página, is_home, se é a página home, is_search, se está dentro da página de busca ?>
                        <div class="main-info">
                            <div class="row">
                                <div class="col-md-6 col-xl-8 ramdom-post">
                                    <strong class="me-5">Já viu?</strong>

                                    <?php if(function_exists("wpp_get_mostpopular")): ?>

                                            <?php wpp_get_mostpopular([
                                                'limit' => 1,
                                                "wpp_start" => "",
                                                "wpp_end" => "",
                                                "post_html" => "<a href='{url}'>{text_title}</a>"
                                            ]); ?>

                                    <?php else: ?>

                                        <?php $dm_query = new WP_Query([
                                            "posts_per_page" => 1,
                                            "post_type" => "post",
                                            "orderby" => "rand"
                                        ]); ?>
                                        
                                        <?php if($dm_query->have_posts()): ?>
                                            <?php while($dm_query->have_posts()): ?>
                                                <?php $dm_query->the_post(); ?>
                                                <a href="<?=the_permalink()?>">
                                                    <?=the_title()?>
                                                </a>
                                            <?php endwhile ?>
                                            <?php wp_reset_postdata(); ?>
                                        <?php endif ?>

                                    <?php endif ?>

                                </div>
                                <div class="col-md-6 col-xl-4 social-area">
                                    <div class="social-text">SIGA-NOS</div>
                                    <div class="social-icons">

                                        <?php if(get_theme_mod("dm_facebook")): ?>
                                            <a href="<?= get_theme_mod("dm_facebook") ?>" target="_blank">
                                                <img
                                                    src="<?= get_template_directory_uri() ?>/assets/images/facebook.png"
                                                    alt="facebook-icon"
                                                />
                                            </a>
                                        <?php endif ?>
                                        
                                        <?php if(get_theme_mod("dm_googleplus")): ?>
                                            <a href="<?= get_theme_mod("dm_googleplus") ?>" target="_blank">
                                                <img
                                                    src="<?= get_template_directory_uri() ?>/assets/images/gplus.png"
                                                    alt="google-plus-icon"
                                                />
                                            </a>
                                        <?php endif ?>
                                        
                                        <?php if(get_theme_mod("dm_instagram")): ?>
                                            <a href="<?= get_theme_mod("dm_instagram") ?>" target="_blank">
                                                <img
                                                    src="<?= get_template_directory_uri() ?>/assets/images/instagram.png"
                                                    alt="instagram-icon"
                                                />
                                            </a>
                                        <?php endif ?>
                                        
                                        <?php if(get_theme_mod("dm_twitter")): ?>
                                            <a href="<?= get_theme_mod("dm_twitter") ?>" target="_blank">
                                                <img
                                                    src="<?= get_template_directory_uri() ?>/assets/images/twitter.png"
                                                    alt="twitter-icon"
                                                />
                                            </a>
                                        <?php endif ?>
                                        
                                        <?php if(get_theme_mod("dm_youtube")): ?>
                                            <a href="<?= get_theme_mod("dm_youtube") ?>" target="_blank">
                                                <img
                                                    src="<?= get_template_directory_uri() ?>/assets/images/youtube.png"
                                                    alt="youtube-icon"
                                                />
                                            </a>
                                        <?php endif ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </div>

        <?php if(get_header_image()): ?>
            <section class="container custom-header">
                <img
                    src="<?php header_image() ?>"
                    width="<?php // echo get_custom_header()->width; ?>"
                    height="<?php // echo get_custom_header()->height; ?>"
                    alt=""
                />
            </section>
        <?php endif ?>

    </header>