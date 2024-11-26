@extends('master')

@section('content')

<div class="banner ">
         <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
            @foreach ($banners as $banner)
            @if ($banner->displayBanner==1)
            @if ($loop->first)
               <div class="carousel-item active">
                  <div class="first-div ">
                     <img src="{{$banner->BannerUrl}}" class="d-block w-100" alt="{{$banner->ImageAltText}}">
                  </div>
               </div>
               @else
               <div class="carousel-item">
                  <div class="first-div ">
                     <img src="{{$banner->BannerUrl}}" class="d-block w-100" alt="{{$banner->ImageAltText}}">
                  </div>
               </div>
               @endif
               @endif
               @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
         </div>
      </div>
      <section class="page-section key-spoort">
         <div class="container">
            <div class="section-title d-none">
               <h2>About Us</h2>
            </div>
            <div class="row">
               <div class="col-lg-3">
                  <div class="card-box">
				  <div class="ministry">
                     <h2>Supporting<br> 
                        Ministries 2022
                     </h2>
                     <div class="logo-div"><a href="https://powermin.nic.in/" target="_blank"><img class="aligncenter" src="http://www.isgw.in/public/uploads/ministries/MOP.jpg" alt="Ministry of Power" width="160"></a></div>
<div class="logo-div"><a href="https://dot.gov.in/" target="_blank"><img  class="aligncenter" src="http://www.isgw.in/public/uploads/ministries/department of telecommunications.jpg" alt="Ministry of Commerce" width="150" height="158"></a></div>
<!--<div class="logo-div"><a href="http://www.mnre.gov.in/" target="_blank"><img class="aligncenter" src="http://www.isgw.in/public/uploads/ministries/MNRE (1).jpg" alt="Ministry of Power" width="219" height="158"></a></div>
<div class="logo-div"><a href="http://moef.gov.in/" target="_blank"><img  class="aligncenter" src="http://www.isgw.in/public/uploads/ministries/ministry of environment.jpg" alt="Ministry of Commerce" width="219" height="158"></a></div>
<div class="logo-div"><a href="http://mowr.gov.in/" target="_blank"><img  class="aligncenter" src="http://www.isgw.in/public/uploads/ministries/minstry of jal shakti png.png" alt="Ministry of Commerce" width="219" height="158"></a></div>
<div class="logo-div"><a href="http://mohua.gov.in/" target="_blank"><img class="aligncenter" src="http://www.isgw.in/public/uploads/ministries/Ministry of housing and urban affairs.jpg" alt="Ministry of Housing and Urban Government of India" width="300" height="145"></a></div>
<div class="logo-div"><a href="https://dst.gov.in/" target="_blank"><img  class="aligncenter" src="http://www.isgw.in/public/uploads/ministries/Ministry of Science & Technology.jpg" alt="Ministry of Commerce" width="219" height="158"></a></div>
--><div class="logo-div"><a href="https://niti.gov.in/" target="_blank"><img class="aligncenter" src="http://www.isgw.in/public/uploads/ministries/niti ayog.jpg" alt="Ministry of Commerce" width="150" height="158"></a></div>

<div class="logo-div"><p><a href="http://mowr.gov.in/"><img class="aligncenter  wp-image-38077" src="http://www.isgw.in/public/uploads/ministries/minstry of jal shakti png.png" alt="Ministry of Commerce" /></a></div>
<div class="logo-div"><p><a href="https://smartnet.niua.org/39-9cc9844b-1b5e-4ea6-9303-719caa5017d8"><img class="aligncenter" src="http://www.isgw.in/public/uploads/ministries/Smart-City (1).png" alt="Ministry of Commerce"/></a></div>
</div>
<div class="thematic">
				   <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>Conference Sessions Partners</h4>
                           </div>
                        </div>
                      
<div class="logo-div"><a href="https://www.apuea.org/" target="_blank"><img class="aligncenter" src="https://www.isgw.in/public/uploads/partner/APUEA_logo.png" alt="Ministry of Power"></a></div>
<div class="logo-div"><a href="http://europa.eu/" target="_blank"><img class="aligncenter" src="https://www.isgw.in/beta/wp-content/uploads/2021/02/EU-Flag_High-Res-1.jpg" alt="Ministry of Power" width="150" height="158"></a></div>
<div class="logo-div"><a href="https://www.usaid.gov/" target="_blank"><img  class="aligncenter" src="https://www.isgw.in/public/uploads/partner/USAID.png" alt="Ministry of Commerce" ></a></div>
<div class="logo-div"><a href="https://www.energy.gov/" target="_blank"><img  class="aligncenter" src="http://www.isgw.in/beta/wp-content/uploads/2021/02/US-doe-logo-1.jpg" alt="Ministry of Commerce" height="158"></a></div>
<div class="logo-div"><a href="https://ngsindia.org/" target="_blank"><img  class="aligncenter" src="https://www.isgw.in/public/uploads/partner/NGSLogo170.png" alt="Ministry of Commerce"></a></div>
 <div class="logo-div"><a href=" https://collaboration.worldbank.org/content/sites/collaboration-for-development/en/groups/the-wepowernetwork.html" target="_blank" rel="noopener noreferrer"><img class="aligncenter size-full wp-image-5610" src="http://www.isgw.in/public/uploads/images/WePOWER Logo HR.jpg" alt="TIE"></a></div>
 <div class="logo-div"><a href="https://www.boeing.com/" target="_blank" rel="noopener noreferrer"><img class="aligncenter size-full wp-image-5610" src="http://www.isgw.in/public/uploads/images/Boeing_RGBblue_standard_142.png" alt="TIE"></a></div>
<div class="logo-div"><a href="https://www.usibc.com/" target="_blank"><img class="aligncenter" src="https://www.isgw.in/public/uploads/partner/usibc_logos_hires.png" alt="Ministry of Housing and Urban Government of India" height="80"></a></div>
<div class="logo-div"><a href="https://www.giz.de/en/html/index.html" target="_blank"><img class="aligncenter" src="https://www.isgw.in/public/uploads/partner/giz.jpg" alt="Ministry of Commerce"></a></div>
 <!--<div class="logo-div"><a href="https://www.trade.gov/let-our-experts-help-0" target="_blank"><img class="aligncenter" src="https://www.isgw.in/public/uploads/partner/US COMMERCIAL SERVICES.jpg" alt="Ministry of Commerce"></a></div>
--> 
                  <a class="btn btn-light-section" style="border: 2px solid #EF7B00;" href="/theme-and-session-partners">View All</a>
              </div>
					  <!--<div class="row justify-content-center mt-4">
                       <h2>Thematic Session Partners
                     </h2>
                        <div class="col-lg-8 utilitesSlick slick-initialized slick-slider"><button type="button" class="slick-prev pull-left slick-arrow" style="display: block;"><img src="images/arrow-left2.png"></button>
						<div aria-live="polite" class="slick-list draggable"><div class="slick-track" role="listbox" style="opacity: 1; width: 876px; transform: translate3d(-146px, 0px, 0px);"><div class="logo-div slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 116px;"><img src="images/AWS_logo_RGB.png" class="logo-img " alt="..."></div><div class="logo-div slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide20" style="width: 116px;"><img src="images/AWS_logo_RGB.png" class="logo-img " alt="..."></div><div class="logo-div slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide21" style="width: 116px;"><img src="images/host04.png" class="logo-img " alt="..."></div><div class="logo-div slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide22" style="width: 116px;"><img src="images/host04.png" class="logo-img " alt="..."></div><div class="logo-div slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide23" style="width: 116px;"><img src="images/host04.png" class="logo-img " alt="..."></div><div class="logo-div slick-slide slick-cloned" data-slick-index="4" aria-hidden="true" tabindex="-1" style="width: 116px;"><img src="images/host04.png" class="logo-img " alt="..."></div></div></div>
				        <div aria-live="polite" class="slick-list draggable"><div class="slick-track" role="listbox" style="opacity: 1; width: 876px; transform: translate3d(-146px, 0px, 0px);"><div class="logo-div slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 116px;"><img src="images/AWS_logo_RGB.png" class="logo-img " alt="..."></div><div class="logo-div slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide20" style="width: 116px;"><img src="images/AWS_logo_RGB.png" class="logo-img " alt="..."></div><div class="logo-div slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide21" style="width: 116px;"><img src="images/host04.png" class="logo-img " alt="..."></div><div class="logo-div slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide22" style="width: 116px;"><img src="images/host04.png" class="logo-img " alt="..."></div><div class="logo-div slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide23" style="width: 116px;"><img src="images/host04.png" class="logo-img " alt="..."></div><div class="logo-div slick-slide slick-cloned" data-slick-index="4" aria-hidden="true" tabindex="-1" style="width: 116px;"><img src="images/host04.png" class="logo-img " alt="..."></div></div></div>
				 <div aria-live="polite" class="slick-list draggable"><div class="slick-track" role="listbox" style="opacity: 1; width: 876px; transform: translate3d(-146px, 0px, 0px);"><div class="logo-div slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 116px;"><img src="images/AWS_logo_RGB.png" class="logo-img " alt="..."></div><div class="logo-div slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide20" style="width: 116px;"><img src="images/AWS_logo_RGB.png" class="logo-img " alt="..."></div><div class="logo-div slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide21" style="width: 116px;"><img src="images/host04.png" class="logo-img " alt="..."></div><div class="logo-div slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide22" style="width: 116px;"><img src="images/host04.png" class="logo-img " alt="..."></div><div class="logo-div slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide23" style="width: 116px;"><img src="images/host04.png" class="logo-img " alt="..."></div><div class="logo-div slick-slide slick-cloned" data-slick-index="4" aria-hidden="true" tabindex="-1" style="width: 116px;"><img src="images/host04.png" class="logo-img " alt="..."></div></div></div>
				 <div aria-live="polite" class="slick-list draggable"><div class="slick-track" role="listbox" style="opacity: 1; width: 876px; transform: translate3d(-146px, 0px, 0px);"><div class="logo-div slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 116px;"><img src="images/AWS_logo_RGB.png" class="logo-img " alt="..."></div><div class="logo-div slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide20" style="width: 116px;"><img src="images/AWS_logo_RGB.png" class="logo-img " alt="..."></div><div class="logo-div slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide21" style="width: 116px;"><img src="images/host04.png" class="logo-img " alt="..."></div><div class="logo-div slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide22" style="width: 116px;"><img src="images/host04.png" class="logo-img " alt="..."></div><div class="logo-div slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide23" style="width: 116px;"><img src="images/host04.png" class="logo-img " alt="..."></div><div class="logo-div slick-slide slick-cloned" data-slick-index="4" aria-hidden="true" tabindex="-1" style="width: 116px;"><img src="images/host04.png" class="logo-img " alt="..."></div></div></div>
				 
				 <button type="button" class="slick-next pull-right slick-arrow" style="display: block;"><img src="images/arrow-right2.png"></button></div>
                     </div>-->
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="card-box">
                     <div class="row justify-content-center">
                        <div class="col-lg-3">
                           <div class="spot-div">
                              <a href="https://calendar.google.com/calendar/u/0/r?sf=true&msg=Could+not+find+the+requested+event.&msgtok=8c0c9622719986994bcfe33cae9e1a5e7e1430ae" target="_blank">
                                 <img src="images/spot01.png" class="logo-img " alt="...">
                                 <h3>Mark your 
                                    Calendar
                                 </h3>
                              </a>
                           </div>
                        </div>
                        <div class="col-lg-3">
                           <div class="spot-div">
                              <a href="https://www.isgw.in/partnership-opportunity-information" target="_blank">
                                 <img src="images/spot02.png" class="logo-img " alt="...">
                                 <h3>Participation 
                                    Opportunities
                                 </h3>
                              </a>
                           </div>
                        </div>
                        <div class="col-lg-3">
                           <div class="spot-div">
                              <a href="https://www.isgw.in/conference-agenda-and-program" target="_blank">
                                 <img src="images/spot03.png" class="logo-img " alt="...">
                                 <h3>ISUW <br/>
                                    Agenda
                                 </h3>
                              </a>
                           </div>
                        </div>
                        <div class="col-lg-3">
                           <div class="spot-div">
                              <a href="https://www.isgw.in/innovation-awards-2022" target="_blank">
                                 <img src="images/spot04.png" class="logo-img " alt="..." style="height:47px;">
                                 <h3>Innovation 
                                    Awards
                                 </h3>
                              </a>
                           </div>
                        </div>
                     </div>
                     <h2 class="mt-4">Key Partners 2022
                     </h2>
                     <!--@foreach ($partnercategory as $pcategory)
                     <div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>{{$pcategory->name}}</h4>
                           </div>
                        </div>
                        @foreach ($partnerimages as $pimage)
                        @if ($pimage->categoryId==$pcategory->id)
                        @if ($pimage->isActive==1)
                        <div class="col-lg-4">
                            <a href="{{$pimage->redirectUrl}}" target="_blank">
                        <div class="logo-div"><img src="{{$pimage->imageUrl}}" class="logo-img " alt="{{$pimage->altText}}"></div>
                       </a>
                        </div>
                    
                     @endif
                        @endif
                        @endforeach
                        </div>
                 @endforeach-->
                      <div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>Powered by</h4>
                           </div>
                        </div>
                        <div class="col-lg-4">
                            <a href="https://aws.amazon.com/" target="_blank">
                        <div class="logo-div"><img src="http://www.isgw.in/beta/wp-content/uploads/2021/02/AWS_logo_RGB.png" class="logo-img " alt="{{$pimage->altText}}"></div>
                       </a>
                        </div>
                        </div>
                          <div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>Platinum Partner</h4>
                           </div>
                        </div>
                        <div class="col-lg-4">
                            <a href="https://www.hitachienergy.com/in/en" target="_blank">
                        <div class="logo-div"><img src="https://www.isgw.in/public/uploads/partner/Combo logo_wo (1).png" class="logo-img " alt="{{$pimage->altText}}"></div>
                       </a>
                        </div>
                        </div>
						   <div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>ISGF Innovation Award Partner</h4>
                           </div>
                        </div>
                        <div class="col-lg-4">
                            <a href="https://www.nedo.go.jp/english/" target="_blank">
                        <div class="logo-div"><img src="/uploads/images/nedo.png" class="logo-img " alt="{{$pimage->altText}}"></div>
                       </a>
                        </div>
                        </div>
						 <div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>Gold Partners</h4>
                           </div>
                        </div>
                        <div class="col-lg-4">
                            <a href="https://www.sew.ai/" target="_blank"><div class="logo-div"><img src="/uploads/images/sew-water.png" class="logo-img " alt="{{$pimage->altText}}"></div></a>
                        </div>
						 <div class="col-lg-4">
                            <a href="https://www.gridspertise.com/" target="_blank"><div class="logo-div"><img src="http://isgw.in/public/uploads/partner/Gridspertise_claim_flag_flat_color.jpg" class="logo-img " alt="{{$pimage->altText}}"></div></a>
                        </div>
                        </div>
						 <!--<div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>Session Partner</h4>
                           </div>
                        </div>
                        <div class="col-lg-4">
                            <a href="https://www.sap.com/india/index.html" target="_blank">
                        <div class="logo-div"><img src="/uploads/partner/1641872584.png" class="logo-img " alt="{{$pimage->altText}}" style="height:50px;" ></div>
                       </a>
                        </div>
                        </div>-->
						 <div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>Technology Partners</h4>
                           </div>
                        </div>
                        <div class="col-lg-4">
                            <a href="https://fluentgrid.com/" target="_blank">
                        <div class="logo-div"><img src="/uploads/partner/1641569562.png" class="logo-img " alt="{{$pimage->altText}}"></div>
                       </a>
                        </div>
						<div class="col-lg-4">
                            <a href="https://www.altec.com/" target="_blank">
                        <div class="logo-div"><img src="/uploads/partner/1641570210.png" class="logo-img " alt="{{$pimage->altText}}" style="height:59px;"></div>
                       </a>
                        </div>
						 <div class="col-lg-4">
                            <a href="https://www.nanostone.com/" target="_blank">
                        <div class="logo-div"><img src="https://www.isgw.in/public/uploads/partner/nanostone.png" class="logo-img " alt="{{$pimage->altText}}"></div>
                       </a>
                        </div>
                        </div>
						<div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>Silver Partners</h4>
                           </div>
                        </div>
                        <div class="col-lg-4">
                            <a href="https://www.g3-plc.com/" target="_blank">
                        <div class="logo-div"><img src="/uploads/partner/1641569652.png" class="logo-img " alt="{{$pimage->altText}}" style="height:59px;"></div>
                       </a>
                        </div>
						 <div class="col-lg-4">
                            <a href="https://wi-sun.org/" target="_blank">
                        <div class="logo-div"><img src="/uploads/partner/1641569692.png" class="logo-img " alt="{{$pimage->altText}}" style="height:59px;"></div>
                       </a>
                        </div>
						<div class="col-lg-4">
                            <a href="https://www.nokia.com/" target="_blank">
                        <div class="logo-div"><img src="/uploads/images/nokia.png" class="logo-img " alt="{{$pimage->altText}}" style="height:59px;"></div>
                       </a>
                        </div>
						<div class="col-lg-4"> 
                            <a href="https://www.se.com/ww/en/" target="_blank">
                        <div class="logo-div"><img src="http://isgw.in/public/uploads/partner/scheider.PNG" class="logo-img " alt="{{$pimage->altText}}" style="height:59px;"></div>
                       </a>
                        </div>
						 
                        </div>
						<div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>Country Partners</h4>
                           </div>
                        </div>
                       <!-- <div class="col-lg-4">
                            <a href="https://sweden.se/" target="_blank">
                        <div class="logo-div"><img src="/uploads/partner/1641570537.png" class="logo-img " alt="{{$pimage->altText}}" style="height:68px;"></div>
                       </a>
                        </div>
						 <div class="col-lg-4">
                            <a href="https://sweden.se/" target="_blank">
                        <div class="logo-div"><img src="/uploads/partner/1641571426.png" class="logo-img " alt="{{$pimage->altText}}"></div>
                       </a>
                        </div>-->
						 <div class="col-lg-4">
                            <a href="https://european-union.europa.eu/index_en" target="_blank">
                        <div class="logo-div"><img src="/uploads/partner/1641571593.png" class="logo-img " alt="{{$pimage->altText}}" style="height:66px;"></div>
                       </a>
                        </div>
						 <div class="col-lg-4">
                            <a href="https://european-union.europa.eu/index_en" target="_blank">
                        <div class="logo-div"><img src="/uploads/partner/1641571628.png" class="logo-img " alt="{{$pimage->altText}}"></div>
                       </a>
                        </div>
							 <div class="col-lg-4">
                            <a href="#" target="_blank">
                        <div class="logo-div"><img src="https://isgw.in/uploads/countryflags/Germany.png" class="logo-img " alt="{{$pimage->altText}}"></div>
                       </a>
                        </div>
							 <div class="col-lg-4">
                            <a href="#" target="_blank">
                        <div class="logo-div"><img src="https://isgw.in/uploads/countryflags/USA.png" class="logo-img " alt="{{$pimage->altText}}"></div>
                       </a>
                        </div>
                        </div>
						<!--<div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>Bronze Partners</h4>
                           </div>
                        </div>
						 <div class="col-lg-4">
                            <a href="https://sweden.se/" target="_blank">
                        <div class="logo-div"><img src="/uploads/partner/1641572487.png" class="logo-img " alt="{{$pimage->altText}}"></div>
                       </a>
                        </div>
						 <div class="col-lg-4">
                            <a href="https://european-union.europa.eu/index_en" target="_blank">
                        <div class="logo-div"><img src="/uploads/partner/1641572425.png" class="logo-img " alt="{{$pimage->altText}}"></div>
                       </a>
                        </div>
						 <div class="col-lg-4">
                            <a href="https://european-union.europa.eu/index_en" target="_blank">
                        <div class="logo-div"><img src="/uploads/partner/1641572539.png" class="logo-img " alt="{{$pimage->altText}}" ></div>
                       </a>
                        </div>
						 <div class="col-lg-4">
                            <a href="https://sweden.se/" target="_blank">
                        <div class="logo-div"><img src="/images/nestt.PNG" class="logo-img " alt="{{$pimage->altText}}" ></div>
                       </a>
                        </div>
                        </div>-->
                  </div>
               </div>
               <div class="col-lg-3">
                    <div class="card-box utilities">
                     <div class="row justify-content-center">
                        <div class="col-lg-12">
                           <h2>Supporting   <br>
                           Utilities 2022</h2>
                        </div> 
                     </div>
                     @foreach ($utilitycategory as $category)
					    <div class="row justify-content-center">
						  <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>{{$category->CategoryName}}</h4>
                           </div>
                        </div>
                        @foreach ($utilityimages as $image)
                        @if ($image->categoryId==$category->categoryId)
                        @if ($image->isActive==1)
                        <div class="col-lg-12">
                            <a href="{{$image->redirectUrl}}" target="_blank">
                           <div class="logo-div"><img src="{{$image->imageUrl}}" class="logo-img " alt="{{$image->altText}}"></div>
                           </a>
                        </div>
                        @endif
                        @endif
                        @endforeach
                  </div>
					   @endforeach
					        <a class="btn btn-light-section" style="border: 2px solid #EF7B00;margin-bottom: -31px;" href="/participating-utilies">View All</a>
             
                  </div>
                 
            </div>
             
         </div>
      </section>
      <section class="page-section isuw-speark">
         <div class="container">
            <div class="section-title pb-0">
               <h2 class="" style="background-color:lightgray;">ISUW 2022 Speakers</h2>
			     <div class="col-lg-12 mb-4 text-end">
                  <a class="btn btn-light" style="
    margin-top: -25px;
" href="/speakers">View All</a>
               </div>
            </div>
            <div class="row justify-content-center ">
               <div class="col-lg-12 responsive">
               @foreach ($speakers as $speaker)
                   @if ($speaker->isActive==1)
                  <div class="sprk-box">
                     <img src="{{$speaker->imageUrl}}" class="img-fluid " alt="...">
                     <h5>{{$speaker->name}}</h5>
                     <p>{{$speaker->company}}</p>
                     <p><a href="speaker/{{$speaker->id}}" class="text-warning">Read bio...</a></p>
                  </div>
                  @endif
                  @endforeach
               </div>
            </div>
         </div>
      </section>
     
      <section class="page-section isuw-exhibitors">
         <div class="container">
            <div class="section-title">
               <h2>ISUW 2022 Exhibitors</h2>
            </div>
            <div class="row justify-content-center ">
            @foreach ($exhibitors as $exhibitor)
                   @if ($exhibitor->isActive==1)
            <div class="col-lg-2">
		<div class="exhibitor">
                <a href="{{$exhibitor->redirectUrl}}" target="_blank">
                  <div class="logo-div"><img src="{{$exhibitor->imageUrl}}" class="logo-img " alt="{{$exhibitor->altText}}"></div>
                  </a>
               </div>
			   </div>
               @endif
               @endforeach
            </div>
         </div>
      </section>
            <section class="page-section isuw-testimonies">
         <div class="container">
            <div class="section-title">
               <h2 class="" style="background-color:#4EBC3C;">ISUW 2021 TESTIMONIES</h2>
            </div>
            <div class="row justify-content-center ">
               <div class="col-lg-9 happy-client">
                
               @foreach ($testimonial as $testimonia)
                   @if ($testimonia->isActive==1)
                   <div class="testimonies-box d-flex">
                     <img src="{{$testimonia->imageUrl}}" class="img-fluid " alt="...">
                     <div class="media-right text-white">
                        <p class="mb-4" style="text-align:justify;">{{$testimonia->description}}
                        </p>
                        <h5>{{$testimonia->name}}</h5>
                        <p><em>{{$testimonia->comapny}}</em></p>
                     </div>
                  </div>
               @endif
               @endforeach
                
               </div>
              <div class="col-lg-12 mb-4 text-center">
                  <a class="btn btn-light" href="/testimonial">View All</a>
               </div>
            </div>
           
         </div>
      </section>
	  <section class="page-section section--three-column">
         <div class="container">
           <div class="section-title">
			 <h2 class="text-black" style="background-color:#F1EBE9">ISUW Key Highlights</h2>
            </div>
            <div class="row justify-content-center highlight">
			  <div class="col-lg-1">
                <div class="article--stats">
				<div class="article__icon"> 
     <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
    </div>
	<h3 class="article__header__title"> 7 </h3>
	<div class="article__body">
        Editions 
     </div>
				</div>
               </div>
			     <div class="col-lg-1">
                <div class="article--stats">
				<div class="article__icon"> 
     <i class="fa fa-users" aria-hidden="true"></i>
    </div>
	<h3 class="article__header__title"> 12000 </h3>
	<div class="article__body">
        Delegates
     </div>
				</div>
               </div>
			     <div class="col-lg-1">
                <div class="article--stats">
				<div class="article__icon"> 
     <i class="fa fa-volume-up" aria-hidden="true"></i>
    </div>
	<h3 class="article__header__title"> 1700 </h3>
	<div class="article__body">
        Speakers 
     </div>
				</div>
               </div>
			     <div class="col-lg-1">
                <div class="article--stats">
				<div class="article__icon"> 
     <img src="images/exhibitor.png" alt="exhibitor">
    </div>
	<h3 class="article__header__title"> 339 </h3>
	<div class="article__body">
        Exhibitors
     </div>
				</div>
               </div>
               <div class="col-lg-1">
                <div class="article--stats">
				<div class="article__icon"> 
     <i class="fa fa-building" aria-hidden="true"></i> 
    </div>
	<h3 class="article__header__title"> 50+ </h3>
	<div class="article__body">
       Countries
     </div>
				</div>
               </div>
			    <div class="col-lg-1">
                <div class="article--stats">
				<div class="article__icon"> 
     <i class="fa fa-clipboard" aria-hidden="true"></i> 
    </div>
	<h3 class="article__header__title"> 506 </h3>
	<div class="article__body">
       Technical Papers
     </div>
				</div>
               </div>
			    <div class="col-lg-1">
                <div class="article--stats">
				<div class="article__icon"> 
				<img src="images/recognition.png" alt="recognition">
    </div>
	<h3 class="article__header__title"> 179 </h3>
	<div class="article__body">
        Recognitions
     </div>
				</div>
               </div>
               
            </div>
         </div>
      </section>
	 	  
	
      <section class="page-section isuw-countdown">
         <div class="container">
            <div class="section-title">
               <h2 class="text-black">ISUW 2022 Countdown</h2>
            </div>
			<!--<div class="elementor-widget-container">
<div class="elementor-countdown-wrapper" data-date="1615556460">
<div class="elementor-countdown-item"><span class="elementor-countdown-digits elementor-countdown-days">00</span> <span class="elementor-countdown-label">Days</span></div><div class="elementor-countdown-item"><span class="elementor-countdown-digits elementor-countdown-hours">00</span> <span class="elementor-countdown-label">Hours</span></div><div class="elementor-countdown-item"><span class="elementor-countdown-digits elementor-countdown-minutes">00</span> <span class="elementor-countdown-label">Minutes</span></div><div class="elementor-countdown-item"><span class="elementor-countdown-digits elementor-countdown-seconds">00</span> <span class="elementor-countdown-label">Seconds</span></div> </div>
</div>-->
            <div class="balloon white d-none">
               <div class="star"></div>
               <div class="face">
                  <div class="eye"></div>
                  <div class="mouth happy"></div>
               </div>
               <div class="triangle"></div>
               <div class="string"></div>
            </div>
            <div class="balloon white d-none">
               <div class="star"></div>
               <div class="face">
                  <div class="eye"></div>
                  <div class="mouth happy"></div> 
               </div>
               <div class="triangle"></div>
               <div class="string"></div>
            </div>
            <div class="balloon white d-none">
               <div class="star"></div>
               <div class="face">
                  <div class="eye"></div>
                  <div class="mouth happy"></div>
               </div>
               <div class="triangle"></div>
               <div class="string"></div>
            </div>
            <div id="timer"><div class="days">            <div class="numbers">59</div>days</div>          <div class="hours">            <div class="numbers">10</div>hours</div>          <div class="minutes">            <div class="numbers">49</div>minutes</div>          <div class="seconds">            <div class="numbers">3</div>seconds</div>          </div>
         </div>
      </section>
      @endsection