@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">#id</th>
            <th scope="col">Title</th>
            <th scope="col">author</th>
            <th scope="col">content</th>
            <th scope="col">post_date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->author }}</td>
                <td>{{ $post->content }}</td>
                <td>{{ $post->post_date }}</td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
@endsection
