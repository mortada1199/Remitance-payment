<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benficary extends Model
{
    use HasFactory;
    protected $table = 'benficary';



    protected $fillable = [
        'id',
        'name',
        'amount',
        'phone',
        'cardto',
    ];
    protected $hidden = [
     'created_at',
     'updated_at',
    ];
}
