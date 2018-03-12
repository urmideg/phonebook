<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name', 'phone', 'notice', 'user_id'];

    public function setUserIdAttribute($value)
    {
        $this->attributes['user_id'] = \Auth::id();
    }
}
