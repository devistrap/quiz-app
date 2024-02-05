<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class createquestionController extends Controller
{

    public function index()
    {
        return view('createquestion');
    }


    public function store(Request $request)
    {   
        //dd(request()->all());
        DB::table('quiz')->insert([
            'user_id' => session('user_id'),
            if($request->input('question1') != ""){
                'question1' => $request->input('question1'),
            }
            if($request->input('question2') != ""){
                'question2' => $request->input('question2'),
            }
            if($request->input('question3') != ""){
                'question3' => $request->input('question3'),
            }
            if($request->input('question4') != ""){
                'question4' => $request->input('question4'),
            }
            if($request->input('question1_answer') != ""){
                'question1_answer' => $request->input('question1_answer'),
            }
            if($request->input('question2_answer') != ""){
                'question2_answer' => $request->input('question2_answer'),
            }
            if($request->input('question3_answer') != ""){
                'question3_answer' => $request->input('question3_answer'),
            }
            if($request->input('question4_answer') != ""){
                'question4_answer' => $request->input('question4_answer'),
            }
            'user_id' => session('user_id'),

        ]);





        return view('createquestion');
    }
}
