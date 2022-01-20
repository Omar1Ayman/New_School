<?php

use App\Http\Controllers\CatController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware('lang' , 'auth')->group(function(){
    Route::get('/' , [CatController::class , 'index']);
    //Route::get('/question' , [QuestionController::class , 'index']);
    //Route::get('/skill' , [SkillController::class , 'index']);
    
    Route::get('/cat/{id}' , [CatController::class , 'cat']);
    Route::get('/skill/{id}' , [SkillController::class , 'skill']);
    
    
    Route::get('/exam/{id}' , [ExamController::class , 'index']);
    Route::get('/question/{id}' , [ExamController::class , 'indexquestion']);
    
   
    Route::get('contact', [MessageController::class  , 'showmessage']);
    Route::post('contact' , [MessageController::class , 'getmessage'])->name('message');
    

});


Route::get('set/lang/{lang}' , [LangController::class , 'setLang']);



Route::resource('teacher', TeacherController::class);







Route::get('index' , function(){
    return view('AdminPanal.index');
});

Route::get('index2' , function(){
    return view('AdminPanal.index2');
});

Route::get('index3' , function(){
    return view('AdminPanal.index3');
});