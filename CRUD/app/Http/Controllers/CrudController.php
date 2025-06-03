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
        $item->name = $request->input('name');
        $item->email = $request->input('email');
        $item->phone = $request->input('phone');
        $item->address = $request->input('address');
        $item->save();

        return redirect('/items');
    }

    public function edit($id){
        $item = CrudModel::findOrFail($id);
        return view('operations.edit', compact('item'));
    }


    public function update(Request $request, $id){
        $item = CrudModel::findOrFail($id);
        $item->name = $request->input('name');
        $item->email = $request->input('email');
        $item->phone = $request->input('phone');
        $item->address = $request->input('address');
        $item->save();
        return redirect('/items');
    }

    public function destroy($id){
        $item = CrudModel::findOrFail($id);
        $item->delete();
        return redirect('/items');
    }
}
