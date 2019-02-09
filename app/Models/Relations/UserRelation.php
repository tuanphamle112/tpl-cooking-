<?php

namespace App\Models\Relations;

use App\Models\Recipe;
use App\Models\Post;
use App\Models\Follow;
use App\Models\Wishlist;

trait UserRelation{

    public function recipe()
    {
        return $this->hasMany(Recipe::class, 'user_id');
    }

    public function post()
    {
        return $this->hasMany(Post::class, 'user_id');
    }

    public function follow()
    {
        return $this->hasMany(Follow::class, 'user_id');
    }

    public function followBy()
    {
        return $this->hasMany(Follow::class, 'user_id_follow');
    }

    public function wishlist()
    {
        return $this->hasMany(Wishlist::class, 'user_id');
    }
}