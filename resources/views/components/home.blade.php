@extends('master')

@section('content')

<style>
.partners-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-bottom: 40px;
}

.partners-grid.grid-2 {
    grid-template-columns: repeat(2, 1fr);
}

.partners-grid.grid-3 {
    grid-template-columns: repeat(3, 1fr);
}

.partners-grid.grid-4 {
    grid-template-columns: repeat(4, 1fr);
}

.logo-card {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 160px;
    background: #fff;
    border: solid 1px #D1D1D1;
    border-radius: 15px;
    padding: 15px;
    transition: all 0.3s ease;
}

.logo-card:hover {
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.15);
    transform: translateY(-5px);
}

.logo-card:empty {
    border: none;
    background: transparent;
    box-shadow: none;
    min-height: 0;
    padding: 0;
}

.logo-card:empty:hover {
    transform: none;
    box-shadow: none;
}

.logo-card a {
    display: flex;
    width: 100%;
    height: 100%;
    align-items: center;
    justify-content: center;
}

.logo-card img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    width: auto;
    height: auto;
}

.section-heading-wrap {
   position: relative;
   text-align: center;
   margin: 40px 0 30px 0;
}

.section-heading-wrap::before {
   content: "";
   position: absolute;
   left: 0;
   right: 0;
   top: 50%;
   height: 1px;
   background: #128912;
   transform: translateY(-50%);
}

.section-heading {
   position: relative;
   display: inline-block;
   z-index: 1;
   background: #fff;
   font-weight: 600;
   font-size: 14px;
   border-radius: 15px;
   border: solid 1px #128912;
   padding: 7px 18px;
   margin: 0;
}

   .isuw-speark .responsive .sprk-box {
      min-height: 360px;
      display: flex !important;
      flex-direction: column;
      border: 1px solid #e6e6e6;
   }

   .isuw-speark .responsive .sprk-box.slick-slide {
      height: auto !important;
   }

   .isuw-speark .responsive .sprk-box img,
   .isuw-speark .responsive .sprk-box.slick-slide img {
      width: 100% !important;
      height: auto !important;
      aspect-ratio: 3 / 4;
      object-fit: cover;
      object-position: top center;
      border-radius: 10px;
      margin-bottom: 12px;
   }

   .isuw-speark .responsive .sprk-box h5 {
      margin-bottom: 8px;
      min-height: 48px;
   }

   .isuw-speark .responsive .sprk-box p:last-child {
      margin-top: auto;
   }

@media (max-width: 991px) {
    .partners-grid {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 15px;
    }

    .partners-grid.grid-3,
    .partners-grid.grid-4 {
        grid-template-columns: repeat(2, 1fr);
    }

    .logo-card {
        min-height: 140px;
    }

   .isuw-speark .responsive .sprk-box {
      min-height: 330px;
   }
}

@media (max-width: 576px) {
    .partners-grid {
        grid-template-columns: 1fr;
        gap: 15px;
    }

    .partners-grid.grid-2,
    .partners-grid.grid-3,
    .partners-grid.grid-4 {
        grid-template-columns: 1fr;
    }

    .logo-card {
        min-height: 120px;
    }

   .isuw-speark .responsive .sprk-box {
      min-height: 300px;
   }
}
</style>

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
                        <h2>Supported By <br> 
      
                        </h2>
                           <div class="logo-div">
                              <p>
                                 <a href="https://powermin.gov.in/" target="_blank">
                                    <img class="aligncenter  wp-image-38077" src="http://www.isuw.in/public/uploads/ministries/MOP Golden.png" alt="Goverment of India, Ministry of Power"  />
                                 </a>  
                              </p>
                           </div>
                        <div class="logo-div"><p><a href="https://cea.nic.in/?lang=en" target="_blank"><img class="aligncenter  wp-image-38077" src="http://www.isuw.in/public/uploads/ministries/CEA PNG.png" alt="Ministry of Power"  /></a></p></div>
                        <div class="logo-div">
                           <p>
                              <a href="https://dst.gov.in/" target="_blank">
                                 <img class="aligncenter  wp-image-38077" src="images/2026/DSTGolden.png" alt="Department of Science and Technology (DST)" />
                              </a>
                           </p>
                        </div>
                        <div class="logo-div">
                           <p>
                              <a href="https://www.niti.gov.in/" target="_blank" rel="noopener noreferrer">
                                 <img class="aligncenter wp-image-38077" src="public/uploads/ministries/NITI Aayog.jpg" alt="NITI Aayog, India" />
                              </a>
                           </p>
                        </div>
                        <div class="logo-div">
                           <p>
                              <a href="https://aida-india.org/" target="_blank" rel="noopener noreferrer">
                              <img src="images/2026/AIDA.png" alt="AIDA">
                           </a>
                           </p>
                        </div>
                        
                     
                     </div>

                     
                 

                     
 <a class="btn btn-light-section" style="border: 2px solid #EF7B00;" href=" /supporting-ministries-2024">View All</a>               	     

                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="card-box">
                     <div class="row justify-content-center">
                        <div class="col-lg-3">
                           <div class="spot-div">
                              
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
                     <h2 class="mt-4">Key Partners 2026</h2>
                     
                     <div class="section-heading-wrap">
                        <h5 class="section-heading">Platinum Partner</h5>
                     </div>
                     <div class="partners-grid grid-3">
                        <div class="logo-card"></div>
                        <div class="logo-card">
                           <a href="https://www.sew.ai/" target="_blank">
                              <img src="/uploads/images/sew-water.png" alt="SEW">
                           </a>
                        </div>
                        <div class="logo-card"></div>
                     </div>

                     <div class="section-heading-wrap">
                        <h5 class="section-heading">Knowledge Partner</h5>
                     </div>
                     <div class="partners-grid grid-3">
                        <div class="logo-card"></div>
                        <div class="logo-card">
                           <a href="https://www.powerfoundation.org.in/" target="_blank">
                              <img src="images/2026/pfi.jpeg" alt="Power Foundation of India">
                           </a>
                        </div>
                        <div class="logo-card"></div>
                     </div>

                     <div class="section-heading-wrap">
                        <h5 class="section-heading">Country Partner</h5>
                     </div>
                     <div class="partners-grid grid-3">
                        <div class="logo-card"></div>
                        <div class="logo-card">
                           <a href="https://www.gov.uk/" target="_blank" rel="noopener noreferrer">
                              <img src="public/uploads/partner/UK-Gov.png" alt="FCDO UK Government">
                           </a>
                        </div>
                        <div class="logo-card"></div>
                     </div>

                     <div class="section-heading-wrap">
                        <h5 class="section-heading">Silver Partners</h5>
                     </div>
                     <div class="partners-grid grid-3">
                        <div class="logo-card">
                           <a href="https://www.oracle.com/in/" target="_blank" rel="noopener noreferrer">
                              <img src="http://isuw.in/images/2026/Oracle_Energy-and-Water_rgb.png" alt="Oracle">
                           </a>
                        </div>
                        <div class="logo-card">
                           <a href="https://yitran.com/" target="_blank" rel="noopener noreferrer">
                              <img src="https://www.isuw.in/public/uploads/partner/yitran-logo-PNG-250.png" alt="Yitran">
                           </a>
                        </div>
                     </div>

                     <div class="section-heading-wrap">
                        <h5 class="section-heading">Technology Partner</h5>
                     </div>
                     <div class="partners-grid grid-3">
                        <div class="logo-card"></div>
                        <div class="logo-card">
                           <a href="https://eppeltone.in/" target="_blank" rel="noopener noreferrer">
                              <img src="images/2026/Eppeltone.jpeg?id=1" alt="Eppeltone Engineers Limited">
                           </a>
                        </div>
                        <div class="logo-card"></div>
                     </div>

                     <div class="section-heading-wrap">
                        <h5 class="section-heading">Delegate Bag Partner</h5>
                     </div>
                     <div class="partners-grid grid-3">
                        <div class="logo-card"></div>
                        <div class="logo-card">
                           <a href="https://www.wirepas.com/" target="_blank" rel="noopener noreferrer">
                              <img src="images/2026/Wirepas.png" alt="Wirepas">
                           </a>
                        </div>
                        <div class="logo-card"></div>
                     </div>

                     <div class="section-heading-wrap">
                        <h5 class="section-heading">Bronze Partners</h5>
                     </div>
                     <div class="partners-grid grid-4">
                        <div class="logo-card">
                           <a href="https://edx.com/" target="_blank" rel="noopener noreferrer">
                              <img src="images/2025/edxWireless.jpeg" alt="EDX">
                           </a>
                        </div>
                        <div class="logo-card">
                           <a href="https://kimbal.io/" target="_blank" rel="noopener noreferrer">
                              <img src="images/2025/Kimbal.jpeg" alt="Kimbal">
                           </a>
                        </div>
                        <div class="logo-card">
                           <a href="https://meshmerise.ai/" target="_blank" rel="noopener noreferrer">
                              <img src="images/2026/Meshmerise.jpeg" alt="Meshmerise">
                           </a>
                        </div>
                        <div class="logo-card">
                           <a href="https://www.powerxchange.io/" target="_blank" rel="noopener noreferrer">
                              <img src="images/2025/PowerXchange.jpeg" alt="Power Xchange">
                           </a>
                        </div>
                     </div>

                     <div class="section-heading-wrap">
                        <h5 class="section-heading">Session Partners</h5>
                     </div>
                     <div class="partners-grid grid-4">
                        <div class="logo-card">
                           <a href="https://www.powerfoundation.org.in/" target="_blank" rel="noopener noreferrer">
                              <img src="images/2026/pfi.jpeg" alt="Power Foundation of India">
                           </a>
                        </div>
                        <div class="logo-card">
                           <a href="https://www.iexindia.com/" target="_blank" rel="noopener noreferrer">
                              <img src="images/2025/IEX.png" alt="Indian Energy Exchange">
                           </a>
                        </div>
                        <div class="logo-card">
                           <a href="https://www.gov.uk/" target="_blank" rel="noopener noreferrer">
                              <img src="public/uploads/partner/UK-Gov.png" alt="FCDO UK Government">
                           </a>
                        </div>
                        <div class="logo-card">
                           <a href="https://www.bis.gov.in/" target="_blank" rel="noopener noreferrer">
                              <img src="images/2025/BIS.jpg" alt="Bureau of India Standards">
                           </a>
                        </div>
                        <div class="logo-card">
                           <a href="https://www.iec.ch/homepage" target="_blank" rel="noopener noreferrer">
                              <img src="images/2025/IEC.png" alt="IEC">
                           </a>
                        </div>
                        <div class="logo-card">
                           <a href="https://www.ieee.org/" target="_blank" rel="noopener noreferrer">
                              <img src="images/2025/IEEE.png" alt="IEEE">
                           </a>
                        </div>
                        <div class="logo-card">
                           <a href="https://aida-india.org/" target="_blank" rel="noopener noreferrer">
                              <img src="images/2026/AIDA.png" alt="AIDA">
                           </a>
                        </div>
                        <div class="logo-card">
                           <a href="https://bscesystemsinc.com/" target="_blank" rel="noopener noreferrer">
                              <img src="images/2025/BSCE.png" alt="BSCE Systems">
                           </a>
                        </div>
                        <div class="logo-card">
                           <a href="https://www.apuea.org/" target="_blank" rel="noopener noreferrer">
                              <img src="images/2026/APUEA.png" alt="APUEA">
                           </a>
                        </div>
                        <div class="logo-card">
                           <a href="https://dst.gov.in/" target="_blank" rel="noopener noreferrer">
                              <img src="images/2026/DSTGolden.png" alt="Department of Science and Technology">
                           </a>
                        </div>
                        <div class="logo-card">
                           <a href="https://nise.res.in/" target="_blank" rel="noopener noreferrer">
                              <img src="images/2026/NISE.png" alt="NISE">
                           </a>
                        </div>
                     </div>

                     <h2 class="mt-4">Supporting Organizations 2026</h2>
                     <div class="partners-grid grid-3">
                        <div class="logo-card">
                           <a href="https://aida-india.org/" target="_blank" rel="noopener noreferrer">
                              <img src="images/2026/AIDA.png" alt="AIDA">
                           </a>
                        </div>
                        <div class="logo-card">
                           <a href="http://globalsmartenergy.org/" target="_blank" rel="noopener noreferrer">
                              <img src="images/2025/GSEF.png" alt="GSEF">
                           </a>
                        </div>
                        <div class="logo-card">
                           <a href="https://indiaesa.info/" target="_blank" rel="noopener noreferrer">
                              <img src="images/2026/IESA.png" alt="India Energy Storage Alliance">
                           </a>
                        </div>
                        <div class="logo-card">
                           <a href="https://www.cbip.org/" target="_blank" rel="noopener noreferrer">
                              <img src="https://www.isuw.in/public/uploads/organizations/CBIP PNG.png" alt="CBIP">
                           </a>
                        </div>
                        <div class="logo-card">
                           <a href="https://sscgj.in/" target="_blank" rel="noopener noreferrer">
                              <img src="images/2026/SCGJ.png" alt="Skill Council for Green Jobs">
                           </a>
                        </div>
                        <div class="logo-card">
                           <a href="https://www.netraglobal.org/" target="_blank" rel="noopener noreferrer">
                              <img src="images/2026/NETRA.png" alt="NETRA">
                           </a>
                        </div>
                        <div class="logo-card">
                           <a href="https://apua-asea.org/en/" target="_blank" rel="noopener noreferrer">
                              <img src="https://www.isuw.in/public/uploads/organizations/LOGO APUA.jpg" alt="APUA">
                           </a>
                        </div>
                        <div class="logo-card">
                           <a href="https://www.apuea.org/" target="_blank" rel="noopener noreferrer">
                              <img src="images/2026/APUEA.png" alt="APUEA">
                           </a>
                        </div>
                        <div class="logo-card">
                           <a href="https://www.apuea.org/" target="_blank" rel="noopener noreferrer">
                              <img src="images/2026/IEEE.jpg" alt="IEEE Standards Association">
                           </a>
                        </div>
                        <div class="logo-card">
                           <a href="https://iea-isgan.org/" target="_blank" rel="noopener noreferrer">
                              <img src="images/2026/ISGAN.png" alt="ISGAN">
                           </a>
                        </div>
                        <div class="logo-card">
                           <a href="https://www.cigreindia.org/" target="_blank" rel="noopener noreferrer">
                              <img src="https://www.isuw.in/public/uploads/organizations/cigre.jpg" alt="CIGRE India">
                           </a>
                        </div>
                        <div class="logo-card">
                           <a href="https://www.cencenelec.eu/" target="_blank" rel="noopener noreferrer">
                              <img src="images/2025/CEN.jpg" alt="CEN">
                           </a>
                        </div>
                        <div class="logo-card">
                           <a href="https://www.cenelec.eu/" target="_blank" rel="noopener noreferrer">
                              <img src="public/uploads/organizations/CENELEC.jpg" alt="CENELEC">
                           </a>
                        </div>
                     </div>
                     
  
                       
                       
                  </div>
               </div>
               <div class="col-lg-3">

                     <div class="card-box utilities">
                        
                        <!-- we need to remove below section when supporting utilities 2022 needs to be remove-->
                        <div class="row justify-content-center">
                           <div class="col-lg-12">
                              <h2>Supporting   <br>
                              Utilities 2026</h2>
                           </div> 
                        </div>
                        <div class="col-lg-12">
                              <div class="logo-title">
                                 <h4>Host Utilities</h4>
                              </div>
                        </div>
                        
                        <div class="partners-grid grid-1">
                           <div class="logo-card">
                              <a href="https://www.bsesdelhi.com/web/brpl" target="_blank" rel="noreferrer">
                                 <img src="https://www.isuw.in/public/uploads/utility/1641110129.png" alt="BRPL">
                              </a>
                           </div>
                           <div class="logo-card">
                              <a href="https://www.bsesdelhi.com/web/bypl" target="_blank" rel="noreferrer">
                                 <img src="https://www.isuw.in/public/uploads/utility/1641110101.png" alt="BYPL">
                              </a>
                           </div>
                           <div class="logo-card">
                              <a href="https://www.tatapower.com/" target="_blank" rel="noopener noreferrer">
                                 <img src="https://www.isuw.in/public/uploads/utility/1641110147.png" alt="Tata Power">
                              </a>
                           </div>
                           <div class="logo-card">
                              <a href="http://www.tatapower-ddl.com/" target="_blank" rel="noopener noreferrer">
                                 <img src="https://www.isuw.in/public/uploads/utility/1641110211.png" alt="Tata Power DDL">
                              </a>
                           </div>
                           <div class="logo-card">
                              <a href="https://www.noidapower.com/" target="_blank" rel="noopener noreferrer">
                                 <img src="images/2026/NPCL_logo.png" alt="Noida Power Company Limited (NPCL)">
                              </a>
                           </div>
                        </div>

             
         </div>
      </section>
      <section class="page-section isuw-speark">
         <div class="container">
            <div class="section-title pb-0">
               <h2 class="" style="background-color:lightgray;">ISUW 2026 Speakers</h2>
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
                     <img src="{{$speaker24->imageUrl}}" class="img-fluid" alt="{{$speaker24->name}}" loading="lazy">
                     <h5>{{$speaker24->name}}</h5>
                     <p>{!! nl2br(e($speaker24->company)) !!}</p>
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
         <h2>ISUW 2026 Exhibitors</h2>
      </div>
      <div class="partners-grid grid-4">
         <div class="logo-card">
            <a href="https://www.sew.ai/" target="_blank" rel="noopener noreferrer">
               <img src="/uploads/images/sew-water.png" alt="Smart Energy Water">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://www.oracle.com/in/" target="_blank" rel="noopener noreferrer">
               <img src="http://isuw.in/images/2026/Oracle_Energy-and-Water_rgb.png" alt="Oracle">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://yitran.com/" target="_blank" rel="noopener noreferrer">
               <img src="https://www.isuw.in/public/uploads/partner/yitran-logo-PNG-250.png" alt="Yitran Technologies">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://eppeltone.in/" target="_blank" rel="noopener noreferrer">
               <img src="images/2026/Eppeltone.jpeg?id=1" alt="Eppeltone Engineers Limited">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://edx.com/" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/edxWireless.jpeg" alt="EDX Wireless">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://www.tatapower.com/" target="_blank" rel="noopener noreferrer">
               <img src="https://www.isuw.in/public/uploads/utility/1641110147.png" alt="Tata Power Company Limited">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://www.eiris.in/" target="_blank" rel="noopener noreferrer">
               <img src="images/2026/EIRIS.jpg" alt="EIRIS">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://indiasmartgrid.org/" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/ISGF.jpg" alt="ISGF">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://gna.energy/" target="_blank" rel="noopener noreferrer">
               <img src="https://logo.clearbit.com/gnaenergy.com" alt="GNA Energy">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://www.citilight.co/" target="_blank" rel="noopener noreferrer">
               <img src="https://logo.clearbit.com/citilight.in" alt="CITiLIGHT">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://www.powerxchange.io/" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/PowerXchange.jpeg" alt="Power Xchange">
            </a>
         </div>
      </div>
   </div>
</section>

<section class="page-section isuw-exhibitors">
   <div class="container">
      <div class="section-title">
         <h2>ISUW 2025 Exhibitors</h2>
      </div>
      <div class="partners-grid grid-4">
         <div class="logo-card">
            <a href="https://sunnetsoftware.com/contact-us/" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/sunnet.png" alt="Sunnet">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://www.gevernova.com/" target="_blank" rel="noopener noreferrer">
               <img src="https://www.isuw.in/public/uploads/partner/GE_Vernova_Standard_RGB_Evergreen.jpg" alt="GE Vernova">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://edx.com/" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/edxWireless.jpeg" alt="EDX">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://indiasmartgrid.org/" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/ISGF.jpg" alt="ISGF">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://yitran.com/" target="_blank" rel="noopener noreferrer">
               <img src="https://www.isuw.in/public/uploads/partner/yitran-logo-PNG-250.png" alt="Yitran">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://www.aspentech.com/en" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/AspenTech.png" alt="AspenTech">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://fluentgrid.com/" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/Fluentgrid.png" alt="FluentGrid">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://wi-sun.org/" target="_blank" rel="noopener noreferrer">
               <img src="http://isuw.in/uploads/partner/1641569692.png" alt="Wi-Sun">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://www.cdac.in/" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/C-DAC.jpg" alt="C-DAC">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://www.exicom.in/" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/exicom.png" alt="Exicom">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://www.tauruspowertronics.com/" target="_blank" rel="noopener noreferrer">
               <img src="http://isuw.in/public/uploads/partner/TAURUS LOGO (1).jpg" alt="Taurus">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://www.phoenixcontact.com/en-in/" target="_blank" rel="noopener noreferrer">
               <img src="https://www.isuw.in/public/uploads/partner/Phoenix Contact.jpg" alt="Phoenix">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://www.impresa.ai/" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/Impressa.png" alt="Impressa">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://lora-alliance.org/" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/LoRaAlliance.png" alt="LoRa Alliance">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://www.powerxchange.io/" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/PowerXchange.jpeg" alt="PowerXchange">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://www.austrade.gov.au/" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/Austrade.jpeg" alt="Austrade">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://eppeltone.in/" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/Eppeltone.png" alt="Eppeltone">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://cyanconnode.com/" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/logo_cyanconnode.png" alt="Cyanconnode">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://radius.co.in/" target="_blank" rel="noopener noreferrer">
               <img src="https://radius.co.in/wp-content/uploads/2023/07/radius_logo.png" alt="Radius">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://www.noidapower.com/" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/NPCL.png" alt="NPCL">
            </a>
         </div>
      </div>
   </div>
</section>      
     
<section class="page-section isuw-exhibitors">
   <div class="container">
      <div class="section-title">
         <h2>ISUW 2025 Participating Utilities</h2>
      </div>
      <div class="partners-grid grid-4">
         <div class="logo-card">
            <a href="https://www.bsesdelhi.com/web/bypl#loaded" target="_blank" rel="noopener noreferrer">
               <img src="https://www.isuw.in/public/uploads/utility/1641110101.png" alt="BYPL">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://www.bsesdelhi.com/web/brpl" target="_blank" rel="noopener noreferrer">
               <img src="https://www.isuw.in/public/uploads/utility/1641110129.png" alt="BRPL">
            </a>
         </div>
         <div class="logo-card">
            <a href="http://www.tatapower-ddl.com/" target="_blank" rel="noopener noreferrer">
               <img src="https://www.isuw.in/public/uploads/utility/1641110211.png" alt="Tata Power DDL">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://www.tatapower.com/" target="_blank" rel="noopener noreferrer">
               <img src="https://www.isuw.in/public/uploads/utility/1641110147.png" alt="Tata Power">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://www.mgvcl.com/" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/MGVCL.png" alt="MGVCL">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://www.tpwesternodisha.com/" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/TPCODL.png" alt="TP CODL">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://www.tpnodl.com/" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/TPNODL.png" alt="TP NODL">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://www.powergrid.in/en" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/Powergrid.png" alt="Powergrid">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://www.noidapower.com/Home" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/NPCL.png" alt="NPCL">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://uppcl.org/uppcl/en" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/UPPCL.png" alt="UPPCL">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://www.guvnl.com/" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/GUVNL.png" alt="GUVNL">
            </a>
         </div>
      </div>
   </div>
</section>

<!-- Additional Utilities Section -->
<section class="page-section">
   <div class="container">
      <div class="partners-grid grid-4">
         <div class="logo-card">
            <a href="https://dgvcl.com/" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/DGVCL.png" alt="DGVCL">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://www.uhbvn.org.in/web/portal/home" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/UHBVN.png" alt="UHBVN">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://www.dhbvn.org.in/web/portal/home" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/DHBVN.jpg" alt="DHBVN">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://kseb.in/ksebhome" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/KSEB.png" alt="KSEB">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://www.tpsouthernodisha.com/" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/TPSODL.png" alt="TPSODL">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://tgnpdcl.com/" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/TGNPDCLTelangana.png" alt="TGNPDCL">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://tsecl.in/" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/Tripura(TSECL).jpg" alt="TSECL">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://www.pvvnl.org/" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/PVVNL-Logo.png" alt="PVVNL">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://www.cesc.co.in/" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/CESC_Logo.png" alt="CESC">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://www.mpwz.co.in/#/home" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/MPPKVVCL.png" alt="MPPKVVCL">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://www.mahadiscom.in/en/home/" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/MSEDCL.png" alt="MSEDCL">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://www.pgvcl.com/" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/PGVCL.jpg" alt="PGVCL">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://www.tpwesternodisha.com/" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/TPWODL.png" alt="TPWODL">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://www.apspdcl.in/index.jsp" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/APSPDCL.png" alt="APSPDCL">
            </a>
         </div>
         <div class="logo-card">
            <a href="https://posoco.in/en/" target="_blank" rel="noopener noreferrer">
               <img src="images/2025/Grid-India.png" alt="Grid-India">
            </a>
         </div>
      </div>
   </div>
</section>

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