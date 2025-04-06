<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class homeController extends Controller
{
    public function show()
    {
      $banners = DB::table('banners')->get();
      $speakersr24 = DB::table('speakers2025')->get();
      $exhibitors = DB::table('exhibitors2022')->get();
      $utilitycategory = DB::table('utilitycategory2022')->get();
      $utilityimages = DB::table('utilityimages')->get();
      $partnercategory = DB::table('partnerscategory')->get();
      $partnerimages = DB::table('partnerimages')->get();
      $testimonial = DB::table('testimonial')->get();
     return view('components.home',compact('banners','speakersr24','exhibitors','utilitycategory','utilityimages','partnercategory','partnerimages','testimonial'));

    }
      public function presentation(Request $request)
    {
        $value = $request->session()->get('presentation');
      if( $value==true ) {
              return view('components.isuw-2022-presentations');
      }else{
          return view('components.presentation-alert');
      }
    }
    
     public function presentation2023(Request $request)
    {
        $value = $request->session()->get('presentation2023');
      if( $value==true ) {
              return view('components.isuw-2023-presentations');
      }else{
          return view('components.presentation-alert-2023');
      }
    }
    
    public function presentation2024(Request $request)
    {
        $value = $request->session()->get('presentation2024');
      if( $value==true ) {
              return view('components.isuw-2025-presentations');
      }else{
          return view('components.presentation-alert-2024');
      }
    }


}


