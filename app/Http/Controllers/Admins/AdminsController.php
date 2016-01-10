<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;

class AdminsController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
}
