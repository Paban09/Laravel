<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enroll;

class AdminEnrollController extends Controller
{
    private $enrolls;
    public function index(){

        $this->enrolls=Enroll::orderby('id','desc')->get();
        return view('admin.enroll.index',['enrolls'=>$this->enrolls]);
    }

    public function update($id){
        Enroll::updateEnrollStatus($id);
        return redirect()->back()->with('message','Enroll Status info updated Successfully');
    }
}
