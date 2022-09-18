@extends('website.master')

@section('title')
    Enroll Page
@endsection

@section('body')
    <section class="">
        <div class="container-fluid py-5 bg-secondary">
            <div class="row">
                <div class="col">
                    <h1 class="text-center text-white">Enroll Now of {{$course->title}}</h1>
                </div>
            </div>
        </div>

        <div class="container py-5">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body h-100 shadow ms-auto" >
                        <h1 class="text-center">Enroll Form</h1>
                        <hr>

                        <form action="{{route('enroll.new',['id'=>$course->id])}}" method="POST">
                            @csrf

                            <div class="row mb-3">
                                <label class="col-md-3">Full Name : </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name" />
                                    <span class="text-danger">{{$errors->has('name')?$errors->first('name'):""}} </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Email Address : </label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email" />
                                    <span class="text-danger">{{$errors->has('email')?$errors->first('email'):""}} </span>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-md-3">Mobile Number : </label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="mobile" />
                                    <span class="text-danger">{{$errors->has('mobile')?$errors->first('mobile'):""}} </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Payment Option</label>
                                <div class="col-md-9">
                                    <label><input  type="radio" name="payment_type" checked value="cash"/>Cash</label>
                                    <label><input  type="radio" name="payment_type"  value="online"/>Online</label>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success px-5" value="Enroll Now" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
