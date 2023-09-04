<?php

namespace App\Http\Controllers;

use App\Models\Task;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        if($request->search) {
            $tasks = Task::where('task', 'LIKE', "%$request->search%")
            ->get();
            // agar tidak mengeksekusi syntax selanjutnya maka harus ditambahkan return
            return $tasks;
        }

        $tasks = Task::all();
        return $tasks;
    }

    public function create()
    {
        return view('task.create');
    }

    public function store(Request $request)
    {
        Task::create([
            'task' => $request->task,
            'user' => $request->user
        ]);

        return 'success';
    }

    public function show($id)
    {
        $task = Task::find($id);
        return $task;
    }

    public function edit($id)
    {
        return view('task.edit');
    }

    public function update(Request $request, $id)
    {
        $task = Task::find($id);

        $task->update([
            'task' => $request->task,
            'user' => $request->user
        ]);

        return $task;
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return 'success';
    }
}
