<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create(){
        return view('tasks.create');
    }

    public function store(TaskRequest $request){              
        Task::create($request->validated());
        return redirect()->route('tasks.index')->with('success', 'Task Created successfully');
    }

    public function show(Task $task){
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task){
        return view('tasks.edit', compact('task'));
    }

    public function update(TaskRequest $request, Task $task){
        $task->update($request->validated());
        return redirect()->route('tasks.index')->with('success', 'Task updated successfully');
    }

    public function destroy(Task $task){
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task Deleted');
    }
}
