<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $fillable = [
        'user_id',
        'user_id_follow',
        'status'
    ];
}
