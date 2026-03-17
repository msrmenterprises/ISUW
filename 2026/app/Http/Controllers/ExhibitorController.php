<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ExhibitorController extends Controller
{
  public function __construct()
  {
   
      $this->middleware(['auth']);
     
  }
    public function show()
    {
      $exhibitors = DB::table('exhibitors2022')->get();
     return view('admin.exhibitor',compact('exhibitors'));

    }

             /**
     * Display the specified resource.
     *
     * @param  Request $request
     */
    public function removeExhibitor(Request $request)
    {
        $this->validate($request, [
            'exhibitorId' => 'required|',
         ]);
        $banners = DB::table('exhibitors2022')->where('id',$request->exhibitorId)->update(['isActive' => 0]);;
        return "Sucessfully updated";
    }
}
