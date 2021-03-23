<?php

/**
 * CSS
 */
$minCss = new MatthiasMullie\Minify\CSS();
$minCss->add(dirname(__DIR__, 1) . "/assets/css/style.css");
$minCss->minify(dirname(__DIR__, 1) . "/assets/css/style.min.css");

/**
 * js
 */
$minJs = new MatthiasMullie\Minify\JS();
// $minJs->add(dirname(__DIR__, 1) . "/public/assets/js/menu.js");
// $minJs->minify(dirname(__DIR__, 1) . "/public/assets/js/main.min.js");
