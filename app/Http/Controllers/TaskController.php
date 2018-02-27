<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        return Task::take(5)->get()->keyBy('id');
    }

    public function store(Request $request)
    {
        return Task::create($request->only('name'))->save()->fresh();
    }

    public function destroy($id)
    {
        return Task::destroy($id);
    }

    public function update($id, Request $request)
    {
        return Task::find($id)->fill($request->only('is_done'))
            ->save()->fresh();
    }
}