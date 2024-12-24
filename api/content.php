<?php
$gifs = glob(__DIR__ . '/gifs/*.gif');

if (empty($gifs)) {
    throw new Exception("Error Gif not found", 1);
}
shuffle($gifs);

header('content-type: image/gif');
readfile($gifs[0]);
exit;
