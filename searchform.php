<form action="<?= get_site_url() ?>" method="GET">
    <input type="search" name="s" class="search-input" placeholder="Digite um termo" value="<?php the_search_query() ?>" />
    <input type="submit" class="search-submit" value="Pesquisar"/>
</form>