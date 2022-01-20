<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function showmessage(){
        return view('Site.contact');
    }

    public function getmessage(Request $request){
         $request->validate([
             'name'=>'required|string|max:250',
             'email'=>'required|email',
             'subject'=>'required|string',
             'body'=>'required|string'
         ]);

         Message::create([
             'name'=>$request->name,
             'email'=>$request->email,
             'subject'=>$request->subject,
             'body'=>$request->body
         ]);

         return back();
    }
}
