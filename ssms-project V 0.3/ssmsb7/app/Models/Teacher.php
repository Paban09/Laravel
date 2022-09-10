<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    private static $teacher, $image , $imageName, $imageUrl, $directory;

    public static function getImageUrl($request){
        self::$image=$request->file('image');
        self::$imageName=self::$image->getClientOriginalName();
        self::$directory='admin/teacher/teacher-images';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function newTeacher($request){
//        echo "teacher Model";
//        exit();

        self::$teacher=new Teacher();
        self::$teacher->name=$request->name;
        self::$teacher->email=$request->email;
        self::$teacher->password=$request->password;
        self::$teacher->mobile=$request->mobile;
        self::$teacher->image=self::getImageUrl($request);
        self::$teacher->save();

    }
}
