<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;
    protected $fillable = [
        'enroll_no',
        'join_date',
        'fee',
        'batch_id',
        'student_id'
    ];

    public function batch(){
        return $this->belongsTo(Batch::class);
    }
    public function student(){
        return $this->belongsTo(Student::class);
    }
}
