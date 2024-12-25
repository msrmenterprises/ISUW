<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Testimonial extends Controller
{
  public function __construct()
  {
   
      $this->middleware(['auth']);
     
  }
    public function show()
    {
      $testimonials = DB::table('testimonial')->get();
        return view('admin.testimonial',compact('testimonials'));

    }

             /**
     * Display the specified resource.
     *
     * @param  Request $request
     */
    public function removeTestimonial(Request $request)
    {
        $this->validate($request, [
            'testimonialId' => 'required|',
         ]);
        $banners = DB::table('testimonial')->where('id',$request->testimonialId)->update(['isActive' => 0]);;
        return "Sucessfully updated";
    }
}
