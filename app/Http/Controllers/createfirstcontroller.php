<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class createfirstController extends Controller
{

    public function store(Request $request)
    {
       
        $quizName = $request->input('quiz_name');
        $quizDescription = $request->input('quiz_description');
        $quizLogo = $request->file('quiz_logo');
       

       
        DB::table('quiz')->insert([
            'name' => $quizName,
            'description' => $quizDescription,
            'custom_image' => "empty",
            'user_id' => session('user_id'),

        ]);

        return view('createquestion');
    }
}
