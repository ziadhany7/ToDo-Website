@extends('layouts.app')
@section('title') Create @endsection

@section('content')
<form method="POST" action="{{route('tasks.update',$task -> id)}}">
    @csrf
    @method('PUT')
    <div class="card mx-5 mt-3">
        <div class="mx-5 mb-3 mt-3">
            <label class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="formGroupExampleInput" placeholder="Title" value="{{$task->title}}">
        </div>

        <div class="mx-5 mb-3">
            <label for="formGroupExampleInput2" class="form-label">Description</label>
            <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
            <textarea name="description" class="form-control" rows="3" placeholder="Description"> {{$task->description}} </textarea>
        </div>

        <button type="submit" class="btn btn-primary mx-5  mb-3" style="height: 40px; width: 100px;">Edit</button>
        </dev>
</form>


@endsection