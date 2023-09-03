<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    private $taskList = [
        'first' => 'Sleep',
        'second' => 'Eat',
        'third' => 'Work',
    ];

    public function index(Request $request)
    {
        if($request->search) {
            $tasks = DB::table('tasks')
            ->where('task', 'LIKE', "%$request->search%")
            ->get();
            // agar tidak mengeksekusi syntax selanjutnya maka harus ditambahkan return
            return $tasks;
        }

        $tasks = DB::table('tasks')->get();
        return $tasks;
    }

    public function store(Request $request)
    {
        DB::table('tasks')->insert([
            'task' => $request->task,
            'user' => $request->user
        ]);

        return 'success';
    }

    public function show($id)
    {
        $tasks = DB::table('tasks')->where('id', $id)->first();
        ddd($tasks);
    }

    public function update(Request $request, $key)
    {
        $this->taskList[$key] = $request->task;
        return $this->taskList;
    }

    public function destroy($key)
    {
        unset($this->taskList[$key]);
        return $this->taskList;
    }
}
