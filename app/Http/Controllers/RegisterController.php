<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(request $request)
    {   
        $uname = $request->input('uname');
        $email = $request->input('email');
        $psw = $request->input('psw');
        DB::table('users')->insert([
            'username' => $uname,
            'email' => $email,
            'password' => $psw,

        ]);

        return view('index');

        
    }

    
}
