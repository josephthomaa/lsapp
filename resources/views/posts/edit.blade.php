@extends('layout.app')

@section('content')
    <h3 style="padding-top:30px;">Edit Post</h3>
<form action="/posts/{{$post->id}}" method="post">
            @method('PUT')
            @csrf
        <div class="form-group">
            <label for="email">Title</label>
            <input type="text" class="form-control" id="title" name="title" value='{{$post->title}}'>
        </div>
        <div class="form-group">
            <label for="pwd">Body:</label>
            <textarea class="form-control" rows="5" id="bodytext" name="body" value=''>{{$post->body}}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'bodytext' );
</script>
@endsection