<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Exam extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function skill(){
        return $this->belongsTo(Skill::class);
    }

    public function questions(){
        return $this->hasMany(Question::class);
    }

    public function user(){
        return $this->belongsToMany(User::class);
    }
    public function desc(){
        $lang = App::getLocale();
        return (json_decode($this->desc)->$lang);
    }
    public function name(){
        $lang = App::getLocale();
        return (json_decode($this->name)->$lang);
    }
}

