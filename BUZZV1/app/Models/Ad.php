<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    //Appartient à une catégorie
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    //Appartient à un utilisateur
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    //Possède plusieurs commentaires
    public function comments(){
      return $this->hasMany("App\Models\Comment");
    }

    //Nombre de commentaires de l'annonce
    public function getNumComments(){
      $num = $this->comments()->count();
      if($num <= 1) {
        return $num. ' Commentaire';
      }
      return $num. ' Commentaires';
    }
}
