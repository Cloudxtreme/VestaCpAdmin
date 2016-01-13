<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $guarded = ['id'];
    
        
    protected $fillable = [
        'name', 'email', 'password', 'id_server',
    ];

    
    protected $hidden = [
        'password', 'remember_token',
    ];
}
