<article <?php post_class() ?>>
    <a href="<?php the_permalink() ?>" class="link-post">
        <div class="post-item">

            <div class="post-comment-area">
                <?php comments_number('0', '1', '%') ?>
            </div>

            <div class="post-info">

                <?php if(get_post_format() == "video"): ?>

                    <?php
                        $content = apply_filters("the_content", get_the_content());
                        $video = get_media_embedded_in_content($content, [
                            "iframe", "embed", "object", "video"
                        ]);
                    ?>
                    <?php if($video): ?>
                        <div class="post-video">
                            <?=$video[0]?>
                        </div>
                    <?php endif ?>

                <?php elseif(get_post_format() == "audio"): ?>

                    <?php
                        $content = apply_filters("the_content", get_the_content());
                        $audio = get_media_embedded_in_content($content, [
                            "iframe", "audio"
                        ]);
                    ?>
                    <?php if($audio): ?>
                        <div class="post-audio">
                            <?=$audio[0]?>
                        </div>
                    <?php endif ?>

                <?php elseif(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail("medium", [ 
                        "class" => "post-thumb" 
                    ]); ?>
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