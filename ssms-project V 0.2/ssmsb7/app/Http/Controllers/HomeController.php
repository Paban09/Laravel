<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
      public function index(){
          return view('website.home.index');
      }

    public function about(){
        return view('website.about.index');
    }

    public function courses(){
        return view('website.courses.index');
    }

    public function contact(){
        return view('website.contact.index');
    }

    public function auth(){
        return view('website.auth.index');
    }
}
