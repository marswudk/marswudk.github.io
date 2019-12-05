@extends('layouts.front_layout')
@section('css')
    <style>
        .bg-img{
            width: 100%;
            height: 600px;
            background: url('https://cdn.pixabay.com/photo/2019/12/02/10/46/hamburg-4667427_960_720.jpg') center / cover;
            margin-bottom: 50px;
        }
    </style>
@endsection
    @section('content')
    <main>
            <div class="container ">
                <div class="bg-img">

                </div>
                <div class="row">
                    @foreach ($dogs as $dog)
                        <div class="col">
                                <div class="card">
                                        <img src="{{ $dog->img}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">{{ $dog->title }}</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="/products/{{ $dog->id }}" class="btn btn-primary">Go somewhere</a>
                                        </div>

                                </div>
                        </div>
                    @endforeach
                </div>
            </div>



    </main>
    @endsection

