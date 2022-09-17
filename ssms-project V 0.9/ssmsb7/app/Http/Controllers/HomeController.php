<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    private $course,$courses,$offerCourses;
      public function index(){
//          $this->courses=Course::where('status',1)->orderBy('id','desc')->take(3)->get();
//          $this->offerCourses=Course::where('offer_fee','>',0)->orderBy('id','desc')->get();
          return view('website.home.index',[
//              'courses'=>$this->courses,
//              'offerCourses'=>$this->offerCourses
              'courses'=>Course::where('status',1)->orderBy('id','desc')->take(3)->get(),
              'offerCourses'=>Course::where('offer_fee','>',0)->orderBy('id','desc')->get()
          ]);
      }

    public function about(){
        return view('website.about.index');
    }

    public function courses(){

        return view('website.courses.index',
        [
            'courses'=>Course::where('status',1)->orderBy('id','desc')->get()
        ]);
    }
    public function detail($id){
          $this->course=Course::find($id);
        return view('website.courses.detail',['course'=> $this->course]);
    }

    public function contact(){
        return view('website.contact.index');
    }

    public function auth(){
        return view('website.auth.index');
    }


}
