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
        return redirect("/tdos");
    }
    public function edit(ToDo $todos)
    {
        return view("todos.edit" , compact("todos"));
    }

    public function update(Request $request,ToDo $todo){
        $validated = $request->validate([
        'content' => 'required|string|max:255',
        "completed" => ["boolean"],
        ]);
    $todo->content = $validated["content"];
    $todo->completed = $validated["completed"];
    $todo->save();
        return redirect()->route('todos.show', $todo->id)->with('sucess', 'ToDo updated sucessefuly');
}


}   