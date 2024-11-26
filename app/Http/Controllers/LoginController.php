<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class LoginController extends Controller
{
    public function index()
      {
        return view('admin.login');
      }
    
    public function authenticate(Request $request)
        {         
          $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
          ]);
        $credentials = $request->validate([
          'email' => ['required', 'email'],
          'password' => ['required'],
      ]);

      if (Auth::attempt($credentials)) {
          $request->session()->regenerate();
          return redirect('/admin');
      }

      return back()->withErrors([
          'email' => 'The provided credentials do not match our records.',
      ]);
           }
}
