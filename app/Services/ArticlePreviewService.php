<?php

namespace App\Services;

use Symfony\Component\DomCrawler\Crawler;

class ArticlePreviewService
{
    public function fetchMeta($url)
    {
        // Ambil HTML halaman
        $html = @file_get_contents($url);
        if (!$html) return null;

        $crawler = new Crawler($html);

        // Ambil og:title
        $title = $crawler->filterXPath("//meta[@property='og:title']")->attr('content') ?? null;

        // Ambil og:description
        $description = $crawler->filterXPath("//meta[@property='og:description']")->attr('content') ?? null;

        // Ambil og:image
        $image = $crawler->filterXPath("//meta[@property='og:image']")->attr('content') ?? null;

        return [
            'title' => $title,
            'description' => $description,
            'image' => $image,
        ];
    }
}
