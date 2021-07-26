</main>
<!-- end of main -->

<!-- footer -->
<footer class="footer">
    <!-- content -->
    <div class="footer__content bg-blue-500">
        <div class="container">
            <!-- row -->
            <div class="footer__content__row">
                <!-- logo -->
                <div class="footer__content__row__logo">
                    <img src="<?= image('logo.svg'); ?>" alt="Logo <?= SITE['name']; ?>>" loading="lazy">
                </div>
                <!-- end of logo -->

                <!-- midias -->
                <div class="footer__content__row__midias">
                    <a rel="nofollow noreferrer noopener" href="<?= CONTACT['instagram']; ?>" target="_blank" title="Siga-nos no Instagram">
                        <i class="icon-instagram"></i>
                    </a>

                    <a rel="nofollow noreferrer noopener" href="<?= CONTACT['facebook']; ?>" target="_blank" title="Siga-nos no Facebook">
                        <i class="icon-facebook"></i>
                    </a>
                </div>
                <!-- end of midias -->
            </div>
            <!-- end of row -->

            <p><small><?= SITE['name']; ?> - Todos os direitos reservados - <?= date('Y'); ?></small></p>

        </div>
    </div>
    <!-- end of content -->

    <!-- developer -->
    <div class="footer__developer bg-pink-500">
        <div class="container">

            <!-- row -->
            <div class="footer__developer__row">

                <!-- agency -->
                <div class="footer__developer__row__agency">
                    <p>Desenvolvido por <b><a rel="nofollow noreferrer noopener" href="<?= DEV['url']; ?>" target="_blank" title="Agência Especializada em Marketing Digital"><?= DEV['name']; ?></a></b></p>
                </div>
                <!-- end of agency -->

                <!-- validator -->
                <?php if(!is_404()): ?>
                    <div class="footer__developer__row__validator">
                        <?php
                        $protocols = array('http://', 'http://www.', 'https://', 'https://www.', 'www.');

                        if (is_home()) {
                            $urlBase = str_replace($protocols, "", get_bloginfo('wpurl'));
                        }elseif(is_single()){
                            $urlBase = str_replace($protocols, "", get_the_permalink());
                        }
                        else {
                            $urlBase = str_replace($protocols, "", get_bloginfo('wpurl')) . '/' . (get_page_uri());
                        }
                        ?>

                        <a rel="nofollow noreferrer noopener" href="https://validator.w3.org/nu/?showsource=yes&showoutline=yes&showimagereport=yes&doc=https%3A%2F%2F<?= $urlBase ?>%2F" target="_blank" title="Tecnologia W3C">
                            <i class="icon-w3c"></i>
                            W3C Validator
                        </a>
                    </div>
                <?php endif; ?>
                <!-- end of validator -->
            </div>
            <!-- end of row -->

        </div>
    </div>
    <!-- end of developer -->
</footer>
<!-- end of footer -->

<?php wp_footer(); ?>
</body>
</html>