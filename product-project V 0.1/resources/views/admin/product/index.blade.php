@extends('admin.master')

@section('title')
    Add Product
@endsection


@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row ">
                <div class="col-md-8 mx-auto">
                    <div class="card ">
                        <div class="card-header text-center fw-bold">Add Product</div>

                        <div class="card-footer">
                            <h3 class="text-center text-success"> {{Session::get('message')}} </h3>
                            <form action="{{route('product.create')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label class="col-md-3">Product Name :</label>
                                    <div class="col-md-9">
                                        <input class="form-control" name="name" type="text" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Category Name :</label>
                                    <div class="col-md-9">
                                        <input class="form-control" name="category_name" type="text" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Brand Name :</label>
                                    <div class="col-md-9">
                                        <input class="form-control" name="brand_name" type="text" />
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label class="col-md-3">Price :</label>
                                    <div class="col-md-9">
                                        <input class="form-control" name="price" type="number" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Description :</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="description" type="text"></textarea>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label class="col-md-3">Image :</label>
                                    <div class="col-md-9">
                                        <input class="form-control" name="image" type="file" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input value="Create New Product" class="btn btn-success px-5" type="submit" />
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
