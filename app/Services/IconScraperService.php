<?php

namespace App\Services;

use GuzzleHttp\Client;

class IconScraperService
{
    public function parse(string $url)
    {
        return cache()->rememberForever('parse_icon_img_'.$url, function () use ($url) {
            $client = new Client([
                'verify' => false,
            ]);

            try {
                $response = $client->get($url);
                // Extract the icon URL from the response
                return $this->extractIconUrl($response->getBody(), rtrim($url));
            } catch (\Exception $e) {
                return null;
            }
        });
    }

    // Helper function to extract the icon URL from the HTML content
    private function extractIconUrl($html, $url)
    {
        // Use a regular expression or a parser library like SimpleHTMLDom to extract the icon URL from the HTML content.
        // Regular expression example:
        preg_match('/<link[^>]+?rel=["\']icon[^>]+?href=["\']([^"\']+)["\'][^>]*>/i', $html, $matches);
        return $url.$matches[1]  ?? null;
    }
}
