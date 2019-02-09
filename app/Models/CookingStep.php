<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CookingStep extends Model
{
    protected $fillable = [
        'step_number',
        'recipe_id',
        'content',
        'note',
        'image'
    ];
}
