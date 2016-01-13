<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Admin;
use App\Server;
use App\Reseller;
use App\User;

class UserController extends Controller
{
    
    protected $user;
    protected $request;

    public function __construct(User $user, Request $request) {
        $this->user = $user;
        $this->request = $request;
    }
    
    public function getIndex() {
        $users = $this->user->paginate(10);
        
        $status = "";
        if ($this->request->session()->has('status')) {
            $status = $this->request->session()->get('status');
        }
        
        return view('admin.users.index', compact('users', 'status'));
    }
    
    public function getCreate(){
        $admins = Admin::all(); /*pega o id do servidor atual*/
        $servers = Server::all(); /*pega o ip do servidor */
        $resellers = Reseller::all(); /*pega o ip do servidor */
        
        return view('admin.users.create', compact('admins','servers','resellers'));
    }
    
    public function postCreate(){
        
    }
}
