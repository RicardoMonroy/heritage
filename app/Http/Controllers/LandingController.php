<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function welcome()
    {
        $slider = Slider::find(1);

        return view('welcome', compact('slider'));
    }

    public function blog()
    {
        return view('blog');
    }
}
