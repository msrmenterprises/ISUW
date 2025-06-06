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
                     <a href="https://www.isuw.in/innovation-awards" target="_blank"><img src="{{$banner->BannerUrl}}" class="d-block w-100" alt="{{$banner->ImageAltText}}"></a>
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
                        <h2>SUPPORTING <br> 
                        MINISTRIES 2025
                        </h2>
                        <div class="logo-div">
                           <p>
                              <a href="https://powermin.gov.in/">
                                 <img class="aligncenter  wp-image-38077" src="http://www.isuw.in/public/uploads/ministries/MOP Golden.png" alt="Ministry of Commerce" style="width:219px; max-height:170px;" />
                              </a>  
                           </p>
                        </div>
                        <div class="logo-div"><a href="https://niti.gov.in/" target="_blank"><img class="aligncenter" src="http://www.isuw.in/public/uploads/ministries/NITI Aayog.jpg" alt="Ministry of Commerce" width="150" height="158"></a></div>
                        <div class="logo-div"><p><a href="https://cea.nic.in/?lang=en" target="_blank"><img class="aligncenter  wp-image-38077" src="http://www.isuw.in/public/uploads/ministries/CEA PNG.png" alt="Ministry of Power" width="219" max-height="158" /></a></p></div>
                        <div class="logo-div"><p><a href="https://mnre.gov.in/"><img class="aligncenter  wp-image-38077" src="http://www.isuw.in/public/uploads/ministries/MNRE GOLDEN.png" alt="Ministry of Commerce" style="width:219px; max-height:170px;" /></a></p></div>
                        <div class="logo-div"><p><a href="https://dst.gov.in/" target="_blank"><img class="aligncenter  wp-image-38077" src="images/2025/DSTGold.png" alt="Ministry" style="width:219px; max-height:170px;"  /></a></p></div>

                        <br/>
                        <h2>Conference Session Partners</h2>
                        <div class="col-lg-12"><div class="logo-div"><a href="https://www.cdri.world/" target="_blank" rel="noopener noreferrer"><img class="aligncenter size-full wp-image-5610" src="images/2025/CDRI.jpg" alt="TIE"></a></div></div>
                        <div class="col-lg-12"><div class="logo-div"><a href="https://www.indiabrazilchamber.org/home" target="_blank" rel="noopener noreferrer"><img class="aligncenter size-full wp-image-5610" src="images/2025/IBCoC.png" alt="TIE"></a></div></div>
                        <div class="col-lg-12"><div class="logo-div"><a href="https://www.smartgrid.com.br/" target="_blank" rel="noopener noreferrer"><img class="aligncenter size-full wp-image-5610" src="images/2025/LATAM.png" alt="TIE"></a></div></div>
                        <div class="col-lg-12"><div class="logo-div"><a href="https://sscgj.in/" target="_blank" rel="noopener noreferrer"><img class="aligncenter size-full wp-image-5610" src="images/2025/SCGJ.png" alt="TIE"></a></div></div>
                        <div class="col-lg-12"><div class="logo-div"><a href="https://www.gov.uk/government/organisations/foreign-commonwealth-development-office" target="_blank" rel="noopener noreferrer"><img class="aligncenter size-full wp-image-5610" src="images/2025/UKGovSTACKRGB.png" alt="TIE"></a></div></div>
                        <div class="col-lg-12"><div class="logo-div"><a href="https://pjci.idremember.com/" target="_blank" rel="noopener noreferrer"><img class="aligncenter size-full wp-image-5610" src="https://pjci.idremember.com/wp-content/uploads/2022/05/download__1_-removebg-preview.png" alt="TIE"></a></div></div>
                        
                     
                     </div>
                 

                     <!--  <div class="ministry">
                     <h2>SUPPORTING<br> 
                        MINISTRIES 2024
                     </h2>
<div class="logo-div"><p><a href="https://powermin.gov.in/"><img class="aligncenter  wp-image-38077" src="http://www.isuw.in/public/uploads/ministries/MOP Golden.png" alt="Ministry of Commerce" style="width:219px; max-height:170px;" /></a></p></div>
<div class="logo-div"><p><a href="https://mnre.gov.in/"><img class="aligncenter  wp-image-38077" src="http://www.isuw.in/public/uploads/ministries/MNRE GOLDEN.png" alt="Ministry of Commerce" style="width:219px; max-height:170px;" /></a></p></div>
<div class="logo-div"><a href="https://niti.gov.in/" target="_blank"><img class="aligncenter" src="http://www.isuw.in/public/uploads/ministries/NITI Aayog.jpg" alt="Ministry of Commerce" width="150" height="158"></a></div>
<div class="logo-div"><p><a href="https://cea.nic.in/?lang=en" target="_blank"><img class="aligncenter  wp-image-38077" src="http://www.isuw.in/public/uploads/ministries/CEA PNG.png" alt="Ministry of Power" width="219" max-height="158" /></a></p></div>
<div class="logo-div"><p><a href="http://mowr.gov.in/"><img class="aligncenter  wp-image-38077" src="http://www.isuw.in/public/uploads/ministries/Jal Shakti.jpg" alt="Ministry of Commerce" style="width:219px; max-height:170px;" /></a></p></div>
<div class="logo-div"><p><a href="https://www.meity.gov.in/"><img class="aligncenter  wp-image-38077" src="http://www.isuw.in/public/uploads/ministries/MEITY.jpg" alt="Ministry of Commerce" style="width:219px; max-height:170px;" /></a></p></div>
<div class="logo-div"><p><a href="https://heavyindustries.gov.in/"><img class="aligncenter  wp-image-38077" src="http://www.isuw.in/public/uploads/ministries/Ministryof Heavy Industries.png" alt="Ministry of Commerce" style="width:219px; max-height:170px;" /></a></p></div> -->

<!--<div class="logo-div"><p><a href="https://www.meity.gov.in/"><img class="aligncenter  wp-image-38077" src="http://www.isuw.in/public/uploads/ministries/ministry of electronics.jpg" alt="Ministry of Commerce" style="width:219px; max-height:170px;" /></a></p></div>
<div class="logo-div"><a href="http://moef.gov.in/en/" target="_blank"><img  class="aligncenter" src="http://www.isuw.in/public/uploads/ministries/MOEFC SIZE.png" alt="Ministry of Commerce" width="219" height="158"></a></div>
<div class="logo-div"><p><a href="https://smartnet.niua.org/39-9cc9844b-1b5e-4ea6-9303-719caa5017d8"><img class="aligncenter" src="http://www.isuw.in/public/uploads/ministries/Smart-City (1).png" alt="Ministry of Commerce"/></a></div>
<div class="logo-div"><p><a href="https://mea.gov.in/index.htm" target="_blank"><img class="aligncenter  wp-image-38077" src="http://www.isuw.in/public/uploads/ministries/MEA.png" alt="Ministry of Power" width="219" max-height="158" /></a></p></div>
<div class="logo-div"><p><a href="http://mowr.gov.in/"><img class="aligncenter  wp-image-38077" src="http://www.isuw.in/public/uploads/ministries/minstry of jal shakti png.png" alt="Ministry of Commerce" /></a></div>
</div>   -->   
 <a class="btn btn-light-section" style="border: 2px solid #EF7B00;" href=" /supporting-ministries-2024">View All</a>               	     
<!--<div class="thematic">
				   <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>Conference Session Partners</h4>
                           </div>
                        </div>
<div class="logo-div"><a href="https://recindia.nic.in/" target="_blank" rel="noopener noreferrer"><img src="https://www.isuw.in/public/uploads/partner/recindia.png" alt="" width="200" style="display:inline; height:105px"></a></div>
 class="logo-div"><a href="https://www.energy.gov/" target="_blank"><img  class="aligncenter" src="https://isuw.in/public/uploads/partner/DOE-Seal.jpeg" alt="Ministry of Commerce" height="158"></a></div>
<div class="logo-div"><a href="https://ngsindia.org/" target="_blank"><img  class="aligncenter" src="https://www.isuw.in/public/uploads/partner/NGSLogo170.png" alt="Ministry of Commerce"></a></div>
<div class="logo-div"><a href=" https://collaboration.worldbank.org/content/sites/collaboration-for-development/en/groups/the-wepowernetwork.html" target="_blank" rel="noopener noreferrer"><img class="aligncenter size-full wp-image-5610" src="http://www.isuw.in/public/uploads/images/WePOWER Logo HR.jpg" alt="TIE"></a></div>
 <div class="logo-div"><a href="https://www.boeing.com/" target="_blank" rel="noopener noreferrer"><img class="aligncenter size-full wp-image-5610" src="http://www.isuw.in/public/uploads/images/Boeing_RGBblue_standard_142.png" alt="TIE"></a></div>
<div class="logo-div"><a href="https://www.usibc.com/" target="_blank"><img class="aligncenter" src="https://www.isuw.in/public/uploads/partner/usibc_logos_hires.png" alt="Ministry of Housing and Urban Government of India" height="80"></a></div>
<div class="logo-div"><a href="https://www.giz.de/en/html/index.html" target="_blank"><img class="aligncenter" src="https://www.isuw.in/public/uploads/partner/giz.jpg" alt="Ministry of Commerce"></a></div>
 <div class="logo-div"><a href="https://www.trade.gov/let-our-experts-help-0" target="_blank"><img class="aligncenter" src="https://www.isuw.in/public/uploads/partner/US COMMERCIAL SERVICES.jpg" alt="Ministry of Commerce"></a></div>

                  <a class="btn btn-light-section" style="border: 2px solid #EF7B00;" href=" /theme-and-session-partners-2024">View All</a>
              </div>
					  <div class="row justify-content-center mt-4">
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
                              <!--<a href="https://calendar.google.com/calendar/u/0/r?sf=true&msg=Could+not+find+the+requested+event.&msgtok=8c0c9622719986994bcfe33cae9e1a5e7e1430ae" target="_blank">-->
                              <!--<a href="https://calendar.google.com/calendar/event?action=TEMPLATE&tmeid=MmZmNzUxYWUxYmVvMjM0Y3QwZGU2MG5vZGcgYWdhcndhbGp5b3RpMjAxQG0&tmsrc=agarwaljyoti201%40gmail.com" target="_blank">     
                                -->
                              <!-- <a href="https://calendar.google.com/calendar/event?action=TEMPLATE&tmeid=MWJtbGVua3JpOHQwcHRzbmtraDMxNHU2bmxfMjAyNDAzMTJUMDQzMDAwWiBpc2dmc2didWxsZXRpbkBt&tmsrc=isgfsgbulletin%40gmail.com&scp=ALL" target="_blank">
                                       -->
                              <a href="https://calendar.google.com/calendar/event?action=TEMPLATE&tmeid=NHYzbjIyZG1qanU1aWprZGJoMDVhNjc5YzVfMjAyNjAzMTBUMDQzMDAwWiBkZXZhakBpbmRpYXNtYXJ0Z3JpZC5vcmc&tmsrc=devaj%40indiasmartgrid.org&scp=ALL" target="_blank">
                              
                                 <img src="images/spot01.png" class="logo-img " alt="...">
                                 <h3>Mark your 
                                    Calendar
                                 </h3>
                              </a>
                           </div>
                        </div>
                        <div class="col-lg-3">
                           <div class="spot-div">
                              <a href="https://www.isuw.in/partnership-opportunity-information" target="_blank">
                                 <img src="images/spot02.png" class="logo-img " alt="...">
                                 <h3>Participation 
                                    Opportunities
                                 </h3>
                              </a>
                           </div>
                        </div>
                        <div class="col-lg-3">
                           <div class="spot-div">
                              <a href="https://www.isuw.in/conference-agenda-and-program" target="_blank">
                                 <img src="images/spot03.png" class="logo-img " alt="...">
                                 <h3>ISUW <br/>
                                    Agenda
                                 </h3>
                              </a>
                           </div>
                        </div>
                        <div class="col-lg-3">
                           <div class="spot-div">
                              <a href="https://www.isuw.in/innovation-awards" target="_blank">
                                 <img src="images/spot04.png" class="logo-img " alt="..." style="height:47px;">
                                 <h3>Innovation 
                                    Awards
                                 </h3>
                              </a>
                           </div>
                        </div>
                     </div>
                     <h2 class="mt-4">Key Partners 2025
                     </h2>
                     <div class="row justify-content-center">
                        <!-- <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>Host Utility</h4>
                           </div>
                        </div>
                        
                        <div class="col-lg-5">
                           <div class="logo-div">
                              <a href="ttps://www.tatapower.com" target="_blank" rel="noopener noreferrer">
                                 <img src="https://www.isuw.in/public/uploads/utility/1641110147.png" alt="" style="display:inline; height:50px">
                              </a>
                           </div>   
                        </div> -->
                       
                        
                     </div>
                     <div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>Platinum Partners</h4>
                           </div>
                        </div>
                        <div class="col-lg-5">
                           <a href="https://www.gevernova.com/" target="_blank" rel="noopener noreferrer">
                              <div class="logo-div">
                                 <img src="https://www.isuw.in/public/uploads/partner/GE_Vernova_Standard_RGB_Evergreen.jpg" alt="" style="display:inline; height:50px">
                               </div>
                           </a>
                        </div>
                        <div class="col-lg-5">
                           <a href="https://www.impresa.ai/" target="_blank" rel="noopener noreferrer">
                              <div class="logo-div">
                                 <img src="images/2025/Impressa.png" alt="" style="display:inline; height:50px">
                               </div>
                           </a>
                        </div>
                     </div>

                     <div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>Session Partner </h4>
                           </div>
                        </div>
                        <div class="col-lg-5">
                           <div class="logo-div">
                              <a href="https://www.aspentech.com/en" target="_blank" rel="noopener noreferrer">
                                 <img src="images/2025/AspenTech.png" alt="" style="display:inline; height:50px">
                              </a>
                           </div>   
                        </div>
                        <!-- <div class="col-lg-5">
                           <div class="logo-div">
                              <a href="#" target="_blank" rel="noopener noreferrer">
                                 <img src="images/2025/BSCE.png" alt="" style="display:inline; height:50px">
                              </a>
                           </div>   
                        </div> -->
                        
                     </div>

                  <div class="row justify-content-center">
                  <div class="col-lg-12">
                  <div class="logo-title">
                  <h4>Silver Partners</h4>
                  </div>
                  </div>
                  <div class="col-lg-4">
                  <div class="logo-div">
                  <a href="https://lora-alliance.org/" target="_blank" rel="noopener noreferrer"><img src="images/2025/LoRaAlliance.png" ></a>
                  </div>
                  </div>
                  <div class="col-lg-4">
                  <div class="logo-div">
                  <a href="https://yitran.com/" target="_blank" rel="noopener noreferrer"><img src="https://www.isuw.in/public/uploads/partner/yitran-logo-PNG-250.png" alt="" width="213" height="115" style="display:inline;"></a>
                  </div>
                  </div>
                  </div>

                     <div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>Technology Partners</h4>
                           </div>
                        </div>
                        <div class="col-lg-5">
                           <a href="https://fluentgrid.com/" target="_blank" rel="noopener noreferrer">
                              <div class="logo-div">
                                 <img src="images/2025/Fluentgrid.png" alt="" style="display:inline; height:50px">
                               </div>
                           </a>
                        </div>
                        <div class="col-lg-5">
                           <a href="https://cyanconnode.com/" target="_blank" rel="noopener noreferrer">
                              <div class="logo-div">
                                 <img src="images/2025/cyanconnode.png" alt="" style="display:inline; height:50px">
                              </div>
                           </a>
                        </div>
                        <div class="col-lg-5">
                           <a href="https://radius.co.in/" target="_blank" rel="noopener noreferrer">
                              <div class="logo-div">
                                 <img src="images/2025/radius.png" alt="" style="display:inline; height:50px">
                              </div>
                           </a>
                        </div>
                     </div>

                     <div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>Country Partners</h4>
                           </div>
                        </div>
                        <div class="col-lg-5">
                           <a href="https://www.gov.uk/government/organisations/foreign-commonwealth-development-office" target="_blank" rel="noopener noreferrer">
                              <div class="logo-div">
                                 <img src="http://isuw.in/public/uploads/partner/UK-Gov.png" alt="" style="display:inline; height:50px">
                               </div>
                           </a>
                        </div>
                        <div class="col-lg-5">
                           <a href="https://www.trade.gov/india" target="_blank" rel="noopener noreferrer">
                              <div class="logo-div">
                                 <img src="images/2025/us-commercial.png" alt="" style="display:inline; height:50px">
                               </div>
                           </a>
                        </div>

                        <div class="col-lg-5"><div class="logo-div"><a href="https://www.smartgrid.com.br/eng" target="_blank" rel="noopener noreferrer"><img src="images/2025/LATAM.png" alt=""  height="102" style="display:inline;"></a></div></div>
                        <div class="col-lg-5"><div class="logo-div"><a href="https://www.indiabrazilchamber.org/home" target="_blank" rel="noopener noreferrer"><img src="images/2025/IBCoC.png" alt=""  height="102" style="display:inline;"></a></div></div>
                        <div class="col-lg-5"><div class="logo-div"><a href="#" target="_blank" rel="noopener noreferrer"><img src="images/2025/pjci.png" alt=""  height="102" style="display:inline;"></a></div></div>
                      
                     </div>

                     

                     <div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>Bronze Partners </h4>
                           </div>
                        </div>
                        <div class="col-lg-5">
                           <a href="https://edx.com/" target="_blank" rel="noopener noreferrer">
                              <div class="logo-div">
                                 <img src="images/2025/edxWireless.jpeg" alt="" style="display:inline; height:50px">
                               </div>
                           </a>
                        </div>
                        <div class="col-lg-5">
                           <a href="https://www.powerxchange.io/" target="_blank" rel="noopener noreferrer">
                              <div class="logo-div">
                                 <img src="images/2025/PowerXchange.jpeg" alt="" style="display:inline; height:50px">
                               </div>
                           </a>
                        </div>
                        <div class="col-lg-5">
                           <a href="https://www.ti.com/" target="_blank" rel="noopener noreferrer">
                              <div class="logo-div">
                                 <img src="images/2025/ti.png" alt="" style="display:inline; height:50px">
                               </div>
                           </a>
                        </div>
                        <div class="col-lg-5">
                           <a href="https://wi-sun.org/" target="_blank" rel="noopener noreferrer">
                              <div class="logo-div">
                                 <img src="images/2025/WiSun.png" alt="" style="display:inline; height:50px">
                               </div>
                           </a>
                        </div>
                        <div class="col-lg-5">
                           <a href="https://www.phoenixcontact.com/en-in/" target="_blank" rel="noopener noreferrer">
                              <div class="logo-div">
                                 <img src="images/2025/Phoenix.svg" alt="" style="display:inline; height:50px">
                               </div>
                           </a>
                        </div>
                        <div class="col-lg-5">
                           <a href="https://www.landisgyr.com/" target="_blank" rel="noopener noreferrer">
                              <div class="logo-div">
                                 <img src="images/2025/Landis.png" alt="" style="display:inline; height:50px">
                              </div>
                           </a>
                        </div>
                        <div class="col-lg-5">
                           <a href="https://export.business.gov.au/find-export-markets/market-explorer-tool/market-explorer-results/all/all/ind" target="_blank" rel="noopener noreferrer">
                              <div class="logo-div">
                                 <img src="images/2025/nationalbrand.png" alt="" style="display:inline; height:50px">
                              </div>
                           </a>
                        </div>
                        <div class="col-lg-5">
                           <a href="https://eppeltone.in/" target="_blank" rel="noopener noreferrer">
                              <div class="logo-div">
                                 <img src="images/2025/Eppeltone.png" alt="" style="display:inline; height:50px">
                              </div>
                           </a>
                        </div>
                        <div class="col-lg-5">
                           <a href="https://kimbal.io/" target="_blank" rel="noopener noreferrer">
                              <div class="logo-div">
                                 <img src="images/2025/Kimbal.jpeg" alt="" style="display:inline; height:50px">
                              </div>
                           </a>
                        </div>
                     </div>

                     
                        
                     <div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>Knowledge Partners </h4>
                           </div>
                        </div>
                        <div class="col-lg-5">
                           <a href="https://www.cdac.in/" target="_blank" rel="noopener noreferrer">
                              <div class="logo-div">
                                 <img src="images/2025/C-DAC.jpg" alt="" style="display:inline; height:50px">
                               </div>
                           </a>
                        </div>
                        <div class="col-lg-5">
                           <a href="https://ulse.org/" target="_blank" rel="noopener noreferrer">
                              <div class="logo-div">
                                 <img src="images/2025/ulse.png" alt="" style="display:inline; height:50px">
                               </div>
                           </a>
                        </div> 
                        <div class="col-lg-5">
                           <a href="https://www.iexindia.com/" target="_blank" rel="noopener noreferrer">
                              <div class="logo-div">
                                 <img src="images/2025/IEX.png" alt="" style="display:inline; height:50px">
                               </div>
                           </a>
                        </div>  
                        <div class="col-lg-5">
                           <a href="https://www.epri.com/" target="_blank" rel="attachment noopener wp-att-5807 noreferrer">
                              <div class="logo-div">
                                 <img class="aligncenter size-full wp-image-5807" style="" src="images/2025/EPRI.png" alt="Logo">
                              </div>
                           </a>
                        </div>
                     </div>   
                     
                     
                     <h2 class="mt-4">Supporting Organizations 2025
                     </h2>
                     <div class="row justify-content-center">
                        <div class="col-lg-4"><div class="logo-div"><a href="https://energyalliance.org/" target="_blank" rel="noopener noreferrer"><img class="alignleft size-medium wp-image-38056" src="images/2025/globalEnergy.png" alt="" width="300" height="104"></a></div></div>
                        <div class="col-lg-4"><div class="logo-div"><a href="http://globalsmartenergy.org/" target="_blank" rel="noopener noreferrer"><img class="alignleft size-medium wp-image-38056" src="images/2025/GSEF.png" alt="" width="300" height="104"></a></div></div>
                        <!-- <div class="col-lg-3"><div class="logo-div"><a href="https://aiaiindia.com/" target="_blank" rel="attachment noopener wp-att-5807 noreferrer"><img class="aligncenter size-full wp-image-5807" style="" src="https://www.isuw.in/public/uploads/organizations/allindia.jpg" alt="Logo" width="150" style="max-height: 130px"></a></div></div> -->
                        <div class="col-lg-4"><div class="logo-div"><a href="https://www.cbip.org/" target="_blank" rel="noopener noreferrer"><img class="alignleft size-medium wp-image-38051" style="" src="https://www.isuw.in/public/uploads/organizations/CBIP PNG.png" width="100" height="104"> </a></div></div>
                        <div class="col-lg-4"><div class="logo-div"><a href="https://apua-asea.org/en/" target="_blank" rel="attachment wp-att-5807 noopener noreferrer"><img class="aligncenter size-full wp-image-5807" src="https://www.isuw.in/public/uploads/organizations/LOGO APUA.jpg" alt="CEN" height="193"></a></div></div>
                        <div class="col-lg-4"><div class="logo-div"><a href="https://www.cigre.org/" target="_blank" rel="noopener noreferrer"><img class="alignleft size-medium wp-image-38056" src="https://www.isuw.in/public/uploads/organizations/cigre.jpg" alt="" ></a></div></div>
                        <!-- <div class="col-lg-3"><div class="logo-div"><a href="https://ngsindia.org/" target="_blank" rel="attachment wp-att-5807 noopener noreferrer"><img class="aligncenter size-full wp-image-5807" style="width: 55% !important;" src="https://www.isuw.in/public/uploads/organizations/NGSLogo.png" alt="CEN" height="193"></a></div></div> -->
                        <div class="col-lg-4"><div class="logo-div"><a href="https://www.indiacgd.in/" target="_blank" rel="noopener noreferrer"><img class="alignleft size-medium wp-image-38056" src="https://www.isuw.in/public/uploads/organizations/Indiacgd.jpeg" alt="" width="200" height="104"></a></div></div>
                        <div class="col-lg-4"><div class="logo-div"><a href="#" target="_blank" rel="noopener noreferrer"><img class="alignleft size-medium wp-image-38056" src="images/2026/AIDANew.png" alt="" width="300" height="104"></a></div></div>
                        <div class="col-lg-4"><div class="logo-div"><a href="https://www.boci.org.in/" target="_blank" rel="attachment noopener wp-att-5807 noreferrer"><img class="aligncenter size-full wp-image-5807" style="" src="images/2025/BOCI.jpg" alt="BOCI"></a></div></div>
                        <div class="col-lg-4"><div class="logo-div"><a href="https://www.busworld.org/" target="_blank" rel="attachment noopener wp-att-5807 noreferrer"><img class="aligncenter size-full wp-image-5807" style="" src="images/2025/LOGOBaseline.png" alt="Bus World"></a></div></div>
                        <div class="col-lg-4"><div class="logo-div"><a href="https://www.cencenelec.eu/" target="_blank" rel="noopener noreferrer"><img class="alignleft size-medium wp-image-38051" style="" src="https://www.isuw.in/public/uploads/exhibitor/cenelec.jpeg" width="120"> </a></div></div>
                        <div class="col-lg-4"><div class="logo-div"><a href="https://www.cencenelec.eu/" target="_blank" rel="noopener noreferrer"><img class="alignleft size-medium wp-image-38051" style="" src="https://www.isuw.in/public/uploads/exhibitor/cen.jpeg" width="170"> </a></div></div>
                        <div class="col-lg-4"><div class="logo-div"><a href="https://www.etsi.org/" target="_blank" rel="noopener noreferrer"><img class="alignleft size-medium wp-image-38056" src="https://www.isuw.in/public/uploads/organizations/ETSI.jpg" alt="" width="200"></a></div></div>
                        <div class="col-lg-4"><div class="logo-div"><a href="https://www.iea-isgan.org/" target="_blank" rel="attachment noopener wp-att-5807 noreferrer"><img class="aligncenter size-full wp-image-5807" style="" src="https://www.isuw.in/public/uploads/organizations/ISGAN.png" alt="Logo"></a></div></div>

                        <div class="col-lg-4"><div class="logo-div"><a href="https://sscgj.in/" target="_blank" rel="attachment noopener wp-att-5807 noreferrer"><img class="aligncenter size-full wp-image-5807" style="" src="https://sscgj.in/wp-content/themes/sscgj/images/scgj.gif" alt="Logo"/></a></div></div>
                        <div class="col-lg-4"><div class="logo-div"><a href="https://energyforum.in/" target="_blank" rel="attachment noopener wp-att-5807 noreferrer"><img class="aligncenter size-full wp-image-5807" style="" src="images/2025/IGEF.svg" alt="Logo"></a></div></div>
                        
		                  <div class="col-lg-4"><div class="logo-div"><a href="https://vjti.ac.in/" target="_blank" rel="attachment noopener wp-att-5807 noreferrer"><img class="aligncenter size-full wp-image-5807" style="" src="images/2025/VJTI.jpg" alt="Logo"></a></div></div>
                        <!-- <div class="col-lg-4">
                        <a href="https://energyalliance.org/" target="_blank">
                           <div class="logo-div">
                              <img src="/images/2025/GSEF.png" class="logo-img " style="display:inline; height:60px">
                           </div>
                        </a>
                     </div> -->

                        <!-- <div class="col-lg-4">
                           <a href="#" target="_blank">
                              <div class="logo-div"><img src="/images/2025/GSEF.png" class="logo-img " style="display:inline; height:60px">
                              </div>
                           </a>
                        </div>
                        <div class="col-lg-4">
                           <a href="https://energyforum.in/" target="_blank">
                              <div class="logo-div"><img src="/images/2025/IndiaCGD.jpeg" class="logo-img " style="display:inline; height:60px">
                              </div>
                           </a>
                        </div>
                        <div class="col-lg-4">
                           <a href="#" target="_blank">
                              <div class="logo-div"><img src="/images/2025/Igef.png" class="logo-img " style="display:inline; height:60px">
                              </div>
                           </a>
                        </div>
                        <div class="col-lg-4">
                           <a href="#" target="_blank">
                              <div class="logo-div"><img src="/images/2025/ETSI.jpg" class="logo-img " style="display:inline; height:60px">
                              </div>
                           </a>
                        </div>
                        <div class="col-lg-4">
                           <a href="#" target="_blank">
                              <div class="logo-div"><img src="/images/2025/APUA.jpg" class="logo-img " style="display:inline; height:60px">
                              </div>
                           </a>
                        </div>
                        <div class="col-lg-4">
                           <a href="#" target="_blank">
                              <div class="logo-div"><img src="/images/2025/BOCI.jpg" class="logo-img " style="display:inline; height:60px">
                              </div>
                           </a>
                        </div>
                        <div class="col-lg-4">
                           <a href="#" target="_blank">
                              <div class="logo-div"><img src="/images/2025/isgan.png" class="logo-img " style="display:inline; height:60px">
                              </div>
                           </a>
                        </div>
                        <div class="col-lg-4">
                           <a href="#" target="_blank">
                              <div class="logo-div"><img src="/images/2025/GEAPP.png" class="logo-img " style="display:inline; height:60px">
                              </div>
                           </a>
                        </div>
                        <div class="col-lg-4">
                           <a href="https://sscgj.in/" target="_blank">
                              <div class="logo-div"><img src="/images/2025/scgj.gif" class="logo-img " style="display:inline; height:60px">
                              </div>
                           </a>
                        </div>
                        <div class="col-lg-4">
                           <a href="#" target="_blank">
                              <div class="logo-div"><img src="/images/2025/cigre.png" class="logo-img " style="display:inline; height:60px">
                              </div>
                           </a>
                        </div> -->
                        
                        
                        
                     </div>
                        
                        
                          
                      
                        
                         
                        
                        
                          
                         



                     <!-- <h2 class="mt-4">Key Partners 2024
                     </h2>
                        <div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>Platinum Partners </h4>
                           </div>
                        </div>
                       <div class="col-lg-4">
                            <a href="https://www.sew.ai/" target="_blank"><div class="logo-div"><img src="/uploads/images/sew-water.png" class="logo-img " style="display:inline; height:60px"></div></a>
                        </div>
                         <div class="col-lg-4"><a href="https://www.gevernova.com/" target="_blank" rel="noopener noreferrer"><div class="logo-div"><img src="https://www.isuw.in/public/uploads/partner/GE_Vernova_Standard_RGB_Evergreen.jpg" alt="" style="display:inline; height:50px"></a></div></div>
 
                         <div class="col-lg-4">
                            <a href="https://www.lntecc.com/we-are/our-businesses/power-transmission-distribution/" target="_blank"><div class="logo-div"><img src="https://www.isuw.in/public/uploads/partner/LandT.png" class="logo-img " style="display:inline; height:60px; width:130px;" ></div></a>
                        </div>
                        </div>
                        <div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>Gold Partner </h4>
                           </div>
                        </div>
                         <div class="col-lg-4"><a href="https://www.larsentoubro.com/corporate/products-and-services/construction/power-transmission-distribution/" target="_blank" rel="noopener noreferrer"><div class="logo-div"><img src="http://isuw.in/public/uploads/exhibitor/lt.png" alt="" style="height:59px;"></div></a></div>
                        </div>
                        <div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>Welcome Reception Partner </h4>
                           </div>
                        </div>
                         <div class="col-lg-4"><div class="logo-div"><a href="https://www.hitachienergy.com/in/en" target="_blank" rel="noopener noreferrer"><img src="https://www.isuw.in/public/uploads/partner/HITACHI.PNG" alt=""></a></div></div>
                         </div>
                                                 <div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>Lanyard Partner </h4>
                           </div>
                        </div>
                          <div class="col-lg-4"><a href="https://trilliant.com/" target="_blank" rel="noopener noreferrer"><div class="logo-div"><img src="http://isuw.in/public/uploads/partner/trilliant.png" alt="" ></div></a></div>
                        </div>
                         <div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                              <h4> ISGF Innovation Awards Partner</h4>
                           </div>
                        </div>
                       <div class="col-lg-4">
                            <a href="https://www.nedo.go.jp/english/" target="_blank"><div class="logo-div"><img src="https://www.isuw.in/public/uploads/images/nedo-logo-2B306DA519-seeklogo.com.png" class="logo-img " style="display:inline; height:60px"></div></a>
                        </div>
                        </div>
                          
                      <div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                               <h4>Silver Partners</h4>
                           </div>
                        </div>
                        <div class="col-lg-4"><a href="https://www.g3-plc.com/" target="_blank"><div class="logo-div"><img src="/uploads/partner/1641569652.png" class="logo-img " style="height:59px;"></div></a></div>
                        <div class="col-lg-4"><a href="https://www.oracle.com/in/utilities/" target="_blank" rel="noopener noreferrer"><div class="logo-div"><img src="http://isuw.in/public/uploads/partner/Oracle_Energy-and-Water_rgb.png" alt="" style="height:55px;"></div></a></div>
                         <div class="col-lg-4"><a href="https://wi-sun.org/" target="_blank"><div class="logo-div"><img src="/uploads/partner/1641569692.png" class="logo-img "  style="height:59px;"></div></a></div>
                        <div class="col-lg-4"><a href="https://yitran.com/" target="_blank"><div class="logo-div"><img src="/public/uploads/partner/yitran-logo-PNG-250.png" class="logo-img "  style="height:59px;"></div></a></div>
                        </div>
                        
                         <div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                               <h4>Country Partners</h4>
                           </div>
                        </div>
                        <div class="col-lg-4"><a href="https://www.giz.de/en/worldwide/368.html" target="_blank" rel="noopener noreferrer"><div class="logo-div"><img src="http://isuw.in/public/uploads/exhibitor/giz.png" alt=""  height="102" style="display:inline;"></div></a></div>
                         <div class="col-lg-4"><a href="https://www.cecp-eu.in/" target="_blank" rel="noopener noreferrer"><div class="logo-div"><img src="http://isuw.in/public/uploads/partner/EU-FIRST.PNG" alt=""  height="102" style="display:inline;"></div></a></div>
                         <div class="col-lg-4"><a href="https://www.cecp-eu.in/" target="_blank" rel="noopener noreferrer"><div class="logo-div"><img src="http://isuw.in/public/uploads/partner/EU-SECOND.jpg" alt=""  height="102" style="display:inline;"></div></a></div>
                         <div class="col-lg-4"><a href="https://www.gov.uk/government/organisations/foreign-commonwealth-development-office" target="_blank" rel="noopener noreferrer"><div class="logo-div"><img src="http://isuw.in/public/uploads/partner/UK-Gov.png" alt=""  height="102" style="display:inline;"></div></a></div>
                          <div class="col-lg-4"><div class="logo-div"><a href="https://www.indiabrazilchamber.org/home" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/public/uploads/partner/I-B CoC.png" alt=""  height="102" style="display:inline;"></div></a></div>
                         <div class="col-lg-4"><div class="logo-div"><a href="https://www.smartgrid.com.br/" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/public/uploads/partner/LATAM.png" alt=""  height="90" style="display:inline;"></div></a></div>
                         <div class="col-lg-4"><div class="logo-div"><a href="https://sarepenergy.net/" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/public/uploads/partner/usaid.png" alt=""  height="102" style="display:inline;"></a></div></div>
                         
                          </div>
                          
                           <div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>Bronze Partners</h4>
                           </div>
                        </div>
                         <div class="col-lg-4"><div class="logo-div"><a href="https://www.itron.com/" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/public/uploads/partner/itron.png" alt="" style="height:55px;"></a></div></div>
                        <div class="col-lg-4"><a href="https://www.wirepas.com/" target="_blank" rel="noopener noreferrer"><div class="logo-div"><img src="http://isuw.in/public/uploads/partner/wirepas-new.png" alt="" style="height:55px;"></div></a></div>
                          <div class="col-lg-4"><a href="https://www.cuculus.com/" target="_blank" rel="noopener noreferrer"><div class="logo-div"><img src="http://isuw.in/public/uploads/exhibitor/1676736585.png" alt="" style="height:59px;"></div></a></div>
                          <div class="col-lg-4"><a href="https://www.tekuncorked.com/" target="_blank" rel="noopener noreferrer"><div class="logo-div"><img src="http://isuw.in/public/uploads/partner/Tekuncorked.jpg" alt=""></div></a></div>
                           <div class="col-lg-4"><div class="logo-div"><a href="https://www.auto-grid.com/" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/public/uploads/partner/autogrid.png" alt="" style="height:59px;"></a></div></div>
                         <div class="col-lg-4"><a href="https://www.trillectric.com/" target="_blank" rel="noopener noreferrer"><div class="logo-div"><img src="http://isuw.in/public/uploads/exhibitor/Trillectric.png" alt="" style="height:59px;"></div></a></div>
                         <div class="col-lg-4"><a href="https://kimbal.io/" target="_blank" rel="noopener noreferrer"><div class="logo-div"><img src="http://isuw.in/public/uploads/partner/Tagline logo.png" alt="" style="height:59px;"></div></a></div>

                          div class="col-lg-4"><a href="https://shyamindus.com/" target="_blank" rel="noopener noreferrer"><div class="logo-div"><img src="http://isuw.in/public/uploads/exhibitor/1677061891.png" alt="" style="height:42px;"></div></a></div>
                         <div class="col-lg-4"><a href="https://www.visiontek.co.in/" target="_blank" rel="noopener noreferrer"><div class="logo-div"><img src="http://isuw.in/public/uploads/partner/vision.png" alt="" style="height:42px;"></div></a></div>
                         <div class="col-lg-4"><a href="https://www.oracle.com/in/" target="_blank" rel="noopener noreferrer"><div class="logo-div"><img src="http://isuw.in/public/uploads/partner/Oracle_Energy-and-Water_rgb.png" alt="" style="height:55px;"></div></a></div>
                       <div class="col-lg-4"><a href="https://www.ey.com/en_in" target="_blank" rel="noopener noreferrer"><div class="logo-div"><img src="http://isuw.in/public/uploads/partner/EY-new.png" alt="" style="height:59px; width:105px;"></div></a></div>
                        
                        </div>
                        <div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>Knowledge Partner</h4>
                           </div>
                        </div>
                         <div class="col-lg-4"><div class="logo-div"><a href="https://ulse.org/" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/public/uploads/partner/UL Standards.png" alt="" style="height:55px;"></a></div></div>
                        </div>
                         <div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>ISGF Innovation Awards Knowledge Partner</h4>
                           </div>
                        </div>
                         <div class="col-lg-4"><div class="logo-div"><a href="https://www.gov.uk/government/organisations/foreign-commonwealth-development-office" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/public/uploads/partner/UK-Gov.png" alt=""></a></div></div>
                        </div> -->
                        
                        	
<!-- <div class="row justify-content-center">
    <div class="col-lg-12">
    <div class="logo-title">
        <h4>Session Partners</h4>
        </div>
        </div>
<div class="col-lg-4"><div class="logo-div"><a href="https://recindia.nic.in/" target="_blank" rel="noopener noreferrer"><img src="https://www.isuw.in/public/uploads/partner/recindia.png" alt="" width="200" style="display:inline; height:105px"></a></div></div>
<div class="col-lg-4"><div class="logo-div"><a href="https://www.uschamber.com/program/international-affairs/south-asia-program/us-india-business-council" target="_blank" rel="noopener noreferrer"><img src="https://www.isuw.in/public/uploads/partner/usp.png" alt="" width="200" style="display:inline; height:105px"></a></div></div>
<div class="col-lg-4"><div class="logo-div"><a href="https://www.cdac.in/" target="_blank" rel="noopener noreferrer"><img src="https://www.isuw.in/public/uploads/partner/CDAC.jpg" alt="" width="200" style="display:inline; height:105px"></a></div></div>
<div class="col-lg-4"><div class="logo-div"><a href="https://www.giz.de/en/html/index.html" target="_blank" rel="noopener noreferrer"><img src="https://www.isuw.in/public/uploads/exhibitor/giz.png" alt="TIE" width="200" style="display:inline; height:105px"></a></div></div>
<div class="col-lg-4"><div class="logo-div"><a href="https://www.iexindia.com/" target="_blank"><img class="aligncenter" src="https://isuw.in/public/uploads/partner/el.png" alt="Ministry of Power" width="150" height="158"></a></div></div>
<div class="col-lg-4"><div class="logo-div"><a href="https://www.cecp-eu.in/" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/public/uploads/partner/EU-FIRST.PNG" alt=""  height="102" style="display:inline;"></a></div></div>
<div class="col-lg-4"><a href="https://www.cecp-eu.in/" target="_blank" rel="noopener noreferrer"><div class="logo-div"><img src="http://isuw.in/public/uploads/partner/EU-SECOND.jpg" alt=""  height="102" style="display:inline;"></div></a></div>
<div class="col-lg-4"><div class="logo-div"><a href="https://sarepenergy.net/" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/public/uploads/partner/usaid.png" alt=""  height="102" style="display:inline;"></a></div></div>
<div class="col-lg-4"><div class="logo-div"><a href="https://www.assetplusconsulting.com/" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/public/uploads/partner/Asset Plus.png" alt=""   style="display:inline;"></a></div></div>
<div class="col-lg-4"><div class="logo-div"><a href="https://www.intellismartinfra.in/" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/public/uploads/partner/intellismart.PNG" alt=""   style="display:inline;"></a></div></div>
<div class="col-lg-4"><div class="logo-div"><a href="https://www.seci.co.in/" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/public/uploads/partner/download.png" alt=""   style="display:inline;"></a></div></div>
<div class="col-lg-4"><div class="logo-div"><a href="https://www.go15.org/" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/public/uploads/partner/GO15_LOGO-copie.png" alt=""   style="display:inline;"></a></div></div>
<div class="col-lg-4"><div class="logo-div"><a href="https://www.hitachienergy.com/in/en" target="_blank" rel="noopener noreferrer"><img src="https://www.isuw.in/public/uploads/partner/HITACHI.PNG" alt=""></a></div></div>
<div class="col-lg-4"><div class="logo-div"><a href="https://cercind.gov.in/" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/public/uploads/partner/cerc.PNG" alt=""   style="display:inline;"></a></div></div>
<div class="col-lg-4"><div class="logo-div"><a href="https://dst.gov.in/" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/public/uploads/partner/DST.png" alt=""   style="display:inline;"></a></div></div>
<div class="col-lg-4"><div class="logo-div"><a href="https://www.csis.org/" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/public/uploads/partner/csis.PNG" alt=""    style="display:inline;"></a></div></div>
<div class="col-lg-4"><a href="https://www.gov.uk/government/organisations/foreign-commonwealth-development-office" target="_blank" rel="noopener noreferrer"><div class="logo-div"><img src="http://isuw.in/public/uploads/partner/UK-Gov.png" alt=""  height="102" style="display:inline;"></div></a></div>
<div class="col-lg-4"><a href="https://cdri.world/" target="_blank" rel="noopener noreferrer"><div class="logo-div"><img src="http://isuw.in/public/uploads/partner/CDRI_Logo.jpg" alt=""  height="102" style="display:inline;"></div></a></div>
<div class="col-lg-4"><div class="logo-div"><a href="https://www.pfcindia.com/" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/public/uploads/partner/1200px-Power_Finance_Corporation_Logo.svg (1).png" alt=""  height="102" style="display:inline;"></a></div></div>
<div class="col-lg-4"><div class="logo-div"><a href="https://www.apuea.org/" target="_blank" rel="noopener noreferrer"><img class="alignleft size-medium wp-image-38056" src="https://www.isuw.in/public/uploads/exhibitor/e-notes_p5_apuea-logo_may17.png" alt="" ></a></div></div>
<div class="col-lg-4"><div class="logo-div"><a href="https://beeindia.gov.in/en" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/public/uploads/partner/bureo-new.png" alt=""   style="display:inline;"></a></div></div>
                                                  
</div> -->


                    <!-- <h2 class="mt-4">Key Partners 2023
                     </h2>
                                               <div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>Powered By</h4>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="logo-div"><a href="https://www.hitachienergy.com/in/en" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/public/uploads/partner/Combo%20logo_wo%20(1).png" alt=""  style="display:inline; height:60px"></a></div>
                        </div>
                        </div>
                        
                         <div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                              <h4> ISGF Innovation Awards Partner</h4>
                           </div>
                        </div>
                       <div class="col-lg-4">
                            <a href="https://www.nedo.go.jp/english/" target="_blank"><div class="logo-div"><img src="https://www.isuw.in/public/uploads/images/nedo-logo-2B306DA519-seeklogo.com.png" class="logo-img " style="display:inline; height:60px"></div></a>
                        </div>
                        </div>
                         
                          <div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>Cloud Partner</h4>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="logo-div"><a href="https://aws.amazon.com/" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/public/uploads/partner/aws.png" alt=""  style="display:inline;"></a></div>
                        </div>
                        </div>
                        
                         <div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>Gold Partner </h4>
                           </div>
                        </div>
                       <div class="col-lg-4">
                            <a href="https://en.kaifa.cn/index.aspx" target="_blank"><div class="logo-div"><img src="/public/uploads/partner/Kaifa logo.png" class="logo-img "></div></a>
                        </div>
                        </div>
                        
                         <div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>Knowledge Partner</h4>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="logo-div"><a href="https://www.gov.uk/government/organisations/foreign-commonwealth-development-office" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/public/uploads/partner/UK-Gov_STACK_CMYK_AW_2020.png" alt=""  style="display:inline;"></a></div>
                        </div>
                         <div class="col-lg-4">
                           <div class="logo-div"><a href=" https://www.nrel.gov/" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/public/uploads/partner/NREL LOGO.png" alt=""  style="display:inline;"></a></div>
                        </div>
                        </div>
                        
                         <div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>Welcome Reception Partner</h4>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="logo-div"><a href="https://www.jbmgroup.com/" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/public/uploads/partner/JBM Group logo.jpg" alt=""  style="display:inline;"></a></div>
                        </div>
                        </div>
                        
                       
                         <div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>Technology Partners</h4>
                           </div>
                        </div>
                        <div class="col-lg-4">
                             <a href="https://www.silabs.com/" target="_blank">
                        <div class="logo-div"><img src="/public/uploads/partner/silicon.png" class="logo-img " ></div>
                       </a>
                        </div>
                        <div class="col-lg-4"><a href="https://www.rti.org/" target="_blank" rel="noopener noreferrer"><div class="logo-div"><img src="https://www.isuw.in/public/uploads/partner/rti.jpg" alt=""></div></a></div>
<!--<div class="col-lg-4"><a href="https://fluentgrid.com/" target="_blank" rel="noopener noreferrer"><div class="logo-div"><img src="https://www.isuw.in/public/uploads/partner/FluentGrid.png" alt=""></div></a></div>
-->
                        <!--</div>-->
                       
                        <u></u>
                     <!--<h2 class="mt-4" style="color:green;">Key Partners 2022
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
                      <!--<div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>Powered by</h4>
                           </div>
                        </div>
                        <div class="col-lg-4">
                            <a href="https://aws.amazon.com/" target="_blank">
                        <div class="logo-div"><img src="http://www.isuw.in/beta/wp-content/uploads/2021/02/AWS_logo_RGB.png" class="logo-img " alt="{{$pimage->altText}}"></div>
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
                        <div class="logo-div"><img src="https://www.isuw.in/public/uploads/partner/Combo logo_wo (1).png" class="logo-img " alt="{{$pimage->altText}}"></div>
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
                            <a href="https://www.gridspertise.com/" target="_blank"><div class="logo-div"><img src="http://isuw.in/public/uploads/partner/Gridspertise_claim_flag_flat_color.jpg" class="logo-img " alt="{{$pimage->altText}}"></div></a>
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
                        </div>
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
                        <div class="logo-div"><img src="https://www.isuw.in/public/uploads/partner/nanostone.png" class="logo-img " alt="{{$pimage->altText}}"></div>
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
                        <div class="logo-div"><img src="http://isuw.in/public/uploads/partner/scheider.PNG" class="logo-img " alt="{{$pimage->altText}}" style="height:59px;"></div>
                       </a>
                        </div>
						 
                        </div>
						<div class="row justify-content-center">
                        <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>Country Partners</h4>
                           </div>
                        </div>
                        <div class="col-lg-4">
                            <a href="https://sweden.se/" target="_blank">
                        <div class="logo-div"><img src="/uploads/partner/1641570537.png" class="logo-img " alt="{{$pimage->altText}}" style="height:68px;"></div>
                       </a>
                        </div>
						 <div class="col-lg-4">
                            <a href="https://sweden.se/" target="_blank">
                        <div class="logo-div"><img src="/uploads/partner/1641571426.png" class="logo-img " alt="{{$pimage->altText}}"></div>
                       </a>
                        </div>
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
							 <!--<div class="col-lg-4">
                            <a href="#" target="_blank">
                        <div class="logo-div"><img src="https://isuw.in/uploads/countryflags/Germany.png" class="logo-img " alt="{{$pimage->altText}}"></div>
                       </a>
                        </div>
							 <div class="col-lg-4">
                            <a href="#" target="_blank">
                        <div class="logo-div"><img src="https://isuw.in/uploads/countryflags/USA.png" class="logo-img " alt="{{$pimage->altText}}"></div>
                       </a>
                        </div>
                        <div class="col-lg-4"><a href="https://www.giz.de/en/worldwide/368.html" target="_blank" rel="noopener noreferrer"><div class="logo-div"><img src="http://isuw.in/public/uploads/exhibitor/giz.png" alt=""  height="102" style="display:inline;"></div></a></div>

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
                        
                        <!-- we need to remove below section when supporting utilities 2022 needs to be remove-->
                        <div class="row justify-content-center">
                           <div class="col-lg-12">
                              <h2>Supporting   <br>
                              Utilities 2025</h2>
                           </div> 
                        </div>
                        <div class="col-lg-12">
                              <div class="logo-title">
                                 <h4>Host Utilities</h4>
                              </div>
                        </div>
                        <div class="row justify-content-center">
                           <div class="col-lg-12">
                              
                              <!-- <div class="logo-div"><a href="http://www.tatapower-ddl.com/" target="_blank" rel="noopener noreferrer"><img src="https://www.isuw.in/public/uploads/utility/1641110211.png" alt="" width="213" height="102"></a></div> -->
                              <div class="logo-div"><a href="https://www.bsesdelhi.com/web/bypl" target="_blank" rel="noreferrer"><img src="https://www.isuw.in/public/uploads/utility/1641110101.png" style="margin-top:-10px;"></a></div>
                              <div class="logo-div"><a href="https://www.bsesdelhi.com/web/brpl" target="_blank" rel="noreferrer"><img src="https://www.isuw.in/public/uploads/utility/1641110129.png" style="margin-top:-10px;"></a></div>
                              <div class="logo-div"><a href="https://www.tatapower.com/" target="_blank" rel="noopener noreferrer"><img src="https://www.isuw.in/public/uploads/utility/1641110147.png" style="margin-top:-10px;"></a></div>
                              <div class="col-lg-12">
                              
                              <div class="logo-div">
                                 <a href="https://www.noidapower.com/" target="_blank">
                                    <img src="images/2025/NPCL1.png" style="height: 120px;"/>
                                 </a>
                              </div>
                              
                        </div>
                           </div>
                     </div>

                     <!-- <div class="col-lg-12">
                              <div class="logo-title">
                                 <h4>Co-Host Utility</h4>
                              </div>
                        </div>
                        <div class="row justify-content-center">
                           
                        </div> -->

                    <!-- <div class="card-box utilities">
                        
                       
                        <div class="row justify-content-center">
                           <div class="col-lg-12">
                              <h2>Supporting   <br>
                              Utilities 2024</h2>
                           </div> 
                        </div>
                        <div class="col-lg-12">
                              <div class="logo-title">
                                 <h4>Host Utilities</h4>
                              </div>
                        </div>
                        <div class="row justify-content-center">
                           <div class="col-lg-12">
                              <div class="logo-div"><a href="https://www.tatapower.com/" target="_blank" rel="noopener noreferrer"><img src="https://www.isuw.in/public/uploads/utility/1641110147.png" style="margin-top:-10px;"></a></div>
                              <div class="logo-div"><a href="http://www.tatapower-ddl.com/" target="_blank" rel="noopener noreferrer"><img src="https://www.isuw.in/public/uploads/utility/1641110211.png" alt="" width="213" height="102"></a></div>
                              <div class="logo-div"><a href="https://www.bsesdelhi.com/web/bypl" target="_blank" rel="noreferrer"><img src="https://www.isuw.in/public/uploads/utility/1641110101.png" style="margin-top:-10px;"></a></div>
                              <div class="logo-div"><a href="https://www.bsesdelhi.com/web/brpl" target="_blank" rel="noreferrer"><img src="https://www.isuw.in/public/uploads/utility/1641110129.png" style="margin-top:-10px;"></a></div>

                        </div>
                     </div>
 <div class="col-lg-12">
                           <div class="logo-title">
                              <h4>Co-Host Utility</h4>
                           </div>
                        </div>
                         <div class="row justify-content-center">
						  <div class="col-lg-12">
                <div class="logo-div"><a href="https://uppcl.org/uppcl/hi/" target="_blank" rel="noopener noreferrer"><img src="https://www.isuw.in/public/uploads/utility/UPPCL.png" alt="" /> </a></div>
                <div class="logo-div"><a href="https://www.cesc.co.in/homeener noreferrer"><img src="https://www.isuw.in/public/uploads/partner/CESC.jpg" style="margin-top:-10px;"></a></div>
               
</div>
</div> -->
<div class="thematic">
				   <div class="col-lg-12">
               <h4>Conference Session Partners</h4>
               <div class="col-lg-12"><div class="logo-div"><a href="https://www.aspentech.com/en" target="_blank" rel="noopener noreferrer"><img src="images/2025/AspenTech.png" alt=""  height="102" style="display:inline;"></div></a></div>
               <div class="col-lg-12"><div class="logo-div"><a href="#" target="_blank" rel="noopener noreferrer"><img src="images/2025/BSCE.png" alt=""  height="102" style="display:inline;"></div></a></div>

               <div class="col-lg-12"><div class="logo-div"><a href="https://www.ideasmattermost.com/" target="_blank" rel="noopener noreferrer"><img class="aligncenter size-full wp-image-5610" src="images/2025/Ideasmatter.png" alt="TIE"></a></div></div>
               <div class="col-lg-12"><div class="logo-div"><a href="https://www.iec.ch/homepage" target="_blank" rel="noopener noreferrer"><img class="aligncenter size-full wp-image-5610" src="images/2025/IEC.png" alt="TIE"></a></div></div>
               <div class="col-lg-12"><div class="logo-div"><a href="https://www.ieee.org/" target="_blank" rel="noopener noreferrer"><img class="aligncenter size-full wp-image-5610" src="images/2025/IEEE.png" alt="TIE"></a></div></div>
               <div class="col-lg-12"><div class="logo-div"><a href="https://apua-asea.org/en/" target="_blank" rel="noopener noreferrer"><img class="aligncenter size-full wp-image-5610" src="images/2025/APUA.jpg" alt="TIE"></a></div></div>
               <div class="col-lg-12"><div class="logo-div"><a href="https://openchargealliance.org/" target="_blank" rel="noopener noreferrer"><img class="aligncenter size-full wp-image-5610" src="images/2025/OpenChargeAlliance.jpg" alt="TIE"></a></div></div>
               <div class="col-lg-12"><div class="logo-div"><a href="https://www.trade.gov/us-commercial-service" target="_blank" rel="noopener noreferrer"><img class="aligncenter size-full wp-image-5610" src="images/2025/UScommercial.png" alt="TIE"></a></div></div>
               <div class="col-lg-12"><div class="logo-div"><a href="https://ulse.org/" target="_blank" rel="noopener noreferrer"><img class="aligncenter size-full wp-image-5610" src="images/2025/ulstandengage.svg" alt="TIE"></a></div></div>
               <div class="col-lg-12"><div class="logo-div"><a href="https://aida-india.org/" target="_blank" rel="noopener noreferrer"><img class="aligncenter size-full wp-image-5610" src="images/2025/AIDA.png" alt="TIE"></a></div></div>
               <div class="col-lg-12"><div class="logo-div"><a href="https://www.bis.gov.in/" target="_blank" rel="noopener noreferrer"><img class="aligncenter size-full wp-image-5610" src="images/2025/BIS.jpg" alt="TIE"></a></div></div>

               
                          <!-- <div class="logo-title">
                              <h4>Conference Session Partners</h4>
                           </div>
<div class="logo-div"><a href="https://www.giz.de/en/html/index.html" target="_blank" rel="noopener noreferrer"><img class="aligncenter size-full wp-image-5610" src="https://www.isuw.in/public/uploads/exhibitor/giz.png" alt="TIE"></a></div>
<div class="logo-div"><a href="https://www.iexindia.com/" target="_blank"><img class="aligncenter" src="https://isuw.in/public/uploads/partner/el.png" alt="Ministry of Power" width="150"></a></div>
<div class="logo-div"><a href="https://www.cecp-eu.in/" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/public/uploads/partner/EU-FIRST.PNG" alt="" style="display:inline;"></a></div>
<div class="logo-div"><a href="https://www.cecp-eu.in/" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/public/uploads/partner/EU-SECOND.jpg" alt="" style="display:inline;"></a></div>
<div class="logo-div"><a href="https://www.cdac.in/" target="_blank" rel="noopener noreferrer"><img src="https://www.isuw.in/public/uploads/partner/CDAC.jpg" alt="" width="200" style="display:inline;"></a></div>
<div class="logo-div"><a href="https://recindia.nic.in/" target="_blank" rel="noopener noreferrer"><img src="https://www.isuw.in/public/uploads/partner/recindia.png" alt="" width="200" style="display:inline;"></a></div>
<div class="logo-div"><a href="https://sarepenergy.net/" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/public/uploads/partner/usaid.png" alt="" style="display:inline;"></a></div>
<div class="logo-div"><a href="https://www.intellismartinfra.in/" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/public/uploads/partner/intellismart.PNG" alt="" style="display:inline;"></a></div>
<div class="logo-div"><a href="https://www.seci.co.in/" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/public/uploads/partner/download.png" alt=""   style="display:inline;"></a></div>
<div class="logo-div"><a href="https://beeindia.gov.in/en" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/public/uploads/partner/bureo-new.png" alt=""   style="display:inline;"></a></div>
<div class="logo-div"><a href="https://www.go15.org/" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/public/uploads/partner/GO15_LOGO-copie.png" alt=""   style="display:inline;"></a></div>
<div class="logo-div"><a href="https://www.hitachienergy.com/in/en" target="_blank" rel="noopener noreferrer"><img src="https://www.isuw.in/public/uploads/partner/HITACHI.PNG" alt=""></a></div>
<div class="logo-div"><a href="https://cercind.gov.in/" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/public/uploads/partner/cerc.PNG" alt=""   style="display:inline;"></a></div>
<div class="logo-div"><a href="https://cdri.world/" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/public/uploads/partner/CDRI_Logo.jpg" alt=""  height="102" style="display:inline;"></a></div>
<div class="logo-div"><a href="https://www.apuea.org/" target="_blank" rel="noopener noreferrer"><img class="alignleft size-medium wp-image-38056" src="https://www.isuw.in/public/uploads/exhibitor/e-notes_p5_apuea-logo_may17.png" alt="" ></a></div>
<div class="logo-div"><a href="https://www.gov.uk/government/organisations/foreign-commonwealth-development-office" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/public/uploads/partner/UK-Gov.png" alt=""  height="102" style="display:inline;"></a></div> -->


<!-- till this line   -->

                    <!-- <div class="row justify-content-center">
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
				      <a class="btn btn-light-section" style="border: 2px solid #EF7B00;margin-bottom: -31px;" href="/participating-utilies">View All</a>	  -->
					   <a class="btn btn-light-section" style="border: 2px solid #EF7B00;margin-bottom: -31px;" href="/theme-and-session-partners-2025">View All</a>
             
                  </div>
                 
            </div>
             
         </div>
      </section>
      <section class="page-section isuw-speark">
         <div class="container">
            <div class="section-title pb-0">
               <h2 class="" style="background-color:lightgray;">ISUW 2025 Speakers</h2>
			     <div class="col-lg-12 mb-4 text-end">
                  <a class="btn btn-light" style="
    margin-top: -25px;
" href="/speakers" target="_blank">View All</a>
               </div>
            </div>
            <div class="row justify-content-center ">
               <div class="col-lg-12 responsive">
               @foreach ($speakersr24 as $speaker24)
                   @if ($speaker24->isActive==1)
                  <div class="sprk-box">
                     <img src="{{$speaker24->imageUrl}}" class="img-fluid " alt="...">
                     <h5>{{$speaker24->name}}</h5>
                     <p>{{$speaker24->company}}</p>
                     <p><a href="speaker24/{{$speaker24->id}}" class="text-warning">Read bio...</a></p>
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
         <h2>ISUW 2025 Exhibitors</h2>
      </div>
      <div class="row justify-content-center ">
      <div class="col-lg-3"><a href="https://sunnetsoftware.com/contact-us/" target="_blank" rel="noopener noreferrer"><div class="logo-div"><img src="images/2025/sunnet.png" alt="" style="display:inline; height:59px"></a></div></div>
      <div class="col-lg-3"><a href="https://www.gevernova.com/" target="_blank" rel="noopener noreferrer"><div class="logo-div"><img src="https://www.isuw.in/public/uploads/partner/GE_Vernova_Standard_RGB_Evergreen.jpg" alt="" style="display:inline; height:59px"></a></div></div>
      <div class="col-lg-3"><a href="https://edx.com/" target="_blank" rel="noopener noreferrer"><div class="logo-div"><img src="images/2025/edxWireless.jpeg" alt="" style="display:inline; height:59px"></a></div></div>
      <div class="col-lg-3"><div class="logo-div"><a href="https://indiasmartgrid.org/" target="_blank" rel="noopener noreferrer"><img  src="images/2025/ISGF.jpg" alt="" width="213" height="102"></a></div></div>
      <!-- <div class="col-lg-3"><div class="logo-div"><a href="https://www.landisgyr.com/" target="_blank" rel="noopener noreferrer"><img  src="images/2025/Landis.png" alt="" width="213" height="102"></a></div></div> -->
      <!-- <div class="col-lg-3"><div class="logo-div"><a href="https://g3-alliance.com/" target="_blank" rel="noopener noreferrer"><img src="https://www.isuw.in/uploads/partner/1641569652.png" ></a></div></div> -->
      <div class="col-lg-3"><div class="logo-div"> <a href="https://yitran.com/" target="_blank" rel="noopener noreferrer"><img src="https://www.isuw.in/public/uploads/partner/yitran-logo-PNG-250.png" alt="" width="213" height="115" style="display:inline;"></a>  </div></div>
      <div class="col-lg-3"><div class="logo-div"><a href="https://www.aspentech.com/en" target="_blank" rel="noopener noreferrer"><img src="images/2025/AspenTech.png" alt="" style="display:inline; height:50px"></a></div></div>
      <div class="col-lg-3"><div class="logo-div"><a href="https://fluentgrid.com/" target="_blank" rel="noopener noreferrer"><img src="images/2025/Fluentgrid.png" alt="" style="display:inline; height:50px"></a></div></div>
      <div class="col-lg-3"><div class="logo-div"><a href="https://wi-sun.org/" target="_blank" rel="noopener noreferrer"><img src="http://isuw.in/uploads/partner/1641569692.png" alt=""  height="102" style="display:inline;"></a></div></div>
      <div class="col-lg-3"><div class="logo-div"><a href="https://www.cdac.in/" target="_blank" rel="noopener noreferrer"><img src="images/2025/C-DAC.jpg" alt="" width="200" style="display:inline; height:105px"></a></div></div>
      <div class="col-lg-3"><div class="logo-div"><a href="https://www.exicom.in/" target="_blank" rel="noopener noreferrer"><img src="images/2025/exicom.png" alt="" width="200" style="display:inline; height:105px"></a></div></div>
      <div class="col-lg-3"><a href="https://www.tauruspowertronics.com/" target="_blank" rel="noopener noreferrer"><div class="logo-div"><img src="http://isuw.in/public/uploads/partner/TAURUS LOGO (1).jpg" alt=""></div></a></div>
      <div class="col-lg-3"><div class="logo-div"><a href="https://www.phoenixcontact.com/en-in/" target="_blank" rel="noopener noreferrer"><img src="https://www.isuw.in/public/uploads/partner/Phoenix Contact.jpg" alt="" width="160" height="115" style="display:inline;"></a></div></div>
      <div class="col-lg-3"><div class="logo-div"><a href="https://www.impresa.ai/" target="_blank" rel="noopener noreferrer"><img src="images/2025/Impressa.png" alt="" width="160" height="115" style="display:inline;"></a></div></div>
      <div class="col-lg-3"><div class="logo-div"><a href="https://lora-alliance.org/" target="_blank" rel="noopener noreferrer"><img src="images/2025/LoRaAlliance.png" alt="" width="160" height="115" style="display:inline;"></a></div></div>
      <div class="col-lg-3"><div class="logo-div"><a href="https://www.powerxchange.io/" target="_blank" rel="noopener noreferrer"><img src="images/2025/PowerXchange.jpeg" alt="" width="160" height="115" style="display:inline;"></a></div></div>
      <div class="col-lg-3"><div class="logo-div"><a href="https://www.austrade.gov.au/" target="_blank" rel="noopener noreferrer"><img src="images/2025/Austrade.jpeg" alt="" width="160" height="115" style="display:inline;"></a></div></div>
      <div class="col-lg-3"><div class="logo-div"><a href="https://eppeltone.in/" target="_blank" rel="noopener noreferrer"><img src="images/2025/Eppeltone.png" alt="" width="160" height="115" style="display:inline;"></a></div></div>
      <div class="col-lg-3"><div class="logo-div"><a href="https://cyanconnode.com/" target="_blank" rel="noopener noreferrer"><img src="images/2025/logo_cyanconnode.png" alt="" width="160" height="115" style="display:inline;"></a></div></div>
      <div class="col-lg-3"><div class="logo-div"><a href="https://radius.co.in/" target="_blank" rel="noopener noreferrer"><img src="https://radius.co.in/wp-content/uploads/2023/07/radius_logo.png" alt="" width="160" height="115" style="display:inline;"></a></div></div>
      <div class="col-lg-3"><div class="logo-div"><a href="https://www.noidapower.com/" target="_blank" rel="noopener noreferrer"><img src="images/2025/NPCL.png" alt="" width="160" height="115" style="display:inline;"></a></div></div>

      </div>
   </div>
</section>      
     
<section class="page-section isuw-exhibitors">
   <div class="container">
      <div class="section-title">
         <h2>ISUW 2025 Participating Utilities</h2>
      </div>
      <div class="row justify-content-center ">

      <div class="col-lg-3"><div class="logo-div"><a href="https://www.bsesdelhi.com/web/bypl#loaded" target="_blank" rel="noopener noreferrer"><img style="margin: 0 auto; height: 44px; margin-top: 27px;" src="https://www.isuw.in/public/uploads/utility/1641110101.png" alt=""></a></div></div>
      <div class="col-lg-3"><div class="logo-div"><a href="https://www.bsesdelhi.com/web/brpl" target="_blank" rel="noopener noreferrer"><img style="margin: 0 auto; height: 50px; width: 151px; margin-top: 23px;" src="https://www.isuw.in/public/uploads/utility/1641110129.png" alt=""></a></div></div>
      <div class="col-lg-3"><div class="logo-div"><a href="http://www.tatapower-ddl.com/" target="_blank" rel="noopener noreferrer"><img src="https://www.isuw.in/public/uploads/utility/1641110211.png" alt=""  height="102"></a></div></div>
      <div class="col-lg-3"><div class="logo-div"><a href="https://www.tatapower.com/" target="_blank" rel="noopener noreferrer"><img src="https://www.isuw.in/public/uploads/utility/1641110147.png" style="margin-top:-10px;" ></a></div></div>
      <!-- <div class="col-lg-3"><div class="logo-div"><a href="https://www.pgvcl.com/" target="_blank" rel="noopener noreferrer"><img src="" style="margin-top:-10px;" ></a></div></div>
      <div class="col-lg-3"><div class="logo-div"><a href="https://www.mgvcl.com/" target="_blank" rel="noopener noreferrer"><img class="alignleft size-medium wp-image-38051"  src="" alt="" height="125" /> </a></div></div> -->
      <div class="col-lg-3">
         <div class="logo-div">
            <a href="https://www.mgvcl.com/" target="_blank" rel="noopener noreferrer">
               <img class="alignleft size-medium wp-image-38051"  src="images/2025/MGVCL.png" alt="" height="125" /> 
            </a>
         </div>
      </div>

      <div class="col-lg-3">
         <div class="logo-div">
            <a href="https://www.tpwesternodisha.com/" target="_blank" rel="noopener noreferrer">
               <img class="alignleft size-medium wp-image-38051"  src="images/2025/TPCODL.png" alt="" height="125" /> 
            </a>
         </div>
      </div>

      <div class="col-lg-3">
         <div class="logo-div">
            <a href="https://www.tpnodl.com/" target="_blank" rel="noopener noreferrer">
               <img class="alignleft size-medium wp-image-38051"  src="images/2025/TPNODL.png" alt="" height="125" /> 
            </a>
         </div>
      </div>

      <!-- <div class="col-lg-3">
         <div class="logo-div">
            <a href="https://www.mahadiscom.in/en/home/" target="_blank" rel="noopener noreferrer">
               <img class="alignleft size-medium wp-image-38051"  src="" alt="" height="125" /> 
            </a>
         </div>
      </div> -->

      <div class="col-lg-3">
         <div class="logo-div">
            <a href="https://www.powergrid.in/en" target="_blank" rel="noopener noreferrer">
               <img class="alignleft size-medium wp-image-38051"  src="images/2025/Powergrid.png" alt="" height="125" /> 
            </a>
         </div>
      </div>

      <div class="col-lg-3">
         <div class="logo-div">
            <a href="https://www.noidapower.com/Home" target="_blank" rel="noopener noreferrer">
               <img class="alignleft size-medium wp-image-38051"  src="images/2025/NPCL.png" alt="" height="125" /> 
            </a>
         </div>
      </div>

      <div class="col-lg-3">
         <div class="logo-div">
            <a href="https://uppcl.org/uppcl/en" target="_blank" rel="noopener noreferrer">
               <img class="alignleft size-medium wp-image-38051"  src="images/2025/UPPCL.png" alt="" height="125" /> 
            </a>
         </div>
      </div>

      <div class="col-lg-3">
         <div class="logo-div">
            <a href="https://www.guvnl.com/" target="_blank" rel="noopener noreferrer">
               <img class="alignleft size-medium wp-image-38051"  src="images/2025/GUVNL.png" alt="" height="125" /> 
            </a>
         </div>
      </div>


      <div class="col-lg-3">
         <div class="logo-div">
            <a href="https://dgvcl.com/" target="_blank" rel="noopener noreferrer">
               <img class="alignleft size-medium wp-image-38051"  src="images/2025/DGVCL.png" alt="" height="125" /> 
            </a>
         </div>
      </div>

      <div class="col-lg-3">
         <div class="logo-div">
            <a href="https://www.uhbvn.org.in/web/portal/home" target="_blank" rel="noopener noreferrer">
               <img class="alignleft size-medium wp-image-38051"  src="images/2025/UHBVN.png" alt="" height="125" /> 
            </a>
         </div>
      </div>
      <div class="col-lg-3">
         <div class="logo-div">
            <a href="https://www.dhbvn.org.in/web/portal/home" target="_blank" rel="noopener noreferrer">
               <img class="alignleft size-medium wp-image-38051"  src="images/2025/DHBVN.jpg" alt="" height="125" /> 
            </a>
         </div>
      </div>

      <div class="col-lg-3">
         <div class="logo-div">
            <a href="https://kseb.in/ksebhome" target="_blank" rel="noopener noreferrer">
               <img class="alignleft size-medium wp-image-38051"  src="images/2025/KSEB.png" alt="" height="125" /> 
            </a>
         </div>
      </div>

      <!-- <div class="col-lg-3">
         <div class="logo-div">
            <a href="https://www.mpwz.co.in/#/home" target="_blank" rel="noopener noreferrer">
               <img class="alignleft size-medium wp-image-38051"  src="" alt="" height="125" /> 
            </a>
         </div>
      </div> -->



      <div class="col-lg-3">
         <div class="logo-div">
            <a href="https://www.tpsouthernodisha.com/" target="_blank" rel="noopener noreferrer">
               <img class="alignleft size-medium wp-image-38051"  src="images/2025/TPSODL.png" alt="" height="125" /> 
            </a>
         </div>
      </div>

      <div class="col-lg-3">
         <div class="logo-div">
            <a href="https://tgnpdcl.com/" target="_blank" rel="noopener noreferrer">
               <img class="alignleft size-medium wp-image-38051"  src="images/2025/TGNPDCLTelangana.png" alt="" height="125" /> 
            </a>
         </div>
      </div>

      <div class="col-lg-3">
         <div class="logo-div">
            <a href="https://tsecl.in/" target="_blank" rel="noopener noreferrer">
               <img class="alignleft size-medium wp-image-38051"  src="images/2025/Tripura(TSECL).jpg" alt="" height="125" /> 
            </a>
         </div>
      </div>

      <div class="col-lg-3">
         <div class="logo-div">
            <a href="https://www.pvvnl.org/" target="_blank" rel="noopener noreferrer">
               <img class="alignleft size-medium wp-image-38051"  src="images/2025/PVVNL-Logo.png" alt="" height="125" /> 
            </a>
         </div>
      </div>

      <div class="col-lg-3">
         <div class="logo-div">
            <a href="https://www.cesc.co.in/" target="_blank" rel="noopener noreferrer">
               <img class="alignleft size-medium wp-image-38051"  src="images/2025/CESC_Logo.png" alt="" height="125" /> 
            </a>
         </div>
      </div>

      <div class="col-lg-3">
         <div class="logo-div">
            <a href="https://www.mpwz.co.in/#/home" target="_blank" rel="noopener noreferrer">
               <img class="alignleft size-medium wp-image-38051"  src="images/2025/MPPKVVCL.png" alt="" height="125" /> 
            </a>
         </div>
      </div>

      <div class="col-lg-3">
         <div class="logo-div">
            <a href="https://www.mahadiscom.in/en/home/" target="_blank" rel="noopener noreferrer">
               <img class="alignleft size-medium wp-image-38051"  src="images/2025/MSEDCL.png" alt="" height="125" /> 
            </a>
         </div>
      </div>

      <div class="col-lg-3">
         <div class="logo-div">
            <a href="https://www.pgvcl.com/" target="_blank" rel="noopener noreferrer">
               <img class="alignleft size-medium wp-image-38051"  src="images/2025/PGVCL.jpg" alt="" height="125" /> 
            </a>
         </div>
      </div>

      <div class="col-lg-3">
         <div class="logo-div">
            <a href="https://www.tpwesternodisha.com/" target="_blank" rel="noopener noreferrer">
               <img class="alignleft size-medium wp-image-38051"  src="images/2025/TPWODL.png" alt="" height="125" /> 
            </a>
         </div>
      </div>

      <div class="col-lg-3">
         <div class="logo-div">
            <a href="https://www.apspdcl.in/index.jsp" target="_blank" rel="noopener noreferrer">
               <img class="alignleft size-medium wp-image-38051"  src="images/2025/APSPDCL.png" alt="" height="125" /> 
            </a>
         </div>
      </div>

      <div class="col-lg-3">
         <div class="logo-div">
            <a href="https://posoco.in/en/" target="_blank" rel="noopener noreferrer">
               <img class="alignleft size-medium wp-image-38051"  src="images/2025/Grid-India.png" alt="" height="125" /> 
            </a>
         </div>
      </div>

      <!-- <div class="col-lg-2">
         <div class="logo-div">
            <a href="#" target="_blank"><img src="images/2025/TataPower.png" style="height: 120px;"></a>
         </div>
      </div>
      <div class="col-lg-2">
         <div class="logo-div">
            <a href="#" target="_blank"><img src="images/2025/Powergrid.png" style="height: 120px;"></a>
         </div>
      </div>
      <div class="col-lg-2">
         <div class="logo-div">
            <a href="#" target="_blank"><img src="images/2025/MGVCL.png" style="height: 120px;"></a>
         </div>
      </div>
      <div class="col-lg-2">
         <div class="logo-div">
            <a href="#" target="_blank"><img src="images/2025/UPPCL.png" style="height: 120px;"></a>
         </div>
      </div>
      <div class="col-lg-2">
         <div class="logo-div">
            <a href="#" target="_blank"><img src="images/2025/TPWODL.png" style="height: 120px;"></a>
         </div>
      </div>
      <div class="col-lg-2">
         <div class="logo-div">
            <a href="#" target="_blank"><img src="images/2025/BSESYamuna.png" style="height: 120px;"></a>
         </div>
      </div>
      <div class="col-lg-2">
         <div class="logo-div">
            <a href="#" target="_blank"><img src="images/2025/NPCL1.png" style="height: 120px;"></a>
         </div>
      </div>
      <div class="col-lg-2">
         <div class="logo-div">
            <a href="#" target="_blank"><img src="images/2025/TPNODL.png" style="height: 120px;"></a>
         </div>
      </div>
      <div class="col-lg-2">
         <div class="logo-div">
            <a href="#" target="_blank"><img src="images/2025/MSEDCL.png" style="height: 120px;"></a>
         </div>
      </div>
      <div class="col-lg-2">
         <div class="logo-div">
            <a href="#" target="_blank"><img src="images/2025/BRPL.png" style="height: 120px;"></a>
         </div>
      </div>
      <div class="col-lg-2">
         <div class="logo-div">
            <a href="#" target="_blank"><img src="images/2025/GUVNL.png" style="height: 120px;"></a>
         </div>
      </div>
      <div class="col-lg-2">
         <div class="logo-div">
            <a href="#" target="_blank"><img src="images/2025/PG.jpg" style="height: 120px;"></a>
         </div>
      </div>
      <div class="col-lg-2">
         <div class="logo-div">
            <a href="#" target="_blank"><img src="images/2025/TataDDL.png" style="height: 120px;"></a>
         </div>
      </div>
      <div class="col-lg-2">
         <div class="logo-div">
            <a href="#" target="_blank"><img src="images/2025/NPCL.png" style="height: 120px;"></a>
         </div>
      </div> -->
      
         
      </div>
   </div>
</section>
      
     <!-- <section class="page-section isuw-exhibitors">
         <div class="container">
            <div class="section-title">
               <h2>ISUW 2023 Exhibitors</h2>
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
      </section>-->
            <section class="page-section isuw-testimonies">
         <div class="container">
            <div class="section-title">
               <h2 class="" style="background-color:#4EBC3C;">ISUW TESTIMONIES</h2>
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
	<h3 class="article__header__title"> 11 </h3>
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
	<h3 class="article__header__title"> 20978 </h3>
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
	<h3 class="article__header__title"> 2926 </h3>
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
	<h3 class="article__header__title"> 420 </h3>
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
	<h3 class="article__header__title"> 77 </h3>
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
	<h3 class="article__header__title"> 747 </h3>
	<div class="article__body">
       Technical Papers Recognition
     </div>
				</div>
               </div>
			    <div class="col-lg-1">
                <div class="article--stats">
				<div class="article__icon"> 
				<img src="images/recognition.png" alt="recognition">
    </div>
	<h3 class="article__header__title"> 373 </h3>
	<div class="article__body">
        Recognitions with ISGF Innovation Awards
     </div>
				</div>
               </div>
               
            </div>
         </div>
      </section>
	 	  
	
      <section class="page-section isuw-countdown">
         <div class="container">
            <div class="section-title">
               <h2 class="text-black">ISUW 2026 Countdown</h2>
            </div>
	<!--	<div class="elementor-widget-container">
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
            <div id="timer">
               
         </div>
      </section>
      @endsection