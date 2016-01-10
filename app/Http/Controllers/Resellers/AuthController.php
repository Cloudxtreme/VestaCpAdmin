<?php

namespace App\Http\Controllers\Resellers;

use Illuminate\Contracts\View\View;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Resellers\AuthenticatesUsers;

class AuthController extends Controller
{
    use AuthenticatesUsers;
    
    protected $guard = 'web_resellers';
    protected $redirectTo = 'reseller';

    public function index()
    {
        return view('reseller.auth');
    }
}
