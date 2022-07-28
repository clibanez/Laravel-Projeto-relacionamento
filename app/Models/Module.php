<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
       'name',
    ];

    //relacionamento inverso com a Model Course
    public function course(){
        return $this->belongsTo(Course::class);
    }

    //relacionamento OneToMany com a Model Lesson
    public function Lessons(){

        return $this->hasMany(Lesson::class);
    }

}
