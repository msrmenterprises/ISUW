@extends('master')
@section('content')

<div class="container">
<div class="row justify-content-center ">
<p></p>
<div class="k_cheading">
    <h1>ISUW <span class="k_greencolor">Video Gallery</span> </h1>
    <img src="/public/uploads/images/kborder_bottom.png" alt=""> 
</div> 
<style>
.gallleryflick{ float:left; margin-left:30px; list-style:none; margin-bottom:30px; list-style:none !important; height:240px;} 
.responsive .content img{ height:226px !important; } 
h3.p-head{ background: #00923f; color: #FFF; margin: 45px 32px 15px 0px; padding: 10px; font-size: 18px; border-radius: 5px; } 
iframe.flickr-embed-frame {
    height: 300px !important; min-height: 300px !important; overflow: hidden !important;
}

.tab {
  overflow: hidden;
  width: 100%;
  margin: 0 auto;
  flex-wrap: wrap;
  display: flex;
  justify-content: center;
}

.tab button {
  background-color: #f1f1f1;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 12px 24px;
  transition: 0.3s;
  font-size: 16px;
  font-weight: 500;
  margin: 2px;
  border-radius: 5px;
}

.tab button:hover {
  background-color: #ddd;
}

.tab button.active {
  background-color: #00923f;
  color: white;
}

.tab button a {
  text-decoration: none;
  color: inherit;
}

.tabcontent {
  display: none;
  padding: 20px 12px;
  border: 1px solid #ccc;
  min-height: 400px;
  background: #f9f9f9;
  border-radius: 8px;
  margin-top: 20px;
}

/* Loading spinner */
.video-loader {
    text-align: center;
    padding: 60px;
    background: #fff;
    border-radius: 10px;
}

.spinner {
    border: 4px solid #f3f3f3;
    border-top: 4px solid #00923f;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    animation: spin 1s linear infinite;
    margin: 0 auto 15px;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.row {
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 30px;
}

.col-md-6 {
    flex: 0 0 50%;
    max-width: 50%;
    padding: 0 15px;
    box-sizing: border-box;
}

.clearfix {
    clear: both;
}

ul {
    list-style: none;
    padding: 0;
}

iframe {
    width: 100%;
    max-width: 100%;
    border-radius: 8px;
}

@media (max-width: 768px) {
    .col-md-6 {
        flex: 0 0 100%;
        max-width: 100%;
        margin-bottom: 20px;
    }
    .tab button {
        padding: 8px 12px;
        font-size: 12px;
    }
    h3.p-head {
        font-size: 14px;
        margin: 20px 0px 10px 0px;
    }
}
</style>

<div class="tab">
    <button class="tablinks" onclick="openCity(event, '2026')">2026</button>
    <button class="tablinks" onclick="openCity(event, '2025')">2025</button>
    <button class="tablinks" onclick="openCity(event, '2024')">2024</button>
    <button class="tablinks" onclick="openCity(event, '2023')">2023</button>
    <button class="tablinks" onclick="openCity(event, '2022')">2022</button>
    <button class="tablinks" onclick="openCity(event, '2021')">2021</button>
    <button class="tablinks"><a href="https://www.youtube.com/c/ISGFSMARTGRIDBulletin/playlists" target="_blank">2020</a></button>
    <button class="tablinks"><a href="https://www.youtube.com/c/ISGFSMARTGRIDBulletin/playlists" target="_blank">2019</a></button>
    <button class="tablinks"><a href="https://www.youtube.com/c/ISGFSMARTGRIDBulletin/playlists" target="_blank">2018</a></button>
    <button class="tablinks"><a href="https://www.youtube.com/c/ISGFSMARTGRIDBulletin/playlists" target="_blank">2017</a></button>
</div>

<!-- 2026 Tab -->
<div id="2026" class="tabcontent" style="display: block;">
    <div class="container slider_margin1" data-year="2026">
        <div class="video-loader">Loading videos... <div class="spinner"></div></div>
    </div>
</div>

<!-- 2025 Tab -->
<div id="2025" class="tabcontent">
    <div class="container slider_margin1" data-year="2025">
        <div class="video-loader">Loading videos... <div class="spinner"></div></div>
    </div>
</div>

<!-- 2024 Tab -->
<div id="2024" class="tabcontent">
    <div class="container slider_margin1" data-year="2024">
        <div class="video-loader">Loading videos... <div class="spinner"></div></div>
    </div>
</div>

<!-- 2023 Tab -->
<div id="2023" class="tabcontent">
    <div class="container slider_margin1" data-year="2023">
        <div class="video-loader">Loading videos... <div class="spinner"></div></div>
    </div>
</div>

<!-- 2022 Tab -->
<div id="2022" class="tabcontent">
    <div class="container slider_margin1" data-year="2022">
        <div class="video-loader">Loading videos... <div class="spinner"></div></div>
    </div>
</div>

<!-- 2021 Tab -->
<div id="2021" class="tabcontent">
    <div class="container slider_margin1" data-year="2021">
        <div class="video-loader">Loading videos... <div class="spinner"></div></div>
    </div>
</div>

<p></p>
</div>
</div>

@endsection

<script>
// Complete Video Data for all years
const videoData = {
    2026: [
        { date: "10 March 2026", title: "Agentic AI - How to Build and Deploy AI Agents (Part - 1)", videoId: "Fk2Wd8PMWZc" },
        { date: "10 March 2026", title: "Agentic AI - How to Build and Deploy AI Agents (Part - 2)", videoId: "QhUHkU0QS0Q" },
        { date: "10 March 2026", title: "10th IEC-IEEE-BIS Smart Energy Standardization Coordination Workshop | Part -1", videoId: "8GRoXctqgDM" },
        { date: "10 March 2026", title: "10th IEC-IEEE-BIS Smart Energy Standardization Coordination Workshop | Part -2", videoId: "4oq52P0ZAbE" },
        { date: "10 March 2026", title: "10th IEC-IEEE-BIS Smart Energy Standardization Coordination Workshop | Part -3", videoId: "AGMPmKAAG28" },
        { date: "11 March 2026", title: "INAUGURATION OF ISUW 2026 CONFERENCE AND EXHIBITION", videoId: "SdUSa7tPHHM" },
        { date: "11 March 2026", title: "10 Million Solar Rooftop Systems & Management of Reverse Power Flows", videoId: "mcVv3h7W5oQ" },
        { date: "11 March 2026", title: "Regulations for Digital Grids (Session Partner- Power Foundation of India)", videoId: "or20dWxj_a8" },
        { date: "11 March 2026", title: "Digital Grids on Unified Energy Interface (UEI) Architecture", videoId: "6rvC79gYkmk" },
        { date: "11 March 2026", title: "Square-Mile-Size AI Data Centres Requiring GW-scale Power Connections", videoId: "8l46pJoAudg" },
        { date: "11 March 2026", title: "India – UK CEO Roundtable on Smart Energy (Partner - FCDO, UK Government)", videoId: "yDkwwIlhSDo" },
        { date: "11 March 2026", title: "12th India - US Smart Energy Workshop (Partner - UL Standards & Engagement)", videoId: "5PhOh7jLW58" },
        { date: "12 March 2026", title: "Rise of 'Flexumers' and Digital Tools for DER Management and Grid Integration", videoId: "AUyBjBZ68EE" },
        { date: "12 March 2026", title: "Smart Metering and Smart Meter Data Analytics (Panel 1) | Part - 1", videoId: "IT1uW8lIWfg" },
        { date: "12 March 2026", title: "Smart Metering and Smart Meter Data Analytics (Panel 2) | Part - 2", videoId: "C04nV6uKHjk" },
        { date: "12 March 2026", title: "Digitalization Roadmaps for Utilities (Session Partner - AIDA)", videoId: "ucZB_mN_Pe4" },
        { date: "12 March 2026", title: "Role of Small Modular Reactors in the Net Zero Power Systems (BSCE Systems)", videoId: "n-RvRW6nVmg" },
        { date: "12 March 2026", title: "The Cooling Challenge: Accelerating DCS Adoption in India (Partner - APUEA)", videoId: "ktYEn4_QCgg" },
        { date: "12 March 2026", title: "Resiliency of Power Systems Against Extreme Weather (Partner - PFI & CDRI)", videoId: "r7uzgkOwMVA" },
        { date: "12 March 2026", title: "Data Governance Framework and Data Management in Utilities (Partner - AIDA)", videoId: "uerf4qzkgS4" },
        { date: "12 March 2026", title: "3rd India – Brazil Smart Energy Workshop (Partner - LATAM)", videoId: "ohh0IcK4Tso" },
        { date: "13 March 2026", title: "New Technologies: AI–ML–VR–AR–Robotics for Utilities (Partner - DST)", videoId: "dNVsGTUicMI" },
        { date: "13 March 2026", title: "EVs – A $200 Billion Opportunity in India to be Unlocked (Partner - PFI)", videoId: "H-OrXqmRMKA" },
        { date: "13 March 2026", title: "Electrification of Agriculture Sector & Charging of EVs with Green Electricity", videoId: "zaN-fsrTarA" },
        { date: "13 March 2026", title: "Power Markets and Carbon Markets (Session Partner - IEX)", videoId: "hLryS0jlF88" },
        { date: "13 March 2026", title: "Emerging Solutions for Power System Flexibility", videoId: "QS1CFADs1Uw" },
        { date: "13 March 2026", title: "Future of Work: Working with Digital Colleagues and Humanoid Robots", videoId: "ezhEMJi7cpc" },
        { date: "13 March 2026", title: "Gender Balance in the Energy Sector", videoId: "Fsk05jEgyws" },
        { date: "13 March 2026", title: "Presentation of Select Technical Papers (Part 1)", videoId: "9rG_cgdwzn8" },
        { date: "13 March 2026", title: "Presentation of Select Technical Papers (Part 2)", videoId: "OzmD49OXP44" },
        { date: "13 March 2026", title: "Presentation of Select Technical Papers (Part 3)", videoId: "v-26HnRa9Uk" },
        { date: "13 March 2026", title: "Presentation of Select Technical Papers (Part 4)", videoId: "mFmJfygIs20" },
        { date: "13 March 2026", title: "2nd India - Indonesia Smart Energy Workshop (Partner - PJCI)", videoId: "i0y4HHrpA6c" },
        { date: "13 March 2026", title: "Special Plenary Session on National Quantum Mission (NQM)", videoId: "r-tj6FYnzK0" }
    ],
    2025: [
        { date: "19 March 2025", title: "Inauguration of ISUW 2025 Conference and Exhibition", videoId: "C0qWxqpIib8" },
        { date: "19 March 2025", title: "First General Body Meeting of All India DISCOMs Association (AIDA)", videoId: "4VOpZnlpD6I" },
        { date: "19 March 2025", title: "UK - India Workshop on Aspire Programme - Inaugural Session", videoId: "IUg6v5WOj_4" },
        { date: "19 March 2025", title: "UK-India Workshop | Future Ready Power Grids - Solutions for Grid Modernization", videoId: "FoUpftVCa2U" },
        { date: "19 March 2025", title: "UK-India Workshop on ASPIRE Program - Empowering Women in Power Sector", videoId: "D_dpuxUFvsE" },
        { date: "19 March 2025", title: "Roundtable on India's Energy Storage Potential with Innovative Next Gen Solutions", videoId: "-e6DxQnSNjg" },
        { date: "19 March 2025", title: "11th US - India Smart Energy Workshop | US Commercial Services & ULSE", videoId: "7u0mEX8rTVg" },
        { date: "19 March 2025", title: "1st Africa - India Smart Energy Roundtable (Session Partner: APUA)", videoId: "3GkDMBsRk5A" },
        { date: "19 March 2025", title: "Partners Recognition Ceremony", videoId: "aeOaqUl-Gwc" },
        { date: "20 March 2025", title: "Session on Smart Metering - Global & India Lesson (International Experiences)", videoId: "qS2xjuHgbhQ" },
        { date: "20 March 2025", title: "Session on Smart Metering - Global & India Lesson (Indian Experiences)", videoId: "gLnQiEz3Ra4" },
        { date: "20 March 2025", title: "Smart Metering Part B – DISCOMs, AMISPs, OEMs and Sis", videoId: "g6WXHiPq6Ho" },
        { date: "20 March 2025", title: "Rooftop PV Revolution in India & Impact on DISCOMs", videoId: "4NIyuurP81A" },
        { date: "20 March 2025", title: "Unified Energy Interface (UEI) and The Evolving Era of Energy Internet", videoId: "mnCVnOGJwgM" },
        { date: "20 March 2025", title: "Nuclear Renaissance & The Role of SMR for The Net Zero Power Systems | Part 1", videoId: "eSohmQe9XbQ" },
        { date: "20 March 2025", title: "Nuclear Renaissance & The Role of SMR for The Net Zero Power Systems | Part 2", videoId: "z_GRR2jGqUg" },
        { date: "20 March 2025", title: "Building Resilient Utility Assets for Congested Cities & Climate Resilience", videoId: "edTvv1rAQHs" },
        { date: "20 March 2025", title: "Power System Flexibility and DERMS | Session Partner: AspenTech", videoId: "5eObrFvRy2g" },
        { date: "20 March 2025", title: "Deep Dive Session on AI, ML and Robotics use Cases for Utilities", videoId: "pZFg25hbM2k" },
        { date: "20 March 2025", title: "1st Joint Indonesia - India Smart Energy Workshop", videoId: "1IWXMSJAlAo" },
        { date: "20 March 2025", title: "Presentation of Selected Technical Papers | Part - 1", videoId: "6Po-bOxH3zw" },
        { date: "20 March 2025", title: "Presentation of Selected Technical Papers | Part - 2", videoId: "FwOB3b-YIFo" },
        { date: "21 March 2025", title: "Digitalization of Utilities, Digitalization Roadmaps; Digital Twins", videoId: "sJUMg3xgYHo" },
        { date: "21 March 2025", title: "Emerging Digital Technologies for Utilities | Session Partner: DST & C-DAC", videoId: "W-H9BsK-p0w" },
        { date: "21 March 2025", title: "Innovations in Regulations for the Next Round of Power Sector Reforms", videoId: "8w2ukmZrz7I" },
        { date: "21 March 2025", title: "Grid Integrated Buildings", videoId: "NofdyUAZFrs" },
        { date: "21 March 2025", title: "Power Markets and Carbon Markets", videoId: "8hofbRP0v88" },
        { date: "21 March 2025", title: "Immersive Technologies: AR/VR, Digital Twins, Drones & Assisted Reality", videoId: "O1byors6COU" },
        { date: "21 March 2025", title: "Evolving Trends in EM & V2G Demo | Panel 1: Accelerating EV Adoption", videoId: "3ud9lHVc1Kw" },
        { date: "21 March 2025", title: "Evolving Trends in EM & V2G Demo | Panel 2: Promotion of Intercity Ops of EVs", videoId: "wo5bOmf6Dg8" },
        { date: "21 March 2025", title: "Evolving Trends in EM & V2G Demo | Panel 3: Emerging Tech in EM", videoId: "PbzwjMhEs2E" },
        { date: "21 March 2025", title: "Capacity Building in Utilities for Energy Transition | Session Partner: SCGJ", videoId: "Y4cOvivRReQ" },
        { date: "21 March 2025", title: "9th ISGF Innovation Awards", videoId: "3n7Jf-2mvIo" },
        { date: "18 March 2025", title: "9th IEC-IEEE-BIS Smart Energy Standardization Coordination Workshop | Part 1", videoId: "cekwi5mSK3g" },
        { date: "18 March 2025", title: "9th IEC-IEEE-BIS Smart Energy Standardization Coordination Workshop | Part 2", videoId: "JG4UF7dW8z8" },
        { date: "18 March 2025", title: "9th IEC-IEEE-BIS Smart Energy Standardization Coordination Workshop | Part 3", videoId: "ZJaw1_BTgEA" }
    ],
    2024: [
        { date: "13 March 2024", title: "INAUGURATION OF ISUW 2024 CONFERENCE AND EXHIBITION", videoId: "E2YZmUpeA3M" },
        { date: "13 March 2024", title: "Digitalization of Utilities, Digitalization Roadmaps; Digital Twins", videoId: "WTdK9obdhCw" },
        { date: "13 March 2024", title: "Emerging Technologies for Utilities (In Collaboration with DST) | Part 1", videoId: "lNe7NVsr8V4" },
        { date: "13 March 2024", title: "Emerging Technologies for Utilities (In Collaboration with DST) | Part 2", videoId: "F-_HqfGppiM" },
        { date: "13 March 2024", title: "13th EU - India Smart Energy Workshop | Session Partner - European Union | Part 1", videoId: "ZyleHwipkoM" },
        { date: "13 March 2024", title: "13th EU - India Smart Energy Workshop | Session Partner - European Union | Part 2", videoId: "YpUkKO19w1Q" },
        { date: "13 March 2024", title: "1ST INDIA-BRAZIL Smart Energy Workshop (Session Partner: LATAM SGF and BICC) | Part 1", videoId: "H4eznSxn81Q" },
        { date: "13 March 2024", title: "1ST INDIA-BRAZIL Smart Energy Workshop (Session Partner: LATAM SGF and BICC) | Part 2", videoId: "O_kF_QQXJj4" },
        { date: "13 March 2024", title: "1ST INDIA-BRAZIL Smart Energy Workshop (Session Partner: LATAM SGF and BICC) | Part 3", videoId: "MBIzFE8WChA" },
        { date: "13 March 2024", title: "10th US–India Smart Energy Workshop | Part 1", videoId: "60dv5hs8fxM" },
        { date: "13 March 2024", title: "10th US–India Smart Energy Workshop | Part 2", videoId: "K15WGYKNp5s" },
        { date: "13 March 2024", title: "10th US–India Smart Energy Workshop | Part 3", videoId: "kMjIIYrs6m8" },
        { date: "13 March 2024", title: "The short List of Climate Actions that will Work by Michael Barnard", videoId: "kQ_muttVC84" },
        { date: "14 March 2024", title: "Global Lessons on Smart Metering | Part 1", videoId: "PUVugvR80_M" },
        { date: "14 March 2024", title: "Global Lessons on Smart Metering | Part 2", videoId: "jsrOy6VSTWs" },
        { date: "14 March 2024", title: "Global Lessons on Smart Metering | Part 3", videoId: "4AKTQ5thqxE" },
        { date: "14 March 2024", title: "Energy Positive Smart Buildings and Campuses | Part 1", videoId: "qMz602GnL7U" },
        { date: "14 March 2024", title: "Energy Positive Smart Buildings and Campuses | Part 2", videoId: "CNlZbEQGmog" },
        { date: "14 March 2024", title: "Energy Positive Smart Buildings and Campuses | Part 3", videoId: "s3SkmKQzvkI" },
        { date: "14 March 2024", title: "3rd India - Germany Smart Energy Workshop | Part 1", videoId: "2dZposaT0Bo" },
        { date: "14 March 2024", title: "3rd India - Germany Smart Energy Workshop | Part 2", videoId: "wdKDReiWo9U" },
        { date: "14 March 2024", title: "Innovative Technologies for Energy Transition | Part 1", videoId: "337nKWs-ijw" },
        { date: "14 March 2024", title: "Innovative Technologies for Energy Transition | Part 2", videoId: "IiwpWZOVOto" },
        { date: "14 March 2024", title: "Innovative Technologies for Energy Transition | Part 3", videoId: "5sJGQbzpcTg" },
        { date: "14 March 2024", title: "Virtual Power Plants (VPPS) and Power System Flexibility", videoId: "zQKO5tUTfRI" },
        { date: "14 March 2024", title: "Cooling Challenge - Cooling as a Service | Part 1", videoId: "9MTgvapELps" },
        { date: "14 March 2024", title: "Cooling Challenge - Cooling as a Service | Part 2", videoId: "LQFrgshAQJc" },
        { date: "14 March 2024", title: "Climate Resilience of Future Grids", videoId: "YDsLFhZ3ykg" },
        { date: "14 March 2024", title: "Nuclear Renaissance and the Role of SMR in NZPS", videoId: "ed9Ks4nQgRE" },
        { date: "14 March 2024", title: "Presentation of Select Technical Papers | Part 1", videoId: "wHcscLiFndk" },
        { date: "14 March 2024", title: "Presentation of Select Technical Papers | Part 2", videoId: "eg_g4ztxU1Q" },
        { date: "14 March 2024", title: "Super Grids for Energy Transition & Energy Security", videoId: "PyhJZtjEg5U" },
        { date: "15 March 2024", title: "Long Duration Energy Storage Systems (LDES)", videoId: "H128srm_Tbo" },
        { date: "15 March 2024", title: "Policy & Regulatory Support for Fast Tracking The Transition", videoId: "NK6W0jWlhw4" },
        { date: "15 March 2024", title: "Evolving Trends in Electric Mobility: MW-scale Charging Systems | Part 1", videoId: "3YQp-J3KGCE" },
        { date: "15 March 2024", title: "Evolving Trends in Electric Mobility: MW-scale Charging Systems | Part 2", videoId: "rj2QiwzETcs" },
        { date: "15 March 2024", title: "Digital Tools for DER Management", videoId: "K_Ezf_vdJ6g" },
        { date: "15 March 2024", title: "Smart Utilities Integration | Part 1", videoId: "lN3PsZxSgHg" },
        { date: "15 March 2024", title: "Smart Utilities Integration | Part 2", videoId: "pgo0Dl3uVoc" },
        { date: "15 March 2024", title: "Smart Utilities Integration | Part 3", videoId: "wpU3kOxoXEc" },
        { date: "15 March 2024", title: "Power Markets and Carbon Markets | Part 1", videoId: "6kavU5LV-14" },
        { date: "15 March 2024", title: "Power Markets and Carbon Markets | Part 2", videoId: "p_6CQkGLLjA" },
        { date: "15 March 2024", title: "Evolving Trends in Utility Automation", videoId: "jRLM-3L2ZVU" },
        { date: "15 March 2024", title: "ISGF INNOVATION AWARDS 2024", videoId: "kK8pOQd9bl8" }
    ],
    2023: [
        { date: "28 Feb 2023", title: "Energy Transition To Net Zero Power System with IEEE | Part 1", videoId: "ff7IzZzvNY4" },
        { date: "28 Feb 2023", title: "Energy Transition To Net Zero Power System with IEEE | Part 2", videoId: "LMSBuGsDqA4" },
        { date: "28 Feb 2023", title: "IEC-IEEE Smart Energy Standardization Coordination Workshop | Part 1", videoId: "0coiSG370T4" },
        { date: "28 Feb 2023", title: "IEC-IEEE Smart Energy Standardization Coordination Workshop | Part 2", videoId: "_VefcC0KTgw" },
        { date: "28 Feb 2023", title: "IEC-IEEE Smart Energy Standardization Coordination Workshop | Part 3", videoId: "mIyCJ6YCftM" },
        { date: "01 March 2023", title: "INAUGURAL SESSION", videoId: "CHCUjFzUwHM" },
        { date: "01 March 2023", title: "VISION FOR A NET ZERO POWER SECTOR", videoId: "XvUkR0jQTbw" },
        { date: "01 March 2023", title: "EVOLVING ARCHITECTURE OF THE NET ZERO POWER SYSTEM", videoId: "2DigW2YoUlY" },
        { date: "01 March 2023", title: "Customer Experience In The Digital Age", videoId: "Su1f-RQ3jXw" },
        { date: "01 March 2023", title: "Regulations For The Net Zero Power System", videoId: "6583FmupRWo" },
        { date: "01 March 2023", title: "9th US - INDIA SMART GRID WORKSHOP | Part 1", videoId: "wc0cz6UNsUk" },
        { date: "01 March 2023", title: "9th US - INDIA SMART GRID WORKSHOP | Part 2", videoId: "I4NcjP6W-_Y" },
        { date: "01 March 2023", title: "SMART COMMUNICATIONS FOR SMART UTILITIES", videoId: "kz8RN5r7Bdk" },
        { date: "01 March 2023", title: "Special Session on Hydrogen Mission", videoId: "GBJrh2t2nxo" },
        { date: "02 March 2023", title: "CLIMATE PROOFING OF FUTURE GRIDS", videoId: "52IbN_sBwDw" },
        { date: "02 March 2023", title: "250 MILLION SMART METER ROLLOUT", videoId: "3nzv-D5n-wU" },
        { date: "02 March 2023", title: "VISION FOR A NET ZERO TRANSPORT SECTOR", videoId: "ZuYgrzsOrYc" },
        { date: "02 March 2023", title: "50K ELECTRIC BUS PROGRAM", videoId: "0lo7pxjyuYA" },
        { date: "02 March 2023", title: "AI, ML, ROBOTICS FOR UTILITIES", videoId: "kJIq915xqHc" },
        { date: "02 March 2023", title: "BLOCKCHAIN, WEB 3.0, METAVERSE FOR UTILITIES", videoId: "q9ImnmyVuiA" },
        { date: "02 March 2023", title: "DISTRICT COOLING SYSTEM", videoId: "o7YOwCnMo8c" },
        { date: "02 March 2023", title: "12TH EU - INDIA SMART GRID WORKSHOP", videoId: "cJNMhdVt2vE" },
        { date: "02 March 2023", title: "2ND GERMANY - INDIA SMART GRID", videoId: "RYBhRblE5Ik" },
        { date: "02 March 2023", title: "ENERGY POSITIVE BUILDINGS AND CAMPUSES", videoId: "5DonAIH2tmA" },
        { date: "02 March 2023", title: "Cross Border Electricity Trade in South Asia", videoId: "S6tngUfOBDI" },
        { date: "02 March 2023", title: "POLICIES FOR DIGITAL MANAGEMENT OF ROOFTOP PV", videoId: "MbUkLgsRdo8" },
        { date: "02 March 2023", title: "SMART WATER DISTRIBUTION | PART 1", videoId: "_rAXpTEkrmY" },
        { date: "02 March 2023", title: "SMART WATER DISTRIBUTION | PART 2", videoId: "MBRg2V5zJa8" },
        { date: "02 March 2023", title: "ENERGY SYSTEMS FOR COLONIZING THE MOON", videoId: "Od_3PXTo8gI" },
        { date: "03 March 2023", title: "EVOLVING TRENDS IN ELECTRIC MOBILITY", videoId: "eUUHPLU2ICQ" },
        { date: "03 March 2023", title: "DIGITALIZATION OF UTILITIES", videoId: "JAVhQ0GNDBo" },
        { date: "03 March 2023", title: "ELECTRIC HIGHWAYS", videoId: "AeKMALneT5Y" },
        { date: "03 March 2023", title: "POWER SYSTEM FLEXIBILITY", videoId: "PHVC8Q60NMY" },
        { date: "03 March 2023", title: "MW-SCALE CHARGING SYSTEMS FOR EVs", videoId: "fvTAMPaefec" },
        { date: "03 March 2023", title: "CARBON MARKETS", videoId: "rbBC3U_dvpI" },
        { date: "03 March 2023", title: "INTERCONNECTION OF REGIONAL GRIDS IN ASIA", videoId: "0jy3-LPkKFc" },
        { date: "03 March 2023", title: "LiFE and Relevance of Gender", videoId: "mpj4s3Wp3wU" },
        { date: "03 March 2023", title: "PRESENTATION OF TECHNICAL PAPERS | Part 1", videoId: "m4ZVTzJVENM" },
        { date: "03 March 2023", title: "PRESENTATION OF TECHNICAL PAPERS | Part 2", videoId: "IqF-YW1iibQ" },
        { date: "03 March 2023", title: "PRESENTATION OF TECHNICAL PAPERS | Part 3", videoId: "pVkCc7aiPt0" },
        { date: "03 March 2023", title: "SMART CITY GAS DISTRIBUTION", videoId: "USIpbOMALFQ" }
    ],
    2022: [
        { date: "02 March 2022", title: "Inauguration Of ISUW 2022 Conference", videoId: "S_U6HVIXlak" },
        { date: "02 March 2022", title: "Digitalization Of Utilities", videoId: "SBIPxCRKRNw" },
        { date: "02 March 2022", title: "Regulations For The Evolving Green Grid", videoId: "xTXbm82Wito" },
        { date: "02 March 2022", title: "Evolving Architecture Of The 21st Century Grid", videoId: "0ylKkKkJb_k" },
        { date: "02 March 2022", title: "11th EU - India Smart Grid Workshop Part A", videoId: "kkQlD8UXD88" },
        { date: "02 March 2022", title: "1st Germany - India Smart Grid Workshop", videoId: "BVX8zt0WIT4" },
        { date: "02 March 2022", title: "Empowering Women In Power And Water Sectors", videoId: "Xr75xeJx97Y" },
        { date: "02 March 2022", title: "Presentation Of Select Technical Papers Part 1", videoId: "AYQ13p122-k" },
        { date: "02 March 2022", title: "Interconnection of Regional Grids in Asia", videoId: "6fRRRXYx-j0" },
        { date: "03 March 2022", title: "Rejuvenation Session - Virtual Yoga", videoId: "a-_-mDX60r8" },
        { date: "03 March 2022", title: "Future of Electric Planes and Power Systems", videoId: "bAWWHfrhNrY" },
        { date: "03 March 2022", title: "Cyber Security For Digitalized Grids", videoId: "ob-1Hm2iLXE" },
        { date: "03 March 2022", title: "Power System Flexibility", videoId: "IdtN8ZjsreY" },
        { date: "03 March 2022", title: "Electric Vehicles And The Electric Grid", videoId: "9UBTIiP39cc" },
        { date: "03 March 2022", title: "Optimization Of Levelized Cost Of Green Energy", videoId: "jL8URSAovSY" },
        { date: "03 March 2022", title: "11th EU - India Smart Grid Workshop Part B", videoId: "He1u72QL0t8" },
        { date: "03 March 2022", title: "8th US - India Smart Grid Workshop", videoId: "eyfkjRByh64" },
        { date: "03 March 2022", title: "Smart City Gas Distribution", videoId: "0azaRSoW7pU" },
        { date: "03 March 2022", title: "Smart Communication Solutions", videoId: "0tbAm_xRlyo" },
        { date: "03 March 2022", title: "Smart Metering Rollout Challenges", videoId: "VijtWO9b7_o" },
        { date: "03 March 2022", title: "Electric Cooking", videoId: "6dWWeRzyT4U" },
        { date: "04 March 2022", title: "Virtual Yoga Session", videoId: "heC29EWR7eQ" },
        { date: "04 March 2022", title: "Project Lunar Oasis", videoId: "tNkJG5iI_d0" },
        { date: "04 March 2022", title: "Accelerating Humanity as a Multiplanetary Species", videoId: "i0ASQ38OPhw" },
        { date: "04 March 2022", title: "Green Hydrogen Mission", videoId: "leFXysUvPjU" },
        { date: "04 March 2022", title: "Disruptive Technologies For Utilities", videoId: "VASp-5OyxCQ" },
        { date: "04 March 2022", title: "Role Of Media In Promotion Of Green Energy", videoId: "x4Vdnji9cSQ" },
        { date: "04 March 2022", title: "Live Line Maintenance In Utilities", videoId: "SJTgEeS-aRA" },
        { date: "04 March 2022", title: "Smart Water Distribution", videoId: "OuFDCp8n2xw" },
        { date: "04 March 2022", title: "Presentation Of Select Technical Papers Part 2", videoId: "ii0KdvOVWu4" },
        { date: "04 March 2022", title: "Urban Air Mobility Systems (UAM)", videoId: "icnXppdi9O8" },
        { date: "04 March 2022", title: "ISGF Innovation Awards & Valedictory", videoId: "W5RGFkKm7Y4" },
        { date: "04 March 2022", title: "Adoption Of District Cooling Systems", videoId: "fqQxfIhq82M" }
    ],
    2021: [
        { date: "2021", title: "Inauguration of ISUW 2021 Conference", videoId: "yZd5R59dXRo" },
        { date: "2021", title: "Innovation In Utilities During The Pandemic", videoId: "GmUJ-lzFPn0" },
        { date: "2021", title: "Regulatory Support For Revival Of Utilities", videoId: "RnGRvvumDnE" },
        { date: "2021", title: "Customer Rights Protection Order", videoId: "JjyU7LgHAWY" },
        { date: "2021", title: "10th EU - India Smart Grid Workshop Part A", videoId: "M_j7_k-Yqt4" },
        { date: "2021", title: "Presentation Of Select Technical Papers Part 1", videoId: "tVW7QyP9rxQ" },
        { date: "2021", title: "Interconnection of Regional Grids in ASIA", videoId: "6jalDRPRcdk" },
        { date: "2021", title: "Smart Meter Rollout", videoId: "2AWHWuSzS74" },
        { date: "2021", title: "Energy Storage System Business Models", videoId: "x8pPbdzjsrA" },
        { date: "2021", title: "Disaster Resilient Utilities", videoId: "pE8_xyFMyk4" },
        { date: "2021", title: "5G For Smart Utilities", videoId: "Gg-F1ZrHBZU" },
        { date: "2021", title: "7th US - India Smart Grid Workshop", videoId: "uBkBuR-egoY" },
        { date: "2021", title: "10th EU - India Smart Grid Workshop Part B", videoId: "pkD2mE6dHKY" },
        { date: "2021", title: "Smart Water Distribution", videoId: "TmWt3pQxkxs" },
        { date: "2021", title: "IEC-IEEE Smart Energy Standardization", videoId: "MOqRrCoVfGA" },
        { date: "2021", title: "Electric Cooking Roundtable", videoId: "lHMSLWkpBRo" },
        { date: "2021", title: "Cyber Security For Digital Utilities", videoId: "wEi8c3HO6ZE" },
        { date: "2021", title: "Disruptive Technologies Part A", videoId: "4FCj2lKpNAU" },
        { date: "2021", title: "New Revenue Opportunities For Utilities", videoId: "9FLh-Eqif-Y" },
        { date: "2021", title: "Grid Integrated Vehicles (GIV)", videoId: "d5LIU5rx6dU" },
        { date: "2021", title: "District Cooling System Workshop", videoId: "Rg6Se88vSk0" },
        { date: "2021", title: "DST & Swedish Energy Agency Workshop", videoId: "d7n3aXJQlCs" },
        { date: "2021", title: "Smart City Gas Distribution", videoId: "ZX8ddXbTQ4M" },
        { date: "2021", title: "Urban Air Mobility Systems", videoId: "AzsWjPEaKD4" },
        { date: "2021", title: "Disruptive Technologies Part B", videoId: "BsWi2gkQUcA" },
        { date: "2021", title: "Live Line Maintenance Workshop", videoId: "1FTNprir1mQ" },
        { date: "2021", title: "Technical Papers Part 2", videoId: "dxdjYtKxUQQ" },
        { date: "2021", title: "ISGF Innovation Awards", videoId: "yskAac2Y8SA" },
        { date: "2021", title: "Smart Metering Digital Architecture", videoId: "ylrJHFZdhb8" },
        { date: "2021", title: "Blockchain For Utilities", videoId: "6qnK_QPCybk" }
    ]
};

// Track loaded years
const loadedYears = {};

// Function to load videos for a specific year
function loadVideosForYear(year, containerElement) {
    const videos = videoData[year];
    
    if (!videos || videos.length === 0) {
        containerElement.innerHTML = '<div class="video-loader">No videos found for this year.</div>';
        return;
    }
    
    let html = '<div class="container slider_margin1">';
    
    // Group videos into rows of 2
    for (let i = 0; i < videos.length; i += 2) {
        html += '<div class="row">';
        
        // First video in row
        if (videos[i]) {
            html += `
                <div class="col-md-6">
                    <div class="clearfix"></div>
                    <h3 class="p-head">ISUW ${year} | ${videos[i].date} | ${videos[i].title}</h3>
                    <ul>
                        <iframe width="488" height="280" src="https://www.youtube.com/embed/${videos[i].videoId}" 
                            title="YouTube video player" frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen loading="lazy">
                        </iframe>
                    </ul>
                </div>
            `;
        }
        
        // Second video in row
        if (videos[i + 1]) {
            html += `
                <div class="col-md-6">
                    <div class="clearfix"></div>
                    <h3 class="p-head">ISUW ${year} | ${videos[i + 1].date} | ${videos[i + 1].title}</h3>
                    <ul>
                        <iframe width="488" height="280" src="https://www.youtube.com/embed/${videos[i + 1].videoId}" 
                            title="YouTube video player" frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen loading="lazy">
                        </iframe>
                    </ul>
                </div>
            `;
        }
        
        html += '</div>';
    }
    
    html += '</div>';
    containerElement.innerHTML = html;
}

// Tab switching function with lazy loading
function openCity(evt, year) {
    // Get all tab contents and hide them
    var tabcontents = document.getElementsByClassName("tabcontent");
    for (var i = 0; i < tabcontents.length; i++) {
        tabcontents[i].style.display = "none";
    }
    
    // Remove active class from all tab buttons
    var tablinks = document.getElementsByClassName("tablinks");
    for (var i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    
    // Show current tab and mark button as active
    var currentTab = document.getElementById(year);
    if (currentTab) {
        currentTab.style.display = "block";
        evt.currentTarget.className += " active";
        
        // Load videos if not already loaded
        if (!loadedYears[year] && videoData[year]) {
            const videoContainer = currentTab.querySelector('.container');
            if (videoContainer) {
                loadVideosForYear(year, videoContainer);
                loadedYears[year] = true;
            }
        }
    }
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
    // Load default year (2026) videos
    const defaultYear = '2026';
    const defaultTab = document.getElementById(defaultYear);
    const defaultButton = document.querySelector('.tab button');
    
    if (defaultButton) {
        defaultButton.className += " active";
    }
    
    if (defaultTab && videoData[defaultYear]) {
        const videoContainer = defaultTab.querySelector('.container');
        if (videoContainer) {
            loadVideosForYear(defaultYear, videoContainer);
            loadedYears[defaultYear] = true;
        }
    }
});
</script>