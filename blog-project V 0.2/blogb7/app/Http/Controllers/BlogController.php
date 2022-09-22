<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Category;

class BlogController extends Controller
{
    private $categories;
    public function index(){
        $this->categories=Category::where('status',1)->get();
        return view('admin.blog.index',['categories'=>$this->categories]);
    }

    public function create(Request $request){

        Blog::newBlog($request);
        return redirect('/blog-add')->with('message','Blog has been Created');
    }

    public function manage(){

    }

    public function edit($id){

    }

    public function update(Request $request,$id){

    }

    public function delete($id){

    }
}
