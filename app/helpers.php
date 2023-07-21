<?php

declare(strict_types=1);

if (!function_exists('getAllLocales')) {

    function getAllLocales(): array
    {
        return \App\Helpers\Utilities\GetLocales::all();
    }
}

if (!function_exists('getLocaleByName')) {

    function getLocaleByName(string $name): array
    {
        return \App\Helpers\Utilities\GetLocales::get($name);
    }
}

function getIconScraperFromUrl(string $url)
{
    $img =  new \App\Services\IconScraperService();
    return $img->parse($url);

}

function generateColor()
{
    return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
}
