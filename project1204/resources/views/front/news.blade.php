@extends('layouts.front_layout');
@section('css')
<style>
    .bg-img {
        width: 100%;
        height: 600px;
        background: url('https://cdn.pixabay.com/photo/2019/12/02/10/46/hamburg-4667427_960_720.jpg') center / cover;
        margin-bottom: 50px;
    }
</style>
@endsection
@section('content')
<div class="container">
    <div class="row">
        @foreach ($news as $list)
        <div class="col-12 col-md-4">
            <a href="/news/{{ $list->id }}">
                <h1>{{ $list->title }}</h1>
                <p>{{ $list->description }}</p>

            </a>
        </div>

        @endforeach

    </div>
</div>
@endsection
