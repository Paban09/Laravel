<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Course;

class AdminCourseController extends Controller
{
    private $course,$courses,$message,$offerCourses;
    public function manageCourse(){
//        first,get(bachai kore),all(assending), take (),find -> data tanar jnno database theke
//       $this->courses=Course::orderBy('id','desc')->skip(1)->take(2)->get(['id','title']);
       $this->courses=Course::orderBy('id','desc')->take(50)->get();
//       return $this->courses;
        return view('admin.course.manage',['courses'=>$this->courses]);
   }

   public function manageOffer(){
//        echo "hi";
//        exit();
       $this->courses=Course::where('status',1)->orderBy('id','desc')->get();
       $this->offerCourses=Course::where('status',1)->where('offer_fee','>',0)->orderBy('id','desc')->get();
       return view('admin.course.offer',[
           'courses'=>$this->courses,
           'offer_courses'=>$this->offerCourses
       ]);
   }

    public function createCourseOffer(Request $request){

        Course::newCourseOffer($request);
        return redirect('/admin/manage-offer')->with('message','New Course Offer Created');
    }

   public function courseDetail($id){
        $this->course=Course::find($id);
        return view('admin.course.detail',['course'=>$this->course]);
   }

   public function updateStatus($id){
        $this->message=Course::updateCourseStatus($id);
        return redirect('/admin/manage-course')->with('message',$this->message);
   }

    public function editOffer($id){
        $this->courses=Course::where('status',1)->orderBy('id','desc')->get();
        $this->course=Course::find($id);
        return view('admin.course.edit-offer',[
           'courses'=>$this->courses,
           'single_course'=>$this->course
        ]);
    }
}
