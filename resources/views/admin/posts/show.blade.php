@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card m-auto w-50" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title text-center"> {{ $post->title }} </h5>
            <img src=" {{ asset('storage/imgs/' . $post->image_path) }} " alt="image">
            <p class="card-text text-center"> {{ $post->author }} </p>
            <p class="card-text"> {{ $post->content }} </p>
            <p class="card-text text-center"> {{ $post->post_date }} </p>
            <p class="card-text"></p>
        </div>
    </div>
</div>
@endsection
