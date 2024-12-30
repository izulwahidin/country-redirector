<?php
require_once("util.php");

$getGifFromUrl = getGifUrl($_GET["id"] ?? "");
// Validate and sanitize URL
$gifUrl = filter_var($getGifFromUrl, FILTER_VALIDATE_URL);

if ($gifUrl) {
    try {
        // Fetch GIF content
        $gifContent = file_get_contents($getGifFromUrl);

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


exit;
