<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    protected $casts = [
        'description_spot' => 'string',
        'title' => 'string',
        'id_spot' => 'integer',
        'user_id' => 'integer',
    ];

    public function photos ()
    {
        return $this->hasMany('App\Photo');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments ()
    {
        return $this->hasMany('App\Comments');
    }

    public function likes()
    {
        return $this->hasMany('App\Like','id_spot');
    }
}
