<?php

namespace App\Scraper;

use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;
use App\Models\Products;

class TGDD
{

    public function scrape()
    {
        $url = 'https://canifa.com/nam.html';

        $client = new Client();

        $crawler = $client->request('GET', $url);

        $crawler->filter('div.slick-slide.slick-cloned')->each(
            function (Crawler $node) {
                $name = $node->filter('dev.product-item-details h3.product-item-name a')->html();
                
                // $price = $node->filter('.price')->text();
                dd(count($name));
                // $img = $node->filter('.product-image-photo')->attr('src');
                // $price = preg_replace('/\D/', '', $price);
                // $product = new Products;
                // $product->Name = $name;
                // $product->Price = $price;
                // $product->ImageURL = $img;
                // $product->save();          
            }
        );

    }
}
