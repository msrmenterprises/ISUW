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
<p>.responsive .content img{ 	height:226px !important; } h3.p-head{ height:100px;	background: #00923f;     color: #FFF;     margin: 45px 32px 15px 0px;     padding: 10px; font-size: 18px; } iframe.flickr-embed-frame {
    height: 300px ; min-height: 300px !important; overflow: hidden !important;
}


/* Style the tab */
.tab {
  overflow: hidden;
  width: 65%;
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
  background-color: #00923f;
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
<button class="tablinks" onclick="openCity(event, '2024')">2024</button>
  <button class="tablinks" onclick="openCity(event, '2023')">2023</button>
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
<!-- For 2024 -->
<div id="2024" class="tabcontent" style="display: block;">
  <div class="container slider_margin1">
    <div class="row">
      <div class="col-md-6">
        <div class="clearfix"></div>
          <h3 class="p-head">ISUW_2024: Experiential Workshop on Immersive Technologies – Augmented Reality, Virtual Reality, Mixed Reality, Assisted Reality, Metaverse etc | 12 Mar 2024
          </h3>
          <ul>
              <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720315606550" title="ISUW_2024: Experiential Workshop on Immersive Technologies – Augmented Reality, Virtual Reality, Mixed Reality, Assisted Reality, Metaverse etc"><img src="https://live.staticflickr.com/65535/53604344025_109bd088b8_z.jpg" width="580" height="400" alt="ISUW_2024: Experiential Workshop on Immersive Technologies – Augmented Reality, Virtual Reality, Mixed Reality, Assisted Reality, Metaverse etc"/></a>
                <script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
          </ul>
      </div>
      <div class="col-md-6">
        <div class="clearfix"></div>
          <h3 class="p-head">ISUW_2024: OCPP Technical Workshop and Training (In Collaboration with Open Charge Alliance) | 12 Mar 2024
          </h3>
          <ul>
          <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720315605377" title="ISUW_2024: OCPP Technical Workshop and Training (In Collaboration with Open Charge Alliance)"><img src="https://live.staticflickr.com/65535/53603067802_4a31ab8632_z.jpg" width="580" height="400" alt="ISUW_2024: OCPP Technical Workshop and Training (In Collaboration with Open Charge Alliance)"/></a>
            <script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
          </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="clearfix"></div>
          <h3 class="p-head">ISUW_2024: Master Class on Energy Transition Strategies and Pathways to Net Zero Power Systems | 12 Mar 2024
          </h3>
          <ul>
          <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720315613341" title="ISUW_2024: Master Class on Energy Transition Strategies and Pathways to Net Zero Power Systems"><img src="https://live.staticflickr.com/65535/53603974251_f50a34e9f2_z.jpg" width="580" height="400" alt="ISUW_2024: Master Class on Energy Transition Strategies and Pathways to Net Zero Power Systems"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
          </ul>
      </div>
      <div class="col-md-6">
        <div class="clearfix"></div>
          <h3 class="p-head">ISUW_2024:  8th IEC - IEEE Smart Energy Standardization Coordination Workshop (In collaboration with BIS, IEC and IEEE) | 12 Mar 2024
          </h3>
          <ul>
          <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720315628029" title="ISUW_2024:  8th IEC - IEEE Smart Energy Standardization Coordination Workshop (In collaboration with BIS, IEC and IEEE)"><img src="https://live.staticflickr.com/65535/53604002891_7d641c2026_z.jpg" width="580" height="400" alt="ISUW_2024:  8th IEC - IEEE Smart Energy Standardization Coordination Workshop (In collaboration with BIS, IEC and IEEE)"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
          </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="clearfix"></div>
          <h3 class="p-head">ISUW_2024: INAUGURATION OF ISUW 2024 CONFERENCE AND EXHIBITION | 13 Mar 2024
          </h3>
          <ul>
          <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720315575180" title="ISUW_2024: INAUGURATION OF ISUW 2024 CONFERENCE AND EXHIBITION"><img src="https://live.staticflickr.com/65535/53601292949_a668b9dc6c_z.jpg" width="580" height="400" alt="ISUW_2024: INAUGURATION OF ISUW 2024 CONFERENCE AND EXHIBITION"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
          </ul>
      </div>
      <div class="col-md-6">
        <div class="clearfix"></div>
          <h3 class="p-head">ISUW_2024: Session-1: Digitalization of Utilities, Digitalization Roadmaps; Digital Twins | 13 Mar 2024
          </h3>
          <ul>
          <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720315581031" title="ISUW_2024: Session-1: Digitalization of Utilities, Digitalization Roadmaps; Digital Twins"><img src="https://live.staticflickr.com/65535/53601313394_e956e71b48_z.jpg" width="580" height="400" alt="ISUW_2024: Session-1: Digitalization of Utilities, Digitalization Roadmaps; Digital Twins"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
          </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="clearfix"></div>
          <h3 class="p-head">ISUW_2024: Session-2: Emerging Technologies for Utilities (In Collaboration with DST) | 13 Mar 2024
          </h3>
          <ul>
          <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720315586343" title="ISUW_2024: Session-2: Emerging Technologies for Utilities (In Collaboration with DST)"><img src="https://live.staticflickr.com/65535/53601450150_a7a71d0d78_z.jpg" width="580" height="400" alt="ISUW_2024: Session-2: Emerging Technologies for Utilities (In Collaboration with DST)"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
          </ul>
      </div>
      <div class="col-md-6">
        <div class="clearfix"></div>
          <h3 class="p-head">ISUW_2024: 13th EU - India Smart Energy Workshop (in Collaboration with European Union) | 13 Mar 2024
          </h3>
          <ul>
          <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720315574452" title="ISUW_2024: 13th EU - India Smart Energy Workshop (in Collaboration with European Union)"><img src="https://live.staticflickr.com/65535/53601551700_84ee17f970_z.jpg" width="580" height="400" alt="ISUW_2024: 13th EU - India Smart Energy Workshop (in Collaboration with European Union)"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
          </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="clearfix"></div>
          <h3 class="p-head">ISUW_2024: 1ST INDIA - BRAZIL Smart Energy Workshop - THEMES: T&D LOSS REDUCTION AND BIOFUELS (In Collaboration with LATAM Smart Grid Forum and Brazil-India Chamber of Commerce) | 13 Mar 2024
          </h3>
          <ul>
          <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720315575572" title="ISUW_2024: 1ST INDIA - BRAZIL Smart Energy Workshop - THEMES: T&amp;D LOSS REDUCTION AND BIOFUELS (In Collaboration with LATAM Smart Grid Forum and Brazil-India Chamber of Commerce)"><img src="https://live.staticflickr.com/65535/53601384413_5bec1665a2_z.jpg" width="580" height="400" alt="ISUW_2024: 1ST INDIA - BRAZIL Smart Energy Workshop - THEMES: T&amp;D LOSS REDUCTION AND BIOFUELS (In Collaboration with LATAM Smart Grid Forum and Brazil-India Chamber of Commerce)"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
          </ul>
      </div>
      <div class="col-md-6">
        <div class="clearfix"></div>
          <h3 class="p-head">ISUW_2024: 10th US – India Smart Energy Workshop - Theme: (1) Resource Adequacy Planning Planning for Net Zero Power Systems, (2) Energy Storage Systems (In Collaboration with US DOC, USIBC, USAID and CSIS) | 13 Mar 2024
          </h3>
          <ul>
          <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720315597689" title="ISUW_2024: 10th US – India Smart Energy Workshop - Theme: (1) Resource Adequacy Planning Planning for Net Zero Power Systems, (2) Energy Storage Systems (In Collaboration with US DOC, USIBC, USAID and CSIS)"><img src="https://live.staticflickr.com/65535/53601519954_6664de48b4_z.jpg" width="580" height="400" alt="ISUW_2024: 10th US – India Smart Energy Workshop - Theme: (1) Resource Adequacy Planning Planning for Net Zero Power Systems, (2) Energy Storage Systems (In Collaboration with US DOC, USIBC, USAID and CSIS)"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
          </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="clearfix"></div>
          <h3 class="p-head">ISUW_2024: SPECIAL PLENARY 1: “The short List of Climate Actions that will Work” by Michael Barnard, Founder of “The Future is Electric” | 13 Mar 2024
          </h3>
          <ul>
          <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720315702644" title="ISUW_2024: SPECIAL PLENARY 1: “The short List of Climate Actions that will Work” by Michael Barnard, Founder of “The Future is Electric”"><img src="https://live.staticflickr.com/65535/53612200584_475063572c_z.jpg" width="580" height="400" alt="ISUW_2024: SPECIAL PLENARY 1: “The short List of Climate Actions that will Work” by Michael Barnard, Founder of “The Future is Electric”"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
          </ul>
      </div>
      <div class="col-md-6">
        <div class="clearfix"></div>
          <h3 class="p-head">ISUW_2024: Session - 3: Global Lessions on Smart Metering - Session with AMISPs and DISCOMS (Session Partners - REC, PFC, IntelliSmart and USAID/SAREP) | 14 Mar 2024
          </h3>
          <ul>
          <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720315702269" title="ISUW_2024: Session - 3: Global Lessions on Smart Metering - Session with AMISPs and DISCOMS (Session Partners - REC, PFC, IntelliSmart and USAID/SAREP)"><img src="https://live.staticflickr.com/65535/53610942757_d492fa3141_z.jpg" width="580" height="400" alt="ISUW_2024: Session - 3: Global Lessions on Smart Metering - Session with AMISPs and DISCOMS (Session Partners - REC, PFC, IntelliSmart and USAID/SAREP)"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
          </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="clearfix"></div>
          <h3 class="p-head">ISUW_2024: Session 4: Energy Positive Smart Buildings and Campuses (In Collaboration with USAID/SAREP) | 14 Mar 2024
          </h3>
          <ul>
          <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720315596690" title="ISUW_2024: Session 4: Energy Positive Smart Buildings and Campuses (In Collaboration with USAID/SAREP)"><img src="https://live.staticflickr.com/65535/53602114122_656c849931_z.jpg" width="580" height="400" alt="ISUW_2024: Session 4: Energy Positive Smart Buildings and Campuses (In Collaboration with USAID/SAREP)"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
          </ul>
      </div>
      <div class="col-md-6">
        <div class="clearfix"></div>
          <h3 class="p-head">ISUW_2024: 3rd India - Germany Smart Energy Workshop - Theme: Demand Response(In Collaboration with GIZ) | 14 Mar 2024
          </h3>
          <ul>
          <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720315611323" title="ISUW_2024: 3rd India - Germany Smart Energy Workshop - Theme: Demand Response(In Collaboration with GIZ)"><img src="https://live.staticflickr.com/65535/53603349226_72e6e3087a_z.jpg" width="580" height="400" alt="ISUW_2024: 3rd India - Germany Smart Energy Workshop - Theme: Demand Response(In Collaboration with GIZ)"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
          </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="clearfix"></div>
          <h3 class="p-head">ISUW_2024: Workshop on Innovative Technologies for Energy Transition (In Collaboration With The UK Government) | 14 Mar 2024
          </h3>
          <ul>  
          <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720315611423" title="ISUW_2024: Workshop on Innovative Technologies for Energy Transition (In Collaboration With The UK Government)"><img src="https://live.staticflickr.com/65535/53603356801_14ecedda00_z.jpg" width="580" height="400" alt="ISUW_2024: Workshop on Innovative Technologies for Energy Transition (In Collaboration With The UK Government)"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
          </ul>
      </div>
      <div class="col-md-6">
        <div class="clearfix"></div>
          <h3 class="p-head">ISUW_2024: Session-5: Virtual Power Plants (VPPS) and Power System Flexibility | 14 Mar 2024
          </h3>
          <ul>
          <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720315606601" title="ISUW_2024: Session-5: Virtual Power Plants (VPPS) and Power System Flexibility"><img src="https://live.staticflickr.com/65535/53603709729_7db9093bfa_z.jpg" width="580" height="400" alt="ISUW_2024: Session-5: Virtual Power Plants (VPPS) and Power System Flexibility"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
          </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="clearfix"></div>
          <h3 class="p-head">ISUW_2024: The Cooling Challenge – Cooling as a Service against Monthly Fee through District Cooling Systems (DCS) (In Collaboration with BEE) | 14 Mar 2024
          </h3>
          <ul>
          <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720315606746" title="ISUW_2024: The Cooling Challenge – Cooling as a Service against Monthly Fee through District Cooling Systems (DCS) (In Collaboration with BEE)"><img src="https://live.staticflickr.com/65535/53603376026_a6015f4795_z.jpg" width="580" height="400" alt="ISUW_2024: The Cooling Challenge – Cooling as a Service against Monthly Fee through District Cooling Systems (DCS) (In Collaboration with BEE)"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
          </ul>
      </div>
      <div class="col-md-6">
        <div class="clearfix"></div>
          <h3 class="p-head">ISUW_2024: Session - 6: Climate Resilience of Future Grids (In Collaboration with CDRI) | 14 Mar 2024
          </h3>
          <ul>
          <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720315599222" title="ISUW_2024: Session - 6: Climate Resilience of Future Grids (In Collaboration with CDRI)"><img src="https://live.staticflickr.com/65535/53603727399_8fe079f7cd_z.jpg" width="580" height="400" alt="ISUW_2024: Session - 6: Climate Resilience of Future Grids (In Collaboration with CDRI)"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
          </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="clearfix"></div>
          <h3 class="p-head">ISUW_2024: Session - 7: Nuclear Renaissance and the Role of SMR in Net Zero Power Systems (In Collaboration with NEI, EDF, BARC/NPCIL and NTPC) | 14 Mar 2024
          </h3>
          <ul>
          <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720315612173" title="ISUW_2024: Session - 7: Nuclear Renaissance and the Role of SMR in Net Zero Power Systems (In Collaboration with NEI, EDF, BARC/NPCIL and NTPC)"><img src="https://live.staticflickr.com/65535/53602542257_4f3e100f56_z.jpg" width="580" height="400" alt="ISUW_2024: Session - 7: Nuclear Renaissance and the Role of SMR in Net Zero Power Systems (In Collaboration with NEI, EDF, BARC/NPCIL and NTPC)"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
          </ul>
      </div>
      <div class="col-md-6">
        <div class="clearfix"></div>
          <h3 class="p-head">ISUW_2024: Presentation of Select Technical Papers | 14 Mar 2024
          </h3>
          <ul>
          <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720315607501" title="ISUW_2024: Presentation of Select Technical Papers"><img src="https://live.staticflickr.com/65535/53603643003_480f29da21_z.jpg" width="580" height="400" alt="ISUW_2024: Presentation of Select Technical Papers"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
          </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="clearfix"></div>
          <h3 class="p-head">ISUW_2024: Session – 8: Super Grids for Energy Transition and Energy Security - Cross Border Electricity Trade in South Asia and Interconnection of Regional Grids in Asia (Sessin Partner - GO15, PGCIL*, UNEP*, USAID* and Hitachi Energy) | 14 Mar 2024
          </h3>
          <ul>
          <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720315601845" title="ISUW_2024: Session – 8: Super Grids for Energy Transition and Energy Security - Cross Border Electricity Trade in South Asia and Interconnection of Regional Grids in Asia (Sessin Partner - GO15, PGCIL*, UNEP*, USAID* and Hitachi Energy)"><img src="https://live.staticflickr.com/65535/53603463286_e272c284f5_z.jpg" width="580" height="400" alt="ISUW_2024: Session – 8: Super Grids for Energy Transition and Energy Security - Cross Border Electricity Trade in South Asia and Interconnection of Regional Grids in Asia (Sessin Partner - GO15, PGCIL*, UNEP*, USAID* and Hitachi Energy)"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
          </ul>
      </div>
      <div class="col-md-6">
        <div class="clearfix"></div>
          <h3 class="p-head">ISUW_2024: Session - 9: Long Duration Energy Storage Systems (LDES) | 15 Mar 2024
          </h3>
          <ul>
          <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720315600737" title="ISUW_2024: Session - 9: Long Duration Energy Storage Systems (LDES)"><img src="https://live.staticflickr.com/65535/53603719698_0ba3131106_z.jpg" width="580" height="400" alt="ISUW_2024: Session - 9: Long Duration Energy Storage Systems (LDES)"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
          </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="clearfix"></div>
          <h3 class="p-head">ISUW_2024: Session - 10: Policy and Regulatory Support for Fast Tracking The Transition to Net Zero Power System | 15 Mar 2024
          </h3>
          <ul>
          <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720315623009" title="ISUW_2024: Session - 10: Policy and Regulatory Support for Fast Tracking The Transition to Net Zero Power System"><img src="https://live.staticflickr.com/65535/53602668977_43f0c93f45_z.jpg" width="580" height="400" alt="ISUW_2024: Session - 10: Policy and Regulatory Support for Fast Tracking The Transition to Net Zero Power System"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
          </ul>
      </div>
      <div class="col-md-6">
        <div class="clearfix"></div>
          <h3 class="p-head">ISUW_2024: Session - 11: Evolving Trends in Electric Mobility: MW-scale Charging Systems, Electric Trucks, School Bus Electrification, V2X Systems, Electric Mobility and Air Quality | 15 Mar 2024
          </h3>
          <ul>
          <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720315601417" title="ISUW_2024: Session - 11: Evolving Trends in Electric Mobility: MW-scale Charging Systems, Electric Trucks, School Bus Electrification, V2X Systems, Electric Mobility and Air Quality"><img src="https://live.staticflickr.com/65535/53603903339_36cbf5f44d_z.jpg" width="580" height="400" alt="ISUW_2024: Session - 11: Evolving Trends in Electric Mobility: MW-scale Charging Systems, Electric Trucks, School Bus Electrification, V2X Systems, Electric Mobility and Air Quality"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
          </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="clearfix"></div>
          <h3 class="p-head">ISUW_2024: Session - 12: Digital Tools for DER Management | 15 Mar 2024
          </h3>
          <ul>
          <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720315614863" title="ISUW_2024: Session - 12: Digital Tools for DER Management"><img src="https://live.staticflickr.com/65535/53602789412_7945b48495_z.jpg" width="580" height="400" alt="ISUW_2024: Session - 12: Digital Tools for DER Management"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
          </ul>
      </div>
      <div class="col-md-6">
        <div class="clearfix"></div>
          <h3 class="p-head">ISUW_2024: Smart Utilities Integration - Electricity + City Gas + Water (In Collaboration with NGS & India CGD Forum) | 15 Mar 2024
          </h3>
          <ul>
          <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720315610616" title="ISUW_2024: Smart Utilities Integration - Electricity + City Gas + Water (In Collaboration with NGS &amp; India CGD Forum)"><img src="https://live.staticflickr.com/65535/53604152090_f42df19785_z.jpg" width="580" height="400" alt="ISUW_2024: Smart Utilities Integration - Electricity + City Gas + Water (In Collaboration with NGS &amp; India CGD Forum)"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
          </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="clearfix"></div>
          <h3 class="p-head">ISUW_2024: Session -13: Power Markets and Carbon Markets (Session Partner -  BEE and IEX) | 15 Mar 2024
          </h3>
          <ul>
          <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720315611101" title="ISUW_2024: Session -13: Power Markets and Carbon Markets (Session Partner -  BEE and IEX)"><img src="https://live.staticflickr.com/65535/53603947968_91ecd467eb_z.jpg" width="580" height="400" alt="ISUW_2024: Session -13: Power Markets and Carbon Markets (Session Partner -  BEE and IEX)"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
          </ul>
      </div>
      <div class="col-md-6">
        <div class="clearfix"></div>
          <h3 class="p-head">ISUW_2024: Session -14: Evolving Trends in Utility Automation (Session Partner -  C-DAC ) | 15 Mar 2024
          </h3>
          <ul>
          <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720315606090" title="ISUW_2024: Session -14: Evolving Trends in Utility Automation (Session Partner -  C-DAC )"><img src="https://live.staticflickr.com/65535/53603838296_68058c08db_z.jpg" width="580" height="400" alt="ISUW_2024: Session -14: Evolving Trends in Utility Automation (Session Partner -  C-DAC )"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
          </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="clearfix"></div>
          <h3 class="p-head">ISUW_2024: ISGF Innovation Awards Ceremony and Gala Dinner | 15 Mar 2024
          </h3>
          <ul>
          <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720315675305" title="ISUW_2024: ISGF Innovation Awards"><img src="https://live.staticflickr.com/65535/53611556635_9af995bd2c_z.jpg" width="580" height="400" alt="ISUW_2024: ISGF Innovation Awards"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
          </ul>
      </div>
      <div class="col-md-6">
        <div class="clearfix"></div>
          <h3 class="p-head">ISUW_2024: Technical Tours and Demonstrations | 16 Mar 2024
          </h3>
          <ul>
          <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720315919865" title="ISUW_2024: Technical Tours and Demonstrations | 16th March 2024"><img src="https://live.staticflickr.com/65535/53629091429_89e20af6f6_z.jpg" width="580" height="400" alt="ISUW_2024: Technical Tours and Demonstrations | 16th March 2024"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
          </ul>
      </div>
    </div>
  </div>
</div>
  <!-- end  -->  
<div id="2023" class="tabcontent" style="display: block;">
 <div class="container slider_margin1">
  <div class="row">
    <div class="col-md-6">
      <div class="clearfix"></div>
        <h3 class="p-head">ISUW_2023: SPECIAL WORKSHOPS AND MASTER CLASSES: Introductory Course on Transformer Models and Generative Artificial Intelligence Tools | 28 Feb 2023
        </h3>
        <ul>
        <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306626433" title="ISUW_2023: SPECIAL WORKSHOPS AND MASTER CLASSES: Introductory Course on Transformer Models and Generative Artificial Intelligence Tools"><img src="https://live.staticflickr.com/65535/52739014633_e79fbe9435_z.jpg" width="488" height="170" alt="ISUW_2023: SPECIAL WORKSHOPS AND MASTER CLASSES: Introductory Course on Transformer Models and Generative Artificial Intelligence Tools"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
        </ul>
    </div>
    <div class="col-md-6">
      <div class="clearfix"></div>
        <h3 class="p-head">ISUW_2023: SPECIAL WORKSHOPS AND MASTER CLASSES: OCPP TECHNICAL WORKSHOP AND TRAINING (In Collaboration with OPEN CHARGE ALLIANCE, Netherlands) | 28 Feb 2023
        </h3>
        <ul>
        <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306705811" title="ISUW_2023: SPECIAL WORKSHOPS AND MASTER CLASSES: OCPP TECHNICAL WORKSHOP AND TRAINING (In Collaboration with OPEN CHARGE ALLIANCE, Netherlands)"><img src="https://live.staticflickr.com/65535/52747649010_462f8246ef_z.jpg" width="488" height="170" alt="ISUW_2023: SPECIAL WORKSHOPS AND MASTER CLASSES: OCPP TECHNICAL WORKSHOP AND TRAINING (In Collaboration with OPEN CHARGE ALLIANCE, Netherlands)"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
        </ul>
    </div>
  </div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2023: IEEE EDUCATION - MASTER CLASS: ENERGY TRANSITION TO NET ZERO POWER SYSTEM – STRATEGIES AND PATHWAYS | 28 Feb 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306613167" title="ISUW_2023: IEEE EDUCATION - MASTER CLASS: ENERGY TRANSITION TO NET ZERO POWER SYSTEM – STRATEGIES AND PATHWAYS"><img src="https://live.staticflickr.com/65535/52738085052_05f8a655b8_z.jpg" width="488" height="170" alt="ISUW_2023: IEEE EDUCATION - MASTER CLASS: ENERGY TRANSITION TO NET ZERO POWER SYSTEM – STRATEGIES AND PATHWAYS"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2023: SPECIAL WORKSHOPS AND MASTER CLASSES: IEC-IEEE SMART ENERGY STANDARDIZATION COORDINATION WORKSHOP (IN COLLABORATION WITH BIS, ISGF, IEC AND IEEE) | 28 Feb 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306609430" title="ISUW_2023: SPECIAL WORKSHOPS AND MASTER CLASSES: IEC-IEEE SMART ENERGY STANDARDIZATION COORDINATION WORKSHOP (IN COLLABORATION WITH BIS, ISGF, IEC AND IEEE)"><img src="https://live.staticflickr.com/65535/52738919109_63907c9c34_z.jpg" width="488" height="170" alt="ISUW_2023: SPECIAL WORKSHOPS AND MASTER CLASSES: IEC-IEEE SMART ENERGY STANDARDIZATION COORDINATION WORKSHOP (IN COLLABORATION WITH BIS, ISGF, IEC AND IEEE)"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div></div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">INAUGURATION OF ISUW 2023 CONFERENCE AND EXHIBITION | 01 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306630613" title="ISUW_2023: INAUGURATION OF ISUW 2023 CONFERENCE AND EXHIBITION"><img src="https://live.staticflickr.com/65535/52739083114_64beb64d77_z.jpg" width="488" height="170" alt="ISUW_2023: INAUGURATION OF ISUW 2023 CONFERENCE AND EXHIBITION"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2023: THEME-A: SESSION-1: VISION FOR A NET ZERO POWER SECTOR (SESSION PARTNER-HITACHI ENERGY) | 01 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306619101" title="ISUW_2023: THEME-A: SESSION-1: VISION FOR A NET ZERO POWER SECTOR (SESSION PARTNER-HITACHI ENERGY)"><img src="https://live.staticflickr.com/65535/52739960169_c0ef4ca7b4_z.jpg" width="488" height="170" alt="ISUW_2023: THEME-A: SESSION-1: VISION FOR A NET ZERO POWER SECTOR (SESSION PARTNER-HITACHI ENERGY)"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div></div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2023: THEME-A: SESSION-2: EVOLVING ARCHITECTURE OF THE NET ZERO POWER SYSTEM | 01 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306621350" title="ISUW_2023: THEME-A: SESSION-2: EVOLVING ARCHITECTURE OF THE NET ZERO POWER SYSTEM"><img src="https://live.staticflickr.com/65535/52739234072_cbfae23f5e_z.jpg" width="488" height="170" alt="ISUW_2023: THEME-A: SESSION-2: EVOLVING ARCHITECTURE OF THE NET ZERO POWER SYSTEM"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2023: THEME-E: SESSION-2: CUSTOMER EXPERIENCE IN THE DIGITAL AGE | 01 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306619671" title="ISUW_2023: THEME-E: SESSION-2: CUSTOMER EXPERIENCE IN THE DIGITAL AGE"><img src="https://live.staticflickr.com/65535/52740187065_bdc8ac1984_z.jpg" width="488" height="170" alt="ISUW_2023: THEME-E: SESSION-2: CUSTOMER EXPERIENCE IN THE DIGITAL AGE"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div></div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2023: THEME-E: SESSION-1: REGULATIONS FOR THE NET ZERO POWER SYSTEM | 01 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306637209" title="ISUW_2023: THEME-E: SESSION-1: REGULATIONS FOR THE NET ZERO POWER SYSTEM"><img src="https://live.staticflickr.com/65535/52739809441_0204333278_z.jpg" width="488" height="170" alt="ISUW_2023: THEME-E: SESSION-1: REGULATIONS FOR THE NET ZERO POWER SYSTEM"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2023: 9th US - INDIA SMART GRID WORKSHOP In Partnership with US Commercial Service and US-India Business Council | 01 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306637579" title="ISUW_2023: 9th US - INDIA SMART GRID WORKSHOP In Partnership with US Commercial Service and US-India Business Council"><img src="https://live.staticflickr.com/65535/52740328598_cf2f833fb4_z.jpg" width="488" height="170" alt="ISUW_2023: 9th US - INDIA SMART GRID WORKSHOP In Partnership with US Commercial Service and US-India Business Council"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div></div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2023: SMART COMMUNICATIONS FOR SMART UTILITIES AND SMART CITIES (In collaboration with DOT, TEC and TSDSI) | 01 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306627012" title="ISUW_2023: SMART COMMUNICATIONS FOR SMART UTILITIES AND SMART CITIES (In collaboration with DOT, TEC and TSDSI)"><img src="https://live.staticflickr.com/65535/52740146489_bfb6e20531_z.jpg" width="488" height="170" alt="ISUW_2023: SMART COMMUNICATIONS FOR SMART UTILITIES AND SMART CITIES (In collaboration with DOT, TEC and TSDSI)"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2023: SPECIAL SESSION ON HYDROGEN MISSION (Lead by Ministry of New and Renewable Energy and NITI Aayog) | 01 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306638344" title="ISUW_2023: SPECIAL SESSION ON HYDROGEN MISSION (Lead by Ministry of New and Renewable Energy and NITI Aayog)"><img src="https://live.staticflickr.com/65535/52739398002_142fde238c_z.jpg" width="488" height="170" alt="ISUW_2023: SPECIAL SESSION ON HYDROGEN MISSION (Lead by Ministry of New and Renewable Energy and NITI Aayog)"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div></div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2023: THEME-A: SESSION-3 - CLIMATE PROOFING OF FUTURE GRIDS AND ADVANCED MATERIALS FOR EXTREME WEATHER EVENTS | 02 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306647915" title="ISUW_2023: THEME-A: SESSION-3 - CLIMATE PROOFING OF FUTURE GRIDS AND ADVANCED MATERIALS FOR EXTREME WEATHER EVENTS"><img src="https://live.staticflickr.com/65535/52741669012_d8aca4d158_z.jpg" width="488" height="170" alt="ISUW_2023: THEME-A: SESSION-3 - CLIMATE PROOFING OF FUTURE GRIDS AND ADVANCED MATERIALS FOR EXTREME WEATHER EVENTS"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2023: THEME-C: SESSION-1 - 250 MILLION SMART METER ROLLOUT – PROGRESS AND CHALLENGES (IN COLLABORATION WITH UK GOVERNMENT) | 02 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306664209" title="ISUW_2023: THEME-C: SESSION-1 - 250 MILLION SMART METER ROLLOUT – PROGRESS AND CHALLENGES (IN COLLABORATION WITH UK GOVERNMENT)"><img src="https://live.staticflickr.com/65535/52742813428_f0e9cc7916_z.jpg" width="488" height="170" alt="ISUW_2023: THEME-C: SESSION-1 - 250 MILLION SMART METER ROLLOUT – PROGRESS AND CHALLENGES (IN COLLABORATION WITH UK GOVERNMENT)"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div></div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head"> ISUW_2023: THEME-B: SESSION-1: VISION FOR A NET ZERO TRANSPORT SECTOR IN INDIA | 02 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306652660" title="ISUW_2023: THEME-B: SESSION-1: VISION FOR A NET ZERO TRANSPORT SECTOR IN INDIA"><img src="https://live.staticflickr.com/65535/52743136043_c04980c83e_z.jpg" width="488" height="170" alt="ISUW_2023: THEME-B: SESSION-1: VISION FOR A NET ZERO TRANSPORT SECTOR IN INDIA"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2023: THEME-B: SESSION-2: 50K ELECTRIC BUS PROGRAM | 02 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306651521" title="ISUW_2023: THEME-B: SESSION-2: 50K ELECTRIC BUS PROGRAM"><img src="https://live.staticflickr.com/65535/52743252573_6a49531bb9_z.jpg" width="488" height="170" alt="ISUW_2023: THEME-B: SESSION-2: 50K ELECTRIC BUS PROGRAM"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div></div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2023: THEME-E: SESSION-3: AI, ML, ROBOTICS AND GENERATIVE AI TOOLS FOR UTILITIES | 02 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306652271" title="ISUW_2023: THEME-E: SESSION-3: AI, ML, ROBOTICS AND GENERATIVE AI TOOLS FOR UTILITIES"><img src="https://live.staticflickr.com/65535/52743261825_01b6d64348_z.jpg" width="488" height="170" alt="ISUW_2023: THEME-E: SESSION-3: AI, ML, ROBOTICS AND GENERATIVE AI TOOLS FOR UTILITIES"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2023: THEME-E: SESSION-4: BLOCKCHAIN, WEB 3.0, METAVERSE FOR UTILITIES | 02 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306674668" title="ISUW_2023: THEME-E: SESSION-4: BLOCKCHAIN, WEB 3.0, METAVERSE FOR UTILITIES"><img src="https://live.staticflickr.com/65535/52743428828_2d503c45e5_z.jpg" width="488" height="170" alt="ISUW_2023: THEME-E: SESSION-4: BLOCKCHAIN, WEB 3.0, METAVERSE FOR UTILITIES"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div></div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2023: DISTRICT COOLING SYSTEM (DCS) In Collaboration with BEE, GIZ and APUEA | 02 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306682434" title="ISUW_2023: DISTRICT COOLING SYSTEM (DCS) In Collaboration with BEE, GIZ and APUEA"><img src="https://live.staticflickr.com/65535/52744049501_482de8c8c4_z.jpg" width="488" height="170" alt="ISUW_2023: DISTRICT COOLING SYSTEM (DCS) In Collaboration with BEE, GIZ and APUEA"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2023: 12TH EU - INDIA SMART GRID WORKSHOP - SMART SOLUTIONS FOR RENEWABLES INTEGRATION (In collaboration with European Union) | 02 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306691479" title="ISUW_2023: 12TH EU - INDIA SMART GRID WORKSHOP - SMART SOLUTIONS FOR RENEWABLES INTEGRATION (In collaboration with European Union)"><img src="https://live.staticflickr.com/65535/52744318092_dc31a85365_z.jpg" width="488" height="170" alt="ISUW_2023: 12TH EU - INDIA SMART GRID WORKSHOP - SMART SOLUTIONS FOR RENEWABLES INTEGRATION (In collaboration with European Union)"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div></div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2023: 2ND GERMANY - INDIA SMART GRID WORKSHOP LEAD BY GIZ | 02 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306681990" title="ISUW_2023: 2ND GERMANY - INDIA SMART GRID WORKSHOP LEAD BY GIZ"><img src="https://live.staticflickr.com/65535/52745269611_2523c8aaa5_z.jpg" width="488" height="170" alt="ISUW_2023: 2ND GERMANY - INDIA SMART GRID WORKSHOP LEAD BY GIZ"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2023: THEME-E: SESSION-5: ENERGY POSITIVE BUILDINGS AND CAMPUSES (IN COLLABORATION WITH GBCI) | 02 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306683600" title="ISUW_2023: THEME-E: SESSION-5: ENERGY POSITIVE BUILDINGS AND CAMPUSES (IN COLLABORATION WITH GBCI)"><img src="https://live.staticflickr.com/65535/52745853818_900884d004_z.jpg" width="488" height="170" alt="ISUW_2023: THEME-E: SESSION-5: ENERGY POSITIVE BUILDINGS AND CAMPUSES (IN COLLABORATION WITH GBCI)"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div></div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2023: Cross-Border Electricity Trade in the South Asian Region In collaboration with the EU | 02 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306684160" title="ISUW_2023: Cross-Border Electricity Trade in the South Asian Region In collaboration with the EU"><img src="https://live.staticflickr.com/65535/52745686044_4886b7c0a6_z.jpg" width="488" height="170" alt="ISUW_2023: Cross-Border Electricity Trade in the South Asian Region In collaboration with the EU"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2023: THEME-E: SESSION-7: POLICIES AND REGULATIONS TO PROMOTE DIGITAL MANAGEMENT OF ROOFTOP PV  (Joint Event with International Energy Agency) | 02 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306703613" title="ISUW_2023: THEME-E: SESSION-7: POLICIES AND REGULATIONS TO PROMOTE DIGITAL MANAGEMENT OF ROOFTOP PV (Joint Event with International Energy Agency)"><img src="https://live.staticflickr.com/65535/52745974478_853811605c_z.jpg" width="488" height="170" alt="ISUW_2023: THEME-E: SESSION-7: POLICIES AND REGULATIONS TO PROMOTE DIGITAL MANAGEMENT OF ROOFTOP PV (Joint Event with International Energy Agency)"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div></div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2023: SMART WATER DISTRIBUTION IN COLLABORATION WITH CENTRAL BOARD OF IRRIGATION & POWER AND EVERYTHING ABOUT WATER | 02 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306685060" title="ISUW_2023: SMART WATER DISTRIBUTION IN COLLABORATION WITH CENTRAL BOARD OF IRRIGATION &amp; POWER AND EVERYTHING ABOUT WATER"><img src="https://live.staticflickr.com/65535/52745909400_a39a76b8be_z.jpg" width="488" height="170" alt="ISUW_2023: SMART WATER DISTRIBUTION IN COLLABORATION WITH CENTRAL BOARD OF IRRIGATION &amp; POWER AND EVERYTHING ABOUT WATER"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head"> ISUW_2023: SPECIAL PLENARY 2 ARCHITECTURE AND ENERGY SYSTEMS FOR COLONIZING THE MOON AND THE MARS | 02 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306726738" title="ISUW_2023: SPECIAL PLENARY 2 ARCHITECTURE AND ENERGY SYSTEMS FOR COLONIZING THE MOON AND THE MARS"><img src="https://live.staticflickr.com/65535/52746682402_1bd5ba2f23_z.jpg" width="488" height="170" alt="ISUW_2023: SPECIAL PLENARY 2 ARCHITECTURE AND ENERGY SYSTEMS FOR COLONIZING THE MOON AND THE MARS"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div></div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2023: THEME-B: SESSION-3: EVOLVING TRENDS IN ELECTRIC MOBILITY - GREEN MOBILITY, GRID INTEGRATED VEHICLES (GIV), AUTONOMOUS GROUND VEHICLES (AGV) | 03 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306701559" title="ISUW_2023: THEME-B: SESSION-3: EVOLVING TRENDS IN ELECTRIC MOBILITY - GREEN MOBILITY, GRID INTEGRATED VEHICLES (GIV), AUTONOMOUS GROUND VEHICLES (AGV)"><img src="https://live.staticflickr.com/65535/52745580431_dc94a589b8_z.jpg" width="488" height="170" alt="ISUW_2023: THEME-B: SESSION-3: EVOLVING TRENDS IN ELECTRIC MOBILITY - GREEN MOBILITY, GRID INTEGRATED VEHICLES (GIV), AUTONOMOUS GROUND VEHICLES (AGV)"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2023: THEME-C: SESSION-2: DIGITALIZATION OF UTILITIES, DIGITAL TWINS AND DIGITALIZATION ROADMAPS | 03 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306689572" title="ISUW_2023: THEME-C: SESSION-2: DIGITALIZATION OF UTILITIES, DIGITAL TWINS AND DIGITALIZATION ROADMAPS"><img src="https://live.staticflickr.com/65535/52746100768_23db969917_z.jpg" width="488" height="170" alt="ISUW_2023: THEME-C: SESSION-2: DIGITALIZATION OF UTILITIES, DIGITAL TWINS AND DIGITALIZATION ROADMAPS"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div></div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2023: THEME-D: SESSION-1: ELECTRIC HIGHWAYS | 03 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306684536" title="ISUW_2023: THEME-D: SESSION-1: ELECTRIC HIGHWAYS"><img src="https://live.staticflickr.com/65535/52746035525_9112257b1b_z.jpg" width="488" height="170" alt="ISUW_2023: THEME-D: SESSION-1: ELECTRIC HIGHWAYS"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head"> ISUW_2023: THEME-C: SESSION-3: POWER SYSTEM FLEXIBILITY - STRATEGY AND SOLUTIONS | 03 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306715663" title="ISUW_2023: THEME-C: SESSION-3: POWER SYSTEM FLEXIBILITY - STRATEGY AND SOLUTIONS"><img src="https://live.staticflickr.com/65535/52746945778_e19bd3d083_z.jpg" width="488" height="170" alt="ISUW_2023: THEME-C: SESSION-3: POWER SYSTEM FLEXIBILITY - STRATEGY AND SOLUTIONS"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div></div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2023: THEME-D: SESSION-2: MW-SCALE CHARGING SYSTEMS FOR EVS, TRUCKS AND BUSES, BOATS, PLANES AND MINING MACHINERY | 03 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306696910" title="ISUW_2023: THEME-D: SESSION-2: MW-SCALE CHARGING SYSTEMS FOR EVS, TRUCKS AND BUSES, BOATS, PLANES AND MINING MACHINERY"><img src="https://live.staticflickr.com/65535/52746712424_5bc69240ab_z.jpg" width="488" height="170" alt="ISUW_2023: THEME-D: SESSION-2: MW-SCALE CHARGING SYSTEMS FOR EVS, TRUCKS AND BUSES, BOATS, PLANES AND MINING MACHINERY"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2023: THEME-E: SESSION-6: CARBON MARKETS IN COLLABORATION WITH INDIAN ENERGY EXCHANGE (IEX) | 03 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306702727" title="ISUW_2023: THEME-E: SESSION-6: CARBON MARKETS IN COLLABORATION WITH INDIAN ENERGY EXCHANGE (IEX)"><img src="https://live.staticflickr.com/65535/52747056890_0542cbcec9_z.jpg" width="488" height="170" alt="ISUW_2023: THEME-E: SESSION-6: CARBON MARKETS IN COLLABORATION WITH INDIAN ENERGY EXCHANGE (IEX)"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div></div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2023: ROUNDTABLE ON INTERCONNECTION OF REGIONAL GRIDS IN   ASIA: GCC GRID – SOUTH ASIA GRID – ASEAN GRID (In Partnership with USAID and European Union) | 03 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306697345" title="ISUW_2023: ROUNDTABLE ON INTERCONNECTION OF REGIONAL GRIDS IN ASIA: GCC GRID – SOUTH ASIA GRID – ASEAN GRID (In Partnership with USAID and European Union)"><img src="https://live.staticflickr.com/65535/52746487306_6783c059d0_z.jpg" width="488" height="170" alt="ISUW_2023: ROUNDTABLE ON INTERCONNECTION OF REGIONAL GRIDS IN ASIA: GCC GRID – SOUTH ASIA GRID – ASEAN GRID (In Partnership with USAID and European Union)"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2023: LiFE and Relevance of Gender ( In collaboration with USAID SAREP) | 03 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306715654" title="ISUW_2023: LiFE and Relevance of Gender ( In collaboration with USAID SAREP)"><img src="https://live.staticflickr.com/65535/52746167687_a005db02f2_z.jpg" width="488" height="170" alt="ISUW_2023: LiFE and Relevance of Gender ( In collaboration with USAID SAREP)"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div></div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2023: PRESENTATION OF SELECT TECHNICAL PAPERS | 03 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306724373" title="ISUW_2023: PRESENTATION OF SELECT TECHNICAL PAPERS"><img src="https://live.staticflickr.com/65535/52747449440_5cacc3f019_z.jpg" width="488" height="170" alt="ISUW_2023: PRESENTATION OF SELECT TECHNICAL PAPERS"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2023: SMART CITY GAS DISTRIBUTION IN COLLABORATION WITH NATURAL GAS SOCIETY AND INDIA CGD FORUM | 03 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306703242" title="ISUW_2023: SMART CITY GAS DISTRIBUTION IN COLLABORATION WITH NATURAL GAS SOCIETY AND INDIA CGD FORUM"><img src="https://live.staticflickr.com/65535/52746920519_58c08afb33_z.jpg" width="488" height="170" alt="ISUW_2023: SMART CITY GAS DISTRIBUTION IN COLLABORATION WITH NATURAL GAS SOCIETY AND INDIA CGD FORUM"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div></div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2023: Innovation Award Ceremony and Gala Dinner | 03 Mar 2023
</h3>
<ul>
<iframe width="488" height="280" src="https://www.youtube.com/embed/t9ImZmEuxRU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2023: TECHNICAL TOURS AND DEMONSTRATIONS - Tour-1: NRLDC+REMC+TPDDL LAB + 10 MW BESS, New Delhi | 04 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306725232" title="ISUW_2023: TECHNICAL TOURS AND DEMONSTRATIONS - Tour-1: NRLDC+REMC+TPDDL LAB + 10 MW BESS, New Delhi"><img src="https://live.staticflickr.com/65535/52747974732_d3f4883369_z.jpg" width="488" height="170" alt="ISUW_2023: TECHNICAL TOURS AND DEMONSTRATIONS - Tour-1: NRLDC+REMC+TPDDL LAB + 10 MW BESS, New Delhi"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div></div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">ISUW_2023: TECHNICAL TOURS AND DEMONSTRATIONS - Tour-2: 800 kV HVDC Station in AGRA Taj Mahal, Agra | 04 Mar 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306720821" title="ISUW_2023: TECHNICAL TOURS AND DEMONSTRATIONS - Tour-2: 800 kV HVDC Station in AGRA Taj Mahal, Agra"><img src="https://live.staticflickr.com/65535/52747965377_acdb4ee0a9_z.jpg" width="488" height="170" alt="ISUW_2023: TECHNICAL TOURS AND DEMONSTRATIONS - Tour-2: 800 kV HVDC Station in AGRA Taj Mahal, Agra"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">Training Programme on Digital Utility Manager | New Delhi | 15-17 March 2023
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306791309" title="TRAINING PROGRAMME ON DIGITAL UTILITY MANAGER"><img src="https://live.staticflickr.com/65535/52753291228_7b03e264f9_z.jpg" width="488" height="170" alt="TRAINING PROGRAMME ON DIGITAL UTILITY MANAGER"/></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div></div>


<div class ="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">RTI & ISGF Webinar on Electricity Distribution Creating the Change 20 August 2020
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157716774572452" title="RTI &amp; ISGF Webinar on Electricity Distribution Creating the Change"><img src="https://live.staticflickr.com/65535/50571679078_a08d1f04ba_z.jpg" width="488" height="170" alt="RTI &amp; ISGF Webinar on Electricity Distribution Creating the Change"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">Webinar - Electricity Distribution - Creating the Change on 20 August 2020 | Hosted by ISGF and RTI
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157715583554376" title="Webinar- Electricity Distribution - Creating the Change"><img src="https://live.staticflickr.com/65535/50254791827_61bfef0b32_z.jpg" width="488" height="170" alt="Webinar- Electricity Distribution - Creating the Change"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">India Smart Grid Forum with Business Sweden & Swedish Energy Agency in collaboration :Technical Workshop on Power Quality of Smart Grids & EV Charging Infrastructure | 28 August 2019
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157710582419778" title="India Smart Grid Forum with Business Sweden &amp; Swedish Energy Agency in collaboration :Technical Workshop on Power Quality of Smart Grids &amp; EV Charging Infrastructure"><img src="https://live.staticflickr.com/65535/48635475746_2a89a96b29_z.jpg" width="488" height="170" alt="India Smart Grid Forum with Business Sweden &amp; Swedish Energy Agency in collaboration :Technical Workshop on Power Quality of Smart Grids &amp; EV Charging Infrastructure"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>

<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">Day 2_Electric Mobility and Charging Infrastructure | 18 - 19 July 2019
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157709821711471" title="Day 2_Electric Mobility and Charging Infrastructure"><img src="https://live.staticflickr.com/65535/48354016071_9a1d329ab6_z.jpg" width="488" height="170" alt="Day 2_Electric Mobility and Charging Infrastructure"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">Day 1_Electric Mobility and Charging Infrastructure | 18 - 19 July 2019
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157709804153611" title="Day 1_Electric Mobility and Charging Infrastructure"><img src="https://live.staticflickr.com/65535/48346640262_18a6186777_z.jpg" width="488" height="170" alt="Day 1_Electric Mobility and Charging Infrastructure"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">Brainstorming Session on “Addressing India’s Urban Water Crisis using Smart Technologies | 17 July 2019
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157709825977782" title="Brainstorming Session on “Addressing India’s Urban Water Crisis using Smart Technologies"><img src="https://live.staticflickr.com/65535/48355146121_35a60a1b34_z.jpg" width="488" height="170" alt="Brainstorming Session on “Addressing India’s Urban Water Crisis using Smart Technologies"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">Stakeholder Consultation Workshop for presenting the Energy Storage Roadmap of India | Sovereign 1 Hall Le Meridian Hotel, New Delhi |  16 July 2019
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157709803356862" title="Stakeholder Consultation Workshop for presenting the Energy Storage Roadmap of India"><img src="https://live.staticflickr.com/65535/48345891257_1013288024_z.jpg" width="488" height="170" alt="Stakeholder Consultation Workshop for presenting the Energy Storage Roadmap of India"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>
</div></div>



<div id="2022" class="tabcontent" style="display: block;">
 <div class="container slider_margin1">
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">02 March 2022 | Conference Day 1 | Inauguration Of ISUW 2022 Conference And Exhibition | 11:30 ~ 13:30 (IST)
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297235073" title="INAUGURATION OF ISUW 2022 CONFERENCE AND EXHIBITION"><img src="https://live.staticflickr.com/65535/51928362740_5fa4c8e085_z.jpg" width="488" height="170" alt="INAUGURATION OF ISUW 2022 CONFERENCE AND EXHIBITION"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">02 March 2022 | Conference Day 1 | Thematic Session 1 | Digitalization Of Utilities And Digitalization Roadmaps | 14:00 ~ 16:00 (IST) 
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297231750" title="ISUW 2022: THEMATIC SESSION - 1 DIGITALIZATION OF UTILITIES AND DIGITALIZATION ROADMAPS"><img src="https://live.staticflickr.com/65535/51928638145_e7671f6ed9_z.jpg" width="488" height="170" alt="ISUW 2022: THEMATIC SESSION - 1 DIGITALIZATION OF UTILITIES AND DIGITALIZATION ROADMAPS"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">02 March 2022 | Conference Day 1 | Thematic Session 2 | Regulations For The Evolving “Green Grid” Of The 21st Century | 16:00 ~ 18:00 (IST)
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297241716" title="ISUW_2022: THEMATIC SESSION - 2 REGULATIONS FOR THE EVOLVING “GREEN GRID” OF THE 21ST CENTURY"><img src="https://live.staticflickr.com/65535/51927469447_478331597c_z.jpg" width="488" height="170" alt="ISUW_2022: THEMATIC SESSION - 2 REGULATIONS FOR THE EVOLVING “GREEN GRID” OF THE 21ST CENTURY"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">02 March 2022 | Conference Day 1 | Special Plenary 1 | Evolving Architecture Of The 21st Century Grid With Two-Way Power Flows |  19:00 ~ 21:00 (IST) 
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297242021" title="ISUW_2022: SPECIAL PLENARY 1 EVOLVING ARCHITECTURE OF THE 21ST CENTURY GRID WITH  TWO-WAY POWER FLOWS"><img src="https://live.staticflickr.com/65535/51928558538_9c8204380d_z.jpg" width="488" height="170" alt="ISUW_2022: SPECIAL PLENARY 1 EVOLVING ARCHITECTURE OF THE 21ST CENTURY GRID WITH  TWO-WAY POWER FLOWS"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">02 March 2022 | Conference Day 1 | 11th EU - India Smart Grid Workshop – Part  A  In Partnership with European Union |  13:30 ~ 15:00 (IST)
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297258718" title="ISUW_2022: 11TH EU - INDIA SMART GRID WORKSHOP – PART A In Partnership with European Union"><img src="https://live.staticflickr.com/65535/51928672552_3130ce2c6a_z.jpg" width="488" height="170" alt="ISUW_2022: 11TH EU - INDIA SMART GRID WORKSHOP – PART A In Partnership with European Union"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">02 March 2022 | Conference Day 1 | 1st Germany - India Smart Grid Workshop In Partnership with GIZ, Germany |  15:00 ~ 17:30 (IST) 
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297263088" title="ISUW_2022: 1ST GERMANY- INDIA SMART ENERGY WORKSHOP  In Partnership with GIZ, Germany"><img src="https://live.staticflickr.com/65535/51930082783_3b71a788d5_z.jpg" width="488" height="170" alt="ISUW_2022: 1ST GERMANY- INDIA SMART ENERGY WORKSHOP  In Partnership with GIZ, Germany"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">02 March 2022 | Conference Day 1 | Workshop - Empowering Women In The Power And Water Sectors In Partnership with South Asia Women in Power Sector Professional Network (WePOWER) |  17:30 ~ 19:30 (IST)
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297260682" title="ISUW_2022: WORKSHOP -   EMPOWERING WOMEN IN THE POWER AND WATER SECTORS"><img src="https://live.staticflickr.com/65535/51930311273_075f8e1662_z.jpg" width="488" height="170" alt="ISUW_2022: WORKSHOP -   EMPOWERING WOMEN IN THE POWER AND WATER SECTORS"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">02 March 2022 | Conference Day 1 | Seminar  | Presentation Of Select Technical Papers: Part - 1 |  - 14:00 ~ 18:00 (IST)
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297263844" title="ISUW_2022: SEMINAR  PRESENTATION OF SELECT TECHNICAL PAPERS: PART – 1"><img src="https://live.staticflickr.com/65535/51930265111_9612e9f21a_z.jpg" width="488" height="170" alt="ISUW_2022: SEMINAR  PRESENTATION OF SELECT TECHNICAL PAPERS: PART – 1"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">02 March 2022 | Conference Day 1 | Roundtable  1 | Interconnection of Regional Grids in Asia In Partnership with European Union, SARI/EI, IRADe and USAID |  15:00 ~ 18:00 (IST)
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297281936" title="ISUW_2022: ROUNDTABLE - 1: INTERCONNECTION OF REGIONAL GRIDS IN ASIA"><img src="https://live.staticflickr.com/65535/51931792946_660a056df5_z.jpg" width="488" height="170" alt="ISUW_2022: ROUNDTABLE - 1: INTERCONNECTION OF REGIONAL GRIDS IN ASIA"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">03 March 2022 | Conference Day 2 | Rejuvenation Session - Virtual Yoga |  09:00 ~ 10:00 (IST) 
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297341129" title="ISUW_2022: REJUVENATION SESSION- VIRTUAL YOGA"><img src="https://live.staticflickr.com/65535/51936302492_0e6ec56ec4_z.jpg" width="488" height="170" alt="ISUW_2022: REJUVENATION SESSION- VIRTUAL YOGA"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">03 March 2022 | Conference Day 2 | Fire-side Chat with Anita Sengupta, Professor of Astronautics, University of Southern California; Founder & CEO of Hydroplane Ltd on the “Future of Electric Planes and Power Systems” |  10:00 ~ 10:45 (IST)
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297342278" title="ISUW_2022: INSPIRATIONAL TALKS- “Future of Electric Planes and Power Systems”"><img src="https://live.staticflickr.com/65535/51936324602_0cc6c11d7e_z.jpg" width="488" height="170" alt="ISUW_2022: INSPIRATIONAL TALKS- “Future of Electric Planes and Power Systems”"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">03 March 2022 | Conference Day 2 |Thematic Session 3 | Cyber Security For The Digitalized Grids| India 11:30 ~ 13:30 (IST)
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297263971" title="ISUW_2022: THEMATIC SESSION - 3 CYBER SECURITY FOR THE DIGITALIZED GRIDS"><img src="https://live.staticflickr.com/65535/51930716514_084318b316_z.jpg" width="488" height="170" alt="ISUW_2022: THEMATIC SESSION - 3 CYBER SECURITY FOR THE DIGITALIZED GRIDS"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">03 March 2022 | Conference Day 2 |Thematic Session 4 | Power System Flexibility | 14:00 ~ 16:00 (IST)
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297283734" title="ISUW_2022: THEMATIC SESSION - 4 POWER SYSTEM FLEXIBILITY"><img src="https://live.staticflickr.com/65535/51931853628_9b8e4e1a8b_z.jpg" width="488" height="170" alt="ISUW_2022: THEMATIC SESSION - 4 POWER SYSTEM FLEXIBILITY"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">03 March 2022 | Conference Day 2 |Thematic Session 5 | Electric Vehicles And The Electric Grid; And Grid Integrated Vehicles (GIV) |  16:00 ~ 18:00 (IST)
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297262220" title="ISUW_2022: THEMATIC SESSION - 5 ELECTRIC VEHICLES AND THE ELECTRIC GRID; AND GRID INTEGRATED VEHICLES (GIV)"><img src="https://live.staticflickr.com/65535/51930514923_4bfc697e8c_z.jpg" width="488" height="170" alt="ISUW_2022: THEMATIC SESSION - 5 ELECTRIC VEHICLES AND THE ELECTRIC GRID; AND GRID INTEGRATED VEHICLES (GIV)"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">03 March 2022 | Conference Day 2 | Workshop | Optimization Of Levelized Cost Of Green Energy In Partnership with Schneider Electric |  11:00 - 13:00 (IST)
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297263737" title="ISUW_2022: WORKSHOP OPTIMIZATION OF LEVELIZED COST OF GREEN ENERGY In Partnership with Schneider Electric"><img src="https://live.staticflickr.com/65535/51931079590_9fbe2009b0_z.jpg" width="488" height="170" alt="ISUW_2022: WORKSHOP OPTIMIZATION OF LEVELIZED COST OF GREEN ENERGY In Partnership with Schneider Electric"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">03 March 2022 | Conference Day 2 | 11th EU - India Smart Grid Workshop – Part B in Partnership with European Union |  14:00 ~ 17:00 (IST) 
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297269488" title="ISUW_2022: WORKSHOP 11TH EU - INDIA SMART GRID WORKSHOP – PART B In Partnership with European Union"><img src="https://live.staticflickr.com/65535/51929506852_bc0c7733d3_z.jpg" width="488" height="170" alt="ISUW_2022: WORKSHOP 11TH EU - INDIA SMART GRID WORKSHOP – PART B In Partnership with European Union"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">03 March 2022 | Conference Day 2 | 8th US - India Smart Grid Workshop in Partnership with US Commercial Services;USAID and USIBC |  18:00 ~ 21:00 (IST)
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297267169" title="ISUW_2022: 8th US - INDIA SMART GRID WORKSHOP  In Partnership with US Commercial Services, USAID and USIBC"><img src="https://live.staticflickr.com/65535/51930505816_b6b197cb83_z.jpg" width="488" height="170" alt="ISUW_2022: 8th US - INDIA SMART GRID WORKSHOP  In Partnership with US Commercial Services, USAID and USIBC"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">03 March 2022 | Conference Day 2 | Seminar | Smart City Gas Distribution | India 11:30 ~ 13:30 (IST)
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297276874" title="ISUW_2022: SEMINAR SMART CITY GAS DISTRIBUTION"><img src="https://live.staticflickr.com/65535/51931286048_b7f646b252_z.jpg" width="488" height="170" alt="ISUW_2022: SEMINAR SMART CITY GAS DISTRIBUTION"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">03 March 2022 | Conference Day 2 | Seminar | Smart Communication Solutions For Smart Utilities And Smart Cities |  17:30 ~ 20:30 (IST)
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297289661" title="ISUW_2022: Seminar - SMART COMMUNICATION SOLUTIONS FOR SMART UTILITIES AND SMART CITIES"><img src="https://live.staticflickr.com/65535/51932388876_677ffff797_z.jpg" width="488" height="170" alt="ISUW_2022: Seminar - SMART COMMUNICATION SOLUTIONS FOR SMART UTILITIES AND SMART CITIES"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">03 March 2022 | Conference Day 2 | Roundtable  2 | Smart Metering  – Rollout Challenges, System Integration Architecture, Smart Meter Operations Centre (SMOC)|  10:45 ~ 13:45 (IST) 
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297322145" title="ISUW_2022: ROUNDTABLE - 2: SMART METERING – ROLLOUT CHALLENGES, SYSTEM INTEGRATION ARCHITECTURE, SMART METER OPERATIONS CENTRE (SMOC)"><img src="https://live.staticflickr.com/65535/51936299059_a4e3e3bbaf_z.jpg" width="488" height="170" alt="ISUW_2022: ROUNDTABLE - 2: SMART METERING – ROLLOUT CHALLENGES, SYSTEM INTEGRATION ARCHITECTURE, SMART METER OPERATIONS CENTRE (SMOC)"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">03 March 2022 | Conference Day 2 | Roundtable  3 | Electric Cooking In Partnership with Bureau of Energy Efficiency and Climate Parliament |  14:30 ~ 16:30 (IST)
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297322450" title="ISUW_2022: ROUNDTABLE - 3: ELECTRIC COOKING"><img src="https://live.staticflickr.com/65535/51936621440_6bc48ff668_z.jpg" width="488" height="170" alt="ISUW_2022: ROUNDTABLE - 3: ELECTRIC COOKING"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">04 March 2022 | Conference Day 3 | Inspirational Talk  by Samer El Sayary on  “Project Lunar Oasis: Architecture and Energy Systems for Space Colonization” |  10:30 ~ 11:00 (IST) 
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297356066" title="ISUW_2022: INSPIRATIONAL TALKS - “Project Lunar Oasis: Architecture and Energy Systems for Space Colonization”"><img src="https://live.staticflickr.com/65535/51938923554_3d059b7828_z.jpg" width="488" height="170" alt="ISUW_2022: INSPIRATIONAL TALKS - “Project Lunar Oasis: Architecture and Energy Systems for Space Colonization”"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">04 March 2022 | Conference Day 3 | Inspirational Talk  by Michael Potter on “Accelerating Humanity as a Multiplanetary Species” |  10:00 ~ 10:30 (IST)
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297341489" title="ISUW_2022: INSPIRATIONAL TALKS - “Accelerating Humanity as a Multiplanetary Species”"><img src="https://live.staticflickr.com/65535/51936333172_e833a879e0_z.jpg" width="488" height="170" alt="ISUW_2022: INSPIRATIONAL TALKS - “Accelerating Humanity as a Multiplanetary Species”"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">04 March 2022 | Conference Day 3 | Thematic Session  6 | Green Hydrogen Mission |  11:30 ~ 13:30 (IST)
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297324447" title="ISUW_2022: THEMATIC SESSION - 6 GREEN HYDROGEN MISSION"><img src="https://live.staticflickr.com/65535/51935050177_8d5d37f666_z.jpg" width="488" height="170" alt="ISUW_2022: THEMATIC SESSION - 6 GREEN HYDROGEN MISSION"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">04 March 2022 | Conference Day 3 | Thematic Session  7 | Disruptive Technologies And Innovations For Utilities | 14:00 ~ 16:00 (IST)
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297323145" title="ISUW_2022: THEMATIC SESSION - 7 DISRUPTIVE TECHNOLOGIES AND INNOVATIONS FOR UTILITIES"><img src="https://live.staticflickr.com/65535/51936395014_60b5ea557e_z.jpg" width="488" height="170" alt="ISUW_2022: THEMATIC SESSION - 7 DISRUPTIVE TECHNOLOGIES AND INNOVATIONS FOR UTILITIES"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">04 March 2022 | Conference Day 3 | Special Plenary  2 | Role Of Media In Promotion Of Green Energy And Energy Transition To Net Zero | 16:30 ~ 17:30 (IST) 
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297325377" title="ISUW_2022: SPECIAL PLENARY - 2 ROLE OF MEDIA IN PROMOTION OF GREEN ENERGY AND  ENERGY TRANSITION TO NET ZERO"><img src="https://live.staticflickr.com/65535/51936183218_d1eb1b1300_z.jpg" width="488" height="170" alt="ISUW_2022: SPECIAL PLENARY - 2 ROLE OF MEDIA IN PROMOTION OF GREEN ENERGY AND  ENERGY TRANSITION TO NET ZERO"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">04 March 2022 | Conference Day 3 | Workshop On Live Line Maintenance In Utilities  | 11:00 ~ 13:30 (IST)
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297332950" title="ISUW_2022: WORKSHOP ON LIVE LINE MAINTENANCE IN UTILITIES"><img src="https://live.staticflickr.com/65535/51936086512_2d070f11c5_z.jpg" width="488" height="170" alt="ISUW_2022: WORKSHOP ON LIVE LINE MAINTENANCE IN UTILITIES"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">04 March 2022 | Conference Day 3 | Seminar | Smart Water Distribution | 11:00 ~ 13:45 (IST)
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297336086" title="ISUW_2022: SEMINAR SMART WATER DISTRIBUTION"><img src="https://live.staticflickr.com/65535/51937698035_e5cd85c41e_z.jpg" width="488" height="170" alt="ISUW_2022: SEMINAR SMART WATER DISTRIBUTION"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">04 March 2022 | Conference Day 3 | Seminar| Presentation Of Select Technical Papers: Part – 2 | 11:30 ~ 13:45 (IST)
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297333240" title="ISUW_2022: SEMINAR  PRESENTATION OF SELECT TECHNICAL PAPERS: PART – 2"><img src="https://live.staticflickr.com/65535/51937415334_d9a9a08324_z.jpg" width="488" height="170" alt="ISUW_2022: SEMINAR  PRESENTATION OF SELECT TECHNICAL PAPERS: PART – 2"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">04 March 2022 | Conference Day 3 | Roundtable  4 | Urban Air Mobility Systems (UAM) In Partnership with Boeing | 11:00 ~ 13:00 (IST)
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297339734" title="ISUW_2022: ROUNDTABLE - 4: URBAN AIR MOBILITY SYSTEMS (UAM)"><img src="https://live.staticflickr.com/65535/51936190747_498d5f6cd2_z.jpg" width="488" height="170" alt="ISUW_2022: ROUNDTABLE - 4: URBAN AIR MOBILITY SYSTEMS (UAM)"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
</div>
<div class="row"><div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">04 March 2022 | Conference Day 3 | Roundtable  5 | Adoption Of District Cooling Systems In India | 14:30 ~ 16:30 (IST)
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297339794" title="ISUW_2022: ROUNDTABLE - 5:  ADOPTION OF DISTRICT COOLING SYSTEMS IN INDIA"><img src="https://live.staticflickr.com/65535/51936197267_abf6cca58a_z.jpg" width="488" height="170" alt="ISUW_2022: ROUNDTABLE - 5:  ADOPTION OF DISTRICT COOLING SYSTEMS IN INDIA"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="col-md-6"><div class="clearfix"></div>
<h3 class="p-head">04 March 2022 | ISGF Innovation Awards ceremony & Valedictory Of Function Of ISUW 2022 | 18:00 ~ 20:00 (IST)
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