<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;

class ScrapingController extends Controller
{
    public function index(Client $client) 
    {
        $crawler = $client->request('GET', 'https://www.elfinanciero.com.mx/mis-finanzas');
        $classFilter = 'columns is-mobile item';

        $new = [];

        $crawler->filter("[class='$classFilter']")->each( function (Crawler $newsFinanzas) use (&$news) {
            $new = [];

            $divs = $newsFinanzas->children()->filter('div');
            $sectionImg = $divs->eq(0); //No se pueden obtener imgs
            $sectionInfo = $divs->eq(1);

            $new['date'] = $sectionInfo->filter("[class='date-time is-hidden-mobile']")->text();
            $new['title'] = $sectionInfo->filter("[class='head']")->text();

            $news[] = $new;
        });

        dd($news);
        // return view('blog', compact('news'));
    }
}