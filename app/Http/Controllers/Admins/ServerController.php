<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Server;

class ServerController extends Controller {

    protected $server;
    protected $request;
    protected $validator;

    public function __construct(Server $server, Request $request, \Illuminate\Validation\Factory $validator) {
        $this->server = $server;
        $this->request = $request;
        $this->validator = $validator;
    }

    public function getIndex() {
        $servers = $this->server->paginate(10);

        $status = "";
        if ($this->request->session()->has('status')) {
            $status = $this->request->session()->get('status');
        }
        return view('admin.servers.index', compact('servers', 'status'));
    }

    public function getCreate() {
        return view('admin.servers.create');
    }

    public function postCreate(Request $request) {
        $data = $request->all();

        $validator = $this->validator->make($data, Server::$rules);
        if ($validator->fails()) {
            return redirect('admin/servers/create')
                            ->withErrors($validator)
                            ->withInput();
        }

        $this->server->create($data)->save();

        $status = "Server ip " . $data['hostname'] . " registered successfully!";
        $this->request->session()->flash('status', $status);

        return redirect('admin/servers');
    }

   
    
    public function getEdit($idServer){
        $server = $this->server->find($idServer);
        return view('admin.servers.edit', compact('server'));
    }
    
    public function postEdit(Request $request, $idServer){
        $data = $request->except('_token');
        
        $rulesEdit = [
        'hostname' => "required|unique:servers,hostname,$idServer",
        'username' => 'required',
        'nsmaster' => "required|unique:servers,nsmaster,$idServer",
        'nsslave' => "required|unique:servers,nsslave,$idServer",
        'password' => 'required',
    ];
        
        $validator = $this->validator->make($data, $rulesEdit);
        if ($validator->fails()) {
            return redirect("admin/servers/edit/$idServer")
                            ->withErrors($validator)
                            ->withInput();
        }
        
        Server::where('id', $idServer)->update($data);
        
        $status = "Successfully updated server!";
        $this->request->session()->flash('status', $status);
                
        return redirect('admin/servers');
    }
    
    public function getDelete($idServer) {
        $server = $this->server->find($idServer);
        $server->delete();
        
        $status = "Server " . $server['hostname'] . " deleted successfully!";
        $this->request->session()->flash('status', $status);
        
        return redirect('admin/servers');
    }
    
    
  
}
