<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartnerController extends Controller
{
  public function __construct()
  {
   
      $this->middleware(['auth']);
     
  }
    public function show()
    {
      $partnerimages = DB::table('partnerimages')->get();
      $partnerscategory = DB::table('partnerscategory')->get();
      return view('admin.partner',compact('partnerscategory','partnerimages'));

    }

              /**
     * Display the specified resource.
     *
     * @param  Request $request
     */
    public function removePartner(Request $request)
    {
        $this->validate($request, [
            'partnerId' => 'required|',
         ]);
        $banners = DB::table('partnerimages')->where('id',$request->partnerId)->update(['isActive' => 0]);;
        return "Sucessfully updated";
    }
}
