<?php

$arrGifs = json_decode(file_get_contents(__DIR__ . "/../assets/gifs.json"));

function getGifUrl($id)
{
    global $arrGifs;
    // Create consistent index using crc32 hash
    $hash = crc32($id);
    $index = abs($hash % count($arrGifs));
    return "https://" . $arrGifs[$index];
}

function parseSpintax($spintax)
{
    while (preg_match('/\{([^{}]*)\}/', $spintax, $matches)) {
        $options = explode('|', $matches[1]);
        $spintax = str_replace($matches[0], $options[array_rand($options)], $spintax);
    }
    return $spintax;
}

// Example usage:
$spintaxString = "This is a {simple|complex} example of {nested|{multi|multiple}} spintax.";
$result = parseSpintax($spintaxString);

echo $result;
