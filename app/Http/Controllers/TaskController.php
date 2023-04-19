<?php

namespace App\Http\Controllers;

use App\Models\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{

        public function create()
        {
            return view('create');
        }

        public function store(Request $request): \Illuminate\Http\RedirectResponse
        {
            $task = new Task;

            $task->title = $request->input('title');
            $task->description = $request->input('description');

            $task->save();

            return redirect()->route('tasks.index');
        }

        public function index()
        {
            $tasks = Task::all();
        
            return view('index', compact('tasks'));
        }
    }



