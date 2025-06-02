<?php

namespace App\Http\Controllers;

use App\Models\RUDModel;
use Illuminate\Http\Request;

class CRUDController extends Controller
{
    public function index(){
        $data = RUDModel::all(); 
        return view('index',compact('data'));
    }
    public function show($id){
        $data = RUDModel::findOrFail($id);
        return view('show', compact('data'));
    }
    public function store()
    {
        $data = new RUDModel;
        $data->name = "Hugo";
        $data->email = "hugo@yahoo.in";
        $data->save();
        return redirect('/task');
    }
    public function update(Request $request, $id)
    {
        $RUDModel = RUDModel::findOrFail($id);
        $RUDModel->title = $request->input('title');
        $RUDModel->description = $request->input('description');
        $RUDModel->save();
        return redirect('/RUDModels');
    }
    public function destroy($id)
    {
        $RUDModel = RUDModel::findOrFail($id);
        $RUDModel->delete();
        return redirect('/RUDModels');
    }

}
