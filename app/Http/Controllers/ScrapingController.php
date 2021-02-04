<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;

class ScrapingController extends Controller
{
    public function example(Client $client) 
    {
        $crawler = $client->request('GET', 'https://www.elfinanciero.com.mx/mis-finanzas');
        $classFilter = 'columns is-mobile item';
        $contact = $crawler->filter("[class='$classFilter']")->each( function (Crawler $contactNode) {
            // $nameNode = $contactNode->filter("[class='head']")->first();
            // echo $nameNode->text() . '</br>';
            $divs = $contactNode->children()->filter('div');
            $sectionImg = $divs->eq(0); //No se pueden obtener imgs
            $sectionInfo = $divs->eq(1);
                $date = $sectionInfo->filter("[class='date-time is-hidden-mobile']")->text();
                $title = $sectionInfo->filter("[class='head']")->text();
        });
        dd($contact->text()); 
    }
}
