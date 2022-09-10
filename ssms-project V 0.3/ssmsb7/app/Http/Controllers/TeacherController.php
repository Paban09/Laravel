<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index(){
        return view('admin.teacher.index');
    }

    public function manage(){
        return view('admin.teacher.manage');
    }

    public function create(Request $request){
//        return $request->all();
        Teacher::newTeacher($request);
        return redirect('/teacher/add')->with('message','Teacher Info Save Successfully');
    }
}
