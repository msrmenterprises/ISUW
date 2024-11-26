<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Speakers extends Controller
{
  
    public function show()
    {
      $speakers = DB::table('speakers2022')->get();
     return view('components.speaker',compact('speakers'));

    }

    public function showDetail($id)
    { 
      
      $speaker = DB::table('speakers2022')->where('id', '=', $id)->get()->first();
   
     return view('components.speakerdetail',compact('speaker'));
     

    }
    

}
