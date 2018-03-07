<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'photos';

    protected $casts = [
        'picture_name' => 'string',
        'id_photo' => 'integer',
        'spot-id' => 'integer',
    ];

    public function spot()
    {
        return $this->belongsTo('App\Spot');
    }
}
