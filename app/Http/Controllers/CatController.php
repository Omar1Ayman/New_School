<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Skill;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function index(){
        $skills = Skill::get();
        return view('Site.index' , compact('skills'));
    }
    public function cat($id){
        $cat = Cat::findOrFail($id);
        //$skills = Skill::where('cat_id',$id)->get();
        $skills = $cat->skill;
        $allCat = Cat::get();
        return view('Site.category' ,compact('skills' , 'cat' , 'allCat'));
    }
}
