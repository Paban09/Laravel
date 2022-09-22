@extends('admin.master')

@section('title')
    Add Category
@endsection

@section('body')
    <section class="py-5">
        <div class="container">

            <div class="card">
                <div class="card-header"><h4 class="text-center">Add Category</h4></div>
                <h3 class="text-danger text-center"> {{Session::get('message')}} </h3>
                <div class="card-body">
                    <form action="{{route('category.create')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label class="col-md-3"> Category Name :</label>
                            <div class="col-md-9">
                                <input class="form-control" name="name" type="text"  />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3"> Description :</label>
                            <div class="col-md-9">
{{--                                <input class="form-control" name="description" type="text"  />--}}
                                <textarea class="form-control" name="description"></textarea>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label class="col-md-3"> Image :</label>
                            <div class="col-md-9">
                                <input class="form-control" name="image" type="file"  />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3">Status :</label>
                            <div class="col-md-9">
                                <label >Published <input name="status" type="radio" value="1" /></label>
                                <label>Unpublished <input name="status" type="radio"  value="0" /></label>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <input class="btn btn-success px-5" value="Submit" type="submit"  />
                            </div>
                        </div>


                    </form>
                </div>
            </div>




        </div>
    </section>
@endsection
