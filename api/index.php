<?php
require_once(__DIR__ . "/CountryRedirector.php");

// your costum tier list country
$costumTiers = [
    // Tier 1 - Highest value countries
    'tier1' => [
        "direct_link" => 'https://t.co/4h498Xpjqj',
        "country" => [
            'US',
            'CA',
            'GB',
            'DE',
            'FR',
            'AU',
            'NZ',
            'JP',
            'SE',
            'NO',
            'DK',
            'FI',
            'CH',
            'NL',
            'BE',
            'IE'
        ]
    ],

    // Tier 2 - Good monetization potential
    'tier2' => [
        "direct_link" => 'https://t.co/PJB7mrV5Gl',
        "country" => [
            'IT',
            'ES',
            'AT',
            'PT',
            'IL',
            'AE',
            'SA',
            'KW',
            'QA',
            'BH',
            'SG',
            'HK',
            'KR',
            'TW',
            'IS',
            'LU'
        ]
    ],

    // Tier 3 - Moderate monetization potential
    'tier3' => [
        "direct_link" => 'https://t.co/PJB7mrV5Gl',
        "country" => [
            'PL',
            'CZ',
            'HU',
            'GR',
            'RO',
            'BG',
            'HR',
            'RS',
            'SK',
            'SI',
            'EE',
            'LV',
            'LT',
            'CY',
            'MT',
            'MY',
            'TH',
            'BR',
            'MX',
            'AR',
            'CL',
            'CO',
            'PE',
            'TR'
        ]
    ],

    // default - Small monetization potential
    'default' =>  "https://t.co/y0DaHPJ4fG",

    // junk - Super Small monetization potential 
    "junk" =>  "https://t.co/y0DaHPJ4fG"
];

//init CountryRedirector
$cr = new CountryRedirector($costumTiers);

// handle if traffic from social media disguise as gifs
if ($cr->isSocialMediaUserAgent() == "gif") {
    require_once(__DIR__ . "/content-gif.php");
    die();
} else {
    require_once(__DIR__ . "/content-page.php");
    die();
}

// Execute the redirector
$cr->getRedirectLink();
