@extends('layouts.app')

@section('title', 'New To-Do')

@section('content')
    <h1>New To-Do</h1>

    <div class="card" style="display:block;">
        <form action="{{ route('todos.store') }}" method="POST">
            @csrf

            <label for="title">Title <span style="color:#ef4444">*</span></label>
            <input type="text" id="title" name="title"
                   value="{{ old('title') }}"
                   placeholder="What needs to be done?">
            @error('title')
                <p class="form-error">{{ $message }}</p>
            @enderror

            <label for="description">Description</label>
            <textarea id="description" name="description"
                      placeholder="Optional details...">{{ old('description') }}</textarea>
            @error('description')
                <p class="form-error">{{ $message }}</p>
            @enderror

            <div style="display:flex; gap:12px;">
                <button type="submit" class="btn btn-primary">Create</button>
                <a href="{{ route('todos.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
@endsection
