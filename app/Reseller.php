<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Reseller extends Authenticatable
{
    protected $guarded = ['id'];
    
   

    protected $fillable = [
        'company','name', 'email','domains','status','key', 'password',
    ];

    
    protected $hidden = [
        'password', 'remember_token',
    ];
}
