<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Enroll;
use Session;

class TeacherEnrollController extends Controller
{
    private $courses,$enrolls,$completePayment,$incompletePayment,$result=[];
    public function manageEnroll(){

        $this->courses=Course::where('teacher_id',Session::get('teacher_id'))->get();
        foreach ($this->courses as $key=> $course){
            $this->enrolls=Enroll::where('course_id',$course->id)->get();
            if (!empty($this->enrolls))
            {
                $this->completePayment=0;
                $this->incompletePayment=0;

                foreach($this->enrolls as $enroll){

                    if($enroll->payment_status=="Complete"){
                        $this->completePayment=$this->completePayment+1;
                    }
                    elseif($enroll->payment_status=="Pending"){
                        $this->incompletePayment=$this->incompletePayment+1;
                    }
                }


                $this->result[$key]['title']    = $course->title;
                $this->result[$key]['starting_date']    = $course->starting_date;
                $this->result[$key]['total']    = count($this->enrolls);
                $this->result[$key]['Complete'] = $this->completePayment;
                $this->result[$key]['Pending']  = $this->incompletePayment;
            }
        }


        return view('teacher.enroll.manage',['result'=>$this->result]);
    }
}



