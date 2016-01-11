<?php

namespace App;

use Illuminate\Foundation\Auth\User;

class Admin extends User
{
    protected $guarded = ['id'];
    
    static $rules = [
        'name' => 'required',
        'email' => 'required|unique:admins',
        'password' => 'required',
    ];
    
    
    protected $fillable = [
        'name', 'email', 'password', 'id_server',
    ];

    
    protected $hidden = [
        'password', 'remember_token',
    ];
}
