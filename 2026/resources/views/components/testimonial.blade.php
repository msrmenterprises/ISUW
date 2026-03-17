@extends('master')
@section('content')
 <section class="page-section isuw-testimoniesdetail">
         <div class="container">
           <p></p>
               <h2 style="color:#f60;margin-left: 20px;">ISUW TESTIMONIES</h2>
       <p></p> <p></p>
            <div class="row justify-content-center ">
              
                
               @foreach ($testimonials as $testimonia)
                   @if ($testimonia->isActive==1)
                   <div class="form-group">
                   <div class="testimonies-box d-flex">
                     <img src="{{$testimonia->imageUrl}}" class="img-fluid " alt="...">
                     <div class="media-right text-black">
                        <p class="mb-4" style="text-align:justify;">{{$testimonia->description}}
                        </p>
                        <h5>{{$testimonia->name}}</h5>
                        <p><em>{{$testimonia->comapny}}</em></p>
                     </div>
                  </div>
                  </div>
               @endif
               @endforeach
               
            </div>
           </div>
      </section>
@endsection