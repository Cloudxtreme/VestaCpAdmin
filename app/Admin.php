<?php

namespace App;

use Illuminate\Foundation\Auth\User;

class Admin extends User
{
    protected $fillable = [
        'name', 'email', 'password',
    ];

    
    protected $hidden = [
        'password', 'remember_token',
    ];
}
