@extends('master')
@section('title')
    Manage Product Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Product Name</th>
                            <th>Product Category</th>
                            <th>Product Brand</th>
                            <th>Product Price</th>
                            <th>Product Description</th>
                            <th>Product Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->category}}</td>
                                <td>{{$product->brand}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->description}}</td>
                                <td>
                                    <img src="{{asset($product->image)}}" alt="" height="150" width="200">
                                </td>
                                <td>
                                    <a href="{{route('product.edit',['id'=>$product->id])}}"  class="btn btn-success">Edit</a>
                                    <a href="{{route('product.delete',['id'=>$product->id])}}" onclick="return confirm('Are you Sure to delete this?')" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </section>
@endsection
