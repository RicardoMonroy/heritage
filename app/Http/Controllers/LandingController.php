<?php

namespace App\Http\Controllers;

use App\About;
use App\Company;
use App\Slider;
use Goutte\Client;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;

class LandingController extends Controller
{
    public function welcome()
    {
        $slider = Slider::find(1);
        $about = About::find(1);
        $companies = Company::all();

        return view('welcome', compact('slider', 'about', 'companies'));
    }

    public function blog(Client $client)
    {
        // El Financiero web scraping
        $crawlerF = $client->request('GET', 'https://www.elfinanciero.com.mx/nacional');

        $newF = [];

        $crawlerF->filter('.column .feed a')->each( function (Crawler $newsAll) use (&$newsF) {
            $newF = [];
            
            $newF['url']   = $newsAll->filter('a')->first()->attr('href');
            $newF['date']  = $newsAll->filter('p.date-time.is-hidden-mobile')->text();
            $newF['title'] = $newsAll->filter('p.head')->text();

            $newsF[] = $newF;
        });

        // El economista web scraping
        $crawlerE = $client->request('GET', 'https://www.eleconomista.com.mx/');

        $newE = [];

        $crawlerE->filter('.entrys-con-banner.clearfix div.promocionado')->each( function (Crawler $newsAll) use (&$newsE) {
            $newE = [];
            
            $newE['author'] = $newsAll->filter('p.entry-title')->text();
            $newE['url'] = $newsAll->filter('div.entry-box-overlay a')->first()->attr('href');
            $headtitle = $newsAll->children()->filter('.entry-data h3');
            $a = $headtitle->eq(0);
            $newE['title'] = $a->filter('a')->first()->attr('alt');

            $newsE[] = $newE;
        });
        return view('blog', compact('newsF', 'newsE'));
    }
}
