@extends('admin.master')

@section('title')
    Manage
@endsection

@section('body')
    <section class="py-5">
        <div class="container px-4">

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                </div>
                <div class="card-body">
                    <h3 class="text-success text-center">{{Session::get('message')}}</h3>
                    <table id="datatablesSimple">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Category Name</th>
                            <th>Band Name</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->category_name}}</td>
                                    <td>{{$product->brand_name}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>
                                        <img src="{{$product->image}}" alt="not found" height="100" width="100" />
                                    </td>
                                    <td>
                                        <a href="{{route('product.edit',['id'=>$product->id])}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                        <a href="{{route('product.delete',['id'=>$product->id])}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection
