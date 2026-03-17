@extends('master')
@section('content')
<section class="page-section pt-pb-100 bg-white">
         <div class="container">
            		
               	
<div class="k_cheading">
		<h1>ISUW 2024<span class="k_greencolor"> Speakers</span> </h1>
		<img src="/public/uploads/images/kborder_bottom.png" alt=""> 
	</div> 
			   
           <p></p>
            <div class="row justify-content-left ">
			@foreach ($speakersr24 as $speaker24)
			@if ($speaker24->isActive==1)
               <div class="col-lg-3 ">
		      
                  <div class="sprk-box sprk-detail">
                     <img src="{{$speaker24->imageUrl}}" class="img-fluid " alt="{{$speaker24->imageAlt}}">
                     <h5 style="font-size: 22px;">{{$speaker24->name}}</h5>
                     <p>{{$speaker24->company}}</p>
                     <p><a  href="/speaker24/{{$speaker24->id}}" class="text-warning">Read bio...</a></p>
                  </div>
				
                  </div>	
				  @endif
				  @endforeach			 
            </div>
             <p style="text-align:center; font-size:16px;"><a href="https://www.isuw.in/speakers-2023" class="getstartedd " target="_blank">ISUW Speakers 2023</a></p>
            <p style="text-align:center; font-size:16px;"><a href="https://www.isuw.in/speakers" class="getstartedd " target="_blank">ISUW Speakers 2022</a></p>
         </div>
      </section>
@endsection