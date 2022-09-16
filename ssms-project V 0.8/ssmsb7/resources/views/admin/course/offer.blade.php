
@extends('admin.master')
@section('title')
    manage-offer
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class=row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <h3>Course Special Offer Form</h3>
                        <hr/>
                        <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                        <form action="{{route('admin.create-course-offer')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Select Course Name</label>
                                <div class="col-md-9">
                                    <select name="course_id" id="" class="form-control">
                                        <option value="" disabled selected>.....Select your course.....</option>
                                        @foreach($courses as $course)
                                            <option value="{{$course->id}}">{{$course->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-3">Course Banner Image</label>
                                <div class="col-md-9">
                                    <input type="file" name="image" class="form-control-file">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-3">Offer Price</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="offer_fee">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-primary px-5 " value="Create New Couse Offer"/>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">All Course Offer Info</h4>

                            <p class="card-title-desc">{{Session::get('message')}}</p>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Course Title</th>
                                    <th>Starting Date</th>
                                    <th>Course Fee</th>
                                    <th>Offer Fee</th>
                                    <th>Action</th>
                                </tr>
                                </thead>


                                <tbody>
                                @foreach($offer_courses as $course)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$course->title}}</td>
                                        <td>{{$course->starting_date}}</td>
                                        <td>{{$course->fee}}</td>
                                        <td>{{$course->offer_fee}}</td>

                                        <td>

                                            <a href="{{route('admin.course-offer-edit',['id'=>$course->id])}}" class="btn btn-primary btn-sm" title="View Course Detail">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>

        </div>
    </section>
@endsection


