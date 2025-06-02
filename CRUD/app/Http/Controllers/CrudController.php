<?php

namespace App\Http\Controllers;

use App\Models\CrudModel;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index(){
        $tasks = CrudModel::all(); 
        return view('operations.view',compact('tasks'));
    }
    public function show($id){
        $task = CrudModel::findOrFail($id);
        return view('operations.show', compact('task'));
    }
    public function store(Request $request){
        $task = new CrudModel;
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->save();
        return redirect('/tasks');
    }
    public function update(Request $request, $id){
        $task = CrudModel::findOrFail($id);
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->save();
        return redirect('/tasks');
    }
    public function destroy($id){
        $task = CrudModel::findOrFail($id);
        $task->delete();
        return redirect('/tasks');
    }

}
