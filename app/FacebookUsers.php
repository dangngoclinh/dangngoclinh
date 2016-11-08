<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacebookUsers extends Model
{
    //
    protected $table = 'facebook_users';

    protected $fillable = array('name', 'email', 'id_social', 'birthday', 'token', 'country');
}
