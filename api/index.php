<?php
require_once(__DIR__ . "/CountryRedirector.php");

// your costum tier list country
$costumTiers = [
    // Tier 1 - Highest value countries
    'tier1' => [
        "direct_link" => 'https://www.profitablecpmrate.com/m2jp4f2vz8?key=ccb4fea8b26e4a4633fd6737d1255ef4',
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
        "direct_link" => 'https://www.profitablecpmrate.com/z9zmjzbzb?key=e6e74edb6e795c057a05cd8630b1afcd',
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
        "direct_link" => 'https://www.profitablecpmrate.com/uy0tq433vv?key=3f01171daa8093a68c75e741ff7d6f79',
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
    'default' =>  "https://www.profitablecpmrate.com/jb28r4xys?key=0f1f612c8d8295ba5336b07dcfd93c20",

    // junk - Super Small monetization potential 
    "junk" =>  "https://www.profitablecpmrate.com/cfdfjuyx?key=b49cba82c72a34289daa2af321075210"
];

//init CountryRedirector
$cr = new CountryRedirector($costumTiers);

// handle if traffic from social media
if ($cr->isSocialMediaUserAgent()) {
    require_once(__DIR__ . "/content.php");
    die();
}

// Execute the redirector
$cr->getRedirectLink();
