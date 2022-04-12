<?php get_header() ?>

<section class="page-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 content-dm">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): ?>

                        <?php the_post() ?>
                        
                        <div class="p-2">
                            <div class="post-title-single">
                                <?php the_title() ?>
                            </div>
                            <div class="post-content">
                                <?php the_content() ?>
                            </div>
                        </div>

                    <?php endwhile ?>
                    
                    <div style="clear: both;"></div>

                <?php endif ?>

            </div>
            <div class="col-sm-4 content-sidebar-dm">
                <?php get_sidebar() ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>