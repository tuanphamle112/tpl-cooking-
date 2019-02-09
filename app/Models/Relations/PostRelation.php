<?php

namespace App\Models\Relations;

use App\Models\Category;
use App\User;

trait PostRelation{

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}   