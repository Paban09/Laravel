@extends('master')

@section('title')
    Add Course Page
@endsection

@section('body')
    <section class="py-5 bg-info">
        <div class="container bg-light">
            <div class="row py-5">
                <div class="col-md-12">
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>

                    <form action="{{route('course.create')}}" method="POST" enctype="multipart/form-data">

                        @csrf
                        <div class="row mb-3">
                            <label class="col-md-3">Course Title</label>
                            <div class="col-md-9">
                                <input name="title" type="text" class="form-control" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3">Teacher Name</label>
                            <div class="col-md-9">
                                <input name="teacher" type="text" class="form-control" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3">Course Fee</label>
                            <div class="col-md-9">
                                <input name="fee" type="number" class="form-control" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3">Course Duration</label>
                            <div class="col-md-9">
                                <input name="duration" type="text" class="form-control" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3">Starting Date</label>
                            <div class="col-md-9">
                                <input name="date" type="date" class="form-control" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3">Course Objective</label>
                            <div class="col-md-9">
                                <textarea name="objective" type="text" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3">Course Detail</label>
                            <div class="col-md-9">
                                <textarea name="detail" type="text" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3">Image</label>
                            <div class="col-md-9">
                                <input name="image" type="file" class="form-control" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <input  type="submit" class="btn btn-outline-warning" value="Create New Course" />
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection
