<section id="galeria" class="gallery">
    <div class="container">
        <!-- header -->
        <header class="gallery__header d-none">
            <h2>Galeria</h2>
        </header>
        <!-- end of header -->

        <!-- row -->
        <div class="gallery__row">
            <?php
            for($img=0; $img < 10; $img++){
                $num = 'photo_' . $img;
                $protocols = array('http://', 'http://www.', 'www.');
                $data = esc_attr( get_option($num));
                ?>

                <!-- card -->
                <a href="<?= str_replace($protocols, "https://", $data); ?>" class="gallery__row__card__image">
                        <img src="<?= str_replace($protocols, "https://", $data); ?>" alt="<?= SITE['name']; ?> - Conheça os nossos eventos" loading="lazy">
                </a>
                <!-- end of card -->

            <?php }?>
        </div>
        <!-- end of row -->
    </div>
</section>