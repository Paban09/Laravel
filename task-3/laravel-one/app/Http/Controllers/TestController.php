<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Student;
use Illuminate\Http\Request;

class TestController extends Controller
{
    private $students;
    private $products;
    private $product;
    private $fullName;

    private $allNumber;
    private $i;

    private $result;

    public function index(){

        $this->students=Student::getAllStudent();
        return view('test',["students"=>$this->students]);
    }


    //view is helper method to load a view.
    public function about(){
        $this->products=Product::getAllProduct();
        return view('about',["products"=>$this->products]);
    }

    public function detail($id){
        $this->product=Product::getProductbyId($id);
        return view('product-detail',["product"=>$this->product]);
    }

    public function contact(){
        return view('contact');
    }


//    Request is class name  and $request is object
    public function fullName(Request $request){
//       echo "<pre>";
//       print_r($_POST);
//       echo "</pre>";

//        return $request->all();
        $this->fullName= $request->first_name." ".$request->last_name;
        return redirect('/contact')->with('message',$this->fullName);

    }

    public function series(){
        return view('series');
    }

    public function allNumber(Request $request){

        for($this->i=$request->first_number; $this->i<=$request->last_number;$this->i++){
            $this->allNumber .= $this->i." ";
        }

        return redirect('/series')->with('message',$this->allNumber);

//        return $request->all();
    }

    public function calculator(){
        return view('calculator');
    }


    public function calculate(Request $request){

        return $request->all();
//        return redirect('/calculator')->with('message',$this->result);

//        return $request->all();
    }


}
