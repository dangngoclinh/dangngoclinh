<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacebookGroups extends Model
{
    //
    protected $table = 'facebook_groups';

    protected $fillable = array('name', 'group_id', 'email', 'icon', 'cover', 'owner');
}
