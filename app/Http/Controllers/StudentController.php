<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;
use App\Question;
class StudentController extends Controller
{
      public function student(){
        $questions=Question::all();
        return view('student')->with('questions',$questions);
        //return redirect()->route('admin');
        return view('student');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function start_exam()
    {
        $question=Question::orderBy('id','asc')->get();
         return view('start_exam')->with('question',$question);
    }
    public function index()
    {
        //
    }


    // count result

    public function count(Request $request)
    {
            

      
            $i=0;
            $a1=Question::where('question_no',$request->taken1)->get();
            $a2=Question::where('question_no',  $request->taken2)->get();
            $a3=Question::where('question_no',$request->taken3)->get();
            $a4=Question::where('question_no',$request->taken4)->get();
            $a5=Question::where('question_no',$request->taken5)->get();
            $a6=Question::where('question_no',  $request->taken6)->get();
            $a7=Question::where('question_no',$request->taken7)->get();
            $a8=Question::where('question_no',$request->taken8)->get();
            $a9=Question::where('question_no',$request->taken9)->get();
            $a10=Question::where('question_no',  $request->taken10)->get();

            




           /*$a5=Question::where('question_no',$request->taken5)->get();
            $a6=Question::where('question_no',$request->taken6)->get();
            $a7=Question::where('question_no',$request->taken7)->get();
            $a8=Question::where('question_no',$request->taken8)->get();
            $a9=Question::where('question_no',$request->taken9)->get();
            $a10=Question::where('question_no',$request->taken10)->get(); 
            //if(strcmp($a1->correct_answer,$request->q1)==0)$i++; */
            
            
            foreach ($a1 as $a1){
                if($a1->correct_answer==$request->q1)$i++;
            }


            foreach ($a2 as $a1) {
                if($a1->correct_answer==$request->q2)$i++;
                
            }
            foreach ($a3 as $a1) {
                if($a1->correct_answer==$request->q3)$i++;
            }
            foreach ($a4 as $a1) {
                if($a1->correct_answer==$request->q4)$i++;
            }

               foreach ($a5 as $a1){
                if($a1->correct_answer==$request->q5)$i++;
            }


            foreach ($a6 as $a1) {
                if($a1->correct_answer==$request->q6)$i++;
                
            }
            foreach ($a7 as $a1) {
                if($a1->correct_answer==$request->q7)$i++;
            }
            foreach ($a8 as $a1) {
                if($a1->correct_answer==$request->q8)$i++;
            }

                foreach ($a9 as $a1){
                if($a1->correct_answer==$request->q9)$i++;
            }


            foreach ($a10 as $a1) {
                if($a1->correct_answer==$request->q10)$i++;
                
            }

            return view('result_count')->with('i',$i);
               

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
