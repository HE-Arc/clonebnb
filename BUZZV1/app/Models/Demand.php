<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Demand extends Model
{
  /**
  * The attributes that are mass assignable.
  *
  * @var array $fillable
  */
   protected $fillable = [
     'title',
     'description',
     'user_id',
     'category_id'
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
}
