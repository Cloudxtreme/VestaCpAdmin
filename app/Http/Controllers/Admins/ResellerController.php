<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Reseller;

class ResellerController extends Controller
{
    protected $reseller;
    protected $request;
    protected $validator;

    public function __construct(Reseller $reseller, Request $request, \Illuminate\Validation\Factory $validator) {
        $this->server = $reseller;
        $this->request = $request;
        $this->validator = $validator;
    }

    public function getIndex() {
        $resellers = $this->server->paginate(10);

        $status = "";
        if ($this->request->session()->has('status')) {
            $status = $this->request->session()->get('status');
        }
        return view('admin.resellers.index', compact('resellers', 'status'));
    }
}
