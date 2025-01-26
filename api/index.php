<?php
require_once(__DIR__ . "/CountryRedirector.php");

// your costum tier list country
$costumTiers = [
    // Tier 1 - Highest value countries
    'tier1' => [
        "direct_link" => 'https://poawooptugroo.com/4/8600194',
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
        "direct_link" => 'https://poawooptugroo.com/4/8600196',
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
        "direct_link" => 'https://poawooptugroo.com/4/8600197',
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
    'default' =>  "https://poawooptugroo.com/4/8600199",

    // junk - Super Small monetization potential 
    "junk" =>  "https://poawooptugroo.com/4/8600333"
];

//init CountryRedirector
$cr = new CountryRedirector($costumTiers);

$sm = $cr->isSocialMediaUserAgent();
// handle if traffic from social media disguise as gifs
if ($sm == "gif") {
    require_once(__DIR__ . "/content-gif.php");
    die();
} elseif ($sm == "page") {
    require_once(__DIR__ . "/content-page.php");
    die();
} else {

    // Execute the redirector
    $cr->getRedirectLink();
}
