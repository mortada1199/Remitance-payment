<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payment';



    protected $fillable = [
        'id',
        'cardfrom',
        'amount',
        'currency',
        'payto',
        'password',
        'exdate',
        'pay',
    ];
    protected $hidden = [
     'created_at',
     'updated_at',
    ];
}

