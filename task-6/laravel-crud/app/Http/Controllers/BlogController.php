<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;
//use MongoDB\Driver\Session;
use function League\Flysystem\Local\move;
use Session;

class BlogController extends Controller
{

    private $blog,$blogs;
    public function index()
    {
        Session::forget('id');
        return view('blog.index');
    }
    public function add()
    {
        return view('blog.add');

    }
    public function create(Request $request)
    {
        Blog::newBlog($request);
        return redirect('/add-blog')->with('message','Blog info create successfully');
    }

    public function manage()
    {
        Session::put('id',10);
        $this->blogs=Blog::all();
//        return $this->blogs;
        return view('blog.manage',['blogs'=>$this->blogs]);

    }

    public function edit($id){
//        find only primary key er upor kaj korbe || find ekta row return kobe database theke
        $this->blog=Blog::find($id);
        return view('blog.edit',['blog'=>$this->blog]);
    }

    public function update(Request $request,$id){
       Blog::updateBlog($request,$id);
       return redirect('/manage-blog')->with('message',"Blog Updated Successfully");
    }

    public function delete($id){
        Blog::deleteBlog($id);
        return redirect('/manage-blog')->with('message',"Blog Delete Successfully");

    }

}
