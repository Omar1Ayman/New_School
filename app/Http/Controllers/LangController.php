<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    public function setLang($lang  , Request $request){
           $request->session()->put('lang' , $lang);
           //dd($request->session());
           return back();
    }
}

