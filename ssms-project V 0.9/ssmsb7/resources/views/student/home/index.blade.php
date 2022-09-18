@extends('website.master')

@section('title')
    Student Dashboard
@endsection


@section('body')

    <section class="py-5">

        <div class="container-fluid py-5">
            <div class="row">
                <div class="col">
                    <h1>{{Session::get('student_name')}} Dashboard</h1>
                </div>
            </div>
        </div>

        <div class="container py-5">
            <div class="row">
                <div class="col-md-3">

                    <div class="card card-body">
                        <ul class="nav">
                            <li><a href="" class="nav-link border-bottom" >Dashboard</a></li>
                            <li><a href="" class="nav-link border-bottom" >Profile</a></li>
                            <li><a href="" class="nav-link border-bottom" >All Courses</a></li>
                            <li><a href="" class="nav-link border-bottom" >Account</a></li>
                            <li><a href="" class="nav-link border-bottom" >Logout</a></li>
                        </ul>
                    </div>

                </div>


                <div class="col-md-9">
                    <div class="card card-body">
                        <h1>My dashboard</h1>
                    </div>
                </div>


            </div>
        </div>

    </section>

@endsection
