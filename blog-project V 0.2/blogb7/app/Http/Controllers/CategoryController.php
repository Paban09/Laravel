<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Session;
class CategoryController extends Controller
{
    private $categories;
    public function index(){
        return view('admin.category.index');
    }

    public function create(Request $request){
//        return $request->all();
        Category::newCategory($request);
        return redirect('/category-add')->with('message','Category has been Created');
    }

    public function manage(){
        $this->categories=Category::all();
        return view('admin.category.manage',['categories'=>$this->categories]);
    }

    public function edit($id){

    }

    public function update(Request $request,$id){

    }

    public function dalete($id){

    }
}
