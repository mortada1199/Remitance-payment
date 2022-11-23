<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;
    protected $table = 'transfer';



    protected $fillable = [
        'id',
        'name',
        'amount',
        'currency',
        'cardnumberto',
        'cardnumberfrom',
        'date',
    ];
    protected $hidden = [
     'created_at',
     'updated_at',
    ];
}
