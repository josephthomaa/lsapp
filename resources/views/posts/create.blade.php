@extends('layouts.app')

@section('content')
    <h3 style="padding-top:30px;">Create new post</h3>
    <form action="{{ route('store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="email">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="pwd">Body:</label>
            <textarea class="form-control" rows="5" id="bodytext" name="body"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection