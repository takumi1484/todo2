<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index()//一覧表示。herokuでできてない
    {
        return Task::take(50)->get()->keyBy('id');
    }

    public function store(Request $request)//store:新規追加。create()でもよさそう
    {
        //return Task::create($request->only('name'))->save()->fresh();//失敗した記述...参考サイトの物をそのまま

//        return Task::create([
//            'name' => $request['name'],
//        ]);//一応成功したがherokuでエラー

        return Task::create($request->only('name'));

//        $task = new Task;
//        $task -> name = $request -> name;
//        $task -> is_done = false;
//        $task -> save();//うまくできなかった。更新したら反映された。没。
    }

    public function destroy($id)//削除。
    {
        return Task::destroy($id);
    }

    public function update($id, Request $request)//更新:is_doneの変更
    {
//        return Task::find($id)->fill($request->only('is_done'))
//            ->save()->fresh();    //失敗した記述...参考サイトの物をそのまま

        return Task::find($id)->fill($request->only('is_done'));

//        return Task::find($id)->fill([
//            'is_done' => $request['is_done'],
//        ]);//一応成功したがherokuでエラー
    }
}