<?php

declare(strict_types=1);
class CountryRedirector
{
    private const DEFAULT_LINK = "https://zireemilsoude.net/4/8600199";
    private const JUNK_LINK = "https://zireemilsoude.net/4/8600333";

    private array $redirectConfig = [
        'tiers' => [
            [
                'name' => 'tier1',
                'link' => 'https://zireemilsoude.net/4/8600194',
                'targets' => [
                    'AU',
                    'AT',
                    'BE',
                    'CA',
                    'DK',
                    'FI',
                    'FR',
                    'DE',
                    'IS',
                    'IE',
                    'IL',
                    'IT',
                    'JP',
                    'LU',
                    'NL',
                    'NZ',
                    'NO',
                    'SA',
                    'SG',
                    'KR',
                    'ES',
                    'SE',
                    'CH',
                    'AE',
                    'GB',
                    'US'
                ]
            ],
            [
                'name' => 'tier2',
                'link' => 'https://zireemilsoude.net/4/8600196',
                'targets' => [
                    'AD',
                    'AR',
                    'BS',
                    'BO',
                    'BA',
                    'BR',
                    'BN',
                    'BG',
                    'CL',
                    'CN',
                    'CR',
                    'HR',
                    'CY',
                    'CZ',
                    'DO',
                    'EC',
                    'EG',
                    'EE',
                    'GR',
                    'HK',
                    'HU',
                    'IN',
                    'ID',
                    'JP',
                    'KZ',
                    'LV',
                    'LT',
                    'MO',
                    'MY',
                    'MT',
                    'ME',
                    'MA',
                    'PA',
                    'PY',
                    'PE',
                    'PH',
                    'PL',
                    'PT',
                    'PR',
                    'QA',
                    'RO',
                    'RS',
                    'SK',
                    'SI',
                    'TH',
                    'TR',
                    'UY',
                    'VU'
                ]
            ],
            [
                'name' => 'tier3',
                'link' => 'https://zireemilsoude.net/4/8600197',
                'targets' => [
                    'AL',
                    'DZ',
                    'AO',
                    'AM',
                    'AZ',
                    'BH',
                    'BD',
                    'BY',
                    'BB',
                    'BZ',
                    'BJ',
                    'BW',
                    'BF',
                    'BI',
                    'KH',
                    'CM',
                    'CV',
                    'TD',
                    'CO',
                    'KM',
                    'CG',
                    'SV',
                    'ET',
                    'GA',
                    'GE',
                    'GT',
                    'GN',
                    'GY',
                    'HT',
                    'HN',
                    'IQ',
                    'JM',
                    'JO',
                    'KE',
                    'KW',
                    'KG',
                    'LA',
                    'LB',
                    'LS',
                    'MK',
                    'MG',
                    'ML',
                    'MR',
                    'MU',
                    'MX',
                    'MD',
                    'MN',
                    'MZ',
                    'NA',
                    'NP',
                    'NI',
                    'NE',
                    'NG',
                    'OM',
                    'PK',
                    'SN',
                    'ZA',
                    'LK',
                    'SR',
                    'SZ',
                    'TJ',
                    'TZ',
                    'TG',
                    'TT',
                    'TN',
                    'TM',
                    'UG',
                    'UZ',
                    'VN',
                    'ZM'
                ]
            ]
        ],
        'junk' => ['XX', 'T1']
    ];

    public function getRedirectLink(): void
    {
        // Validate country code availability
        if (!isset($_SERVER['HTTP_CF_IPCOUNTRY'])) {
            $this->returnError('Country not found');
        }

        $visitorCountry = strtoupper($_SERVER['HTTP_CF_IPCOUNTRY']);

        // Check tiers first (with early return)
        foreach ($this->redirectConfig['tiers'] as $tier) {
            if (in_array($visitorCountry, $tier['targets'])) {
                $this->returnTierLink($tier);
            }
        }

        // Check junk list
        if (in_array($visitorCountry, $this->redirectConfig['junk'])) {
            $this->returnJunkLink();
        }

        // Default fallback
        $this->returnDefaultLink();
    }

    private function returnTierLink(array $tier): void
    {
        header("Location: {$tier['link']}");
        exit;
    }

    private function returnJunkLink(): void
    {
        header("Location: " . self::JUNK_LINK);
        exit;
    }

    private function returnDefaultLink(): void
    {
        header("Location: " . self::DEFAULT_LINK);
        exit;
    }

    private function returnError(string $message): void
    {
        http_response_code(400);
        die($message);
    }
}

// Execute the redirector
(new CountryRedirector())->getRedirectLink();
