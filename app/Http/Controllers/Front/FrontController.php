<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.pages.index');
    }

    public function contact()
    {
        return view('front.pages.contact');
    }

    public function blog()
    {
        return view('front.pages.blog');
    }

    public function portfolio()
    {
        return view('front.pages.portfolio');
    }

    public function resume()
    {
        return view('front.pages.resume');
    }

}
