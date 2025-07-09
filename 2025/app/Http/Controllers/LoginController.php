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
           
           public function presentation()
      {
        return view('components.presentation-alert');
      }
      
      public function presentation2023()
      {
        return view('components.presentation-alert-2023');
      }
      
      public function presentation2024()
      {
        return view('components.presentation-alert-2024');
      }
    
    public function presentationauthenticate(Request $request)
        {         
          $this->validate($request,[
            
            'password' => 'required'
          ]);
        $credentials = $request->validate([
         
          'password' => ['required'],
      ]);

      if($request->password=='ISUW20220204#'){
           session(['presentation' => true]);
           return redirect('/isuw-2022-presentations');
      }else{
          return redirect('/presentation');
      }
     

           }
           
            public function presentationauthenticate2023(Request $request)
        {         
          $this->validate($request,[
            
            'password' => 'required'
          ]);
        $credentials = $request->validate([
         
          'password' => ['required'],
      ]);

      if($request->password=='ISUW20232804@'){
           session(['presentation2023' => true]);
           return redirect('/isuw-2023-presentations');
      }else{
          return redirect('/presentation2023');
      }
     

           }
           
           public function presentationauthenticate2024(Request $request)
        {         
          $this->validate($request,[
            
            'password' => 'required'
          ]);
        $credentials = $request->validate([
         
          'password' => ['required'],
      ]);

      if($request->password=='ISUW20251822#@'){
           session(['presentation2024' => true]);
           return redirect('/isuw-2025-presentations');
      }else{
          return redirect('/isuw-2024-presentations');
      }
     

           }
}
