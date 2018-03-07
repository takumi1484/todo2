<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index()
    {

        return Task::take(5)->get()->keyBy('id');
    }

    public function store(Request $request)
    {
        //return Task::create($request->only('name'))->save()->fresh();
        return Task::create([
            'name' => $request['name'],
        ]);
    }

    public function destroy($id)
    {
        return Task::destroy($id);
    }

    public function update($id, Request $request)
    {
//        return Task::find($id)->fill($request->only('is_done'))
//            ->save()->fresh();
        return Task::find($id)->fill([
            'is_done' => $request['is_done'],
        ]);
    }
}