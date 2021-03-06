<?php get_header() ?>

<section class="page-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 content-dm">

                <h1 class="mb-4 fs-3 ps-2"><?= the_archive_title() ?></h1>

                <?php if(have_posts()): ?>
                    <?php while(have_posts()): ?>

                        <?php the_post() ?>
                        <?php get_template_part("template-parts/post") ?>

                    <?php endwhile ?>
                    
                    <div style="clear: both;"></div>
                    <div class="pagination">
                        <div class="previous-page">
                            <?php previous_posts_link("Anterior") ?>
                        </div>
                        <div class="next-page">
                            <?php next_posts_link("Próximo") ?>
                        </div>
                    </div>

                <?php endif ?>

            </div>
            <div class="col-sm-4 content-sidebar-dm">
                <?php get_sidebar() ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>