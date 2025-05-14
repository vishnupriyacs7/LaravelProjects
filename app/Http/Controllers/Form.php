<?php

namespace App\Http\Controllers;

use App\Models\FormModel;
use Illuminate\Http\Request;

class Form extends Controller
{
    public function register(){
        return view('form');
    }

    public function submit(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);
        // Process the form submission
        // You can access the submitted data using the $request object
        $name = $request->input('name');
        $email = $request->input('email');
        // Perform any desired actions, such as storing the data in the database
        $data = FormModel::create([
            'name'  =>  $name ,
            'email' =>  $email 
        ]);


        // Redirect the user after successful submission 
        return redirect('/success');
    }

    Public function msg(){
        return view('Message');
    }
        

}
