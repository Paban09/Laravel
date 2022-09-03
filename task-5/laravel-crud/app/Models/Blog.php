<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    //private $blog,$image,$directory,$imageUrl,$imageName;

    public function newBlog($request)
    {
        $image        =$request->file('image');
        $imageName    =$image->getClientOriginalName();
        $directory    ='img/blog-images/';
        $image->move($directory,$imageName);

        $imageUrl=$directory.$imageName;


        $blog = new Blog();
        $blog->title          =$request->title;
        $blog->author         =$request->author;
        $blog->description    =$request->description;
        $blog->image          =$imageUrl;
        $blog->save();

//        DB::table('blogs')->insert(
//           [   'title'=>$request->title,
//               'author'=>$request->author,
//               'description'=>$request->description,
//               'image'=>$request->image,
//
//           ]
//
//        );
    }
}
