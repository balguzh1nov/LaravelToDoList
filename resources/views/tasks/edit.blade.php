<!-- resources/views/tasks/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Task</h2>
        <form method="POST" action="{{ route('tasks.update', $task->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Task Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Task</button>
        </form>
    </div>
@endsection
