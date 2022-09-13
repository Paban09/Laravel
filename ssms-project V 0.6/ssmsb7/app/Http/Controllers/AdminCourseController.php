<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Course;

class AdminCourseController extends Controller
{
    private $course,$courses,$message;
    public function manageCourse(){
//        first,get(bachai kore),all(assending), take (),find -> data tanar jnno database theke
//       $this->courses=Course::orderBy('id','desc')->skip(1)->take(2)->get(['id','title']);
       $this->courses=Course::orderBy('id','desc')->take(50)->get();
//       return $this->courses;
        return view('admin.course.manage',['courses'=>$this->courses]);
   }

   public function courseDetail($id){
        $this->course=Course::find($id);
        return view('admin.course.detail',['course'=>$this->course]);
   }

   public function updateStatus($id){
        $this->message=Course::updateCourseStatus($id);
        return redirect('/admin/manage-course')->with('message',$this->message);
   }
}
