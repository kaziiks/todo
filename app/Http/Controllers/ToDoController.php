<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ToDo;

class ToDoController extends Controller
{
    public function index(){
        $todos = ToDo::all();
        return view("todos.index", compact("todos"));
    }
    public function show(ToDo $todo) {
        return view("todos.show", compact("todo"));
      }

    public function create() {
        return view("todos.create");
    }
    public function store(Request $request){
        $validated = $request->validate([
            "content" => ["required", "max:255"]
          ]);
        ToDo::create([
            "content" => $validated["content"],
            "completed" => false
        ]);
        return redirect("/todos");
    }
    public function edit(Request $request,ToDo $todo){
    $request->validate([
        'title' => 'required|string|max:255',
    ]);
    $todo->content = $request->input('title');
    $todo->save();
    return rederect()->route('todos.show', $todo->id)->with('sucess', 'ToDo updated sucessefuly');
}
public function update(ToDo $todos){
    return view('todos.edit', compact('todos'));
}

}