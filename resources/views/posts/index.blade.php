@extends('layouts.app')

@section('content')
    <h3 style="padding:30px;">Blog Posts</h3>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="container">
            <h5><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
            <small>Posted on {{$post->created_at}}</small>
            </div>
        @endforeach
        {{ $posts->links() }}
    @else
        <p>No Posts Found</p>
    @endif    
    <hr>
<div class="container">
    <a href="/posts/create">Create Post</a>
</div>    
@endsection