<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{

    public function index()
    {
        $quizzes = DB::table('quiz')->get();
        return view('index', ['quizzes' => $quizzes]);


    }
}
