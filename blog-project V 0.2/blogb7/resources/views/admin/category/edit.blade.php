@extends('admin.master')

@section('title')
    Edit Category
@endsection

@section('body')
    <section class="py-5">
        <div class="container">

            <div class="card">
                <div class="card-header"><h4>Add Category</h4></div>
                <div class="card-body">
                    <form action="" method="POST">
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
                                <label >published <input name="status" type="radio" value="1" /></label>
                                <label>unpublished <input name="status" type="radio"  value="0" /></label>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <input class="btn btn-success" value="Submit" type="submit"  />
                            </div>
                        </div>


                    </form>
                </div>
            </div>




        </div>
    </section>
@endsection
