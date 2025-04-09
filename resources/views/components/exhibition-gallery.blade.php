@extends('master')
@section('content')

 <div class="container">
 <div class="row justify-content-center ">
<p></p>
<div class="k_cheading">
		<h1>ISUW <span class="k_greencolor">Exhibition Gallery</span> </h1>
		<img src="/public/uploads/images/kborder_bottom.png" alt=""> 
	</div> 
<style>
li.gallleryflick{   float:left;    margin-left:30px;   list-style:none;   margin-bottom:30px;   list-style:none !important; height:240px;} 
<p>.responsive .content img{ 	height:226px !important; } h3.p-head{ 	background: #00923f;     color: #FFF;     margin: 45px 32px 15px 0px;  font-size: 18px;  padding: 10px; } iframe.flickr-embed-frame {
    height: 300px !important; min-height: 300px !important; overflow: hidden !important;
}
/* Style the tab */
.tab {
  overflow: hidden;
  width: 60%;
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
  padding: 10px 25px;
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
<button class="tablinks" onclick="openCity(event, '2025')">2025</button>
  <button class="tablinks" onclick="openCity(event, '2024')">2024</button>   
  <button class="tablinks" onclick="openCity(event, '2023')">2023</button>    
  <button class="tablinks" onclick="openCity(event, '2022')">2022</button>    
  <button class="tablinks" onclick="openCity(event, '2021')">2021</button>
  <button class="tablinks" onclick="openCity(event, '2020')">2020</button>
  <button class="tablinks" onclick="openCity(event, '2019')">2019</button>
  <button class="tablinks" onclick="openCity(event, '2018')">2018</button>
</div>
<div class="container slider_margin1">

<div class="col-md-7">
  <div id="2025" class="tabcontent" style="display: block;">
      <div class="clearfix"></div>
        <h3 class="p-head">ISUW 2025 Exhibition Gallery 
        </h3>
        <ul>
          <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://flic.kr/s/aHBqjC7wA2" title="ISUW_2024: Exhibition Booths">
          <img src="https://live.staticflickr.com/65535/54423587156_7f91a5d51a_c.jpg" width="640" height="480" alt="ISUW_2024: Exhibition Booths"/></a>
          <script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
        </ul>
  </div>

  <div id="2024" class="tabcontent" style="display: block;">
    <div class="clearfix"></div>
    <h3 class="p-head">ISUW 2024 Exhibition Gallery 
    </h3>
    <ul>
      <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://flic.kr/s/aHBqjBjAer" title="ISUW_2024: Exhibition Booths">
      <img src="https://live.staticflickr.com/65535/53623833715_2a41809a59_z.jpg" width="640" height="480" alt="ISUW_2024: Exhibition Booths"/></a>
      <script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
    </ul>
  </div>

  <div id="2023" class="tabcontent" style="display: block;">
    <div class="clearfix"></div>
    <h3 class="p-head">ISUW 2023 Exhibition Gallery 
    </h3>
    <ul>
      <a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720306701572/" title="ISUW_2023: Virtual Exhibition Booths">
        <img src="https://live.staticflickr.com/65535/51937476712_24eca753e9_z.jpg" width="620" height="180" alt="ISUW_2023: Virtual Exhibition Booths"></a>
        <script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
    </ul>
  </div>   

<div id="2022" class="tabcontent">
<div class="clearfix"></div>
<h3 class="p-head">ISUW 2022 Exhibition Gallery 
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720297351360" title="ISUW_2022: Virtual Exhibition Booths"><img src="https://live.staticflickr.com/65535/51937476712_24eca753e9_z.jpg" width="620" height="180" alt="ISUW_2022: Virtual Exhibition Booths"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script></ul>
</div>   
<div id="2021" class="tabcontent">
<div class="clearfix"></div>
<h3 class="p-head">ISUW 2021 Exhibition Gallery 
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72157718578805343" title="ISUW 2021: Virtual Exhibition"><img src="https://live.staticflickr.com/65535/51018848727_8aac7eb03d_z.jpg" width="620" height="180" alt="ISUW 2021: Virtual Exhibition"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul>
</div>
<div id="2020" class="tabcontent">
<div class="clearfix"></div>
<h3 class="p-head">ISUW 2020 Exhibition Gallery  
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720296236440" title="ISUW 2020: Exhibition"><img src="https://live.staticflickr.com/65535/51844407056_d33e988399.jpg" width="620" height="180" alt="ISUW 2020: Exhibition"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div id="2019" class="tabcontent">
<div class="clearfix"></div>
<h3 class="p-head">ISUW 2019 Exhibition Gallery  
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720296241096" title="ISUW 2019: Exhibition"><img src="https://live.staticflickr.com/65535/51844526516_cc396c2e86.jpg" width="620" height="180" alt="ISUW 2019: Exhibition"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div id="2018" class="tabcontent">
<div class="clearfix"></div>
<h3 class="p-head">ISUW 2018 Exhibition Gallery  
</h3>
<ul>
<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/indiasmartgridforum/albums/72177720296235662" title="India Smart Grid Week 2018: Exhibition"><img src="https://live.staticflickr.com/65535/51844624281_3c9f7a56a6.jpg" width="620" height="180" alt="India Smart Grid Week 2018: Exhibition"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</ul></div>
<div class="clearfix"></div>
<h3>&nbsp; </h3>
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