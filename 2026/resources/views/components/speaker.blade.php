@extends('master')
@section('content')
<section class="page-section pt-pb-100 bg-white">
         <div class="container">
            		
               	
<div class="k_cheading">
		<h1>ISUW<span class="k_greencolor"> Speakers</span> </h1>
		<img src="/public/uploads/images/kborder_bottom.png" alt=""> 
	</div> 
			   
           <p></p>
            <div class="row justify-content-left ">
			@foreach ($speakers as $speaker)
			@if ($speaker->isActive==1)
               <div class="col-lg-3 ">
		      
                  <div class="sprk-box sprk-detail">
                     <img src="{{$speaker->imageUrl}}" class="img-fluid " alt="{{$speaker->imageAlt}}">
                     <h5 style="font-size: 22px;">{{$speaker->name}}</h5>
                     <p>{!! preg_replace('/,\s*/', '<br/>', e($speaker->company)) !!}</p>
                     <p><a  href="/speaker/{{$speaker->id}}" class="text-warning">Read bio...</a></p>
                  </div>
				
                  </div>	
				  @endif
				  @endforeach			 
            </div>
         </div>
      </section>
@endsection