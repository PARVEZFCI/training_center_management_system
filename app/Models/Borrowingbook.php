<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowingbook extends Model
{
    use HasFactory;

    protected $fillable = [
          'student_id','submission_date','date','book_id'
    ];
}
