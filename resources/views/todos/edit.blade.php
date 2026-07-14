@extends('layouts.app')

@section('title', 'Edit To-Do')

@section('content')
    <h1>Edit To-Do</h1>

    <div class="card" style="display:block;">
        <form action="{{ route('todos.update', $todo) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="title">Title <span style="color:#ef4444">*</span></label>
            <input type="text" id="title" name="title"
                   value="{{ old('title', $todo->title) }}"
                   placeholder="What needs to be done?">
            @error('title')
                <p class="form-error">{{ $message }}</p>
            @enderror

            <label for="description">Description</label>
            <textarea id="description" name="description"
                      placeholder="Optional details...">{{ old('description', $todo->description) }}</textarea>
            @error('description')
                <p class="form-error">{{ $message }}</p>
            @enderror

            <label class="checkbox-label">
                <input type="checkbox" name="completed" value="1"
                       {{ old('completed', $todo->completed) ? 'checked' : '' }}>
                Mark as completed
            </label>

            <div style="display:flex; gap:12px;">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('todos.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
@endsection
