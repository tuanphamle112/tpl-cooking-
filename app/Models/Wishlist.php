<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Relations\WishListRelation;
class Wishlist extends Model
{
    use WishListRelation;

    protected $fillable = [
        'user_id',
        'recipe_id',
        'status'
    ];
}
