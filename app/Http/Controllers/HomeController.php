<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return view('home');
    }

    function about(){
        return view('about');
    }

    function project(){
        return view('project');
    }

    function ongoing(){
        return view('ongoing');
    }

    function garally(){
        return view('garally');

    }

    function video(){
        return view('video');
    }

    function news(){
        return view('news');
    }

    function contact(){
        return view('contacts');
    }

    function volunder(){
        return view('volunder');
    
    }
}
