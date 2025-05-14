<?php

namespace App\Http\Controllers;

use App\Models\NewUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NewUserController extends Controller
{
    public function insertData(){
        $user = new NewUser();
        $user ->name = 'hurley';
        $user ->email = 'hurley@gmail.com';
        $user ->phone = '876543210';
        $user->place = 'tvm';
        $user ->save();

        return "New Data inserted successfully";
    }

    public function view(){
        $user = NewUser::find(4);
        
        dd($user);
    }

    public function addData(){
        //using create method
        // $user = NewUser::create([
        //     'name'  => 'abcd',
        //     'email' => 'abcd@gmail.com',
        //     'phone' => '900000000'
        // ]);
        // return "success";

        //using fill()
        // $user = new NewUser();
        // $user->fill([
        //     'name' => 'John Doe',
        //     'email' => 'johndoe@example.com',
        //     'phone' => '987654323'
        // ]);
        // $user->save();

        //add individually
        // $user = new NewUser();
        // $user->name = 'John Doe';
        // $user->email = 'johndoe@example.com';
        // $user->phone = '123454656';
        // $user->save();

        //using insert()
        $user=NewUser::insert([
                [
                'name' => 'John',
                'email' => 'johndoe@example.com',
                'phone' => '9876',
                ],
                [
                'name' => 'Jane Smith',
                'email' => 'janesmith@example.com',
                'phone' => '09',
                ] 
            ]);
            


    }

    public function updateData(){
        $user = NewUser::where('id' ,4) ->update([
            'name' => 'abcd',
            'email'=> 'abc@gmail.com'
        ]);
        return "table updated...";
    }

    public function delete(){
        $user = NewUser::where('id' ,4) ->delete();
        return "deleted..";
    }

    public function viewdata(){
        //using all()
        // $user = NewUser::all();
        // dd($user);

        //using find() using primary key column
        // $user = NewUser::findOrFail(25);
        // dd($user);

        //using select()
        $users = NewUser::select('name', 'email')->from('new_users')->get(); 
        dd($users);
       
    }

    
}
