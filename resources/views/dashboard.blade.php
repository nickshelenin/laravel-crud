@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Posts</div>
            </div>

            <table class="table table-striped">
                <tr>
                    <th>Title</th>
                    <th>Date</th>
                    <th></th>
                </tr>

                @foreach ($posts as $post)
                <tr>
                    <td><a href="/posts/{{$post->id}}">{{$post->title}}</a></td>
                    <td>{{$post->created_at}}</td>
                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary mr-2">Edit post</a></td>
                    <td>
                        <form action="{{action('PostsController@destroy', $post->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete post</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection