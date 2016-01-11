<?php

namespace App;

use Illuminate\Foundation\Auth\User;

class Reseller extends User
{
    protected $guarded = ['id'];
    
    static $rules = [
            'company' => "required",
            'name' => "required",
            'email' => "required|unique:resellers",
            'key' => "required",
            'password' => "required",
        ];

    protected $fillable = [
        'company','name', 'email','domains','status','key', 'password',
    ];

    
    protected $hidden = [
        'password', 'remember_token',
    ];
}
