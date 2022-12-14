<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public static $products;

    public static function getAllProduct(){
        return[
            0=>[
                "id"=>1,
                "name"=>"Hill Shoe",
                "image"=>"product1.png",
                "price"=>"2500",
                "detail"=>"A branded Shoe"
            ],
            1=>[
                "id"=>2,
                "name"=>"Hat",
                "image"=>"product3.png",
                "price"=>"2500",
                "detail"=>"A expensive Hat"
            ],
            2=>[
                "id"=>3,
                "name"=>"Bag",
                "image"=>"product5.png",
                "price"=>"2500",
                "detail"=>"Gucci bag for luxery"
            ]


        ];
    }

    public static function getProductbyId($id){
        self::$products=self::getAllProduct();
        foreach (self::$products as $product){
            if($product['id']==$id){
                return $product;
            }
        }
    }
}
