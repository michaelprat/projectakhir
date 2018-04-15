<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SessionRequest;
use Sentinel;
class SessionController extends Controller
{
    public function login()
    {
        if($user=Sentinel::check())
        {
            return redirect('/homelog');
        }
        else
        {
            return view('front.login');
        }
    }
    public function login_store(SessionRequest $request)
    {
        if($user=Sentinel::authenticate($request->all()))
        {
            return redirect()->intended('/homelog');//setelah login mau kemana
        }
        else
        {
            return redirect('/home');
        }
    }
    public function logout()
    {
        Sentinel::logout();
        return redirect('/home');
    }
}
