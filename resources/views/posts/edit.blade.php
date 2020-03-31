@extends('layouts.app')

@section('content')

<a href="/dashboard" class="btn btn-primary mb-5">Back</a>

<form class="container" action="{{action('PostsController@update', $post->id)}}" method="POST">
    @method('PUT')
    @csrf

    <div class="form-group">
        <input type="text" class="form-control" placeholder="title" name="title" value="{{$post->title}}">

        @error('title')
        <span class="text-danger" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <textarea class="form-control" placeholder="body" name="body">{{$post->body}}</textarea>

        @error('body')
        <span class="text-danger" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection