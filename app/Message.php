<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{
    public function userFrom(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id_from');
    }

    public function userTo(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id_to');
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
