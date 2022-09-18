<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Student;
use App\Models\Enroll;
use Session;

class EnrollController extends Controller
{
    private $course,$student;
    public function index($id){
        $this->course=Course::find($id);
        return view('website.enroll.index',['course'=>$this->course]);
    }

    public function enroll(Request $request,$id){
//        return $request->all();

        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|unique:students,email',
            'mobile'=>'required'
        ],[
            "email.required"=>"give email address",
            "email.unique"=>"Have to use another email"
        ]);

        $this->student=Student::newStudent($request);

        Session::put('student_id',$this->student->id);
        Session::put('student_name',$this->student->name);

        Enroll::newEnroll($request,$this->student->id,$id);
        return redirect('/enroll-now/'.$id)->with('message','Your Enroll Submission has been save successfully. Please wait, we will contact you');
    }

}
