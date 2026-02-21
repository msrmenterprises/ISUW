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

.section-heading {
    text-align: center;
    margin: 40px 0 30px 0;
    font-weight: bold;
    font-size: 18px;
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
}
</style>

 <div class="container">
 <div class="row justify-content-center">
 <div class="col-12">
 <p></p>
<div class="k_cheading">
      <h1>ISUW 2026<span class="k_greencolor"> EXHIBITORS </span> </h1>
      <img src="/public/uploads/images/kborder_bottom.png" alt=""> 
</div>

       <div class="partners-grid grid-4">
           <div class="logo-card">
               <a href="https://www.sew.ai/" target="_blank" rel="noopener noreferrer">
                   <img src="http://isuw.in/uploads/images/sew-water.png" alt="SEW">
               </a>
           </div>
           <div class="logo-card">
               <a href="https://www.oracle.com/in/utilities/" target="_blank" rel="noopener noreferrer">
                   <img src="http://isuw.in/images/2026/Oracle_Energy-and-Water_rgb.png" alt="Oracle">
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
               <a href="https://eppeltone.in/" target="_blank" rel="noopener noreferrer">
                   <img src="images/2026/eppeltone.png?id=1" alt="Eppeltone">
               </a>
           </div>
           <div class="logo-card">
               <a href="https://www.eiris.in/" target="_blank" rel="noopener noreferrer">
                   <img src="images/2026/EIRIS.jpg" alt="EIRIS">
               </a>
           </div>
           <div class="logo-card">
               <a href="https://yitran.com/" target="_blank" rel="noopener noreferrer">
                   <img src="https://www.isuw.in/public/uploads/partner/yitran-logo-PNG-250.png" alt="Yitran">
               </a>
           </div>
           <div class="logo-card">
               <a href="https://www.tatapower.com/" target="_blank" rel="noopener noreferrer">
                   <img src="https://www.isuw.in/public/uploads/utility/1641110147.png" alt="Tata Power">
               </a>
           </div>
           <div class="logo-card">
               <a href="https://meshmerise.ai/" target="_blank" rel="noopener noreferrer">
                   <img src="images/2026/Meshmerise.jpeg" alt="Meshmerise">
               </a>
           </div>
           <div class="logo-card">
               <a href="https://www.powerfoundation.org.in/" target="_blank" rel="noopener noreferrer">
                   <img src="images/2026/pfi.jpeg" alt="Power Foundation of India">
               </a>
           </div>
           <div class="logo-card">
               <a href="https://www.tekuncorked.com/" target="_blank" rel="noopener noreferrer">
                   <img src="images/2026/TekUncorked.png" alt="TekUncorked">
               </a>
           </div>
           <div class="logo-card">
               <a href="https://g3-alliance.com/" target="_blank" rel="noopener noreferrer">
                   <img src="images/2026/G3-Alliance.png" alt="G3 Alliance">
               </a>
           </div>
           <div class="logo-card">
               <a href="https://apar.com/" target="_blank" rel="noopener noreferrer">
                   <img src="images/2026/apar.png" alt="Apar Industries">
               </a>
           </div>
           <div class="logo-card">
               <a href="https://dvc.gov.in/" target="_blank" rel="noopener noreferrer">
                   <img src="images/2026/DVCLogo.png" alt="Damodar Valley Corporation">
               </a>
           </div>
           <div class="logo-card">
               <a href="https://www.saien.in/" target="_blank" rel="noopener noreferrer">
                   <img src="images/2026/SAIEN.png" alt="SAIEN">
               </a>
           </div>
           <div class="logo-card">
               <a href="https://ecog.io/" target="_blank" rel="noopener noreferrer">
                   <img src="images/2026/EcoG.png" alt="SAIEN">
               </a>
           </div>
       </div>

 <div class="k_cheading">
      <h1>ISUW 2025<span class="k_greencolor"> EXHIBITORS </span> </h1>
      <img src="/public/uploads/images/kborder_bottom.png" alt=""> 
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
	
<p></p>
<p style="text-align:center; font-size:16px;"><a href="http://isuw.in/2024/confirmed-exhibitors-2024" class="getstartedd ">ISUW 2024 EXHIBITORS</a></p>  
<p style="text-align:center; font-size:16px;"><a href="http://isuw.in/confirmed-exhibitors-2023" class="getstartedd ">ISUW 2023 EXHIBITORS</a></p>
 <p style="text-align:center; font-size:16px;"><a href="http://isuw.in/confirmed-exhibitors" class="getstartedd ">ISUW 2022 EXHIBITORS</a></p>
 <p style="text-align:center; font-size:16px;"><a href="http://isuw.in/confirmed-exhibitors-2021" class="getstartedd ">ISUW 2021 EXHIBITORS</a></p>

<p></p>
</div>
</div>

@endsection