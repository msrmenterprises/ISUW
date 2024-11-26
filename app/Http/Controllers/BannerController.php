<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use URL;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  Request $request
     */
    public function upload(Request $request)
    {
        $this->validate($request, [
            'uploadfile' => 'required|',
         ]);
        $image = $request->uploadfile;  // your base64 encoded
         $image = str_replace('data:image/png;base64,', '', $image);
         $image = str_replace(' ', '+', $image);
         $imagename = time().'.'.'png'; 
         $imagepath = public_path("uploads/banner/").$imagename;
         $imageurl = URL::to('/public/uploads/banner/')."/".$imagename;
        $base=base64_decode($request['uploadfile']);
        $request->uploadfile->move(public_path('uploads/banner/'), $imagename);
        $banners = DB::table('banners')->insert(['BannerUrl'=>$imageurl,'displayBanner'=>'1','ImageAltText'=>$request->altText]);
        return "Sucessfully updated";
    }
    /**
     * Display the specified resource.
     *
     * @param  Request $request
     */
    public function uploadSpeaker(Request $request)
    {
        $this->validate($request, [
            'uploadfile' => 'required|',
         ]);
        $image = $request->uploadfile;  // your base64 encoded
         $image = str_replace('data:image/png;base64,', '', $image);
         $image = str_replace(' ', '+', $image);
         $imagename = time().'.'.'png'; 
         $imagepath = public_path("uploads/speakers/").$imagename;
         $imageurl = URL::to('/public/uploads/speakers/')."/".$imagename;
        $base=base64_decode($request['uploadfile']);
        $request->uploadfile->move(public_path('uploads/speakers/'), $imagename);
        $banners = DB::table('speakers2022')->insert(['imageUrl'=>$imageurl,'isActive'=>'1','imageAlt'=>$request->altText,'name'=>$request->name,'description'=>$request->desc,'company'=>$request->company]);
        return "Sucessfully updated";
    }

     /**
     * Display the specified resource.
     *
     * @param  Request $request
     */
    public function uploadExhibitor(Request $request)
    {
        $this->validate($request, [
            'uploadfile' => 'required|',
         ]);
        $image = $request->uploadfile;  // your base64 encoded
         $image = str_replace('data:image/png;base64,', '', $image);
         $image = str_replace(' ', '+', $image);
         $imagename = time().'.'.'png'; 
         $imagepath = public_path("uploads/exhibitor/").$imagename;
         $imageurl = URL::to('/public/uploads/exhibitor/')."/".$imagename;
        $base=base64_decode($request['uploadfile']);
        $request->uploadfile->move(public_path('uploads/exhibitor/'), $imagename);
        $banners = DB::table('exhibitors2022')->insert(['imageUrl'=>$imageurl,'isActive'=>'1','altText'=>$request->altText,'redirectUrl'=>$request->redirectUrl]);
        return "Sucessfully updated";
    }
       /**
     * Display the specified resource.
     *
     * @param  Request $request
     */
    public function uploadUtility(Request $request)
    {
        $this->validate($request, [
            'uploadfile' => 'required|',
         ]);
        $image = $request->uploadfile;  // your base64 encoded
         $image = str_replace('data:image/png;base64,', '', $image);
         $image = str_replace(' ', '+', $image);
         $imagename = time().'.'.'png'; 
         $imagepath = public_path("uploads/utility/").$imagename;
         $imageurl = URL::to('/public/uploads/utility/')."/".$imagename;
        $base=base64_decode($request['uploadfile']);
        $request->uploadfile->move(public_path('uploads/utility/'), $imagename);
        $banners = DB::table('utilityimages')->insert(['imageUrl'=>$imageurl,'isActive'=>'1','altText'=>$request->altText,'categoryId'=>$request->categoryId,'redirectUrl'=>$request->redirectUrl]);
        return "Sucessfully updated";
    }

       /**
     * Display the specified resource.
     *
     * @param  Request $request
     */
    public function uploadPartner(Request $request)
    {
        $this->validate($request, [
            'uploadfile' => 'required|',
         ]);
        $image = $request->uploadfile;  // your base64 encoded
         $image = str_replace('data:image/png;base64,', '', $image);
         $image = str_replace(' ', '+', $image);
         $imagename = time().'.'.'png'; 
         $imagepath = public_path("uploads/partner/").$imagename;
         $imageurl = URL::to('/public/uploads/partner/')."/".$imagename;
        $base=base64_decode($request['uploadfile']);
        $request->uploadfile->move(public_path('uploads/partner/'), $imagename);
        $banners = DB::table('partnerimages')->insert(['imageUrl'=>$imageurl,'isActive'=>'1','altText'=>$request->altText,'categoryId'=>$request->categoryId,'redirectUrl'=>$request->redirectUrl]);
        return "Sucessfully updated";
    }

      /**
     * Display the specified resource.
     *
     * @param  Request $request
     */
    public function removeBanner(Request $request)
    {
        $this->validate($request, [
            'bannerId' => 'required|',
         ]);
        $banners = DB::table('banners')->where('bannerId',$request->bannerId)->update(['displayBanner' => 0]);;
        return "Sucessfully updated";
    }
    
    /**
     * Display the specified resource.
     *
     * @param  Request $request
     */
    public function uploadTestimonial(Request $request)
    {
        $this->validate($request, [
            'uploadfile' => 'required|',
         ]);
        $image = $request->uploadfile;  // your base64 encoded
         $image = str_replace('data:image/png;base64,', '', $image);
         $image = str_replace(' ', '+', $image);
         $imagename = time().'.'.'png'; 
         $imagepath = public_path("uploads/testimonial/").$imagename;
         $imageurl = URL::to('/public/uploads/testimonial/')."/".$imagename;
        $base=base64_decode($request['uploadfile']);
        $request->uploadfile->move(public_path('uploads/testimonial/'), $imagename);
        $banners = DB::table('testimonial')->insert(['imageUrl'=>$imageurl,'isActive'=>'1','altText'=>$request->altText,'name'=>$request->nameC,'comapny'=>$request->company,'description'=>$request->desc]);
        return "Sucessfully updated";
    }
    
    
}
