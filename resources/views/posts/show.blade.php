@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-primary">Go Back</a>
<h3 style="padding-top:30px;">
    {{$post->title}}
</h3>
<p>{!!$post->body!!}</p>
<small>
    Posted on {{ $post->created_at }} 
</small>
 <hr>
 <a href="/posts/{{$post->id}}/edit"  class="btn btn-primary">edit</a>   

 <form action="/posts/{{$post->id}}" method="post">
    @method('delete')
    @csrf
<button type="submit" class="btn btn-dange">Delete</button>
</form>


@endsection