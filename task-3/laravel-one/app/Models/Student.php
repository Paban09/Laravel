<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public static function getAllStudent(){
        return[
            0=>[
                "id"=>1,
                "name"=>"Masud",
                "email"=>"masud@gmail.com",
                "mobile"=>"564354314"
            ],
            1=>[
                "id"=>2,
                "name"=>"Rana",
                "email"=>"rana@gmail.com",
                "mobile"=>"465143114"
            ],
            2=>[
                "id"=>3,
                "name"=>"Paban",
                "email"=>"paban@gmail.com",
                "mobile"=>"643514311"
            ]
        ];
    }
}
