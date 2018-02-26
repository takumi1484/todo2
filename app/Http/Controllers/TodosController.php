<?php

namespace App\Http\Controllers;

use App\Todo;

class TodosController extends Controller
{
    protected $todo;

    public function __construct(Todo $todo)
    {
        $this->todo = $todo;
    }

    public function getIndex()
    {
        $todos = $this->todo->all();
        return view('todo.index', compact('todos'));
    }
}