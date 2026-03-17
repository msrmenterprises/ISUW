<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class admincontroller extends Controller
{
    public function __construct()
    {
     
        $this->middleware(['auth']);
       
    }
      public function show()
      {
        $banners = DB::table('banners')->get();
       return view('admin.admin',compact('banners'));
  
      }
}
