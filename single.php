<?php get_header() ?>

<section class="page-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-8 content-dm">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): ?>

                        <?php the_post() ?>
                        
                        <div class="p-2">
                            <div class="post-title-single">
                                <?php the_title() ?>
                            </div>
                            <div class="post-data">
                                <?= get_the_date() ?>
                            </div>
                            <div class="post-content">
                                <?php the_content() ?>
                            </div>
                        </div>

                    <?php endwhile ?>
                    
                    <div style="clear: both;"></div>
                    <div class="pagination">
                        <div class="previous-page">
                            <?php previous_post_link() ?>
                        </div>
                        <div class="next-page">
                            <?php next_post_link() ?>
                        </div>
                    </div>

                    <div class="comments-area">
                        <?php if(comments_open()): ?>
                            <?php comments_template() ?>
                        <?php endif ?>
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