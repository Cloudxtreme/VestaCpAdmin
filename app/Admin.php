<?php

namespace App;

use Illuminate\Foundation\Auth\User;

class Admin extends User
{
    protected $guarded = ['id'];
    
        
    protected $fillable = [
        'name', 'email', 'password', 'id_server',
    ];

    
    protected $hidden = [
        'password', 'remember_token',
    ];
}
