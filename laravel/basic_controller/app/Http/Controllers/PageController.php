<?php

namespace App\Http\Controllers;

abstract class PageController extends Controller
{
    function home() {
        return view('home');
    }
    function contact() {
        return view('contact');
    }
    function aboutUs() {
        return view('about_us');
    }
    function ourTeam() {
        return view('our_team');
    }
}
