<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $fillable = [
        'device',
        'country',
        'region',
        'city',
        'browser',
        'data',
        'status'
    ];

    protected $casts = [
        'data' => 'array'
    ];
}
