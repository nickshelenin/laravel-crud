@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card mb-4">
                <div class="card-body">
                    <h1 class="card-title">{{$post->title}}</h1>
                    <p class="card-text">{{$post->body}}</p>
                    <a class="btn btn-info" href="/posts/{{$post->id}}">Read more &rarr;</a>
                </div>

                <div class="card-footer text-muted">
                    Posted on  by
                </div>
            </div>
        @endforeach
    @endif
@endsection