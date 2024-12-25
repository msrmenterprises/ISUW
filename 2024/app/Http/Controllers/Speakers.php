<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Speakers extends Controller
{
    
    public function show()
    {
      $speakers = DB::table('speakers2022')->orderBy('name')->get();
     return view('components.speaker',compact('speakers'));

    }
     public function showspeaker()
    {
      $speakersr = DB::table('speakers2023')->orderBy('name')->get();
     return view('components.speakers-2023',compact('speakersr'));

    }
    public function showspeaker24()
    {
      $speakersr24 = DB::table('speakers2024')->orderBy('name')->get();
     return view('components.speakers-2024',compact('speakersr24'));

    }

    public function showDetail($id)
    { 
      
      $speaker = DB::table('speakers2022')->where('id', '=', $id)->get()->first();
   
     return view('components.speakerdetail',compact('speaker'));
     

    }
    
     public function showDetailspkeaker($id)
    { 
      
      $speakerr = DB::table('speakers2023')->where('id', '=', $id)->get()->first();
   
     return view('components.speakerdetail2023',compact('speakerr'));
     

    }
    public function showDetailspkeaker24($id)
    { 
      
      $speaker24 = DB::table('speakers2024')->where('id', '=', $id)->get()->first();
   
     return view('components.speakerdetail2024',compact('speaker24'));
     

    }
    

}
