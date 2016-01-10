<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
        return view('user.index');
    }
}
