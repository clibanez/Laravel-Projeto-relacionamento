<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'avaliable',
    ];

    //relacionamento OneToMany com a Model Module
    public function modules(){
        return $this->hasMany(Module::class);
    }
}
