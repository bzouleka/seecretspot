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

    /*public function friends() {
        return $this->hasMany(friends)->orWhere('id_user2', $this->id);
    }*/

    public function friends()
    {
        return $this->belongsToMany('User', 'friends', 'id_user1', 'id_user2')->withTimestamps();
    }



}
