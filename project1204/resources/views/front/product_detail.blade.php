@extends('layouts.front_layout')
@section('content')
<div class="container ">
        <div class="row">
                <div class="col">
                        <div class="card mt-5">
                                <img src="{{ $dog_detail->img}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">{{ $dog_detail->title }}</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="/products/1" class="btn btn-primary">Go somewhere</a>
                                </div>

                        </div>
                </div>

        </div>
    </div>

@endsection
