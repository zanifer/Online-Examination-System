<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Teacher;
use App\Question;

class TeacherController extends Controller
{
     public function teacher(){
           $questions=Question::all();
        return view('teacher')->with('questions',$questions);
        return view('teacher');
    }

    /*public function check()
    {
        for($i=0;$i<=10;$i++){

            echo $i;

        }
    }*/

  
    
    public function add_ques()
    {

        return view('add_ques');
               return redirect()->route('add_ques');

    }

    public function store(Request $request)
    {
      //Insert data into Student Table
      $question = new Question;
      $question->question_no = $request->question_no;
      $question->question = $request->question;
      $question->option_a = $request->option_a;
      $question->option_b = $request->option_b;
      $question->option_c = $request->option_c;
      $question->option_d = $request->option_d;
      $question->correct_answer = $request->correct_answer;
      $question->save();

      return redirect()->route('teacher');

    }


    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

      public function questionList()
    {
          $questions=Question::all();
        return view('questionList')->with('questions',$questions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function question_edit($id)
    {
         $question = Question::find($id);
        return view("question_edit")->with('question',$question);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
          $question = Question::find($id);
          $question->question_no = $request->question_no;
          $question->question = $request->question;
          $question->option_a = $request->option_a;
          $question->option_b = $request->option_b;
           $question->option_c = $request->option_c;
            $question->option_d = $request->option_d;
             $question->correct_answer = $request->correct_answer;
      $question->save();
      return redirect()->route('questionList');
    }


    public function delete($id)
    {
      $question = question::find($id);
      $question->delete();
      return redirect()->route('questionList');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
   // public function destroy(Teacher $teacher)
   // {
        //
   // }
}
