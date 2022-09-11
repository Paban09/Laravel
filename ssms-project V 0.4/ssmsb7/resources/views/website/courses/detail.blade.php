@extends('website.master')

@section('title')
    Course Details
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-3">
                    <div class="card card-body border-0 shadow">
                        <img src="{{asset('/')}}website/img/service_img2.jpg" alt="" />
                    </div>

                </div>
                <div class="col-md-6 mt-5">
                    <div class="card card-body border-0">
                        <h1 class="text-center">PHP with Laravel Framework</h1>
                        <h3 class="">Trainer Name : Paban</h3>
                        <h3 class="">Starting Date : 12th June,2022</h3>
                        <h3 class="">Course fee : 15000 Tk. </h3>
                        <h3 class="">Venu : Dhaka </h3>
                        <a href="" class="btn btn-success px-5">Enroll Now</a>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12  mt-3">
                    <div class="card card-body shadow border-0">
                        <h2>Course Deatil Inormation</h2>
                        <hr/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, iure possimus? Accusamus animi atque deleniti dignissimos eaque earum ipsum itaque natus numquam obcaecati optio quas quasi ratione, sint tenetur voluptatum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, iure possimus? Accusamus animi atque deleniti dignissimos eaque earum ipsum itaque natus numquam obcaecati optio quas quasi ratione, sint tenetur voluptatum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, iure possimus? Accusamus animi atque deleniti dignissimos eaque earum ipsum itaque natus numquam obcaecati optio quas quasi ratione, sint tenetur voluptatum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, iure possimus? Accusamus animi atque deleniti dignissimos eaque earum ipsum itaque natus numquam obcaecati optio quas quasi ratione, sint tenetur voluptatum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, iure possimus? Accusamus animi atque deleniti dignissimos eaque earum ipsum itaque natus numquam obcaecati optio quas quasi ratione, sint tenetur voluptatum.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
