<?php

/**
 * @param string $file
 * @return string
 */
function image(string $file): string
{
    $urlPath = get_template_directory_uri() . '/assets/images/' . $file;

    return $urlPath;
}