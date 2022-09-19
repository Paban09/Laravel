@extends('website.master')

@section('title')
    {{$course->title}}
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-3">
                    <div class="card card-body border-0 shadow">
                        <img src="{{asset($course->image)}}" alt="" />
                    </div>

                </div>
                <div class="col-md-6 mt-5">
                    <div class="card card-body border-0">
                        <h1 class="text-center">{{$course->title}}</h1>
                        <h3 class="">Trainer Name :{{$course->teacher->name}}</h3>
                        <h3 class="">Starting Date : {{$course->starting_date}}</h3>
                        @if($course->offer_fee>0)
                            <h3 class="">Regular Course fee : {{$course->fee}}</h3>
                            <h3 class="">Offer Course fee : {{$course->offer_fee}}</h3>
                        @else
                            <h3 class="">Regular Course fee : {{$course->fee}}</h3>
                        @endif

                            <h3 class="">Venu : Dhaka </h3>

                        <a href="{{route('enroll-now',['id'=>$course->id])}}" class="btn btn-success px-5 {{$status == true ? 'disabled' : ''}}">Enroll Now</a>
                        @if($status)
                            <p class="text-center text-danger">You are already enroll this class</p>
                        @endif
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12  mt-3">
                    <div class="card card-body shadow border-0">
                        <h2>Course Detail Information</h2>
                        <hr/>
                        {!! $course->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
