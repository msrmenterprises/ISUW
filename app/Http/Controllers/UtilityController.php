<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UtilityController extends Controller
{
  public function __construct()
  {
   
      $this->middleware(['auth']);
     
  }
    public function show()
    {
      $utilityimages = DB::table('utilityimages')->get();
      $categories = DB::table('utilitycategory2022')->get();
     return view('admin.utility',compact('categories','utilityimages'));

    }

              /**
     * Display the specified resource.
     *
     * @param  Request $request
     */
    public function removeUtility(Request $request)
    {
        $this->validate($request, [
            'utilityId' => 'required|',
         ]);
        $banners = DB::table('utilityimages')->where('id',$request->utilityId)->update(['isActive' => 0]);;
        return "Sucessfully updated";
    }
}
