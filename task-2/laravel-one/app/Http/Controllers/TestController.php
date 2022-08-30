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




}
