@extends('master2')
@section('content')

<section class="page-section pt-pb-100 bg-white">
         <div class="container">
           
		    <div class="k_cheading">
		<h1>ISUW 2023 <span class="k_greencolor">Speaker </span> </h1>
		<img src="/public/uploads/images/kborder_bottom.png" alt=""> 
	</div>
            <div class="row justify-content-left ">
			 <p></p>
               <div class="col-lg-12 ">
                  <div class="d-flex ">
  <div class="flex-shrink-0">
   <img src="{{$speakerr->imageUrl}}" class="img-fluid " alt="{{$speakerr->imageAlt}}">
  </div>
  <div class="flex-grow-1 ms-3">
    <b style="font-size:22px; color:green;">{{$speakerr->name}}</b><br>
	<b style="font-size:18px;">{{$speakerr->company}}</b><br/>
	<p style="text-align:justify;">
    {{$speakerr->description}}
	</p>
	<p></p>
  </div>
</div>
                  </div>
				
				  
				
            </div>
         </div>
      </section>
@endsection