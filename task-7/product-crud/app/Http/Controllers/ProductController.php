<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public $products,$product;
    public function add(){
        return view('product.add');
    }

    public function manage(){
        $this->products=Product::all();
        return view('product.manage',['products'=>$this->products]);
    }

    public function create(Request $request){
//        $request->all();
        Product::newProduct($request);
        return redirect('/add-product')->with('message','Product Info Save Successfully');
    }

    public function edit($id){
       $this->product=Product::find($id);
       return view('product.edit',['product'=>$this->product]);
    }

    public function update(Request $request,$id){
        Product::updateProduct($request,$id);
        return redirect('/manage-product')->with('message',"Product Updated Successfully");
    }

    public function delete($id){
        Product::deleteProduct($id);
        return redirect('/manage-product')->with('message',"Product Delete Successfully");
    }
}
