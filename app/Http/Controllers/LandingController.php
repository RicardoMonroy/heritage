<?php

namespace App\Http\Controllers;

use App\About;
use App\Company;
use App\Slider;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function welcome()
    {
        $slider = Slider::find(1);
        $about = About::find(1);
        $companies = Company::all();

        return view('welcome', compact('slider', 'about', 'companies'));
    }

    public function blog()
    {
        return view('blog');
    }
}
