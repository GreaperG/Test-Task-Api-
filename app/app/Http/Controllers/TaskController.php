<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return response()->json($tasks);
    }
    public function show($id)
    {
        $task = Task::find($id);
        return response()->json($task);
    }
    public function store(TaskRequest $request)
    {
        $task = Task::create($request->validated());
        return response()->json($task, 201);
    }
    public function update(TaskRequest $request, $id)
    {
        $task = Task::find($id);
        $task->update($request->validated());
        return response()->json($task, 200);
    }
    public function destroy($id)
    {
        Task::destroy($id);
        return response()->json(null, 204);
    }
}
