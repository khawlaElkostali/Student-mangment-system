<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'syllabus',
        'duration'
    ];

    public function batches(){
        return $this->hasMany(Batch::class);
    }

    public function getDurationAttribute($value){
        return $value.' months';
    }
}
