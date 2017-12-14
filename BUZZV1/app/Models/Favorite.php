<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
  //Appartient à un utilisateur
  public function user()
  {
      return $this->belongsTo('App\Models\User');
  }

  //Appartient à une annonce
  public function ad()
  {
      return $this->belongsTo('App\Models\Ad');
  }

}
