<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    function index()
    {
        return view('index');
    }
    function about()
    {
        return view('about');
    }
    function team()
    {
        return view('team');
    }
    function services()
    {
        return view('services');
    }
    function privacy()
    {
        return view('privacy-policy');
    }
    function contact()
    {
        return view('contact');
    }
}
