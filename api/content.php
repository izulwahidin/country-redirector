<?php
// // scrape urls
// $gifs_url = "https://ia802203.us.archive.org/view_archive.php?archive=%2F8%2Fitems%2F7-rz-bu-4ch-sv-6-aw-3-w%2F7RzBU4chSV6Aw3W.zip";
// preg_match_all('~<tr><td><a href="\/\/(.*?)">.*?<\/a><td><td>~',file_get_contents($gifs_url),$gifs);
// file_put_contents("gifs.json",json_encode($gifs[1]));


$arrGifs = json_decode(file_get_contents(__DIR__."/../assets/gifs.json"));
// shuffle($arrGifs);

// Validate and sanitize URL
$getGifFromUrl = getGifUrl($_GET["id"]);

if ($gifUrl) {
    try {
        // Fetch GIF content
        $gifContent = file_get_contents($gifUrl);

        if ($gifContent === false) {
            throw new Exception("Unable to fetch the GIF.");
        }

        // Set Content-Type header
        header('Content-Type: image/gif');
        
        // Output GIF content
        echo $gifContent;
    } catch (Exception $e) {
        // Handle error
        http_response_code(500);
        echo "Error: " . htmlspecialchars($e->getMessage());
    }
} else {
    // Invalid URL
    http_response_code(400);
    echo "Invalid GIF URL.";
}

function getGifUrl($id) {
    global $arrGifs;
    // Create consistent index using crc32 hash
    $hash = crc32($id);
    $index = abs($hash % count($arrGifs));
    return "https://".$arrGifs[$index];
}


exit;
