<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    private $taskList = [
        'first' => 'Sleep',
        'second' => 'Eat',
        'third' => 'Work',
    ];

    public function index()
    {
        if(request()->search) {
            return $this->taskList[request()->search];
        }
        return $this->taskList;
    }

    public function show($param)
    {
        // return $param;
        return $this->taskList[$param];
    }
}
