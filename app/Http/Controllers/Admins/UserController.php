<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Admin;
use App\Server;
use App\Reseller;
use App\User;
use App\Package;

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
        $resellers = Reseller::all(); /*pega lista de revendas */
        $packages = Package::all();
           
        return view('admin.users.create', compact('admins','servers','resellers','packages'));
    }
    
    public function postCreate(Request $request){
        $data = new User;
        $data->name = $request->input('name');
        $data->lasname = $request->input('lasname');
        $data->username = $request->input('username');
        $data->email = $request->input('email');
        $data->domain = $request->input('domain');
        $data->package = $request->input('package');
        $data->id_reseller = $request->input('id_reseller');
        $data->hostname = $request->input('hostname');
        $data->password = bcrypt($request->input('password'));
        
        $this->validate($request, [
            'name' => 'required',
            'lasname' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users',
            'domain' => 'required|unique:users',
            'package' => 'required',
            'id_reseller' => 'required',
            'hostname' => 'required',
            'password' => 'required',
        ]);

        $data->save();

        $status = "User " . $data['name'] . " registered successfully!";
        $this->request->session()->flash('status', $status);

        return redirect('admin/users');
    }
    
    public function getEdit($id) {
        $user = $this->user->find($id);
        $admins = Admin::all(); /*pega o id do servidor atual*/
        $servers = Server::all(); /*pega o ip do servidor */
        $resellers = Reseller::all(); /*pega o ip do servidor */
        $packages = Package::all();
        
        return view('admin.users.edit', compact('admins','servers','resellers','user','packages'));
    }
    
    public function postEdit(Request $request, $id) {
        $data = $request->except('_token','password');
        
        $this->validate($request, [
            'name' => 'required',
            'lasname' => 'required',
            'username' => "required|unique:users,username,$id",
            'email' => "required|unique:users,email,$id",
            'domain' => "required|unique:users,domain,$id",
            'package' => 'required',
            'id_reseller' => 'required',
            'hostname' => 'required',
        ]);

        $this->user->where('id', $id)->update($data);
        
        $status = "Successfully " . $data['name'] . "  updated user!";
        $this->request->session()->flash('status', $status);

        return redirect('admin/users');
    }
    
    public function getDelete($id) {
        $user = $this->user->find($id);
        $user->delete();

        $status = "User " . $user['name'] . " deleted successfully!";
        $this->request->session()->flash('status', $status);

        return redirect('admin/users');
    }
    
}
