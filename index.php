<?php get_header(); ?>

<main>
    <!-- hero -->
    <section class="hero">
        <div class="container">

            <!-- header -->
            <header class="hero__header">
                <h2><span>Sorvete Retrô</span>, o sabor da infância que derrete na sua boca.</h2>
            </header>
            <!-- end of header -->

            <!-- container -->
            <div class="hero__container">

                <!-- image -->
                <div class="hero__container__image">
                    <picture>
                        <source srcset="<?= get_template_directory_uri(); ?>/assets/images/sorvete-retro.webp"
                            type="image/webp">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/sorvete-retro.png"
                            alt="Sorvete Retrô" loading="lazy">
                    </picture>
                </div>
                <!-- end of image -->

                <!-- scroll down -->
                <div class="hero__container__scroll">
                    <a rel="nofollow" href="#quem-somos" title="Conheça um pouco mais sobre a Sorvete Retrô">
                        <span></span>
                    </a>
                </div>
                <!-- end of scroll down -->
            </div>
            <!-- end of container -->

        </div>
    </section>
    <!-- end of hero -->

    <!-- about us -->
    <section id="quem-somos" class="aboutUs">
        <div class="container">
            <div class="row">

                <div class="col-6">
                    <!-- header -->
                    <header class="aboutUs__header">
                        <h2>Quem somos</h2>
                    </header>
                    <!-- end of header -->

                    <!-- container -->
                    <div class="aboutUs__container">
                        <p>A <b>Sorvete Retrô</b> nasceu com o objetivo de reviver o clássico sorvete americano!</p>
                        <p>Aquele famoso sorvete da infância!</p>
                        <p>Um dos sorvetes mais antigos existentes!</p>
                        <br>
                        <p>Uma nostalgia deliciosa!</p>
                        <p>Então, o fizemos de uma forma alegre, carismática e altamente profissional!</p>
                        <p>E claro! Sem perder aquela simplicidade das décadas passadas!</p>
                        <br>
                        <p>Vamos contar pra você nossa receita de sucesso!</p>
                        <p>Ela é muito simples!</p>
                        <p>Levamos para seu Evento duas coisas: um sorvete gostoso e muita alegria!</p>
                        <p>E assim geramos encantamento por onde passamos!</p>
                    </div>
                    <!-- end of container -->

                    <!-- cta -->
                    <div class="aboutUs__cta">
                        <!-- header -->
                        <header class="aboutUs__cta__header">
                            <h3>Faça da sua Festa uma grande atração altamente inesquecível!</h3>
                        </header>
                        <!-- end of header -->

                        <a rel="nofollow" href="#contato" class="btn btn--purple"
                            title="Solicite já um orçamento para o seu evento">Peça um orçamento</a>
                    </div>
                    <!-- end of cta -->
                </div>

                <div class="col-6">
                    <picture>
                        <source
                            srcset="<?= get_template_directory_uri(); ?>/assets/images/princesa-tomando-sorvete.webp"
                            type="image/webp">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/princesa-tomando-sorvete.png"
                            alt="Princesa tomando o Sorvete Retrô" loading="lazy">
                    </picture>
                </div>

            </div>
        </div>
    </section>
    <!-- end of about us -->

    <!-- divider -->
    <div class="divider">

    </div>
    <!-- end of divider -->

    <!-- team -->
    <section class="team">
        <div class="container">
            <h2 class="d-none">Equipe Sorvete Retrô</h2>

            <div class="row">

                <div class="col-6">
                    <!-- image -->
                    <div class="team__image">
                        <picture>
                            <source
                                srcset="<?= get_template_directory_uri(); ?>/assets/images/victor-hugo-sorvete-retro.webp"
                                type="image/webp">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/victor-hugo-sorvete-retro.png"
                                alt="Victor Hugo - Sorvete Retrô" loading="lazy">
                        </picture>
                    </div>
                    <!-- end of image -->

                    <!-- text -->
                    <div class="team__text">
                        <p>Victor é careca, sócio e amigo de infância do Ricardo!</p>
                    </div>
                    <!-- end of text -->
                </div>

                <div class="col-6">
                    <!-- image -->
                    <div class="team__image">
                        <picture>
                            <source
                                srcset="<?= get_template_directory_uri(); ?>/assets/images/ricardo-marques-sorvete-retro.webp"
                                type="image/webp">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/ricardo-marques-sorvete-retro.png"
                                alt="ricardo-marques - Sorvete Retrô" loading="lazy">
                        </picture>
                    </div>
                    <!-- end of image -->

                    <!-- text -->
                    <div class="team__text">
                        <p>Ricardo é o simpático Diretor Comercial da <b>Sorvete Retrô</b>! Se você pegar ele de mal
                            humor, algo grave aconteceu! É, sei lá! Talvez não seja tão simpático assim! Talvez mais ou
                            menos! Bom, é um cara legal!</p>
                    </div>
                    <!-- end of text -->
                </div>
            </div>
        </div>
    </section>
    <!-- end of team -->

    <!-- flavors -->
    <section id="sabores" class="flavors bg-purple">
        <div class="container">

            <!-- header -->
            <header class="flavors__header">
                <h2>Nossos Sorvetes</h2>
            </header>
            <!-- end of header -->

            <!-- container -->
            <div class="flavors__container">
                <p>Nosso sorvete é demais! Pois além de ser bem gostoso e cremoso, também tem aquele gostinho da
                    infância!</p>
                <p>O <b>Sorvete Retrô</b> é um delicioso sorvete artesanal de gelatina! Ahhh! E ele é <b>0% Lactose!</b>
                </p>
                <p>Quem prova se apaixona!</p>

                <!-- row -->
                <div class="flavors__container__grid">

                    <?php 
                    $jsonFlavors = file_get_contents(__DIR__ .  "/includes/flavors.json");
                    $flavorsList = json_decode($jsonFlavors, true);

                    foreach ($flavorsList['flavors'] as $flavor) :
                ?>

                    <!-- column -->
                    <article class="flavors__container__grid__flavor">

                        <!-- image -->
                        <div class="flavors__container__grid__flavor__image">
                            <picture>
                                <source
                                    srcset="<?= get_template_directory_uri(); ?>/assets/images/<?= $flavor["image"]; ?>.webp"
                                    type="image/webp">
                                <img src="<?= get_template_directory_uri(); ?>/assets/images/<?= $flavor["image"]; ?>.png"
                                    alt="Sorvete Retrô sabor <?= $flavor["flavor"]; ?>">
                            </picture>
                        </div>
                        <!-- end of image -->

                        <!-- header -->
                        <header class="flavors__container__grid__flavor__header">
                            <h3><?= $flavor["flavor"]; ?></h3>
                        </header>
                        <!-- end of header -->

                    </article>
                    <!-- end of column -->

                    <?php endforeach; ?>

                </div>
                <!-- end of row -->
            </div>
            <!-- end of container -->

        </div>
    </section>
    <!-- end of flavors -->

    <!-- event -->
    <section id="eventos" class="events">
        <div class="container">

            <!-- header -->
            <header class="events__header">
                <h2>Nossos Eventos</h2>
            </header>
            <!-- end of header -->

            <!-- container -->
            <div class="events__container">
                <p>Chame a <b>Sorvete Retrô</b> para seu Evento! Somos uma simpática e deliciosa atração para sua Festa!
                </p>
                <p>Nós fazemos todos os tipos de Festas e Eventos tá! É só chamar! UhuLLLL!</p>

                <!-- row -->
                <div class="events__container__row">
                    <?php 
                    $jsonEvents = file_get_contents(__DIR__ . "/includes/events.json");
                    $eventsList = json_decode($jsonEvents, true);

                    foreach($eventsList["events"] as $event):
                    ?>

                    <!-- event -->
                    <article class="events__container__row__event">

                        <!-- header -->
                        <header class="events__container__row__event__header">
                            <h3><?= $event["event"]; ?></h3>
                        </header>
                        <!-- end of header -->

                        <p><?= $event["description"]; ?></p>

                    </article>
                    <!-- end of event -->

                    <?php endforeach; ?>
                </div>
                <!-- end of row -->

            </div>
            <!-- end of container -->

        </div>
    </section>
    <!-- end of event -->

    <!-- gallery -->
    <section class="gallery">
        <div class="container">
            <h2 class="d-none">Galeria</h2>
        </div>
    </section>
    <!-- end of gallery -->

    <!-- cta -->
    <section class="cta">
        <div class="container">

            <!-- header -->
            <header class="cta__header">
                <h2>Faça seu evento conosco!</h2>
            </header>
            <!-- end of header -->

            <a rel="nofollow" href="#contato" class="btn btn--purple"
                title="Solicite já um orçamento para o seu evento">Peça um orçamento</a>

        </div>
    </section>
    <!-- end of cta -->

    <!-- testimonial -->
    <section id="depoimentos" class="testimonial bg-purple">
        <div class="container">

            <!-- header -->
            <header class="testimonial__header">
                <h2>Quem experimentou, recomenda!</h2>
            </header>
            <!-- end of header -->

            <!-- container -->
            <div class="testimonial__container">
                <p>Veja algumas das várias empresas que recomendam a <b>Sorvete Retrô</b>!</p>
            </div>
            <!-- end of container -->

        </div>
    </section>
    <!-- end of testimonial -->

    <!-- contact -->
    <section id="contato" class="contact">
        <div class="container">

            <!-- header -->
            <header class="contact__header">
                <h2>Contato</h2>
            </header>
            <!-- end of header -->

        </div>
    </section>
    <!-- end of contact -->

</main>

<?php get_footer(); ?>