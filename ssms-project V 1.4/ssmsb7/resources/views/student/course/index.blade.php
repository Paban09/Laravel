@extends('website.master')

@section('title')
    Student All Course
@endsection


@section('body')

    <section class="py-5">

        <div class="container-fluid py-5">
            <div class="row">
                <div class="col">
                    <h1 class="text-center">{{Session::get('student_name')}} Dashboard</h1>
                </div>
            </div>
        </div>

        <div class="container py-5">
            <div class="row">
                <div class="col-md-3">

                    <div class="card card-body">
                        <ul class="navbar-nav">
                            <li><a href="{{route('student-dashboard')}}" class="nav-link border-bottom" >Dashboard</a></li>
                            <li><a href="{{route('student-profile')}}" class="nav-link border-bottom" >Profile</a></li>
                            <li><a href="{{route('student-course')}}" class="nav-link border-bottom" >All Courses</a></li>
                            <li><a href="" class="nav-link border-bottom" >Account</a></li>
                            <li><a href="{{route('student-logout')}}" class="nav-link border-bottom" >Logout</a></li>
                        </ul>
                    </div>

                </div>


                <div class="col-md-9">
                    <div class="card card-body">
                        <h3 class="text-center">All Courses</h3>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>SL No.</th>
                                <th>Course Title</th>
                                <th>Starting Date</th>
                                <th>Status</th>
                            </tr>
                            </thead>

                            <tbody>
                                @foreach($enrolls as $enroll)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$enroll->course->title}}</td>
                                        <td>{{$enroll->course->starting_date}}</td>
                                        <td>{{$enroll->enroll_status}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
        </div>

    </section>

@endsection
