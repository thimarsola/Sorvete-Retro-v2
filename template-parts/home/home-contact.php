<section id="contato" class="contact">
    <div class="container">
        <!-- row -->
        <div class="contact__row">

            <!-- form -->
            <div class="contact__row__form">

                <!-- header -->
                <header class="contact__row__form__header">
                    <h2>Contato</h2>
                </header>
                <!-- end of header -->
                <h3>Vamos montar seu Orçamento!</h3>
                <p>É rápido e simples! Preencha todos os dados abaixo!</p>

                <!-- form -->
                <form id="form" method="POST" enctype="multipart/form-data">
                    <!-- group -->
                    <div class="contact__row__form__group">
                        <label for="name" class="d-none">Nome</label>
                        <input type="text" name="name" placeholder="Nome" id="name" required>
                    </div>
                    <!-- end of group -->

                    <!-- group -->
                    <div class="contact__row__form__group">
                        <label for="surname" class="d-none">Sobrenome</label>
                        <input type="text" name="surname" placeholder="Sobrenome" id="surname" required>
                    </div>
                    <!-- end of group -->

                    <!-- group -->
                    <div class="contact__row__form__group">
                        <label for="company" class="d-none">Empresa</label>
                        <input type="text" name="company" placeholder="Empresa" id="company">
                    </div>
                    <!-- end of group -->

                    <!-- group -->
                    <div class="contact__row__form__group">
                        <label for="whatsapp" class="d-none">Whatsapp</label>
                        <input type="text" name="whatsapp" placeholder="Whatsapp" id="whatsapp">
                    </div>
                    <!-- end of group -->

                    <!-- group -->
                    <div class="contact__row__form__group">
                        <label for="email" class="d-none">E-mail</label>
                        <input type="email" name="email" placeholder="E-mail" id="email" required>
                    </div>
                    <!-- end of group -->

                    <!-- group -->
                    <div class="contact__row__form__group">
                        <label for="event">Informe o tipo de evento:</label>
                        <select name="event" id="event">
                            <option value="" disabled selected>Selecione...</option>
                            <option value="Infantil">Infantil</option>
                            <option value="Casamento">Casamento</option>
                            <option value="Debutante">Debutante</option>
                            <option value="Aniversário">Aniversário</option>
                            <option value="Corporativo">Corporativo</option>
                            <option value="Outros">Outros</option>
                        </select>
                    </div>
                    <!-- end of group -->

                    <!-- group -->
                    <div class="contact__row__form__group">
                        <label for="date">Informe a data do evento:</label>
                        <input type="date" name="date" id="date" required>
                    </div>
                    <!-- end of group -->

                    <!-- group -->
                    <div class="contact__row__form__group">
                        <label for="address" class="d-none">Endereço completo do evento</label>
                        <input type="text" name="address" placeholder="Endereço completo do evento" id="address" required>
                    </div>
                    <!-- end of group -->

                    <!-- group -->
                    <div class="contact__row__form__group">
                        <label for="people" class="d-none">Quantidade de pessoas (Quantidade total de Adultos e Crianças)</label>
                        <input type="text" name="people" placeholder="Quantidade de pessoas (Quantidade total de Adultos e Crianças)" id="people" required>
                    </div>
                    <!-- end of group -->

                    <!-- group -->
                    <div class="contact__row__form__group">
                        <label for="hour" class="d-none">Horário do evento: início/término</label>
                        <input type="text" name="hour" placeholder="Horário do evento: início/término" id="hour" required>
                    </div>
                    <!-- end of group -->

                    <!-- group -->
                    <div class="contact__row__form__group">
                        <label>Emissão de nota?</label>
                        <!-- content -->
                        <div class="contact__row__form__group__content">
                            <input type="radio" name="invoice" id="invoiceYes" value="sim">
                            <label for="invoiceYes">Sim</label>
                        </div>
                        <!-- content -->

                        <!-- content -->
                        <div class="contact__row__form__group__content">
                            <input type="radio" name="invoice" id="invoiceNo" value="não">
                            <label for="invoiceNo">Não</label>
                        </div>
                        <!-- content -->
                    </div>
                    <!-- end of group -->

                    <!-- group -->
                    <div class="contact__row__form__group">
                        <label for="message" class="d-none">Observações:</label>
                        <textarea id="message" name="message" cols="50" rows="2" placeholder="Observações:"></textarea>
                    </div>
                    <!-- end of group -->

                    <!-- status -->
                    <div class="contact__row__form__status">
                        <div class="d-none contact__row__form__status--loading">
                            <img src="<?= image('spinner.svg'); ?>" alt="Carregando" loading="lazy">
                        </div>
                    </div>
                    <!-- end of status -->

                    <!-- button -->
                    <div class="contact__row__form__button">
                        <button id="button" class="btn btn-rounded-white-500" type="submit" name="submit" value="submit">Solicitar o orçamento</button>
                    </div>
                    <!-- end of button -->
                </form>
                <!-- end of form -->

            </div>
            <!-- end of form -->

            <!-- content -->
            <div class="contact__row__content">
                <h2>Nós oferecemos a melhor experiência para você!</h2>
            </div>
            <!-- end of content -->

        </div>
        <!-- end of row -->

    </div>
</section>