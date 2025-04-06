@extends('master')
@section('content')

 <div class="container">
 <div class="row justify-content-left ">
<p></p>

<div class="k_cheading">
		<h1>Pay<span class="k_greencolor"> Now</span> </h1>
		<img src="/public/uploads/images/kborder_bottom.png" alt=""> 
	</div>
<div class="container form-enq">
  <!--<form method="POST" action="{{ route('contact.store') }}" >
  @csrf
    <label for="fname">Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name..">
    <label for="fname">Email</label>
    <input type="email" id="email" name="email" placeholder="Your email..">
    <label for="fname">Contact</label>
    <input type="text" id="contact" name="contact" placeholder="Your contact..">
    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.."></textarea>
  <button type="submit">Submit</button>
  </form>-->
 <form class="row g-3" method="POST" action="{{ route('contact.store') }}">
   @csrf
  <div class="col-md-6">
    <label for="fname" class="form-label"><b>Name</b></label>
    <input type="text" class="form-control" id="fname">
  </div>
  <div class="col-md-6">
    <label for="fname" class="form-label"><b>Email</b></label>
    <input type="email" class="form-control" id="email">
  </div>
   <div class="col-md-6">
    <label for="contact" class="form-label"><b>Mobile Number</b></label>
    <input type="text" class="form-control" id="contact">
  </div>
   <div class="col-md-6">
    <label for="amount" class="form-label"><b>Amount</b></label>
    <input type="text" class="form-control" id="amount">
  </div>
  <div class="col-md-12">
    <label for="subject" class="form-label"><b>Address</b></label>
    <textarea class="form-control" id="subject"></textarea>
  </div>
<input type="hidden" class="form-control" id="orderid" value="ordervalue"> 

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Pay Now</button>
  </div>
</form>

<p></p>
</div>
</div>
 
@endsection