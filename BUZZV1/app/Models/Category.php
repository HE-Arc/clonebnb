<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Une catégorie a plusieurs annonces
    public function ads()
    {
      return $this->hasMany('Ad');
    }
}
