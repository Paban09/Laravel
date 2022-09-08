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

            </div>

            <div class="carousel-item">
                <img src="{{asset('/')}}website/img/12.png" alt="" class="w-100" style="height: 550px;" />

            </div>

            <div class="carousel-item">
                <img src="{{asset('/')}}website/img/13.png" alt="" class="w-100" style="height: 550px;" />

            </div>
        </div>
    </div>
@endsection
