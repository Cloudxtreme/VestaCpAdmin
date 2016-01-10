<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admins\AuthenticatesUsers;

class AuthController extends Controller
{
    use AuthenticatesUsers;
    
    protected $guard = 'web_admins';
    protected $redirectTo = 'admin';

    public function index()
    {
        return view('admin.auth');
    }
}
