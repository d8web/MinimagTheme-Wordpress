    <footer>
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <?php if(is_active_sidebar("dm_footersidebar")): ?>
                        <?php dynamic_sidebar("dm_footersidebar") ?>
                    <?php endif ?>
                </div>
            </div>
        </div>
        <div class="main-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">Todos os direitos reservados!</div>
                    <div class="col-sm-6 d-flex justify-content-end">Criado por Daniel</div>
                    <div class="main_footer_scroll">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/up.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer() ?>

</body>
</html>