<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;
class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function login_post(Request $request)
    {
       
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed
            return redirect()->route('ticket_list')->with('success', 'Login successfully.');
        }
    
        // Authentication failed
        return back()->withErrors([
            'error' => 'Email or password is incorrect.',
        ]);
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
