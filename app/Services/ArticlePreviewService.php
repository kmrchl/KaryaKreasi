<?php

namespace App\Services;

use Symfony\Component\DomCrawler\Crawler;

class ArticlePreviewService
{
    public function fetchMeta($url)
    {
        try {
            $html = file_get_contents($url);

            $crawler = new Crawler($html);

            $meta = [
                'title' => $this->getMeta($crawler, 'meta[property="og:title"]', 'content')
                    ?? $crawler->filter('title')->first()->text(''),
                'description' => $this->getMeta($crawler, 'meta[property="og:description"]', 'content'),
                'image' => $this->getMeta($crawler, 'meta[property="og:image"]', 'content'),
                'url' => $url,
                'domain' => parse_url($url, PHP_URL_HOST),
            ];

            return $meta;
        } catch (\Exception $e) {
            return null;
        }
    }

    private function getMeta($crawler, $selector, $attr)
    {
        try {
            return $crawler->filter($selector)->attr($attr);
        } catch (\Exception $e) {
            return null;
        }
    }
}
