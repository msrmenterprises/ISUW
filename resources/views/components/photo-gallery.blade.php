@extends('master')
@section('content')

 <div class="container">
 <div class="row justify-content-left ">
<p></p>


<div class="k_cheading">
		<h1>ISUW <span class="k_greencolor">Photo Gallery</span> </h1>
		<img src="/public/uploads/images/kborder_bottom.png" alt=""> 
	</div>
<style>
li.gallleryflick{   float:left;    margin-left:30px;   list-style:none;   margin-bottom:30px;   list-style:none !important; height:240px;} 
<p>.responsive .content img{ 	height:226px !important; } h3.p-head{ 	background: #00923f;     color: #FFF;     margin: 45px 32px 15px 0px;     padding: 10px; font-size: 18px; } iframe.flickr-embed-frame {
    height: 300px !important; min-height: 300px !important; overflow: hidden !important;
}


/* Style the tab */
.tab {
  overflow: hidden;
  width: 57%;
    margin: 0 auto;
 /* border: 1px solid #ccc;
  background-color: #f1f1f1; */
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 10px 30px;
  transition: 0.3s;
  font-size: 16px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #EF7B00;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  min-height:300px;
  
}

</style>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, '2022')">2022</button>
  <button class="tablinks" onclick="openCity(event, '2021')">2021</button>
  <button class="tablinks" ><a href="https://www.youtube.com/c/ISGFSMARTGRIDBulletin/playlists" target="_blank">2020</a></button>
   <button class="tablinks" ><a href="https://www.youtube.com/c/ISGFSMARTGRIDBulletin/playlists" target="_blank">2019</a></button>
  <button class="tablinks" ><a href="https://www.youtube.com/c/ISGFSMARTGRIDBulletin/playlists" target="_blank">2018</a></button>
   <button class="tablinks" ><a href="https://www.youtube.com/c/ISGFSMARTGRIDBulletin/playlists" target="_blank">2017</a></button>
</div>
<!--<div id="2020" class="tabcontent">
  <h3><a href="https://www.youtube.com/c/ISGFSMARTGRIDBulletin/playlists" target="_blank">Click here for 2020 photo album</a></h3> 
</div>
<div id="2019" class="tabcontent">
    <h3><a href="https://www.youtube.com/c/ISGFSMARTGRIDBulletin/playlists" target="_blank">Click here for 2019 photo album</a></h3> 
</div>
<div id="2018" class="tabcontent">
  <h3><a href="https://www.youtube.com/c/ISGFSMARTGRIDBulletin/playlists" target="_blank">Click here for 2018 photo album</a></h3> 
</div>
<div id="2017" class="tabcontent">
  <h3><a href="https://www.youtube.com/c/ISGFSMARTGRIDBulletin/playlists" target="_blank">Click here for 2017 photo album</a></h3> 
</div>-->
<div id="2022" class="tabcontent" style="display: block;">
 <div class="container slider_margin1">
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 1: INAUGURATION OF ISUW 2022 CONFERENCE AND EXHIBITION | India 11:30 ~ 13:30
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297235073" title="INAUGURATION OF ISUW 2022 CONFERENCE AND EXHIBITION"><img src="https://live.staticflickr.com/65535/51928362740_5fa4c8e085_z.jpg" width="488" height="170" alt="INAUGURATION OF ISUW 2022 CONFERENCE AND EXHIBITION"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 1  THEMATIC  Session-1 DIGITALIZATION OF UTILITIES AND DIGITALIZATION ROADMAPS | India 14:00 ~ 16:00 
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297231750" title="ISUW 2022: THEMATIC SESSION - 1 DIGITALIZATION OF UTILITIES AND DIGITALIZATION ROADMAPS"><img src="https://live.staticflickr.com/65535/51928638145_e7671f6ed9_z.jpg" width="488" height="170" alt="ISUW 2022: THEMATIC SESSION - 1 DIGITALIZATION OF UTILITIES AND DIGITALIZATION ROADMAPS"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 1 - THEMATIC Session-2 REGULATIONS FOR THE EVOLVING “GREEN GRID” OF THE 21ST CENTURY |  India 16:00 ~ 18:00
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297241716" title="ISUW_2022: THEMATIC SESSION - 2 REGULATIONS FOR THE EVOLVING “GREEN GRID” OF THE 21ST CENTURY"><img src="https://live.staticflickr.com/65535/51927469447_478331597c_z.jpg" width="488" height="170" alt="ISUW_2022: THEMATIC SESSION - 2 REGULATIONS FOR THE EVOLVING “GREEN GRID” OF THE 21ST CENTURY"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 1 - Special Plenary-1 EVOLVING ARCHITECTURE OF THE 21ST CENTURY GRID WITH TWO-WAY POWER FLOWS | India 19:00 ~ 21:00 
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297242021" title="ISUW_2022: SPECIAL PLENARY 1 EVOLVING ARCHITECTURE OF THE 21ST CENTURY GRID WITH  TWO-WAY POWER FLOWS"><img src="https://live.staticflickr.com/65535/51928558538_9c8204380d_z.jpg" width="488" height="170" alt="ISUW_2022: SPECIAL PLENARY 1 EVOLVING ARCHITECTURE OF THE 21ST CENTURY GRID WITH  TWO-WAY POWER FLOWS"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 1 - 11TH EU - INDIA SMART GRID WORKSHOP – PART A In Partnership with European Union | India 13:30 ~ 15:00
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297258718" title="ISUW_2022: 11TH EU - INDIA SMART GRID WORKSHOP – PART A In Partnership with European Union"><img src="https://live.staticflickr.com/65535/51928672552_3130ce2c6a_z.jpg" width="488" height="170" alt="ISUW_2022: 11TH EU - INDIA SMART GRID WORKSHOP – PART A In Partnership with European Union"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 1 - 1ST GERMANY- INDIA SMART ENERGY WORKSHOP  In Partnership with GIZ, Germany | India 15:00 ~ 17:30 
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297263088" title="ISUW_2022: 1ST GERMANY- INDIA SMART ENERGY WORKSHOP  In Partnership with GIZ, Germany"><img src="https://live.staticflickr.com/65535/51930082783_3b71a788d5_z.jpg" width="488" height="170" alt="ISUW_2022: 1ST GERMANY- INDIA SMART ENERGY WORKSHOP  In Partnership with GIZ, Germany"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 1 - WORKSHOP -   EMPOWERING WOMEN IN THE POWER AND WATER SECTORS In Partnership with South Asia Women in Power Sector Professional Network (WePOWER) | India 17:30 ~ 19:30 
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297260682" title="ISUW_2022: WORKSHOP -   EMPOWERING WOMEN IN THE POWER AND WATER SECTORS"><img src="https://live.staticflickr.com/65535/51930311273_075f8e1662_z.jpg" width="488" height="170" alt="ISUW_2022: WORKSHOP -   EMPOWERING WOMEN IN THE POWER AND WATER SECTORS"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 1 - Seminar - Presentation Of Select Technical Papers: PART - 1 
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297263844" title="ISUW_2022: SEMINAR  PRESENTATION OF SELECT TECHNICAL PAPERS: PART – 1"><img src="https://live.staticflickr.com/65535/51930265111_9612e9f21a_z.jpg" width="488" height="170" alt="ISUW_2022: SEMINAR  PRESENTATION OF SELECT TECHNICAL PAPERS: PART – 1"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 1 – ROUNDTABLE - 1: INTERCONNECTION OF REGIONAL GRIDS IN ASIA In Partnership with European Union, SARI/EI, IRADe and USAID
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297281936" title="ISUW_2022: ROUNDTABLE - 1: INTERCONNECTION OF REGIONAL GRIDS IN ASIA"><img src="https://live.staticflickr.com/65535/51931792946_660a056df5_z.jpg" width="488" height="170" alt="ISUW_2022: ROUNDTABLE - 1: INTERCONNECTION OF REGIONAL GRIDS IN ASIA"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 2:  REJUVENATION SESSION - VIRTUAL YOGA 
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297341129" title="ISUW_2022: REJUVENATION SESSION- VIRTUAL YOGA"><img src="https://live.staticflickr.com/65535/51936302492_0e6ec56ec4_z.jpg" width="488" height="170" alt="ISUW_2022: REJUVENATION SESSION- VIRTUAL YOGA"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 2 –  Fire-side Chat with Anita Sengupta, Professor of Astronautics, University of Southern California; Founder & CEO of Hydroplane Ltd on the “Future of Electric Planes and Power Systems”
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297342278" title="ISUW_2022: INSPIRATIONAL TALKS- “Future of Electric Planes and Power Systems”"><img src="https://live.staticflickr.com/65535/51936324602_0cc6c11d7e_z.jpg" width="488" height="170" alt="ISUW_2022: INSPIRATIONAL TALKS- “Future of Electric Planes and Power Systems”"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 2 –THEMATIC SESSION - 3 CYBER SECURITY FOR THE DIGITALIZED GRIDS | India 11:30 ~ 13:30 
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297263971" title="ISUW_2022: THEMATIC SESSION - 3 CYBER SECURITY FOR THE DIGITALIZED GRIDS"><img src="https://live.staticflickr.com/65535/51930716514_084318b316_z.jpg" width="488" height="170" alt="ISUW_2022: THEMATIC SESSION - 3 CYBER SECURITY FOR THE DIGITALIZED GRIDS"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 2 – THEMATIC SESSION - 4 POWER SYSTEM FLEXIBILITY | India: 14:00 ~ 16:00
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297283734" title="ISUW_2022: THEMATIC SESSION - 4 POWER SYSTEM FLEXIBILITY"><img src="https://live.staticflickr.com/65535/51931853628_9b8e4e1a8b_z.jpg" width="488" height="170" alt="ISUW_2022: THEMATIC SESSION - 4 POWER SYSTEM FLEXIBILITY"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 2 –  THEMATIC SESSION - 5 ELECTRIC VEHICLES AND THE ELECTRIC GRID; AND GRID INTEGRATED VEHICLES (GIV)  |  India: 16:00 ~ 18:00 
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297262220" title="ISUW_2022: THEMATIC SESSION - 5 ELECTRIC VEHICLES AND THE ELECTRIC GRID; AND GRID INTEGRATED VEHICLES (GIV)"><img src="https://live.staticflickr.com/65535/51930514923_4bfc697e8c_z.jpg" width="488" height="170" alt="ISUW_2022: THEMATIC SESSION - 5 ELECTRIC VEHICLES AND THE ELECTRIC GRID; AND GRID INTEGRATED VEHICLES (GIV)"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 2 – WORKSHOP - OPTIMIZATION OF LEVELIZED COST OF GREEN ENERGY In Partnership with Schneider Electric | India 11:00 - 13:00
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297263737" title="ISUW_2022: WORKSHOP OPTIMIZATION OF LEVELIZED COST OF GREEN ENERGY In Partnership with Schneider Electric"><img src="https://live.staticflickr.com/65535/51931079590_9fbe2009b0_z.jpg" width="488" height="170" alt="ISUW_2022: WORKSHOP OPTIMIZATION OF LEVELIZED COST OF GREEN ENERGY In Partnership with Schneider Electric"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 2 –  11th EU - India Smart Grid Workshop – Part B in Partnership with European Union | India 14:00 ~ 17:00 
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297269488" title="ISUW_2022: WORKSHOP 11TH EU - INDIA SMART GRID WORKSHOP – PART B In Partnership with European Union"><img src="https://live.staticflickr.com/65535/51929506852_bc0c7733d3_z.jpg" width="488" height="170" alt="ISUW_2022: WORKSHOP 11TH EU - INDIA SMART GRID WORKSHOP – PART B In Partnership with European Union"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 2 –  8th US - India Smart Grid Workshop  in Partnership with US Commercial Services;USAID and USIBC | India 18:00 ~ 21:00
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297267169" title="ISUW_2022: 8th US - INDIA SMART GRID WORKSHOP  In Partnership with US Commercial Services, USAID and USIBC"><img src="https://live.staticflickr.com/65535/51930505816_b6b197cb83_z.jpg" width="488" height="170" alt="ISUW_2022: 8th US - INDIA SMART GRID WORKSHOP  In Partnership with US Commercial Services, USAID and USIBC"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 2 – SEMINAR SMART CITY GAS DISTRIBUTION | India 11:30 ~ 13:30 
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297276874" title="ISUW_2022: SEMINAR SMART CITY GAS DISTRIBUTION"><img src="https://live.staticflickr.com/65535/51931286048_b7f646b252_z.jpg" width="488" height="170" alt="ISUW_2022: SEMINAR SMART CITY GAS DISTRIBUTION"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 2 – SEMINAR SMART COMMUNICATION SOLUTIONS FOR SMART UTILITIES AND SMART CITIES | India 17:30 ~ 20:30
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297289661" title="ISUW_2022: Seminar - SMART COMMUNICATION SOLUTIONS FOR SMART UTILITIES AND SMART CITIES"><img src="https://live.staticflickr.com/65535/51932388876_677ffff797_z.jpg" width="488" height="170" alt="ISUW_2022: Seminar - SMART COMMUNICATION SOLUTIONS FOR SMART UTILITIES AND SMART CITIES"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 2 – Roundtable - 2 SMART METERING – ROLLOUT CHALLENGES, SYSTEM INTEGRATION ARCHITECTURE, SMART METER OPERATIONS CENTRE (SMOC)|  India 10:45 ~ 13:45 
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297322145" title="ISUW_2022: ROUNDTABLE - 2: SMART METERING – ROLLOUT CHALLENGES, SYSTEM INTEGRATION ARCHITECTURE, SMART METER OPERATIONS CENTRE (SMOC)"><img src="https://live.staticflickr.com/65535/51936299059_a4e3e3bbaf_z.jpg" width="488" height="170" alt="ISUW_2022: ROUNDTABLE - 2: SMART METERING – ROLLOUT CHALLENGES, SYSTEM INTEGRATION ARCHITECTURE, SMART METER OPERATIONS CENTRE (SMOC)"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 2 – Roundtable-3  ELECTRIC COOKING In Partnership with Bureau of Energy Efficiency and Climate Parliament  | India 14:30 ~ 16:30
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297322450" title="ISUW_2022: ROUNDTABLE - 3: ELECTRIC COOKING"><img src="https://live.staticflickr.com/65535/51936621440_6bc48ff668_z.jpg" width="488" height="170" alt="ISUW_2022: ROUNDTABLE - 3: ELECTRIC COOKING"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2022: INSPIRATIONAL TALK by Samer El Sayary on - “Project Lunar Oasis: Architecture and Energy Systems for Space Colonization” 
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297356066" title="ISUW_2022: INSPIRATIONAL TALKS - “Project Lunar Oasis: Architecture and Energy Systems for Space Colonization”"><img src="https://live.staticflickr.com/65535/51938923554_3d059b7828_z.jpg" width="488" height="170" alt="ISUW_2022: INSPIRATIONAL TALKS - “Project Lunar Oasis: Architecture and Energy Systems for Space Colonization”"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 3 – INSPIRATIONAL TALKS  by Michael Potter on “Accelerating Humanity as a Multiplanetary Species”
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297341489" title="ISUW_2022: INSPIRATIONAL TALKS - “Accelerating Humanity as a Multiplanetary Species”"><img src="https://live.staticflickr.com/65535/51936333172_e833a879e0_z.jpg" width="488" height="170" alt="ISUW_2022: INSPIRATIONAL TALKS - “Accelerating Humanity as a Multiplanetary Species”"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 3 – THEMATIC Session - 6 GREEN HYDROGEN MISSION | India 11:30 ~ 13:30 
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297324447" title="ISUW_2022: THEMATIC SESSION - 6 GREEN HYDROGEN MISSION"><img src="https://live.staticflickr.com/65535/51935050177_8d5d37f666_z.jpg" width="488" height="170" alt="ISUW_2022: THEMATIC SESSION - 6 GREEN HYDROGEN MISSION"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 3 – THEMATIC Session - 7 DISRUPTIVE TECHNOLOGIES AND INNOVATIONS FOR UTILITIES  |  India 14:00 ~ 16:00
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297323145" title="ISUW_2022: THEMATIC SESSION - 7 DISRUPTIVE TECHNOLOGIES AND INNOVATIONS FOR UTILITIES"><img src="https://live.staticflickr.com/65535/51936395014_60b5ea557e_z.jpg" width="488" height="170" alt="ISUW_2022: THEMATIC SESSION - 7 DISRUPTIVE TECHNOLOGIES AND INNOVATIONS FOR UTILITIES"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 3 – SPECIAL PLENARY - 2 ROLE OF MEDIA IN PROMOTION OF GREEN ENERGY AND  ENERGY TRANSITION TO NET ZERO  |  India 16:30 ~ 17:30 
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297325377" title="ISUW_2022: SPECIAL PLENARY - 2 ROLE OF MEDIA IN PROMOTION OF GREEN ENERGY AND  ENERGY TRANSITION TO NET ZERO"><img src="https://live.staticflickr.com/65535/51936183218_d1eb1b1300_z.jpg" width="488" height="170" alt="ISUW_2022: SPECIAL PLENARY - 2 ROLE OF MEDIA IN PROMOTION OF GREEN ENERGY AND  ENERGY TRANSITION TO NET ZERO"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 3 –  WORKSHOP ON LIVE LINE MAINTENANCE IN UTILITIES | India 11:00 ~ 13:30
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297332950" title="ISUW_2022: WORKSHOP ON LIVE LINE MAINTENANCE IN UTILITIES"><img src="https://live.staticflickr.com/65535/51936086512_2d070f11c5_z.jpg" width="488" height="170" alt="ISUW_2022: WORKSHOP ON LIVE LINE MAINTENANCE IN UTILITIES"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 3 –  SEMINAR SMART WATER DISTRIBUTION | 04 March 2021  India 11:00 ~ 13:45 
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297336086" title="ISUW_2022: SEMINAR SMART WATER DISTRIBUTION"><img src="https://live.staticflickr.com/65535/51937698035_e5cd85c41e_z.jpg" width="488" height="170" alt="ISUW_2022: SEMINAR SMART WATER DISTRIBUTION"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 3 – SEMINAR  PRESENTATION OF SELECT TECHNICAL PAPERS: PART – 2  | India 11:30 ~ 13:45
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297333240" title="ISUW_2022: SEMINAR  PRESENTATION OF SELECT TECHNICAL PAPERS: PART – 2"><img src="https://live.staticflickr.com/65535/51937415334_d9a9a08324_z.jpg" width="488" height="170" alt="ISUW_2022: SEMINAR  PRESENTATION OF SELECT TECHNICAL PAPERS: PART – 2"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 3 – ROUNDTABLE - 4: URBAN AIR MOBILITY SYSTEMS (UAM) | 04 March 2021  India 11:00 ~ 13:00 
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297339734" title="ISUW_2022: ROUNDTABLE - 4: URBAN AIR MOBILITY SYSTEMS (UAM)"><img src="https://live.staticflickr.com/65535/51936190747_498d5f6cd2_z.jpg" width="488" height="170" alt="ISUW_2022: ROUNDTABLE - 4: URBAN AIR MOBILITY SYSTEMS (UAM)"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 3 – ROUNDTABLE - 5:  ADOPTION OF DISTRICT COOLING SYSTEMS IN INDIA | 04 March 2021  India 14:30 ~ 16:30
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297339794" title="ISUW_2022: ROUNDTABLE - 5:  ADOPTION OF DISTRICT COOLING SYSTEMS IN INDIA"><img src="https://live.staticflickr.com/65535/51936197267_abf6cca58a_z.jpg" width="488" height="170" alt="ISUW_2022: ROUNDTABLE - 5:  ADOPTION OF DISTRICT COOLING SYSTEMS IN INDIA"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISGF INNOVATION AWARDS CEREMONY & VALEDICTORY FUNCTION OF ISUW 2022 
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297181639" title="ISGF Innovation Awards Ceremony &amp; Valedictory Function of ISUW 2022 Award Ceremony Hall"><img src="https://live.staticflickr.com/65535/51924063755_e68b3524dd_z.jpg" width="488" height="170" alt="ISGF Innovation Awards Ceremony &amp; Valedictory Function of ISUW 2022 Award Ceremony Hall"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW 2022 Digital Exhibition
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297351360" title="ISUW_2022: Virtual Exhibition Booths"><img src="https://live.staticflickr.com/65535/51937476712_24eca753e9_z.jpg" width="488" height="170" alt="ISUW_2022: Virtual Exhibition Booths"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW 2022 EU Pavilion  
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297358943" title="ISUW_2022: EU Pavilion Exhibition Booths"><img src="https://live.staticflickr.com/65535/51937545297_a7e177cf76_z.jpg" width="488" height="170" alt="ISUW_2022: EU Pavilion Exhibition Booths"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>

</div></div>
<div id="2021" class="tabcontent" style="display: block;">
 <div class="container slider_margin1">
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 1 - Inauguration of ISUW 2021 Conference and Exhibition | India 11:30 ~ 13:30
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157718605580492" title="Inauguration of ISUW 2021 Conference and Exhibition"><img src="https://live.staticflickr.com/65535/51024440893_c9e11390cc.jpg" width="488" height="170" alt="Inauguration of ISUW 2021 Conference and Exhibition"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 1 - Thematic Session-1  Innovation In Utilities During The Pandemic | India 14:00 ~ 16:00
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157718590766638" title="Thematic Session - 1 Innovation in Utilities During the Pandemic"><img src="https://live.staticflickr.com/65535/51021813671_44886c2da0.jpg" width="488" height="170" alt="Thematic Session - 1 Innovation in Utilities During the Pandemic"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div><div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 1 - Thematic Session-2 Regulatory Support In Different Countries For Revival Of Utilities | India 16:00 ~ 18:00
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157718525324721" title="Thematic Session - 2_Regulatory Support in Different Countries for Revival of Utilities"><img src="https://live.staticflickr.com/65535/51005284456_23f3369e01.jpg" width="488" height="170" alt="Thematic Session - 2_Regulatory Support in Different Countries for Revival of Utilities"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 1 - Special Plenary-1 Customer Rights Protection Order By Ministry Of Power – Action By Utilities And Regulators | India 19:00 ~ 21:00
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157718603124798" title="Customer Rights Protection Order by Ministry of Power – Action by Utilities And Regulators"><img src="https://live.staticflickr.com/65535/51025255062_ac482e78d4.jpg" width="488" height="170" alt="Customer Rights Protection Order by Ministry of Power – Action by Utilities And Regulators"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div><div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 1 - 10th EU - India Smart Grid Workshop – Part A  in Partnership with European Union | India 13:30 ~ 15:00
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157718517002336" title="Workshop 10th EU - India Smart Grid Workshop – Part A in Partnership with European Union"><img src="https://live.staticflickr.com/65535/51003279822_85ccc2a6c1.jpg" width="488" height="170" alt="Workshop 10th EU - India Smart Grid Workshop – Part A in Partnership with European Union"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 1 - Seminar - Presentation Of Select Technical Papers: PART – 1
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157718516713661" title="Seminar Presentation of Select  Technical Papers Part - 1"><img src="https://live.staticflickr.com/65535/51003196697_773aca9ca7.jpg" width="488" height="170" alt="Seminar Presentation of Select  Technical Papers Part - 1"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div><div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 1 – Roundtable - 1: Interconnection of Regional Grids in ASIA
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157718575164931" title="Roundtable - 1_Interconnection Of Regional Grids In Asia"><img src="https://live.staticflickr.com/65535/51018518381_93a7191107.jpg" width="488" height="170" alt="Roundtable - 1_Interconnection Of Regional Grids In Asia"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 2 – Thematic Session - 3 Smart Meter Rollout | India 11:30 ~ 13:30
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157718594620007" title="Thematic Session - 3 Smart Meter Rollout"><img src="https://live.staticflickr.com/65535/51021455748_006f67cb35.jpg" width="488" height="170" alt="Thematic Session - 3 Smart Meter Rollout"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div><div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 2 – Thematic Session - 4 Energy Storage System - Business Models And Regulations | India: 14:00 ~ 16:00
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157718592228268" title="Thematic Session - 4_Energy Storage Systems - Business Models and Regulations"><img src="https://live.staticflickr.com/65535/51022192706_e156d1b07a.jpg" width="488" height="170" alt="Thematic Session - 4_Energy Storage Systems - Business Models and Regulations"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 2 – Thematic Session - 5 Disaster (And Pandemic) Resilient Utilities And Cities in Partnership with National Institute of Urban Affairs, GoI  |  India: 16:00 ~ 18:00
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157718594685807" title="Thematic Session-5_Disaster (And Pandemic) Resilient Utilities and Cities in Partnership with National Institute of Urban Affairs, GoI"><img src="https://live.staticflickr.com/65535/51022303537_bb1c1e1765.jpg" width="488" height="170" alt="Thematic Session-5_Disaster (And Pandemic) Resilient Utilities and Cities in Partnership with National Institute of Urban Affairs, GoI"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div><div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 2 – Workshop 5G For Smart Utilities And Smart Cities  in Partnership with Telecommunications Standards Development Society, India | India 11:00 - 13:00
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157718589656601" title="Workshop 5G For Smart Utilities and Smart Cities in Partnership with Telecommunications Standards Development Society, India"><img src="https://live.staticflickr.com/65535/51021510628_1a9ca1acf2.jpg" width="488" height="170" alt="Workshop 5G For Smart Utilities and Smart Cities in Partnership with Telecommunications Standards Development Society, India"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 2 –  10th EU - India Smart Grid Workshop – Part B in Partnership with European Union | India 14:00 ~ 17:00
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157718592517038" title="Workshop 10th EU - India Smart Grid Workshop – Part B in Partnership with European Union"><img src="https://live.staticflickr.com/65535/51022270886_d93f9ce493.jpg" width="488" height="170" alt="Workshop 10th EU - India Smart Grid Workshop – Part B in Partnership with European Union"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div><div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 2 –  7th US - India Smart Grid Workshop  in Partnership with US Commercial Services; US DoE; and USIBC | India 18:30 ~ 21:30
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157718589682356" title="Workshop 7th US - India Smart Grid Workshop in Partnership with US Commercial Services; US DoE; and USIBC"><img src="https://live.staticflickr.com/65535/51022248766_ff7b9a01ae.jpg" width="488" height="170" alt="Workshop 7th US - India Smart Grid Workshop in Partnership with US Commercial Services; US DoE; and USIBC"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 2 – Seminar Smart Water Distribution | India 11:30 ~ 13:30
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157718519593298" title="Seminar on Smart Water Distribution"><img src="https://live.staticflickr.com/65535/51003136906_d348843f6f.jpg" width="488" height="170" alt="Seminar on Smart Water Distribution"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div><div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 2 – Seminar IEC – IEEE World Smart Energy Standardization Coordination Workshop | India 14:00 ~ 17:00
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157718521959182" title="Seminar IEC – IEEE World Smart Energy Standardization Coordination Workshop"><img src="https://live.staticflickr.com/65535/51003230052_199f7404a1.jpg" width="488" height="170" alt="Seminar IEC – IEEE World Smart Energy Standardization Coordination Workshop"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 2 – Roundtable - 2  Electric Cooking  |  India 11:30 ~ 13:30
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157718517079551" title="Roundtable - 2_Electric Cooking"><img src="https://live.staticflickr.com/65535/51003298502_e5e2c04b27.jpg" width="488" height="170" alt="Roundtable - 2_Electric Cooking"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div><div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 2 – Roundtable-3 Digital Architecture And System Integration For Smart Metering (Powered by AWS) | India 14:00 ~ 17:00
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157718522344032" title="Roundtable -3_Digital Architecture and  System Integration For Smart Metering (Powered by AWS)"><img src="https://live.staticflickr.com/65535/51003213251_0df820cd3a.jpg" width="488" height="170" alt="Roundtable -3_Digital Architecture and  System Integration For Smart Metering (Powered by AWS)"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 3 – Thematic Session - 6 Cyber Security For Digital Utilities | India 11:30 ~ 13:30
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157718527660583" title="Thematic Session – 6_Cyber Security for Digital Utilities"><img src="https://live.staticflickr.com/65535/51005293452_e0677894b8.jpg" width="488" height="170" alt="Thematic Session – 6_Cyber Security for Digital Utilities"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div><div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 3 – Thematic Session - 7 Disruptive Technologies And Innovations For Utilities Part - A |  India 14:00 ~ 16:00
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157718575399346" title="Thematic Session - 7_Disruptive Technologies and Innovations for Utilities  Part - A"><img src="https://live.staticflickr.com/65535/51018676072_5ceed17342_z.jpg" width="488" height="170" alt="Thematic Session - 7_Disruptive Technologies and Innovations for Utilities  Part - A"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 3 – Thematic Session - 8 New Revenue Opportunities For Utilities | India 16:00 ~ 18:00
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157718578202728" title="Thematic Session - 8 New Revenue Opportunities for Utilities"><img src="https://live.staticflickr.com/65535/51018692847_4c125348db.jpg" width="488" height="170" alt="Thematic Session - 8 New Revenue Opportunities for Utilities"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div><div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 3 – Special Plenary - 2 Grid Integrated Vehicles (GIV) And Standards For GIVs | India 19:00 ~ 21:00
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157718590039636" title="Special Plenary - 2 Grid Integrated Vehicles (GIV) and Standards for GIVs"><img src="https://live.staticflickr.com/65535/51021612543_3b8f55a0be.jpg" width="488" height="170" alt="Special Plenary - 2 Grid Integrated Vehicles (GIV) and Standards for GIVs"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 3 – Workshop On District Cooling System | India 11:00 ~ 13:30
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157718590141546" title="Workshop on District Cooling System"><img src="https://live.staticflickr.com/65535/51021635548_eaba205f37.jpg" width="488" height="170" alt="Workshop on District Cooling System"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div><div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 3 –  Joint Workshop Of Department Of Science & Technology, Goi And Swedish Energy Agency | 04 March 2021  India 14:30 - 17:30
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157718590120611" title="Workshop Joint Workshop Of Department of Science &amp; Technology, GoI and Swedish Energy Agency"><img src="https://live.staticflickr.com/65535/51022361561_e2109a7f6d.jpg" width="488" height="170" alt="Workshop Joint Workshop Of Department of Science &amp; Technology, GoI and Swedish Energy Agency"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 3 – Seminar Smart City Gas Distribution And Green Hydrogen | 04 March 2021  India 14:00 ~ 18:00
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157718590086596" title="Seminar on Smart City Gas Distribution and Green Hydrogen"><img src="https://live.staticflickr.com/65535/51022457382_49a5bdd66c.jpg" width="488" height="170" alt="Seminar on Smart City Gas Distribution and Green Hydrogen"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div><div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 3 – Roundtable - 4: Urban Air Mobility Systems (UAM) | 04 March 2021 India 11:30 ~ 13:30
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157718592814178" title="Roundtable - 4: Urban Air Mobility Systems (UAM)"><img src="https://live.staticflickr.com/65535/51022451832_c9c0e5c461.jpg" width="488" height="170" alt="Roundtable - 4: Urban Air Mobility Systems (UAM)"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 3 – Roundtable - 5 Regulatory And Policy Environment For Blockchain Innovation And Adoption In Utilities | 04 March 2021 India 14:00 ~ 17:30
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157718592795938" title="Roundtable - 5: Regulatory and Policy Environment for Blockchain Innovation and Adoption in Utilities"><img src="https://live.staticflickr.com/65535/51022348526_f4c43967de.jpg" width="488" height="170" alt="Roundtable - 5: Regulatory and Policy Environment for Blockchain Innovation and Adoption in Utilities"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div><div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 4 – Thematic Session - 9 Disruptive Technologies And Innovations For Utilities Part-B | India 11:30 ~ 13:30
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157718595406797" title="Thematic Session - 9  Disruptive Technologies and Innovations For Utilities Part-B"><img src="https://live.staticflickr.com/65535/51022490692_e408d2b3b8.jpg" width="488" height="170" alt="Thematic Session - 9  Disruptive Technologies and Innovations For Utilities Part-B"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 4 – Workshop On Live Line Maintenance In Utilities | India - 10:00 ~ 12:30
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157718592961858" title="Workshop on Live Line Maintenance In Utilities"><img src="https://live.staticflickr.com/65535/51022485367_34f5d991f2.jpg" width="488" height="170" alt="Workshop on Live Line Maintenance In Utilities"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div><div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">CONFERENCE DAY 4 – Seminar Presentation Of Select Technical Papers: Part– 2 | India 11:30 ~ 13:45
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157718687617161" title="Seminar Presentation of Select  Technical Papers Part - 2"><img src="https://live.staticflickr.com/65535/51047882578_13a4568bce.jpg" width="488" height="170" alt="Seminar Presentation of Select  Technical Papers Part - 2"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISGF Innovation Awards Ceremony & Valedictory Function of ISUW 2021
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157718590478608" title="ISGF Innovation Awards Ceremony &amp; Valedictory Function of ISUW 2021 Award Ceremony Hall"><img src="https://live.staticflickr.com/65535/51021008293_c0f667f21b.jpg" width="488" height="170" alt="ISGF Innovation Awards Ceremony &amp; Valedictory Function of ISUW 2021 Award Ceremony Hall"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div></div>

<h3>&nbsp; </h3>
</div>
</div>
</div>
<p></p>
</div>
</div>

@endsection

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>