<?php

/**
 * DEVELOPER
 */

define("DEV", [
    "name" => "Goognet Solução Digital",
    "url" => "https://goognet.com.br",
]);

/**
 * SITE CONFIG
 */
define("SITE", [
    "name" => "Sorvete Retrô",
    "desc" => "A Sorvete Retrô nasceu com o objetivo de renascer o clássico sorvete americano. Um dos sorvetes mais antigos existentes, aquele sorvete da infância!",
    "domain" => "sorveteretro.com.br",
    "locale" => "pt_BR",
    "lang" => "pt-BR",
    "keywords" => "sorvete, sorvete retrô, sorvete americano, sorvete de máquina, sorvete antigo"
]);

/**
 * SITE MINIFY
 */
if ($_SERVER["SERVER_NAME"] == "localhost") {
    require __DIR__ . '/Minifier.php';
}

/**
 * SOCIAL CONFIG
 */
define("SOCIAL", [
    "facebook_page" => "goognetsolucao",
    "facebook_author" => "goognetsolucao",
    "facebook_appId" => "",
    "twitter_creator" => "@GoognetSolucao",
    "twitter_site" => "@GoognetSolucao"
]);

/**
 * MAIL CONNECT
 */
define("MAIL", [
    "host" => "mail.domain.com.br",
    "port" => "587",
    "user" => "sender@domain.com.br",
    "passwd" => "password",
    "from_name" => "Website Domain",
    "from_email" => "domain@domain.com.br"
]);

/**
 * REGION
 */
define("REGION", [
    "region" => "BR-SP",
    "placename" => "S&atilde;o Bernardo do Campo",
    "position" => "-23.693646;-46.568099",
    "icbm" => "-23.693646, -46.568099"
]);

/**
 * CONTACT
 */
define("CONTACT", [
    "whatsapp" => [
        "number" => "(11) 99116-9696",
        "message" => "Olá Sorvete Retrô, gostaria de solicitar um orçamento do melhor sorvete do mundo para o meu evento!"
    ],
    "instagram" => 'https://www.instagram.com/sorveteretro',
    "facebook" => 'https://www.facebook.com/sorveteretrooficial'
]);