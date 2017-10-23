<?php

namespace App\Http\Controllers;

use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        $name = 'John';
        $tasks = Task::all();

        return view('tasks.index', compact('name', 'tasks'));

    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }
}
