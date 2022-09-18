<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Session;
class StudentDashboardController extends Controller
{
    private $student;
    public function index(){
        return view('student.home.index');
    }
    public function profile(){
        $this->student=Student::find(Session::get('student_id'));
        return view('student.profile.index',['student'=>$this->student]);
    }
    public function course(){
        return view('student.course.index');
    }

    public function update(Request $request,$id){
        Student::updateStudent($request,$id);
        return back()->with('message','student profile updated successfully');
    }
}
