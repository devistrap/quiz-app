<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{



    public function login(Request $request)
    {
        $uname = $request->input('uname');
        $psw = $request->input('psw');
        $user = DB::table('users')->where('username', $uname)->first();
        if ($user->password == $psw) {
            session(['user_id' => $user->id]);
            return view('index', ['var1' => $uname,]);
        } else {
            return view('login', ['var1' => "Incorrect Password",]);
        }
    }


}
