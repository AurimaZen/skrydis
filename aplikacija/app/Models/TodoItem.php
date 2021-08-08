<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoItem extends Model
{
    use HasFactory;


    protected $guarded = [];

    public const STATE_NEW = 'new';
    public const STATE_READY = 'ready';
    public const STATE_DONE = 'done';

    const STATES = [
        self::STATE_NEW,
        self::STATE_DONE,
        self::STATE_READY
    ];

}

