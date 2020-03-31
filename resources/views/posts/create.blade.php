@extends('layouts.app')

@section('content')
<h1 class="mb-5">Create post</h1>

<form class="container mt-5" action="{{action('PostsController@store')}}" method="POST">
    @csrf

    <div class="form-group">
        <input type="text" class="form-control" name="title" placeholder="title" value="{{old('title')}}">

        @error('title')
        <span class="text-danger" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <textarea class="form-control" name="body" placeholder="body">{{ old('body') }}</textarea>

        @error('body')
        <span class="text-danger" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection