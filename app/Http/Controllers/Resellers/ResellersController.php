<?php

namespace App\Http\Controllers\Resellers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Reseller;
use App\User;

class ResellersController extends Controller {

    public function home() {
        return view('reseller.index');
    }
    
    protected $user;
    protected $request;
    
    public function __construct(User $user, Request $resquest) {
        $this->user = $user;
        $this->request = $resquest;
    }

    public function getIndex() {
        $data = $this->user->paginate(10);
        
        $status = "";
        if ($this->request->session()->has('status')) {
            $status = $this->request->session()->get('status');
        }
        
        return view('reseller.users.index', compact('data'));
    }

    public function getCreate() {

        return 'create';
    }

}
