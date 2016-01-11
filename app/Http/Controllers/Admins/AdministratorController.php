<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Admin;
use App\Server;


class AdministratorController extends Controller
{
    protected $admin;
    protected $request;
    protected $validator;

    public function __construct(Admin $admin, Request $request, \Illuminate\Validation\Factory $validator) {
        $this->admin = $admin;
        $this->request = $request;
        $this->validator = $validator;
    }

    public function getIndex() {
        $admins = $this->admin->paginate(10);

        $status = "";
        if ($this->request->session()->has('status')) {
            $status = $this->request->session()->get('status');
        }
        return view('admin.administrators.index', compact('admins', 'status'));
    }
    
    public function getCreate() {
        $servers = Server::all();
        
        return view('admin.administrators.create', compact('servers'));
    }

    public function postCreate(Request $request) {
        $data = $request->all();

        $validator = $this->validator->make($data, Admin::$rules);
        if ($validator->fails()) {
            return redirect('admin/administrators/create')
                            ->withErrors($validator)
                            ->withInput();
        }

        $this->admin->create($data)->save();

        $status = "Administrator " . $data['name'] . " registered successfully!";
        $this->request->session()->flash('status', $status);

        return redirect('admin/administrators');
    }
 
    
    public function getEdit($id){
        $admin = $this->admin->find($id);
        $servers = Server::all();
        return view('admin.administrators.edit', compact('admin','servers'));
    }
    
    public function postEdit(Request $request, $id){
        $data = $request->except('_token');
        
        $rulesEdit = [
        'name' => "required",
        'email' => "required|unique:admins,email,$id",
        'password' => "required",
    ];
        
        $validator = $this->validator->make($data, $rulesEdit);
        if ($validator->fails()) {
            return redirect("admin/administrators/edit/$id")
                            ->withErrors($validator)
                            ->withInput();
        }
        
        Admin::where('id', $id)->update($data);
        
        $status = "Successfully updated administrator!";
        $this->request->session()->flash('status', $status);
                
        return redirect('admin/administrators');
    }
    
    public function getDelete($id) {
        $admin = $this->admin->find($id);
        $admin->delete();
        
        $status = "Administrator " . $admin['name'] . " deleted successfully!";
        $this->request->session()->flash('status', $status);
        
        return redirect('admin/administrators');
    }
}
