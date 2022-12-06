<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    
    public function index()
    {
        //returns array with the created Tasks. Currently only going to view_tasks
        $tasks = Task::with('user')->latest()->get()->toArray();
        return array_reverse($tasks);
    }

}
