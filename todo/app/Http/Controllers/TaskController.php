<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    function index(){
        $tasks = Task::latest()->get();
        
        return view('tasks.index', compact('tasks'));
    }
    function create()
    {
        return view('tasks.create');
    }
    function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'title' => 'required|string|max:30',
            'body'  => 'required|string|max:120'
            
        ]);
        $task = new Task;

        $task ->image_at = $request->image;
        $task -> title = $request -> title;
        $task -> contents = $request -> body;
        $task -> user_id = Auth::id();

        $task -> save();

        return redirect()->route('tasks.index');
    }

    
    function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit',compact('task'));
    }
    function update(Request $request,$id)
    {
        $tasks = Task::all();
        $task = Task::find($id);

        $task -> title = $request -> title;
        $task -> image_at = $request -> image;
        $task -> contents = $request -> body;
        $task -> save();

        return view('tasks.index',compact('tasks','task'));//ブログアプリは詳細ページを経由しているのと異なり、todoアプリはindex画面から直接編集画面に飛んでいるので、コンパクト関数に２つの引数を指定しないといけない
    }
    function destroy($id)
    {
        $tasks= Task::all();
        $task = Task::find($id);
        $task ->delete();


        return redirect('/tasks');
    }
    function show()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }



}