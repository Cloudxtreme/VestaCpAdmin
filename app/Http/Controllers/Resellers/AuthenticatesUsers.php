<?php

namespace App\Http\Controllers\Resellers;

use Illuminate\Contracts\Auth\Factory as Auth;

use Illuminate\Http\Request;

trait AuthenticatesUsers
{
    public function __construct()
    {
        $this->middleware("guest:$this->guard", ['except' => 'logout']);
    }

    public function login(Request $request, Auth $auth)
    {
        $authorized = $auth->guard($this->guard)->attempt($request->only('email', 'password'));

        if ($authorized) {
            return redirect()->intended($this->redirectTo);
        }

        return back()
            ->with('authError', 'Email ou senha incorretos.')
            ->withInput($request->except('password'));
    }

    public function logout(Auth $auth)
    {
        $auth->guard($this->guard)->logout();

        return redirect('/reseller');
    }
}
