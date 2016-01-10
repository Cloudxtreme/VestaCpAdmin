<?php

namespace App;

use Illuminate\Foundation\Auth\User;

class Reseller extends User
{
    protected $fillable = [
        'name', 'email', 'password',
    ];

    
    protected $hidden = [
        'password', 'remember_token',
    ];
}
