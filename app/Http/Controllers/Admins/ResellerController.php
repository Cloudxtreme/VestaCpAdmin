<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Reseller;

class ResellerController extends Controller {

    protected $reseller;
    protected $request;
    protected $validator;

    public function __construct(Reseller $reseller, Request $request, \Illuminate\Validation\Factory $validator) {
        $this->reseller = $reseller;
        $this->request = $request;
        $this->validator = $validator;
    }

    public function getIndex() {
        $resellers = $this->reseller->paginate(10);

        $status = "";
        if ($this->request->session()->has('status')) {
            $status = $this->request->session()->get('status');
        }
        return view('admin.resellers.index', compact('resellers', 'status'));
    }

    public function getCreate() {
        $resellers = $this->reseller->all();

        return view('admin.resellers.create', compact('resellers'));
    }

    public function postCreate(Request $request) {
        $data = $request->all();
        
        
        $validator = $this->validator->make($data, Reseller::$rules);
        if ($validator->fails()) {
            return redirect('admin/resellers/create')
                            ->withErrors($validator)
                            ->withInput();
        }

        Reseller::create($data)->save();

        $status = "Reseller " . $data['name'] . " registered successfully!";
        $this->request->session()->flash('status', $status);

        return redirect('admin/resellers');
    }

    public function getEdit($id) {
        $reseller = $this->reseller->find($id);
        $resellers = Reseller::all();
        return view('admin.resellers.edit', compact('reseller', 'resellers'));
    }

    public function postEdit(Request $request, $id) {
        $data = $request->except('_token');

        $rulesEdit = [
            'company' => "required",
            'name' => "required",
            'email' => "required|unique:resellers,email,$id",
            'key' => "required",
            'password' => "required",
        ];

        $validator = $this->validator->make($data, $rulesEdit);
        if ($validator->fails()) {
            return redirect("admin/resellers/edit/$id")
                            ->withErrors($validator)
                            ->withInput();
        }

        $this->reseller->where('id', $id)->update($data);

        $status = "Successfully updated administrator!";
        $this->request->session()->flash('status', $status);

        return redirect('admin/resellers');
    }

    public function getDelete($id) {
        $reseller = $this->reseller->find($id);
        $reseller->delete();

        $status = "Reseller " . $reseller['name'] . " deleted successfully!";
        $this->request->session()->flash('status', $status);

        return redirect('admin/resellers');
    }

}
