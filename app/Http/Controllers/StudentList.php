<?php

namespace App\Http\Controllers;
use App\Models\StudentModel;

use Illuminate\Http\Request;

class StudentList extends Controller
{
    public function show(){
        return view('registration');
    }
    public function add(){
        return view('add');
    }
    public function add_data(Request $req){
        $name = $req->post('name');
        $place = $req->post('place');
        $course = $req->post('course');
        $image = $req->file('photo');

        $file_name = $image->getClientOriginalName();//butterfly.jpeg
        $path = "upload/";
        $store_path = "upload/"."$file_name";  // upload/butterfly.jpeg
        $file = $image->move($path,$file_name);
        $data =array("name"=>"$name","place"=>"$place","course"=>"$course","path"=>"$store_path");
        
        
        Studentmodel::create($data);
        echo "Inserted..!";
    }

    public function view(){
        $fetch = Studentmodel::all();

        return view('view',["data"=>$fetch]);
    }
}
