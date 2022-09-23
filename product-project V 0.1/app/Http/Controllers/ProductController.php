<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Session;
class ProductController extends Controller
{
    private $products,$product;
    public function add(){
        return view('admin.product.index');
    }

    public function create(Request $request){
//        return $request->all();
        Product::newProduct($request);
        return redirect('/product-add')->with('message','Product Created Successfully');
    }


    public function manage(){
//        return view('admin.product.manage');
        $this->products=Product::all();
        return view('admin.product.manage',['products'=>$this->products]);
    }

    public function edit($id){
        $this->product=Product::find($id);
        return view('admin.product.edit',['product'=>$this->product]);
    }

    public function update(Request $request,$id){
//        return $request->all();
        Product::updateProduct($request,$id);
        return redirect('/product-manage')->with('message','Product Updated Successfully');
    }

    public function delete($id){
        Product::deleteProduct($id);
        return redirect('/product-manage')->with('message',"Product Delete Successfully");

    }
}
