<?php

namespace App\Http\Controllers\Users;

use Illuminate\Contracts\View\View;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Users\AuthenticatesUsers;

class AuthController extends Controller
{
    use AuthenticatesUsers;
    
    protected $guard = 'web_users';
    protected $redirectTo = 'user';

    public function index()
    {
        return view('user.auth');
    }
}
