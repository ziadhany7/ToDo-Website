@extends('layouts.app')
@section('title') index @endsection
@section('content')
<dev class="container mt-5">
    <dev>
        <center>
            <a href="{{route('tasks.create')}}" class="btn btn-success mb-5">Add New Task</a>
        </center>
    </dev>

    <!-- table -->
    <table class="table mx-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Created At</th>
                <th scope="col">
                </th>
            </tr>
        </thead>
        @foreach ($tasks as $task)
        <tbody>
            <tr>
                <th scope="row">{{ $task->id }}</th>
                <td> {{$task->title}} </td>
                <td> {{$task->created_at->format('Y-m-d')}} </td>
                <td>
                    <a class="btn btn-info" href="{{route('tasks.show',$task -> id)}}" role="button">View</a>
                    <a class="btn btn-primary" href="{{route('tasks.edit',$task -> id)}}" role="button">Edit</a>
                    <form method="POST" action="{{route('tasks.destroy', $task -> id)}}" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" role="button">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- End Table -->

</dev>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

@endsection