<?php
// // scrape urls
// $gifs_url = "https://ia802203.us.archive.org/view_archive.php?archive=%2F8%2Fitems%2F7-rz-bu-4ch-sv-6-aw-3-w%2F7RzBU4chSV6Aw3W.zip";
// preg_match_all('~<tr><td><a href="\/\/(.*?)">.*?<\/a><td><td>~',file_get_contents($gifs_url),$gifs);
// file_put_contents("gifs.json",json_encode($gifs[1]));


$arrGifs = json_decode(file_get_contents(__DIR__."/../assets/gifs.json"));
shuffle($arrGifs);

header('content-type: image/gif');
readfile("https://".$arrGifs[0]);
exit;
