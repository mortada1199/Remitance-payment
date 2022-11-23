<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
    class Paybal extends Model
    {
        use HasFactory;
        protected $table = 'paybal';

        protected $fillable = [
            'id',
            'password',
            'amount',
            'currency',
            'payto',
        ];
        protected $hidden = [
         'created_at',
         'updated_at',
        ];
    }
