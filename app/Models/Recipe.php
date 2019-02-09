<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'name',
        'user_id',
        'estimate_time',
        'description',
        'image',
        'video_link',
        'rating_point',
        'level_id',
        'people_number',
        'status'
    ];
}
