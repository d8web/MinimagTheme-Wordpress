<?php get_header() ?>

<section class="page-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-8 content-dm">

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : ?>

                        <?php the_post() ?>
                        <?php get_template_part("template-parts/post") ?>

                    <?php endwhile ?>

                    <div style="clear: both;"></div>
                    <div class="pagination">

                        <?php
                            //Protect against arbitrary paged values
                            $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

                            $args = array(
                                'posts_per_page' => 3,
                                'paged' => $paged,
                            );

                            $the_query = new WP_Query($args);

                            echo paginate_links(array(
                                'current' => max(1, get_query_var('paged')),
                                'total' => $the_query->max_num_pages,
                                "show_all" => false, // true mostra todos os números da paginação
                                "end_size" => 1,
                                "mid_size" => 1,
                                "prev_next" => true,
                                // false remove botão [anterior] e [próximo] da paginação!
                                // Caso prev_next seja true, posso mudar o texto do botão prev e next adicionando as propriedas prev_text => "valor" e next_text => "valor"
                                "prev_text" => "<",
                                "next_text" => ">",
                                "before_page_number" => "[",
                                "after_page_number" => "]"
                            ));
                        ?>

                        <!-- <div class="previous-page">
                            <?php // previous_posts_link("Anterior") 
                            ?>
                        </div>
                        <div class="next-page">
                            <?php // next_posts_link("Próximo") 
                            ?>
                        </div> -->
                    </div>

                <?php endif ?>

            </div>
            <div class="col-sm-12 col-lg-4 content-sidebar-dm">
                <?php get_sidebar() ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>