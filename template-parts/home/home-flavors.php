<section class="flavors bg-pink-500" id="sabores">
    <div class="container">
        <!-- header -->
        <header class="flavors__header">
            <h2>Nossos Sorvetes</h2>
        </header>
        <!-- end of header -->

        <p>Nosso <b>sorvete</b> é demais! Pois além de ser bem gostoso e cremoso, também tem aquele gostinho da infância!</p>
        <p>O <b>Sorvete Retrô</b> é um delicioso <b>sorvete</b> artesanal de gelatina! Ahhh! E ele é <b>0% Lactose!</b></p>
        <p>Quem prova se apaixona!</p>

        <!-- row -->
        <div class="flavors__row">
            <?php
                $jsonFlavors = file_get_contents(__DIR__ . '/../../includes/flavors.json');
                $flavorsList = json_decode($jsonFlavors, true);

                foreach ($flavorsList['flavors'] as $flavor):
            ?>

                <!-- card -->
                <article class="flavors__row__card">
                    <!-- image -->
                    <div class="flavors__row__card__image">
                        <picture>
                            <source srcset="<?= image($flavor['image'] . '.webp'); ?>" type="image/webp">
                            <img src="<?= image($flavor['image'] . '.png'); ?>" alt="Conheça o nosso Sorvete sabor <?= $flavor['flavor']; ?>" loading="lazy">
                        </picture>
                    </div>
                    <!-- end of image -->

                    <!-- header -->
                    <header class="flavors__row__card__header">
                        <h3><?= $flavor['flavor']; ?></h3>
                    </header>
                    <!-- end of header -->
                </article>
                <!-- end of card -->

            <?php endforeach; ?>
        </div>
        <!-- end of row -->
    </div>
</section>