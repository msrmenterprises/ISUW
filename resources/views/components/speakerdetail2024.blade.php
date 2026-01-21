@extends('master2')
@section('content')

<section class="page-section pt-pb-100 bg-white">
         <div class="container">
           
		    <div class="k_cheading">
		<h1>ISUW 2026 <span class="k_greencolor">Speaker </span> </h1>
		<img src="/public/uploads/images/kborder_bottom.png" alt=""> 
	</div>
            <div class="row justify-content-left ">
			 <p></p>
               <div class="col-lg-12 ">
                  <div class="d-flex ">
  <!-- <div class="flex-shrink-0"> -->
  <div class="col-lg-3">  
   <img src="{{$speaker24->imageUrl}}" class="img-fluid " alt="{{$speaker24->imageAlt}}" style="width:100%">
  </div>
  <div class="flex-grow-1 ms-3">
    <b style="font-size:22px; color:green;">{{$speaker24->name}}</b><br>
  	<b style="font-size:18px;">{!! preg_replace('/,\s*/', '<br/>', e($speaker24->company)) !!}</b><br/>
	<p style="text-align:justify;">
    {{$speaker24->description}}
	</p>
	<p></p>
  </div>
</div>
                  </div>
				
				  
				
            </div>
         </div>
      </section>
@endsection