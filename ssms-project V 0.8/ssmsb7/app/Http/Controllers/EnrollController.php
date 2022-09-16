<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
class EnrollController extends Controller
{
    private $course;
    public function index($id){
        $this->course=Course::find($id);
        return view('website.enroll.index',['course'=>$this->course]);
    }

    public function enroll(Request $request,$id){
        return $request->all();
    }
}
