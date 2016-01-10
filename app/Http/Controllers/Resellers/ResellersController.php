<?php

namespace App\Http\Controllers\Resellers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ResellersController extends Controller
{
    public function index()
    {
        return view('reseller.index');
    }
}
