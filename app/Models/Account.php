<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'username',
        'password',
        'ip',
        'address',
        'user_agent',
        'request',
        'ip_info',
        'status'
    ];

    protected $casts = [
        'request' => 'array',
        'ip_info' => 'array',
    ];
}
