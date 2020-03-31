@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-lg-8">
        <h1 class="mt-4 mb-4">{{$post->title}}</h1>

        <div class="lead">
            <span>by</span>
            <span class="font-weight-bold"></span>
            <hr>
        </div>
        <div class="lead">
            <p>{{$post->body}}</p>
            <hr>
        </div>
        <div class="lead">
            <span>Posted on</span>
            <span>{{$post->created_at}}</span>
            <hr>
        </div>

        <div class="d-flex">
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary mr-2">Edit post</a>

            <form action="{{action('PostsController@destroy', $post->id)}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Delete post</button>
            </form>
        </div>
    </div>
</div>
@endsection