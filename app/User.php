<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class User extends Model implements Authenticatable
{
    use BasicAuthenticatable;

    protected $fillable = ['user_name', 'password'];

    public function getRememberTokenName()
    {
        return '';
    }

    public function comments()
    {
        return $this->hasMany('App\Comments');
    }

    public function likes()
    {
        return $this->hasMany('App\Like');
    }


}
