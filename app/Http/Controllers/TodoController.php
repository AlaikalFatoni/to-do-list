<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::latest()->get();

        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
        ]);

        Todo::create($validated);

        return redirect()->route('todos.index')
            ->with('success', 'To-do created successfully!');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'completed'   => 'boolean',
        ]);

        $todo->update([
            'title'       => $validated['title'],
            'description' => $validated['description'] ?? null,
            'completed'   => $request->has('completed'),
        ]);

        return redirect()->route('todos.index')
            ->with('success', 'To-do updated successfully!');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect()->route('todos.index')
            ->with('success', 'To-do deleted successfully!');
    }
}
