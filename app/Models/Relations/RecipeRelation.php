<?php

namespace App\Models\Relations;

use App\User;
use App\Models\Level;
use App\Models\Ingredient;
use App\Models\CookingStep;
use App\Models\Category;

trait RecipeRelation{

  public function user()
  {
      return $this->belongsTo(User::class, 'user_id');
  }

  public function level()
  {
      return $this->belongsTo(Level::class, 'level_id');
  }

  public function ingredient()
  {
      return $this->hasMany(Ingredient::class, 'recipe_id');
  }

  public function cooking_step()
  {
      return $this->hasMany(CookingStep::class, 'recipe_id');
  }

  public function categories()
  {
      return $this->belongsToMany(Category::class);
  }
  
}