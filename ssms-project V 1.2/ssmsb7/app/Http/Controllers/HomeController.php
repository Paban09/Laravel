<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Session;
use App\Models\Enroll;

class HomeController extends Controller
{
    private $course,$courses,$offerCourses,$enroll,$status;
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

          if(Session::get('student_id')){

              $this->enroll=Enroll::where('student_id',Session::get('student_id'))->where('course_id',$id)->first();

              if($this->enroll){
                  $this->status=true;
              }else{
                  $this->status=false;
              }

          }else{
              $this->status=false;
          }


        return view('website.courses.detail',[
            'course'=> $this->course,
            'status'=> $this->status
        ]);
    }


    public function contact(){
        return view('website.contact.index');
    }


    public function auth(){
        return view('website.auth.index');
    }


}
