<section class="testimonial bg-pink-500">
    <div class="container">
        <!-- header -->
        <header class="testimonial__header">
            <h2>Quem experimentou, recomenda!</h2>
            <p>Veja algumas das várias empresas que recomendam a <b>Sorvete Retrô!</b></p>
        </header>
        <!-- end of header -->

        <div class="testimonial__carousel owl-carousel">
            <?php
            $jsonTestimonial = file_get_contents(__DIR__ . '/../../includes/testimonial.json');
            $testimonialList = json_decode($jsonTestimonial, true);

            foreach ($testimonialList['testimonial'] as $testimony):

            ?>
                <!-- item -->
                <div class="testimonial__carousel__item">

                    <!-- image -->
                    <div class="testimonial__carousel__item__image">
                        <picture>
                            <source srcset="<?= image('evento-sorvete-retro-' . $testimony['image'] . '.webp'); ?>" type="image/webp">
                            <img src="<?= image('evento-sorvete-retro-' . $testimony['image'] . '.png'); ?>" alt="A Sorvete Retrô esteve na empresa: <?= $testimony['name']; ?>" loading="lazy">
                        </picture>
                    </div>
                    <!-- end of image -->

                    <p><?= $testimony['name']; ?></p>

                </div>
                <!-- end of item -->

                <?php endforeach; ?>
        </div>
    </div>
</section>