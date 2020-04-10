<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function userFrom()
    {
        return $this->belongsTo('App\User', 'user_id_from');
    }

    public function userTo()
    {
        return $this->belongsTo('App\User', 'user_id_to');
    }

    public function scopeNotDeleted($query)
    {
        return $query->where('deleted', false);
    }

    public function scopeDeleted($query)
    {
        return $query->where('deleted', true);
    }
}
