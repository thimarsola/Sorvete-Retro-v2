<?php

add_action('admin_menu', 'bootstrap_retro_menu');
add_action('admin_init', 'retro_setup_options');

function bootstrap_retro_menu()
{
    $retroPage = add_menu_page('Galeria', 'Galeria', 'administrator', __FILE__, 'retro_menu_custom_page', 'dashicons-format-gallery');

    add_action("admin_enqueue_scripts", function($hook) use ($retroPage){
        if ($hook !== $retroPage){
            return;
        }
        wp_dequeue_script('jquery');
        wp_enqueue_script('retro-app-js', get_template_directory_uri().'/assets/js/app/retro-app.js');
        wp_enqueue_style('retro-app-css', get_template_directory_uri().'/assets/css/retro-app.css');
    });
}

function retro_setup_options()
{
    wp_enqueue_media();

    //photos
    register_setting('retro_setup', 'photo_0');
    register_setting('retro_setup', 'position_0');

    register_setting('retro_setup', 'photo_1');
    register_setting('retro_setup', 'position_1');

    register_setting('retro_setup', 'photo_2');
    register_setting('retro_setup', 'position_2');

    register_setting('retro_setup', 'photo_3');
    register_setting('retro_setup', 'position_3');

    register_setting('retro_setup', 'photo_4');
    register_setting('retro_setup', 'position_4');

    register_setting('retro_setup', 'photo_5');
    register_setting('retro_setup', 'position_5');

    register_setting('retro_setup', 'photo_6');
    register_setting('retro_setup', 'position_6');

    register_setting('retro_setup', 'photo_7');
    register_setting('retro_setup', 'position_7');

    register_setting('retro_setup', 'photo_8');
    register_setting('retro_setup', 'position_8');

    register_setting('retro_setup', 'photo_9');
    register_setting('retro_setup', 'position_9');

}

function retro_menu_custom_page()
{
    ?>

    <div class="wrap">
        <form method="post" action="options.php">
            <?php settings_fields('retro_setup'); ?>
            <?php do_settings_sections('retro_setup'); ?>
            <h1>Galeria de fotos Sorvete Retrô</h1>

            <div class="tabs">

                <div class="content">
                    <div>
                        <?php get_template_part('template-parts/app/app', 'home'); ?>
                    </div>
                </div>

                <hr>

                <?php submit_button(); ?>
            </div>
        </form>
    </div>

<?php } ?>
