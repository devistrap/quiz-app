<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class manageController extends Controller
{

    public function index()
    {
        $quizzes = DB::table('quiz')->where('user_id', session('user_id'))->get();
        return view('manage', ['quizzes' => $quizzes]);


    }
}
