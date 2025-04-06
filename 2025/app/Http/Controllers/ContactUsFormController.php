<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class ContactUsFormController extends Controller
{
     // Create Contact Form
     public function createForm(Request $request) {
        return view('components.enquiry');
      }
  
      // Store Contact Form data
      public function ContactUsForm(Request $request) {
         
          // Form validation
          $this->validate($request, [
              'fname' => 'required',
              'email' => 'required|email',
              'contact' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
              'subject'=>'required'
           ]);
           $data = array(
            'name'      =>  $request->fname,
            'contact'   =>   $request->contact,
            'email'   =>   $request->email,
            'message'   =>   $request->subject
        );
          //  Store data in database
          //Contact::create($request->all());
           $contact = DB::table('contact')->insert(['fname'=>$request->fname,'lname'=>$request->lname,'email'=>$request->email,'contact'=>$request->contact,'message'=>$request->subject]);
           Mail::to('isuw@isuw.in')->send(new SendMail($request));
        return redirect('/thanku');
         // return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
      }
}
