<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todoModel;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $todos=todoModel::all();
        return view('home')->with('todos',$todos);
    }

    public function new()
    {
        return view('new');
    }
    public function add(request $request)
    {
        $request->validate([
            'name' => 'required|max:20',
            'description' => 'required|min:8',
            'deadline' => 'required|min:2',
        ]);
        todoModel :: create($request->all());
        return redirect(to:'/home');
    }
    public function remove($id){
        $task= todoModel::find($id);
        $task->delete();
        return redirect(to:'/home');
    }
    public function edit($id){
        $task=todoModel::find($id);
        return view('edit')->with('task',$task);
    }
    public function update($id,request $request){
        $task=todoModel::find($id);
        $request->validate([
            'name' => 'required|max:20',
            'description' => 'required|min:8',
            'deadline' => 'required|min:2',
        ]);
        $task->update($request->all());    
        return redirect(to:'/home');
    }

}
