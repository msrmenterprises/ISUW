<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class homeController extends Controller
{
    public function show()
    {
      $banners = DB::table('banners')->get();
      $speakers = DB::table('speakers2022')->get();
      $exhibitors = DB::table('exhibitors2022')->get();
      $utilitycategory = DB::table('utilitycategory2022')->get();
      $utilityimages = DB::table('utilityimages')->get();
      $partnercategory = DB::table('partnerscategory')->get();
      $partnerimages = DB::table('partnerimages')->get();
      $testimonial = DB::table('testimonial')->get();
     return view('components.home',compact('banners','speakers','exhibitors','utilitycategory','utilityimages','partnercategory','partnerimages','testimonial'));

    }

}
