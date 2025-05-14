<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\NewUser;

use Illuminate\Http\Request;

class DBQuery extends Controller
{
    public function data(){
        //$results = DB::table('new_users')->select('name', 'email')->get();
        //$results = DB::select("select * from new_users");
        //$results = DB::select("select * from new_users where id=1");
        //$results = DB::select("select * from new_users where id=?",[5]);
        //$results = DB::select("select * from new_users where name=?",['abcd']);

        // $id = 1;
        // $name = 'JOHN';
        // $results = DB::select('SELECT * FROM new_users WHERE id = :id OR name = :name', ['id' => $id,'name' => $name]);

        //$results = DB::selectOne('SELECT COUNT(*) as count FROM new_users')->count;

        $results = DB::statement('UPDATE new_users SET name = "vishnu" WHERE id = ?', [1]);
        dd($results);

    }
}
