<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Session;
use App\Models\Enroll;
class StudentDashboardController extends Controller
{
    private $student,$enrolls;
    public function index(){
        return view('student.home.index');
    }
    public function profile(){
        $this->student=Student::find(Session::get('student_id'));
        return view('student.profile.index',['student'=>$this->student]);
    }
    public function course(){

        $this->enrolls=Enroll::where('student_id',Session::get('student_id'))->get();

        return view('student.course.index',['enrolls'=>$this->enrolls]);

    }

    public function update(Request $request,$id){
        Student::updateStudent($request,$id);
        return back()->with('message','student profile updated successfully');
    }
}
