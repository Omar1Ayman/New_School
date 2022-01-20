<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Question;
use App\Models\Skill;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index($id){
        $exam = Exam::findOrFail($id);
        return view('Site.exam' , compact('exam'));
    }

    public function indexquestion($id){
         $question = Question::findOrFail($id);
         $exam = Exam::findOrFail($id);
         $questions = $exam->questions;
         //$cat = $exam->skill->category->name();
         //dd($cat);
        //$questions = Question::where('exam_id' , $id)->get();
        return view('Site.examQuestion' , compact('questions' , 'question' , 'exam'));
    }
    
}
