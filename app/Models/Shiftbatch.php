<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shiftbatch extends Model
{
    use HasFactory;
    protected $fillable = [
        'branch_id','batch_name'
    ];
    
}
