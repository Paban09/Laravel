@extends('master')

@section('title')
    About Page
@endsection


@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">

                @foreach($products as $product)
                    <div class="col-md-4">

                        <div class="card ">

                            <img src="{{asset('/')}}img/{{$product['image']}}" alt="" />
                            <div class="card-body">
                                <h4>{{$product['name']}}</h4>
                                <p>Tk. {{$product['price']}}</p>
                                <hr/>
{{--                                work as get method--}}
                                <a href="{{route('product-detail',['id'=>$product['id']])}}" class="btn  btn-success">Detail</a>
                            </div>

                        </div>

                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
