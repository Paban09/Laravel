@extends('master')

@section('title')
    Manage Course
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
                            <th>Course Title</th>
                            <th>Teacher Name</th>
                            <th>Course Fee</th>
                            <th>Course Duration</th>
                            <th>Starting Date</th>
                            <th>Course objective</th>
                            <th>Course Detail</th>
                            <th>Image</th>

                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $course)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$course->title}}</td>
                                <td>{{$course->teacher}}</td>
                                <td>{{$course->fee}}</td>
                                <td>{{$course->duration}}</td>
                                <td>{{$course->date}}</td>
                                <td>{{$course->objective}}</td>
                                <td>{{$course->detail}}</td>
                                <td>
                                    <img src="{{asset($course->image)}}" alt="" height="150" width="200">
                                </td>
                                <td>
                                    <a href="{{route('course.edit',['id'=>$course->id])}}"  class="btn btn-success">Edit</a>
                                    <a href="{{route('course.delete',['id'=>$course->id])}}" onclick="return confirm('Are you Sure to delete this?')"  class="btn btn-danger">Delete</a>
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
