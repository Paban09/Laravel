@extends('website.master')

@section('title')
    Simple Student Management System
@endsection

@section('body')
    <div id="slider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1000">
        <ol class="carousel-indicators">
            <li data-bs-target="#slider" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#slider" data-bs-slide-to="1" class=""></li>
            <li data-bs-target="#slider" data-bs-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" >
                <img src="{{asset('/')}}website/img/11.png" alt="" class="w-100" style="height: 550px;" />

                <div class="carousel-caption">
                    <h1>Graphic Design</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci animi consequatur culpa distinctio, dolor esse exercitationem fugiat hic illo laudantium quaerat, quibusdam, reiciendis similique soluta ullam unde vel voluptatibus.</p>
                    <a href="" class="btn btn-success px-5">Read More</a>
                </div>

            </div>

            <div class="carousel-item">
                <img src="{{asset('/')}}website/img/12.png" alt="" class="w-100" style="height: 550px;" />
                <div class="carousel-caption">
                    <h1>Android App Development</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci animi consequatur culpa distinctio, dolor esse exercitationem fugiat hic illo laudantium quaerat, quibusdam, reiciendis similique soluta ullam unde vel voluptatibus.</p>
                    <a href="" class="btn btn-success px-5">Read More</a>
                </div>

            </div>

            <div class="carousel-item">
                <img src="{{asset('/')}}website/img/13.png" alt="" class="w-100" style="height: 550px;" />
                <div class="carousel-caption">
                    <h1>Responsive web design</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci animi consequatur culpa distinctio, dolor esse exercitationem fugiat hic illo laudantium quaerat, quibusdam, reiciendis similique soluta ullam unde vel voluptatibus.</p>
                    <a href="" class="btn btn-success px-5">Read More</a>
                </div>

            </div>
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

                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset('/')}}website/img/service_img2.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h4>Android App Development</h4>
                            <h5>Md. Masud Rana</h5>
                            <p>Tk. 20000</p>
                            <p>Starting Date: 25.06.2022</p>
                            <hr/>
                            <a href="" class="btn btn-success px-5">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset('/')}}website/img/service_img2.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h4>Android App Development</h4>
                            <h5>Md. Masud Rana</h5>
                            <p>Tk. 20000</p>
                            <p>Starting Date: 25.06.2022</p>
                            <hr/>
                            <a href="" class="btn btn-success px-5">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset('/')}}website/img/service_img2.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h4>Android App Development</h4>
                            <h5>Md. Masud Rana</h5>
                            <p>Tk. 20000</p>
                            <p>Starting Date: 25.06.2022</p>
                            <hr/>
                            <a href="" class="btn btn-success px-5">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
