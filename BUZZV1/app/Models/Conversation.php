<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{

    public function sender()
    {
        return $this->belongsTo('User','sender_id');
    }

    public function receiver()
    {
        return $this->belongsTo('User','receiver_id');
    }

    public function messages()
    {
    	return $this->hasMany('message')
    }
}
