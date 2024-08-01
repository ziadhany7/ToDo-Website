@extends('layouts.app')
@section('title') Show @endsection

@section('content')

<div class="card mx-5 mt-5">
    <div class="card-header ">
        Task info
    </div>
    <div class="card-body">
        <h5 class="card-title">Title: {{$task->title}}</h5>
        <p class="card-text">Created at: {{$task->created_at}} </p> 
        <p class="card-text">Description: {{$task->description}}</p>
    </div>
</div>

@endsection