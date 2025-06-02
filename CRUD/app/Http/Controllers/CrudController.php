<?php

namespace App\Http\Controllers;

use App\Models\CrudModel;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index(){
        $items = CrudModel::all(); 
        return view('operations.view', compact('items'));
    }

    public function show($id){
        $item = CrudModel::findOrFail($id);
        return view('operations.show', compact('item'));
    }

    public function store(Request $request){
        $item = new CrudModel;
        $item->title = $request->input('title');
        $item->description = $request->input('description');
        $item->save();
        return redirect('/items');
    }

    public function update(Request $request, $id){
        $item = CrudModel::findOrFail($id);
        $item->title = $request->input('title');
        $item->description = $request->input('description');
        $item->save();
        return redirect('/items');
    }

    public function destroy($id){
        $item = CrudModel::findOrFail($id);
        $item->delete();
        return redirect('/items');
    }
}
