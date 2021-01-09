<?php

namespace App\Http\Controllers;

use App\Http\Requests\createtodo;
use App\Models\Todo;
use Illuminate\Http\Request;
class TodoController extends Controller
{
    public function index(){
           
          $todos = Todo::all();

         return view('todos.index')->with(['todos'=>$todos]);
     }


public function create(){

  return view('todos.create');
}


public function store(createtodo $request){


  Todo::create($request->all());

  return redirect()->back()->with("msg","Todo Created..");
}


public function edit(Todo $todo){
 return view ('todos.edit',compact('todo'));
}


public function update(Request $request , Todo $todo){

  $todo->update(['title'=>$request->title]);
 return redirect(route('todo.index'));
}


public function completed( Todo $id){

  $id->update(['completed' => true]);
 return redirect(route('todo.index'));
}









};
