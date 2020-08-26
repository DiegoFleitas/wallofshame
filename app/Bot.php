<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bot extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'real_name',
        'location',
        'profile_created',
        'last_online',
        'banned',
        'ban_date',
        'steamid_64',
        'vanity_url',
        'steam_level',
        'profile_visibility'
    ];
}
