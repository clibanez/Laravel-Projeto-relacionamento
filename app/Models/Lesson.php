<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'video',
    ];



    //relacionamento inverso com a Model Module
    public function module(){

        return $this->belongsTo(Module::class);
    }
}
