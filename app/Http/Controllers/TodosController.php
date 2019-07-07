<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use Session;

class TodosController extends Controller
{
    //
    public function index()
    {
        $todos = Todo::latest()->paginate(5);

        return view('todos')->with('todos', $todos);
    }

    public function store(Request $request)
    {
//        $input = $request->all();

//       dd($request->all());

       $todo = new Todo;

       $todo->todo = $request->todo;
       $todo->save();

       Session::flash('success', 'Your Todo is Created');
       return redirect()->back();
    }

    public function delete($id)
    {
//        dd($id);
        $todo = Todo::find($id);
        $todo->delete();

        return redirect()->back();
    }

    public function update($id){

        $todo = Todo::find($id);

        return view('update')->with('todo', $todo);
    }

    public function save(Request $request, $id)
    {
//        dd($request->all());
        $todo = Todo::find($id);
        $todo->todo = $request->todo;
        $todo->update();

        return redirect()->back();
    }

    public function completed($id)
    {
        $todo = Todo::find($id);

        $todo->completed = 1;
        $todo->save();

        return redirect()->back();
    }

}
