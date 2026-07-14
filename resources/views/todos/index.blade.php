@extends('layouts.app')

@section('title', 'My To-Do List')

@section('content')
    <div class="top-bar">
        <h1>My To-Do List</h1>
        <a href="{{ route('todos.create') }}" class="btn btn-primary">+ New To-Do</a>
    </div>

    @if($todos->isEmpty())
        <div class="empty">
            <p>No to-dos yet. Click <strong>+ New To-Do</strong> to get started.</p>
        </div>
    @else
        @foreach($todos as $todo)
            <div class="card">
                <div class="card-body">
                    <p class="card-title" style="{{ $todo->completed ? 'text-decoration:line-through;color:#9ca3af;' : '' }}">
                        {{ $todo->title }}
                    </p>
                    @if($todo->description)
                        <p class="card-desc">{{ $todo->description }}</p>
                    @endif
                    <span class="badge {{ $todo->completed ? 'badge-done' : 'badge-pending' }}" style="margin-top:8px;">
                        {{ $todo->completed ? 'Completed' : 'Pending' }}
                    </span>
                </div>
                <div class="actions">
                    <a href="{{ route('todos.edit', $todo) }}" class="btn btn-secondary">Edit</a>

                    <form class="inline" action="{{ route('todos.destroy', $todo) }}" method="POST"
                          onsubmit="return confirm('Delete this to-do?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    @endif
@endsection
