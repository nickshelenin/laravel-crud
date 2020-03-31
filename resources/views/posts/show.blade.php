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
            <span>Posted on {{$post->created_at}}</span>
            <span>By {{$post->user->name}}</span>
        </div>

        <div class="d-flex">
        </div>
    </div>
</div>
@endsection