<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;
use Session;
class Course extends Model
{
    use HasFactory;
    private static $message,$course, $image , $imageName, $imageUrl, $directory, $extension,$banner_image;

    public static function getImageUrl($request,$directory){
        self::$image=$request->file('image');
        self::$extension=self::$image->getClientOriginalExtension();
        self::$imageName='ssmsb7_'.time().".".self::$extension;
        self::$image->move($directory,self::$imageName);
        return $directory.self::$imageName;
    }

    public static function newCourse($request){

        self::$course=new Course();
        self::$course->teacher_id=Session::get('teacher_id');
        self::$course->title=$request->title;
        self::$course->fee=$request->fee;
        self::$course->starting_date=$request->starting_date;
        self::$course->duration=$request->duration;
        self::$course->image=self::getImageUrl($request,'upload/course-images/');
        self::$course->description=$request->description;

        self::$course->save();

    }



    public static function updateCourse($request,$id){
        self::$course=Course::find($id);
        if($request->file('image')){
            if(file_exists(self::$course->image)){
                unlink(self::$course->image);
            }
            self::$imageUrl=self::getImageUrl($request,'upload/course-images/');
        }
        else{
            self::$imageUrl=self::$course->image;
        }

        self::$course->title=$request->title;
        self::$course->fee=$request->fee;
        self::$course->starting_date=$request->starting_date;
        self::$course->duration=$request->duration;
        self::$course->image=self::$imageUrl;
        self::$course->description=$request->description;
        self::$course->save();
    }

    public static function deleteCourse($id){
        self::$course=Course::find($id);
        if(file_exists(self::$course->image)){
            unlink(self::$course->image);
        }
        self::$course->delete();
    }

    public function teacher(){
        //one to one relation ship
        //database e kno internal chnage korbe na
        return $this->belongsTo(Teacher::class);
    }

    public static function updateCourseStatus($id){
        self::$course=Course::find($id);
        if(self::$course->status==0){
            self::$course->status=1;
            self::$message='Course status info published successfully';
        }
        else{
            self::$course->status=0;
            self::$message="Course satatus info unpublished successfully";
        }
        self::$course->save();
        return self::$message;
    }

    public static function newCourseOffer($request){
        self::$course=Course::find($request->course_id);
        self::$course->offer_fee=$request->offer_fee;
        self::$course->banner_image=self::getImageUrl($request,'upload/course-offer-images/');
        self::$course->save();
    }

    public static function updateCourseOffer($request){
        self::$course=Course::find($request->course_id);
//        echo "This is from Course Model updateCourseOffer";
//        exit();
        if($request->file('image')){
            if(file_exists(self::$course->banner_image)){
                unlink(self::$course->banner_image);
            }
            self::$imageUrl=self::getImageUrl($request,'upload/course-offer-images/');
        }
        else{
            self::$imageUrl=self::$course->banner_image;
        }

        self::$course->offer_fee=$request->offer_fee;
        self::$course->banner_image=self::$imageUrl;
        self::$course->save();

    }

}
