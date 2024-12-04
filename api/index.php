<?php
require_once(__DIR__ . "/CountryRedirector.php");

// Ambil User-Agent dari request
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';

// Cek apakah user agent adalah dari media sosial
if (isSocialMediaUserAgent($userAgent)) {
    die("User-Agent berasal dari media sosial.");
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
