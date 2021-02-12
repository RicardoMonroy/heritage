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
        $crawlerF = $client->request('GET', 'https://www.elfinanciero.com.mx/nacional');

        $new = [];

        $crawlerF->filter('.column .feed a')->each( function (Crawler $newsAll) use (&$newsF) {
            $new = [];
            
            $new['url']   = $newsAll->filter('a')->first()->attr('href');
            $new['date']  = $newsAll->filter('p.date-time.is-hidden-mobile')->text();
            $new['title'] = $newsAll->filter('p.head')->text();

            $newsF[] = $new;
        });

        // dd($news);
        return view('blog', compact('newsF'));
    }
}
