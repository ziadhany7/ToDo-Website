@extends('layouts.app')
@section('title') Create @endsection

@section('content')
<form action="{{route('tasks.store')}}" method="POST">
    @csrf
    <!-- /resources/views/post/create.blade.php -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- Create Post Form -->
    <div class="card mx-5 mt-3">
        <div class="mx-5 mb-3 mt-3">
            <label class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="formGroupExampleInput" placeholder="Title">
        </div>

        <div class="mx-5 mb-3">
            <label for="formGroupExampleInput2" class="form-label">Description</label>
            <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
            <textarea name="description" class="form-control" rows="3" placeholder="Description"></textarea>
        </div>

        <button type="submit" class="btn btn-success mx-5  mb-3" style="height: 40px; width: 100px;">Submit</button>
        </dev>
</form>


@endsection