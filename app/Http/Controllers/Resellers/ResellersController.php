<?php

namespace App\Http\Controllers\Resellers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Reseller;
use App\User;

class ResellersController extends Controller
{
    public function home()
    {
        return view('reseller.index');
    }
    
    public function getIndex(){
        
        return view('reseller.users.index');
    }
    
    public function getCreate() {
        
        return 'create';
    }
}
