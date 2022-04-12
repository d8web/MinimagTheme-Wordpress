<article>
    <a href="<?php the_permalink() ?>" class="link-post">
        <div class="post-item">
            <div class="post-comment-area">
                <?php comments_number('0', '1', '%') ?>
            </div>
            <div class="post-info">
                <?php if(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail("medium", [ "class" => "post-thumb" ]); ?>
                <?php endif ?>
                <div class="post-data">
                    <?= get_the_date() ?>
                </div>
                <div class="post-title">
                    <?php the_title() ?>
                </div>
                <div class="post-resume">
                    <?php
                        $_the_excerpt = get_the_excerpt();
                        $the_excerpt = substr( $_the_excerpt, 0, 200 );
                        echo $the_excerpt;
                        if ( strlen( $the_excerpt ) > 200 )
                            echo ' ...';
                    ?>
                </div>
            </div>
        </div>
    </a>
</article>