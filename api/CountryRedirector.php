<?php

declare(strict_types=1);
class CountryRedirector
{

    private array $redirectConfig = [];

    public function __construct($costumConfig = false)
    {
        if (!is_array($costumConfig) || empty($costumConfig)) {
            $this->returnError('Config must be an Array format and not empty');
        }


        $this->redirectConfig = $costumConfig;
    }

    public function getRedirectLink(): void
    {
        // Validate country code availability
        if (!isset($_SERVER['HTTP_CF_IPCOUNTRY'])) {
            $this->returnError('Country not found. Please use cloudflare DNS Proxy');
        }

        $visitorCountry = strtoupper($_SERVER['HTTP_CF_IPCOUNTRY']);

        // Check tiers first (with early return)
        foreach ($this->redirectConfig as $tier => $data) {
            // handle loop if default or junk
            if (is_string($data)) continue;

            if (in_array($visitorCountry, $data['country'])) {
                $this->returnTierLink($data['direct_link']);
            }
        }

        // Check junk list
        if (in_array($visitorCountry, ['XX', 'T1'])) {
            $this->returnJunkLink();
        }

        // Default fallback
        $this->returnDefaultLink();
    }

    private function returnTierLink(string $url): void
    {
        header("Location: $url");
        exit;
    }

    private function returnJunkLink(): void
    {
        header("Location: " . $this->redirectConfig['junk']);
        exit;
    }

    private function returnDefaultLink(): void
    {
        header("Location: " .  $this->redirectConfig['default']);
        exit;
    }

    private function returnError(string $message): void
    {
        http_response_code(400);
        die($message);
    }

    public function isSocialMediaUserAgent(): bool
    {

        $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
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
            if (str_contains($agent, $userAgent)) {
                return true;
            }
        }
        return false;
    }
}
