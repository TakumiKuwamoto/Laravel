<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    function index(){
        $tasks = Task::all();
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

}