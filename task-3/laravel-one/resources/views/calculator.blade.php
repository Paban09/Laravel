@extends('master')

@section('title')
    calculator page
@endsection


@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body text-center bg-info">

                        <form action="{{route('calculate')}}" method="POST">
                            {{--                            token--}}
                            @csrf

                            <div class="row mb-3">
                                <label class="col-md-3">First Number</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="first_number"/>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Second Number</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="second_number"/>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="" class="col-md-3"> Your Choice</label>
                                <div class="col-md-9">
                                    <label><input type="radio" name="choice" value="+" /> + </label>
                                    <label><input type="radio" name="choice" value="-" /> - </label>
                                    <label><input type="radio" name="choice" value="*" /> * </label>
                                    <label><input type="radio" name="choice" value="/" /> / </label>
                                    <label><input type="radio" name="choice" value="%" /> % </label>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Result</label>
                                <div class="col-md-9">
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success"  name="submit_btn" value="Submit" />
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
