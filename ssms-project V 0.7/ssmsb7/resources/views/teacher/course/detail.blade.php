@extends('teacher.master')

@section('body')
    <div class="row">
        <div class="col">
            <div class="card card-body">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Course Id</th>
                        <th>{{$course->id}}</th>
                    </tr>
                    <tr>
                        <th>Course Title</th>
                        <th>{{$course->title}}</th>
                    </tr>
                    <tr>
                        <th>Course Fee</th>
                        <th>{{$course->fee}}</th>
                    </tr>
                    <tr>
                        <th>Starting Date</th>
                        <th>{{$course->starting_date}}</th>
                    </tr>
                    <tr>
                        <th>Duration</th>
                        <th>{{$course->duration}}</th>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <th><img src="{{asset($course->image)}}" alt="" height="100" width="150" /></th>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <th>{!! $course->description !!}</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
