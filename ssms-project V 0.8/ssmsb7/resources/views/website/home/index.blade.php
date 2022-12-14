@extends('website.master')

@section('title')
    Simple Student Management System
@endsection

@section('body')
    <div id="slider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1000">
        <ol class="carousel-indicators">
            @foreach($offerCourses as $key=>$offer_course)
                <li data-bs-target="#slider" data-bs-slide-to="{{$key}}" class="{{$key==0 ? 'active' : ' '}}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner my-caption">
            @foreach($offerCourses as $key1=> $offer_course)
                <div class="carousel-item {{$key1==0 ? 'active' : ' '}}" >
                    <img src="{{asset($offer_course->banner_image)}}" alt="" class="w-100" style="height: 550px;" />

                    <div class="carousel-caption">
                        <h1>{{$offer_course->title}}</h1>
                        <p>Actual Course Fee: {{$offer_course->fee}}</p>
                        <p>Offer Course Fee: {{$offer_course->offer_fee}}</p>
                        <a href="{{route('course-detail',['id'=>$offer_course->id])}}" class="btn btn-success px-5">Read More</a>
                    </div>

                </div>
            @endforeach
        </div>
    </div>

    <section class="">
        <div class="container-fluid py-5 bg-secondary ">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center text-white">Our Popular Course</h1>
                </div>
            </div>
        </div>

        <div class="container py-5">
                <div class="row">
                    <div class="col-md-4 mb-3">

                        <div class="card">
                            <img src="{{asset('/')}}website/img/service_img1.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <h3>Responsive web design</h3>
                                <h5>Md. Masud Rana</h5>
                                <p>Tk. 12000</p>
                                <p>Starting Date: 12.09.2022</p>
                                <hr>
                                <a href="" class="btn btn-success">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="{{asset('/')}}website/img/service_img1.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <h3>Responsive web design</h3>
                                <h5>Md. Masud Rana</h5>
                                <p>Tk. 12000</p>
                                <p>Starting Date: 12.09.2022</p>
                                <hr>
                                <a href="" class="btn btn-success">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="{{asset('/')}}website/img/service_img1.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <h3>Responsive web design</h3>
                                <h5>Md. Masud Rana</h5>
                                <p>Tk. 12000</p>
                                <p>Starting Date: 12.09.2022</p>
                                <hr>
                                <a href="" class="btn btn-success">Read More</a>
                            </div>
                        </div>
                    </div>


                </div>
        </div>

    </section>

    <section>
        <div class="container-fluid bg-secondary">
            <div class="row">
                <div class="col">
                    <h1 class="text-white text-center">Recent Courses</h1>
                </div>
            </div>
        </div>

        <div class="container py-5">
            <div class="row">
                @foreach($courses as $course)
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <img src="{{asset($course->image)}}" alt="" class="card-img-top" style="height: 250px;">
                            <div class="card-body">
                                <h4>{{$course->title}}</h4>
                                <h5>{{$course->teacher->name}}</h5>
                                <p>Tk. {{$course->fee}}</p>
                                <p>Starting Date: {{$course->starting_date}}</p>
                                <hr/>
                                <a href="{{route('course-detail',['id'=>$course->id])}}}" class="btn btn-success px-5">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach




            </div>
        </div>
    </section>


@endsection
