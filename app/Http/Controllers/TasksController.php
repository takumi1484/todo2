<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index()//一覧表示。herokuでできてない
    {
//        return Task::take()->get()->keyBy('id');
//        $items = Task::all();
//
        return Task::all()->keyBy('id');

//        $user = \JWTAuth::parseToken()->authenticate();//jwt
//        return $user->tasks()->get()->keyBy('id');
    }

    public function store(Request $request)//store:新規追加。create()でもよさそう
    {
//        $user = \JWTAuth::parseToken()->authenticate();
//        return $user->tasks()->create($request->only('name'))->fresh();//jwt

//        $c = Task::create($request->only('name'));
//        $c->save();
//        return $c;

        return Task::create($request->only('name'));
        //return Task::create($request->only('name'))->save()->fresh();//失敗した記述...参考サイトの物をそのまま
//        $task = new Task;
//        $task -> name = $request -> name;
//        $task -> is_done = false;
//        $task -> save();//うまくできなかった。更新したら反映された。没。spaじゃなきゃこれでいい
    }

    public function destroy($id)//削除。
    {
        return Task::destroy($id);
    }

    public function update($id, Request $request)//更新:is_doneの変更
    {
        //メッセージ部をテスト分に変更するせもっどにしてみる
//        return Task::find($id)->fill([
//            'is_done' => $request->is_done,
//        ])->save();

//        return Task::find($id)->fill($request->only('is_done'));


//        return Task::find($id)->fill($request->only('is_done'))->save();
        //失敗した記述...更新すると適用されるがその場で変化はしない->vue書き換えれば解決しそう

        //return Task::find($id)->fill($request->only('is_done'));

//        return Task::find($id)->fill([
//            'is_done' => $request->is_done,
//        ])->save();//一応成功したがherokuでエラー...なぜかできなくなった

//        $request = ['is_done'];

        $a = Task::find($id)->fill([
            'is_done' => $request->is_done,
        ]);
        $a->save();
        return $a;
        //なぜか保存とreturnを同時に記述したらエラーが出るようになった
        //save()をreturnするのは危ないかも
    }
}