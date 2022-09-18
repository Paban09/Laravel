<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Student;
use App\Models\Enroll;
use Session;

class EnrollController extends Controller
{
    private $course,$student,$enroll;

    public function index($id){
        $this->course=Course::find($id);

        if(Session::get('student_id')){
            $this->student=Student::find(Session::get('student_id'));
        }


        return view('website.enroll.index',[
            'course'=>$this->course,
            'student'=>$this->student
        ]);
    }

    public function enroll(Request $request,$id){
//        return $request->all();

        if(Session::get('student_id')){
            $this->student=Student::find(Session::get('student_id'));

        }
        else{

            $this->validate($request,[
                'name'=>'required',
                'email'=>'required|unique:students,email',
                'mobile'=>'required'
            ],[
                "email.required"=>"Give email address",
                "email.unique"=>"Have to use another email"
            ]);

            $this->student=Student::newStudent($request);



        }

        Session::put('student_id',$this->student->id);
        Session::put('student_name',$this->student->name);

        $this->enroll=Enroll::where('student_id',Session::get('student_id'))->where('course_id',$id)->first();
        if($this->enroll){
            return redirect('/all-courses')->with('message','You are already enrolled the course');
        }
        else{
            Enroll::newEnroll($request,$this->student->id,$id);
        }

        return redirect('/enroll-now/'.$id)->with('message','Your Enroll Submission has been save successfully. Please wait, we will contact you');
    }

}
