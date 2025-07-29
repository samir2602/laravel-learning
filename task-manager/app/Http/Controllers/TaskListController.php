<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaskList;

class TaskListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasklist = TaskList::all();
        return view("task_lists.index", compact('tasklist'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("task_lists.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);
        TaskList::create($request->only('name'));

        return redirect()->route('task-lists.index')->with('success', 'Task List created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TaskList $taskList)
    {
        return view('task_lists.edit', compact('taskList'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TaskList $taskList)
    {
        $request->validate(['name' => 'required|string|max:255']);
        $taskList->update($request->only('name'));

        return redirect()->route('task-lists.index')->with('success', 'Task List updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TaskList $taskList)
    {
        $taskList->delete();
        return redirect()->route('task-lists.index')->with('success', 'Task List deleted');
    }
}
