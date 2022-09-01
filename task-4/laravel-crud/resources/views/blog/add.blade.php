@extends('master')

@section('title')
    Add Blog Page
@endsection

@section('body')
    <section class="py-5 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
{{--                    <h1 class="text-center">This is Add Page</h1>--}}

                    <div class="card">


                        <div class="card-header">
                            <h4 class="text-center">Add Blog Form</h4>
                            <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                        </div>

                        <di class="card-body">

                            <form action="{{route('blog.new')}}" method="POST" >

{{--                                token used for sequrity reason--}}
                                @csrf

                                <div class="row mb-3">
                                    <label class="col-md-3">Blog Title</label>
                                    <div class="col-md-9">
                                        <input type="text" name="title" class="form-control" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Author Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="author" class="form-control" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Blog Description</label>
                                    <div class="col-md-9">
                                        <textarea  name="description" class="form-control" ></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Blog Image</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="btn" class="btn btn-outline-success px-5" value="Create New Blog" />
                                    </div>
                                </div>

                            </form>
                        </di>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
