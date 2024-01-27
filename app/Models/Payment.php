<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'paid_date',
        'amount',
        'enrollment_id'
    ];

    public function enrollment(){
        return $this->belongsTo(Enrollment::class);
    }
}
