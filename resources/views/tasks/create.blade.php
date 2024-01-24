<!-- resources/views/tasks/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create Task</h2>
        <form method="POST" action="{{ route('tasks.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Task Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Task</button>
        </form>
    </div>
@endsection
