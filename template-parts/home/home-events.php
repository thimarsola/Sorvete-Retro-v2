<section id="eventos" class="events">
    <div class="container">

        <!-- header -->
        <header class="events__header">
            <h2>Nossos Eventos</h2>
        </header>
        <!-- end of header -->

        <p>Chame a <b>Sorvete Retrô</b> para seu Evento! Somos uma simpática e deliciosa atração para sua Festa!</p>
        <p>Nós fazemos todos os tipos de Festas e Eventos tá! É só chamar! UhuLLLL!</p>

        <!-- row -->
        <div class="events__row">
            <?php
                $jsonEvents = file_get_contents(__DIR__ . '/../../includes/events.json');
                $eventsList = json_decode($jsonEvents, true);

                foreach ($eventsList['events'] as $event):
            ?>

                <!-- card -->
                <article class="events__row__card">
                    <!-- header -->
                    <header class="events__row__card__header">
                        <i class="icon-<?= $event['icon']; ?>"></i>
                        <h3><?= $event['title']; ?></h3>
                    </header>
                    <!-- end of header -->

                    <p><?= $event['description']; ?></p>
                </article>
                <!-- end of card -->

            <?php endforeach; ?>
        </div>
        <!-- end of row -->
    </div>
</section>