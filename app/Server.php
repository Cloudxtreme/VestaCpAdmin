<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    protected $guarded = ['id'];
    
    static $rules = [
        'hostname' => 'required|unique:servers',
        'username' => 'required',
        'nsmaster' => 'required|unique:servers',
        'nsslave' => 'required|unique:servers',
        'password' => 'required',
    ];
}
