<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Ad;

class Category extends Model
{
    //Une catégorie a plusieurs annonces
    public function ads()
    {
      return $this->hasMany('App\Models\Ad');
    }

    //Compter le nombre d'annonces par catégories
    public function adsNumber(){
      return $this->ads()->count();
    }
}
