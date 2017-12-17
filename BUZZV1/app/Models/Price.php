<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
  //Une catégorie a plusieurs annonces
  public function ad()
  {
    return $this->belongsTo('App\Models\Ad');
  }
}
