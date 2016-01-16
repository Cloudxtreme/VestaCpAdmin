<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable {

    protected $guarded = ['id'];
    
    static $rules = [
        'name' => 'required',
        'email' => 'required|unique:admins',
        'id_server' => 'required',
        'password' => 'required',
    ];
    
    protected $fillable = [
        'name', 'email', 'password', 'id_server',
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];

}
