<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create(){
        return view('tasks.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|min:3'
        ]);
        
        Task::create($request->only(['title', 'description']));
        return redirect()->route('tasks.index')->with('success', 'Task Created successfully');
    }

    public function show(Task $task){
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task){
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task){
        $task->update($request->only(['title', 'description']));
        return redirect()->route('tasks.index')->with('success', 'Task updated successfully');
    }

    public function destroy(Task $task){
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task Deleted');
    }
}
