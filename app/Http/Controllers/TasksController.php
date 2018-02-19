<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index()
    {
    	$tasks = Task::all();
    	return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
    	return view('tasks.create');
    }

    public function store()
    {
    	$this->validate(request(), [
    		'title' => 'required'
    	]);

    	Task::create(request(['title']));

    	return redirect('/tasks');
    }
}
