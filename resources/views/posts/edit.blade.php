@extends('layouts.app')

@section('content')
{{-- <form class="container mt-5"  action="{{action('PostsController@store')}}">
<div class="form-group">
    <input type="text" class="form-control" placeholder="title" name="title">
</div>
<div class="form-group">
    <textarea class="form-control" name="body" placeholder="body"></textarea>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form> --}}

{!! Form::open(['action' => 'PostsController@update', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::text('title', "{{$post->title}}", ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::textarea('body',"{{$post->body}}", ['class' => 'form-control', 'placeholder' => 'Body '])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection