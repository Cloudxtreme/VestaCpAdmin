<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Package;

class PackageController extends Controller
{
    protected $package;
    protected $request;

    public function __construct(Package $package, Request $request) {
        $this->package = $package;
        $this->request = $request;
    }
    
    public function getIndex() {
        $packages = $this->package->paginate(10);

        $status = "";
        if ($this->request->session()->has('status')) {
            $status = $this->request->session()->get('status');
        }
        return view('admin.packages.index', compact('packages', 'status'));
    }
    
    public function getCreate() {
        $packages = $this->package->all();

        return view('admin.packages.create', compact('packages'));
    }
    
    public function postCreate(Request $request) {
        $data = $request->all();
        
        $this->validate($request, [
            'name' => 'required|unique:packages',
        ]);
        
        $this->package->create($data)->save();

        $status = "Package " . $data['name'] . " registered successfully!";
        $this->request->session()->flash('status', $status);

        return redirect('admin/packages');
    }
    
    
    
    public function getDelete($id) {
        $data = $this->package->find($id);
        $data->delete();
        
        $status = "Package " . $data['name'] . " deleted successfully!";
        $this->request->session()->flash('status', $status);
        
        return redirect('admin/packages');
    }
}
