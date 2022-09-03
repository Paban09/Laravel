<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use function League\Flysystem\Local\move;

class BlogController extends Controller
{

    private $blog,$blogs;
    public function index()
    {
        return view('blog.index');
    }
    public function add()
    {
        return view('blog.add');

    }
    public function create(Request $request)
    {

       $blog =new Blog();
       $blog->newBlog($request);

        return redirect('/add-blog')->with('message','Blog info create successfully');
    }

    public function manage()
    {
        $this->blogs=Blog::all();
//        return $this->blogs;
        return view('blog.manage',['blogs'=>$this->blogs]);

    }

}
