<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SpeakerAdminController extends Controller
{
    public function __construct()
    {
     
        $this->middleware(['auth']);
       
    }
      public function show()
      {
        $speakers = DB::table('speakers2022')->get();
       return view('admin.speakers',compact('speakers'));
  
      }

           /**
     * Display the specified resource.
     *
     * @param  Request $request
     */
    public function removeSpeaker(Request $request)
    {
        $this->validate($request, [
            'speakerId' => 'required|',
         ]);
        $banners = DB::table('speakers2022')->where('id',$request->speakerId)->update(['isActive' => 0]);;
        return "Sucessfully updated";
    }
}
