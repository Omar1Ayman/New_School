<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(){
        return view('Site.skill');
    }
    public function skill($id){
        $skill = Skill::findOrFail($id);
        $exam = $skill->exam;
        return view('Site.skill' , compact('skill' , 'exam'));
    }

   

}
