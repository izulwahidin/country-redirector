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
