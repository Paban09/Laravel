<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    private $courses;
      public function index(){
          $this->courses=Course::where('status',1)->orderBy('id','desc')->take(3)->get();
          return view('website.home.index',['courses'=>$this->courses]);
      }

    public function about(){
        return view('website.about.index');
    }

    public function courses(){
        return view('website.courses.index');
    }
    public function detail(){
        return view('website.courses.detail');
    }

    public function contact(){
        return view('website.contact.index');
    }

    public function auth(){
        return view('website.auth.index');
    }


}
