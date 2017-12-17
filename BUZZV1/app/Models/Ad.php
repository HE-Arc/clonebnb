<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Auth;
class Ad extends Model
{
  /**
  * The attributes that are mass assignable.
  *
  * @var array $fillable
  */
   protected $fillable = [
     'title',
     'description',
     'online',
     'expired',
     'address',
     'user_id',
     'image',
     'category_id',
     'telephone',
     'site',
     'email',
     'facebook',
     'twitter',
     'google',
     'latitude',
     'longitude'
   ];

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

    //Possède plusieurs like
    public function favorites(){
      return $this->hasMany("App\Models\Favorite");
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

    //Calcul de la moyenne
    public function rate(){
      return number_format($this->comments()->avg('rate'),2);
    }

    //Nombre d'annonces en ligne d'un users
    public function onlineAds(){
      return $this->where([['online', '=', 1],['user_id', '=', Auth::user()->id]])->count();
    }

    //Nombre d'annonces en attente de validation d'un users
    public function pendingAds(){
      return $this->where([['online', '=', 0],['user_id', '=', Auth::user()->id]])->count();
    }

    //Nombre d'annonces expirées
    public function expiredAds(){
      return $this->where([['expired', '=', 1],['user_id', '=', Auth::user()->id]])->count();
    }
}
