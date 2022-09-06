<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public $courses,$course;
    public function add(){
        return view('course.add');
    }

    public function create(Request $request){
//        return $request->all();
        Course::newCourse($request);
        return redirect('/add-course')->with('message','Course Info Save Successfully');
//        echo "Data Inserted";
//        exit();
    }

    public function manage(){
        $this->courses=Course::all();
        return view('course.manage',['courses'=>$this->courses]);
    }

    public function delete($id){
       Course::deleteCoruse($id);
        return redirect('/manage-course')->with('message',"Course Delete Successfully");
    }

    public function edit($id){
//        echo ($id);
//        echo "this is from return";
//        exit();
        $this->course=Course::find($id);
//        return $this->course;
//        exit();
        return view('course.edit',['course'=>$this->course]);
    }

    public function update(Request $request ,$id){
//        echo $id;
//        return $request->all();
        Course::updateCourse($request,$id);
        return redirect('/manage-course')->with('message',"Course Updated Successfully");

    }
}


