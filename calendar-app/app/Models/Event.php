<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    // Разрешенные для массового назначения поля
    protected $fillable = [
        'title',
        'description',
        'start_time',
        'end_time',
        'user_id',
    ];
}

