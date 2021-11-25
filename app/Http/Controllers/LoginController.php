<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\LoginService;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    protected $loginService;

    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }

    function showFormLogin()
    {
        return view('login');
    }

    function login(Request $request)
    {
        $validateData = $request->validate( [
            'email' => 'required|email:filter',
            'password' => 'required'

        ]);
        

        if ($this->loginService->checkLogin($request)) {
            return redirect()->route('show.note');
        }
      
        
        return back();
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }


}
