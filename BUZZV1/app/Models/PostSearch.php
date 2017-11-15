<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Post extends Model
{
    public static function scopeSearch($query, $searchItem,$searchLocation,$searchSelectCategorie)
    {
        return $query->description('description', 'like', '%' .$searchItem. '%')
                     ->andWhere('address', 'like', '%' .$searchLocation. '%');
    }
}
