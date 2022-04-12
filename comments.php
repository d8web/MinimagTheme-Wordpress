<?php
    if(post_password_required()) {
        return;
    }
?>

<?php if(have_comments()): ?>
    <?php foreach($comments as $comment): ?>
        <div class="d-flex mb-3 mt-2">
            <div class="image-comment"><?=get_avatar($comment, 80)?></div>
            <div class="ms-3 comments-info">
                <strong><?=comment_author()?></strong> - <?=comment_date()?>
                <p><?=comment_text()?></p>
            </div>
        </div>
    <?php endforeach ?>

    <?php the_comments_pagination() // Paginação dos comentários ?>

<?php endif ?>

<?php comment_form([
    "comment_field" => "Comentário: <textarea name='comment' class='form-control mb-3 mt-2'></textarea>",
    "fields" => [
        "author" => "Nome: <input type='text' class='form-control' name='author' placeholder='Digite seu nome'/>",
        "email" => "Email: <input type='email' class='form-control' name='email' placeholder='Digite seu email'/>",
        "url" => "Url: <input type='text' class='form-control' name='url' placeholder='Digite seu site'/>"
    ],
    "class_submit" => "btn btn-primary",
    "label_submit" => "Enviar comentário",
    "title_reply" => "Deixe seu comentário"
]) // Formulário para adicionar comentários ?>