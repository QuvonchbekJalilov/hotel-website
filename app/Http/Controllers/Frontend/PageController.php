<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function rooms()
    {
        return view('frontend.room');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function blog()
    {
        return view('frontend.blog');
    }
    public function blogDetails()
    {
        return view('frontend.blog-details');
    }
    public function booking()
    {
        return view('frontend.booking');
    }
    public function roomsDetails()
    {
        return view('frontend.rooms-details');
    }
}
