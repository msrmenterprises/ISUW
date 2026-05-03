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
.gallleryflick{ float:left; margin-left:30px; list-style:none; margin-bottom:30px; list-style:none !important; height:240px;} 
.responsive .content img{ height:226px !important; } 
h3.p-head{ height:auto; min-height: 70px; background: #00923f; color: #FFF; margin: 45px 32px 15px 0px; padding: 10px; font-size: 16px; border-radius: 5px; } 
iframe.flickr-embed-frame {
    height: 300px; min-height: 300px !important; overflow: hidden !important;
}

.tab {
  overflow: hidden;
  width: 100%;
  margin: 0 auto;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.tab button {
  background-color: #f1f1f1;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 8px 20px;
  transition: 0.3s;
  font-size: 15px;
  margin: 2px;
  border-radius: 4px;
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
.photo-loader {
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
    margin: 0;
}

img {
    width: 100%;
    max-width: 100%;
    border-radius: 8px;
    transition: transform 0.3s ease;
}

img:hover {
    transform: scale(1.02);
}

@media (max-width: 768px) {
    .col-md-6 {
        flex: 0 0 100%;
        max-width: 100%;
        margin-bottom: 20px;
    }
    .tab button {
        padding: 6px 12px;
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
    <button class="tablinks" onclick="openCity(event, '2020')">2020</button>
    <button class="tablinks" onclick="openCity(event, '2019')">2019</button>
    <button class="tablinks" onclick="openCity(event, '2018')">2018</button>
    <button class="tablinks" onclick="openCity(event, '2017')">2017</button>
</div>

<!-- 2026 Tab -->
<div id="2026" class="tabcontent" style="display: block;">
    <div class="container slider_margin1" data-year="2026">
        <div class="photo-loader">Loading photos... <div class="spinner"></div></div>
    </div>
</div>

<!-- 2025 Tab -->
<div id="2025" class="tabcontent">
    <div class="container slider_margin1" data-year="2025">
        <div class="photo-loader">Loading photos... <div class="spinner"></div></div>
    </div>
</div>

<!-- 2024 Tab -->
<div id="2024" class="tabcontent">
    <div class="container slider_margin1" data-year="2024">
        <div class="photo-loader">Loading photos... <div class="spinner"></div></div>
    </div>
</div>

<!-- 2023 Tab -->
<div id="2023" class="tabcontent">
    <div class="container slider_margin1" data-year="2023">
        <div class="photo-loader">Loading photos... <div class="spinner"></div></div>
    </div>
</div>

<!-- 2022 Tab -->
<div id="2022" class="tabcontent">
    <div class="container slider_margin1" data-year="2022">
        <div class="photo-loader">Loading photos... <div class="spinner"></div></div>
    </div>
</div>

<!-- 2021 Tab -->
<div id="2021" class="tabcontent">
    <div class="container slider_margin1" data-year="2021">
        <div class="photo-loader">Loading photos... <div class="spinner"></div></div>
    </div>
</div>

<!-- 2020 Tab -->
<div id="2020" class="tabcontent">
    <div class="container slider_margin1" data-year="2020">
        <div class="photo-loader">Loading photos... <div class="spinner"></div></div>
    </div>
</div>

<!-- 2019 Tab -->
<div id="2019" class="tabcontent">
    <div class="container slider_margin1" data-year="2019">
        <div class="photo-loader">Loading photos... <div class="spinner"></div></div>
    </div>
</div>

<!-- 2018 Tab -->
<div id="2018" class="tabcontent">
    <div class="container slider_margin1" data-year="2018">
        <div class="photo-loader">Loading photos... <div class="spinner"></div></div>
    </div>
</div>

<!-- 2017 Tab -->
<div id="2017" class="tabcontent">
    <div class="container slider_margin1" data-year="2017">
        <div class="photo-loader">Loading photos... <div class="spinner"></div></div>
    </div>
</div>

<p></p>
</div>
</div>

@endsection

<script>
// Complete Photo Data for ALL years (2026 to 2017)
const photoData = {
    // ==================== 2026 PHOTO DATA ====================
    2026: [
        { title: "ISUW_2026: Agentic AI – How to Build and Deploy AI Agents", flickrAlbum: "72177720332551066", coverImage: "55150617273_8d3591116c_c.jpg" },
        { title: "ISUW_2026: 10th IEC–IEEE-BIS Smart Energy Standardization Coordination Workshop", flickrAlbum: "72177720332568393", coverImage: "55149602827_ab8bfe565f_c.jpg" },
        { title: "ISUW_2026: INAUGURATION OF ISUW 2026 CONFERENCE AND EXHIBITION", flickrAlbum: "72177720332552812", coverImage: "55150607076_f9cc8eb022_c.jpg" },
        { title: "ISUW_2026: 10 Million Solar Rooftop Systems and Management of Reverse Power Flows", flickrAlbum: "72177720332552661", coverImage: "55150775793_f3a93feee5_c.jpg" },
        { title: "ISUW_2026: Regulations for Digital Grids (In Partnership with Power Foundation of India)", flickrAlbum: "72177720332552701", coverImage: "55149729682_4ed44da9ae_c.jpg" },
        { title: "ISUW_2026: Square-Mile-Size AI Data Centres Requiring GW-scale Power Connections", flickrAlbum: "72177720332553012", coverImage: "55150624541_1471d3a7a1_c.jpg" },
        { title: "ISUW_2026: Digital Energy Grids on Unified Energy Interface (UEI) Architecture", flickrAlbum: "72177720332546975", coverImage: "55150862664_1a994d8ee6_c.jpg" },
        { title: "ISUW_2026: India – UK CEO Roundtable on Smart Energy", flickrAlbum: "72177720332547020", coverImage: "55151010685_5cc928e0b5_c.jpg" },
        { title: "ISUW_2026: 12th India - US Smart Energy Workshop", flickrAlbum: "72177720332547050", coverImage: "55151015155_5ddb4b8aa8_c.jpg" },
        { title: "ISUW_2026: General Body Meeting of All India Discoms Association (AIDA)", flickrAlbum: "72177720332569963", coverImage: "55150877454_79e0f46bdd_c.jpg" },
        { title: "ISUW_2026: Welcome Reception and Partner Recognition Ceremony", flickrAlbum: "72177720332672821", coverImage: "55163578873_6dc02c62f8_c.jpg" },
        { title: "ISUW_2026: Rise of 'Flexumers' and Digital Tools for DER Management", flickrAlbum: "72177720332599714", coverImage: "55151608807_d6bde99865_c.jpg" },
        { title: "ISUW_2026: Smart Metering and Smart Meter Data Analytics", flickrAlbum: "72177720332588373", coverImage: "55152757499_4dfa9f379d_c.jpg" },
        { title: "ISUW_2026: 3rd India – Brazil Smart Energy Workshop", flickrAlbum: "72177720332573461", coverImage: "55151740177_2c33c4c52c_c.jpg" },
        { title: "ISUW_2026: Digitalization Roadmaps for Utilities", flickrAlbum: "72177720332605738", coverImage: "55154546970_1bc77120f3_c.jpg" },
        { title: "ISUW_2026: Role of Small Modular Reactors (SMR) in Net Zero Power Systems", flickrAlbum: "72177720332589966", coverImage: "55154205691_52f769f0fc_c.jpg" },
        { title: "ISUW_2026: The Cooling Challenge: Accelerating District Cooling System (DCS) Adoption", flickrAlbum: "72177720332605923", coverImage: "55154578255_1782c39150_c.jpg" },
        { title: "ISUW_2026: Resiliency of Power Systems Against Extreme Weather Events", flickrAlbum: "72177720332617634", coverImage: "55154226211_35c79be9ac_c.jpg" },
        { title: "ISUW_2026: Data Governance Framework and Data Management in Utilities", flickrAlbum: "72177720332585155", coverImage: "55154530679_72319b1a16_c.jpg" },
        { title: "ISUW_2026: New Technologies: AI–ML–VR–AR and Robotics for Utilities", flickrAlbum: "72177720332590022", coverImage: "55154325131_16c67f4aed_c.jpg" },
        { title: "ISUW_2026: Electric Vehicles – A $200 Billion Opportunity in India", flickrAlbum: "72177720332617470", coverImage: "55158100625_8c5f27c666_c.jpg" },
        { title: "ISUW_2026: Electrification of Agricultural Sector and Charging of EVs", flickrAlbum: "72177720332617580", coverImage: "55158111290_3e6ebe4005_c.jpg" },
        { title: "ISUW_2026: Power Markets and Carbon Markets In Partnership with IEX", flickrAlbum: "72177720332617715", coverImage: "55157744846_0393b6819e_c.jpg" },
        { title: "ISUW_2026: Emerging Solutions for Power System Flexibility", flickrAlbum: "72177720332617765", coverImage: "55157911948_f9350247ec_c.jpg" },
        { title: "ISUW_2026: Future of Work: Working with Digital Colleagues and Humanoid Robots", flickrAlbum: "72177720332623367", coverImage: "55158068464_eab9486b48_c.jpg" },
        { title: "ISUW_2026: Gender Balance in The Energy Sector", flickrAlbum: "72177720332624926", coverImage: "55157989158_49a70608f1_c.jpg" },
        { title: "ISUW_2026: 2nd India-Indonesia Smart Energy Workshop", flickrAlbum: "72177720332640628", coverImage: "55157844841_20d6ce03e0_c.jpg" },
        { title: "ISUW_2026: Presentation of Select Technical Papers", flickrAlbum: "72177720332619490", coverImage: "55157894196_916b0dc7f7_c.jpg" },
        { title: "ISUW_2026: Special Plenary Session by JBV Reddy, DST", flickrAlbum: "72177720332669212", coverImage: "55163408008_1b34236125_c.jpg" },
        { title: "ISUW_2026: ISGF INNOVATION AWARDS", flickrAlbum: "72177720332670212", coverImage: "55163532103_fcbe3a269f_c.jpg" },
        { title: "ISUW_2026: Tour 1 - TPDDL Smart Grid Lab + BESS at BRPL", flickrAlbum: "72177720332672986", coverImage: "55163599333_0771e92804_c.jpg" },
        { title: "ISUW_2026: Tour 2 - 800 kV HVDC Station in AGRA + TAJ MAHAL", flickrAlbum: "72177720332687593", coverImage: "55163829250_5e42ebb3d7_c.jpg" }
    ],
    
    // ==================== 2025 PHOTO DATA ====================
    2025: [
        { title: "ISUW_2025: 9TH IEC-IEEE-BIS SMART ENERGY STANDARDIZATION COORDINATION WORKSHOP", flickrAlbum: "72177720324731404", coverImage: "54415432050_e1ed408518_c.jpg" },
        { title: "ISUW_2025: OCPP TECHNICAL SESSION", flickrAlbum: "72177720324710002", coverImage: "54414216407_3f6d26584a_c.jpg" },
        { title: "ISUW_2025: INAUGURATION OF ISUW 2025 CONFERENCE AND EXHIBITION", flickrAlbum: "72177720324731974", coverImage: "54415100971_3d56967692_c.jpg" },
        { title: "ISUW_2025: FIRST GENERAL BODY MEETING OF AIDA", flickrAlbum: "72177720324740789", coverImage: "54414958142_ed5997d1_c.jpg" },
        { title: "ISUW_2025: UK - INDIA WORKSHOP ON ASPIRE PROGRAM", flickrAlbum: "72177720324715355", coverImage: "54414983737_746d4de8f3_c.jpg" },
        { title: "ISUW_2025: 11th US – INDIA SMART ENERGY WORKSHOP", flickrAlbum: "72177720324723391", coverImage: "54415901396_c3d74cc467_c.jpg" },
        { title: "ISUW_2025: 1ST AFRICA - INDIA SMART ENERGY ROUNDTABLE", flickrAlbum: "72177720324723651", coverImage: "54415923511_c81400ca0b_c.jpg" },
        { title: "ISUW_2025: ROUNDTABLE ON INDIA'S ENERGY STORAGE POTENTIAL", flickrAlbum: "72177720324735903", coverImage: "54416127429_2960f6a1bc_c.jpg" },
        { title: "ISUW_2025: Welcome Reception & Cultural Program", flickrAlbum: "72177720324743004", coverImage: "54416378195_22ee0c80ec_c.jpg" },
        { title: "ISUW_2025: SMART METERING PART A", flickrAlbum: "72177720324732682", coverImage: "54417448734_18be1971d2_c.jpg" },
        { title: "ISUW_2025: SMART METERING PART B", flickrAlbum: "72177720324736586", coverImage: "54416438722_6c60241153_c.jpg" },
        { title: "ISUW_2025: ROOFTOP PV REVOLUTION IN INDIA", flickrAlbum: "72177720324749153", coverImage: "54417741925_e0bb302d1f_c.jpg" },
        { title: "ISUW_2025: Unified Energy Interface (UEI)", flickrAlbum: "72177720324738332", coverImage: "54418240235_0b8c927d97_c.jpg" },
        { title: "ISUW_2025: NUCLEAR RENAISSANCE AND SMR", flickrAlbum: "72177720324738492", coverImage: "54418064214_6b93977d16_c.jpg" },
        { title: "ISUW_2025: BUILDING RESILIENT UTILITY ASSETS", flickrAlbum: "72177720324738877", coverImage: "54417905011_d474bc9555_c.jpg" },
        { title: "ISUW_2025: POWER SYSTEM FLEXIBILITY AND DERMS", flickrAlbum: "72177720324742191", coverImage: "54418103419_ed55d0d256_c.jpg" },
        { title: "ISUW_2025: DEEP DIVE SESSION ON AI, ML AND ROBOTICS", flickrAlbum: "72177720324742316", coverImage: "54417057132_4c017d579e_c.jpg" },
        { title: "ISUW_2025: 1ST JOINT INDONESIA-INDIA WORKSHOP", flickrAlbum: "72177720324742371", coverImage: "54417934946_9f9e587106_c.jpg" },
        { title: "ISUW_2025: Presentation of Selected Technical Papers", flickrAlbum: "72177720324760879", coverImage: "54418326435_7be8f10b1a_c.jpg" },
        { title: "ISUW_2025: DIGITALIZATION OF UTILITIES", flickrAlbum: "72177720324750370", coverImage: "54418721987_316bfa8903_c.jpg" },
        { title: "ISUW_2025: EMERGING DIGITAL TECHNOLOGIES FOR UTILITIES", flickrAlbum: "72177720324769038", coverImage: "54419842093_63889fdc05_c.jpg" },
        { title: "ISUW_2025: INNOVATIONS IN REGULATIONS", flickrAlbum: "72177720324754057", coverImage: "54419799679_6383f1d78b_c.jpg" },
        { title: "ISUW_2025: GRID INTEGRATED BUILDINGS", flickrAlbum: "72177720324751765", coverImage: "54419928694_3308fb2896_c.jpg" },
        { title: "ISUW_2025: POWER MARKETS AND CARBON MARKETS", flickrAlbum: "72177720324751945", coverImage: "54419750921_94198ff895_c.jpg" },
        { title: "ISUW_2025: WORKSHOP ON IMMERSIVE TECHNOLOGIES", flickrAlbum: "72177720324758621", coverImage: "54419784146_e672f68424_c.jpg" },
        { title: "ISUW_2025: EVOLVING TRENDS IN ELECTRIC MOBILITY", flickrAlbum: "72177720324758836", coverImage: "54418946597_35082cbbfd_c.jpg" },
        { title: "ISUW_2025: CAPACITY BUILDING IN UTILITIES", flickrAlbum: "72177720324777699", coverImage: "54420208190_df93eff631_c.jpg" },
        { title: "ISUW_2025: ISGF INNOVATION AWARDS", flickrAlbum: "72177720324759071", coverImage: "54420077678_a0775e88ec_z.jpg" },
        { title: "ISUW_2025: TECHNICAL TOURS - Tour 1", flickrAlbum: "72177720324756837", coverImage: "54426016130_8bea81fa00_c.jpg" },
        { title: "ISUW_2025: TECHNICAL TOURS - Tour 2", flickrAlbum: "72177720324839264", coverImage: "54426011265_ba429b7348_c.jpg" }
    ],
    
    // ==================== 2024 PHOTO DATA ====================
    2024: [
        { title: "ISUW_2024: Experiential Workshop on Immersive Technologies", flickrAlbum: "72177720315606550", coverImage: "53604344025_109bd088b8_z.jpg" },
        { title: "ISUW_2024: OCPP Technical Workshop and Training", flickrAlbum: "72177720315605377", coverImage: "53603067802_4a31ab8632_z.jpg" },
        { title: "ISUW_2024: Master Class on Energy Transition Strategies", flickrAlbum: "72177720315613341", coverImage: "53603974251_f50a34e9f2_z.jpg" },
        { title: "ISUW_2024: 8th IEC - IEEE Smart Energy Standardization Workshop", flickrAlbum: "72177720315628029", coverImage: "53604002891_7d641c2026_z.jpg" },
        { title: "ISUW_2024: INAUGURATION OF ISUW 2024 CONFERENCE", flickrAlbum: "72177720315575180", coverImage: "53601292949_a668b9dc6c_z.jpg" },
        { title: "ISUW_2024: Digitalization of Utilities, Digital Twins", flickrAlbum: "72177720315581031", coverImage: "53601313394_e956e71b48_z.jpg" },
        { title: "ISUW_2024: Emerging Technologies for Utilities", flickrAlbum: "72177720315586343", coverImage: "53601450150_a7a71d0d78_z.jpg" },
        { title: "ISUW_2024: 13th EU - India Smart Energy Workshop", flickrAlbum: "72177720315574452", coverImage: "53601551700_84ee17f970_z.jpg" },
        { title: "ISUW_2024: 1ST INDIA - BRAZIL Smart Energy Workshop", flickrAlbum: "72177720315575572", coverImage: "53601384413_5bec1665a2_z.jpg" },
        { title: "ISUW_2024: 10th US – India Smart Energy Workshop", flickrAlbum: "72177720315597689", coverImage: "53601519954_6664de48b4_z.jpg" },
        { title: "ISUW_2024: Special Plenary - Climate Actions that will Work", flickrAlbum: "72177720315702644", coverImage: "53612200584_475063572c_z.jpg" },
        { title: "ISUW_2024: Global Lessons on Smart Metering", flickrAlbum: "72177720315702269", coverImage: "53610942757_d492fa3141_z.jpg" },
        { title: "ISUW_2024: Energy Positive Smart Buildings and Campuses", flickrAlbum: "72177720315596690", coverImage: "53602114122_656c849931_z.jpg" },
        { title: "ISUW_2024: 3rd India - Germany Smart Energy Workshop", flickrAlbum: "72177720315611323", coverImage: "53603349226_72e6e3087a_z.jpg" },
        { title: "ISUW_2024: Innovative Technologies for Energy Transition", flickrAlbum: "72177720315611423", coverImage: "53603356801_14ecedda00_z.jpg" },
        { title: "ISUW_2024: Virtual Power Plants (VPPS)", flickrAlbum: "72177720315606601", coverImage: "53603709729_7db9093bfa_z.jpg" },
        { title: "ISUW_2024: The Cooling Challenge - District Cooling Systems", flickrAlbum: "72177720315606746", coverImage: "53603376026_a6015f4795_z.jpg" },
        { title: "ISUW_2024: Climate Resilience of Future Grids", flickrAlbum: "72177720315599222", coverImage: "53603727399_8fe079f7cd_z.jpg" },
        { title: "ISUW_2024: Nuclear Renaissance and SMR", flickrAlbum: "72177720315612173", coverImage: "53602542257_4f3e100f56_z.jpg" },
        { title: "ISUW_2024: Presentation of Select Technical Papers", flickrAlbum: "72177720315607501", coverImage: "53603643003_480f29da21_z.jpg" },
        { title: "ISUW_2024: Super Grids for Energy Transition", flickrAlbum: "72177720315601845", coverImage: "53603463286_e272c284f5_z.jpg" },
        { title: "ISUW_2024: Long Duration Energy Storage Systems", flickrAlbum: "72177720315600737", coverImage: "53603719698_0ba3131106_z.jpg" },
        { title: "ISUW_2024: Policy and Regulatory Support", flickrAlbum: "72177720315623009", coverImage: "53602668977_43f0c93f45_z.jpg" },
        { title: "ISUW_2024: Evolving Trends in Electric Mobility", flickrAlbum: "72177720315601417", coverImage: "53603903339_36cbf5f44d_z.jpg" },
        { title: "ISUW_2024: Digital Tools for DER Management", flickrAlbum: "72177720315614863", coverImage: "53602789412_7945b48495_z.jpg" },
        { title: "ISUW_2024: Smart Utilities Integration", flickrAlbum: "72177720315610616", coverImage: "53604152090_f42df19785_z.jpg" },
        { title: "ISUW_2024: Power Markets and Carbon Markets", flickrAlbum: "72177720315611101", coverImage: "53603947968_91ecd467eb_z.jpg" },
        { title: "ISUW_2024: Evolving Trends in Utility Automation", flickrAlbum: "72177720315606090", coverImage: "53603838296_68058c08db_z.jpg" },
        { title: "ISUW_2024: ISGF Innovation Awards", flickrAlbum: "72177720315675305", coverImage: "53611556635_9af995bd2c_z.jpg" },
        { title: "ISUW_2024: Technical Tours and Demonstrations", flickrAlbum: "72177720315919865", coverImage: "53629091429_89e20af6f6_z.jpg" }
    ],
    
    // ==================== 2023 PHOTO DATA ====================
    2023: [
        { title: "ISUW_2023: Generative Artificial Intelligence Tools Course", flickrAlbum: "72177720306626433", coverImage: "52739014633_e79fbe9435_z.jpg" },
        { title: "ISUW_2023: OCPP Technical Workshop and Training", flickrAlbum: "72177720306705811", coverImage: "52747649010_462f8246ef_z.jpg" },
        { title: "ISUW_2023: Energy Transition to Net Zero Power System", flickrAlbum: "72177720306613167", coverImage: "52738085052_05f8a655b8_z.jpg" },
        { title: "ISUW_2023: IEC-IEEE Smart Energy Standardization Workshop", flickrAlbum: "72177720306609430", coverImage: "52738919109_63907c9c34_z.jpg" },
        { title: "ISUW_2023: INAUGURATION OF ISUW 2023 CONFERENCE", flickrAlbum: "72177720306630613", coverImage: "52739083114_64beb64d77_z.jpg" },
        { title: "ISUW_2023: Vision for a Net Zero Power Sector", flickrAlbum: "72177720306619101", coverImage: "52739960169_c0ef4ca7b4_z.jpg" },
        { title: "ISUW_2023: Evolving Architecture of Net Zero Power System", flickrAlbum: "72177720306621350", coverImage: "52739234072_cbfae23f5e_z.jpg" },
        { title: "ISUW_2023: Customer Experience in the Digital Age", flickrAlbum: "72177720306619671", coverImage: "52740187065_bdc8ac1984_z.jpg" },
        { title: "ISUW_2023: Regulations for Net Zero Power System", flickrAlbum: "72177720306637209", coverImage: "52739809441_0204333278_z.jpg" },
        { title: "ISUW_2023: 9th US - India Smart Grid Workshop", flickrAlbum: "72177720306637579", coverImage: "52740328598_cf2f833fb4_z.jpg" },
        { title: "ISUW_2023: Smart Communications for Utilities", flickrAlbum: "72177720306627012", coverImage: "52740146489_bfb6e20531_z.jpg" },
        { title: "ISUW_2023: Special Session on Hydrogen Mission", flickrAlbum: "72177720306638344", coverImage: "52739398002_142fde238c_z.jpg" },
        { title: "ISUW_2023: Climate Proofing of Future Grids", flickrAlbum: "72177720306647915", coverImage: "52741669012_d8aca4d158_z.jpg" },
        { title: "ISUW_2023: 250 Million Smart Meter Rollout", flickrAlbum: "72177720306664209", coverImage: "52742813428_f0e9cc7916_z.jpg" },
        { title: "ISUW_2023: Vision for Net Zero Transport Sector", flickrAlbum: "72177720306652660", coverImage: "52743136043_c04980c83e_z.jpg" },
        { title: "ISUW_2023: 50K Electric Bus Program", flickrAlbum: "72177720306651521", coverImage: "52743252573_6a49531bb9_z.jpg" },
        { title: "ISUW_2023: AI, ML, Robotics for Utilities", flickrAlbum: "72177720306652271", coverImage: "52743261825_01b6d64348_z.jpg" },
        { title: "ISUW_2023: Blockchain, Web 3.0, Metaverse for Utilities", flickrAlbum: "72177720306674668", coverImage: "52743428828_2d503c45e5_z.jpg" },
        { title: "ISUW_2023: District Cooling System", flickrAlbum: "72177720306682434", coverImage: "52744049501_482de8c8c4_z.jpg" },
        { title: "ISUW_2023: 12th EU - India Smart Grid Workshop", flickrAlbum: "72177720306691479", coverImage: "52744318092_dc31a85365_z.jpg" },
        { title: "ISUW_2023: 2nd Germany - India Smart Grid Workshop", flickrAlbum: "72177720306681990", coverImage: "52745269611_2523c8aaa5_z.jpg" },
        { title: "ISUW_2023: Energy Positive Buildings", flickrAlbum: "72177720306683600", coverImage: "52745853818_900884d004_z.jpg" },
        { title: "ISUW_2023: Cross-Border Electricity Trade", flickrAlbum: "72177720306684160", coverImage: "52745686044_4886b7c0a6_z.jpg" },
        { title: "ISUW_2023: Digital Management of Rooftop PV", flickrAlbum: "72177720306703613", coverImage: "52745974478_853811605c_z.jpg" },
        { title: "ISUW_2023: Smart Water Distribution", flickrAlbum: "72177720306685060", coverImage: "52745909400_a39a76b8be_z.jpg" },
        { title: "ISUW_2023: Colonizing the Moon and Mars", flickrAlbum: "72177720306726738", coverImage: "52746682402_1bd5ba2f23_z.jpg" },
        { title: "ISUW_2023: Evolving Trends in Electric Mobility", flickrAlbum: "72177720306701559", coverImage: "52745580431_dc94a589b8_z.jpg" },
        { title: "ISUW_2023: Digitalization of Utilities", flickrAlbum: "72177720306689572", coverImage: "52746100768_23db969917_z.jpg" },
        { title: "ISUW_2023: Electric Highways", flickrAlbum: "72177720306684536", coverImage: "52746035525_9112257b1b_z.jpg" },
        { title: "ISUW_2023: Power System Flexibility", flickrAlbum: "72177720306715663", coverImage: "52746945778_e19bd3d083_z.jpg" },
        { title: "ISUW_2023: MW-scale Charging Systems", flickrAlbum: "72177720306696910", coverImage: "52746712424_5bc69240ab_z.jpg" },
        { title: "ISUW_2023: Carbon Markets", flickrAlbum: "72177720306702727", coverImage: "52747056890_0542cbcec9_z.jpg" },
        { title: "ISUW_2023: Interconnection of Regional Grids in Asia", flickrAlbum: "72177720306697345", coverImage: "52746487306_6783c059d0_z.jpg" },
        { title: "ISUW_2023: LiFE and Gender Relevance", flickrAlbum: "72177720306715654", coverImage: "52746167687_a005db02f2_z.jpg" },
        { title: "ISUW_2023: Presentation of Select Technical Papers", flickrAlbum: "72177720306724373", coverImage: "52747449440_5cacc3f019_z.jpg" },
        { title: "ISUW_2023: Smart City Gas Distribution", flickrAlbum: "72177720306703242", coverImage: "52746920519_58c08afb33_z.jpg" },
        { title: "ISUW_2023: ISGF Innovation Awards", flickrAlbum: "72177720306703242", coverImage: "52746920519_58c08afb33_z.jpg" },
        { title: "ISUW_2023: Technical Tour - NRLDC+REMC+TPDDL", flickrAlbum: "72177720306725232", coverImage: "52747974732_d3f4883369_z.jpg" },
        { title: "ISUW_2023: Technical Tour - Agra HVDC + Taj Mahal", flickrAlbum: "72177720306720821", coverImage: "52747965377_acdb4ee0a9_z.jpg" }
    ],
    
    // ==================== 2022 PHOTO DATA ====================
    2022: [
        { title: "ISUW 2022: INAUGURATION OF ISUW 2022 CONFERENCE", flickrAlbum: "72177720297235073", coverImage: "51928362740_5fa4c8e085_z.jpg" },
        { title: "ISUW 2022: Digitalization of Utilities", flickrAlbum: "72177720297231750", coverImage: "51928638145_e7671f6ed9_z.jpg" },
        { title: "ISUW 2022: Regulations for Green Grid", flickrAlbum: "72177720297241716", coverImage: "51927469447_478331597c_z.jpg" },
        { title: "ISUW 2022: Evolving Architecture of 21st Century Grid", flickrAlbum: "72177720297242021", coverImage: "51928558538_9c8204380d_z.jpg" },
        { title: "ISUW 2022: 11th EU - India Smart Grid Workshop Part A", flickrAlbum: "72177720297258718", coverImage: "51928672552_3130ce2c6a_z.jpg" },
        { title: "ISUW 2022: 1st Germany-India Smart Energy Workshop", flickrAlbum: "72177720297263088", coverImage: "51930082783_3b71a788d5_z.jpg" },
        { title: "ISUW 2022: Empowering Women in Power Sector", flickrAlbum: "72177720297260682", coverImage: "51930311273_075f8e1662_z.jpg" },
        { title: "ISUW 2022: Technical Papers Part 1", flickrAlbum: "72177720297263844", coverImage: "51930265111_9612e9f21a_z.jpg" },
        { title: "ISUW 2022: Interconnection of Regional Grids", flickrAlbum: "72177720297281936", coverImage: "51931792946_660a056df5_z.jpg" },
        { title: "ISUW 2022: Virtual Yoga Session", flickrAlbum: "72177720297341129", coverImage: "51936302492_0e6ec56ec4_z.jpg" },
        { title: "ISUW 2022: Future of Electric Planes", flickrAlbum: "72177720297342278", coverImage: "51936324602_0cc6c11d7e_z.jpg" },
        { title: "ISUW 2022: Cyber Security for Digital Grids", flickrAlbum: "72177720297263971", coverImage: "51930716514_084318b316_z.jpg" },
        { title: "ISUW 2022: Power System Flexibility", flickrAlbum: "72177720297283734", coverImage: "51931853628_9b8e4e1a8b_z.jpg" },
        { title: "ISUW 2022: Electric Vehicles and Grid", flickrAlbum: "72177720297262220", coverImage: "51930514923_4bfc697e8c_z.jpg" },
        { title: "ISUW 2022: Levelized Cost of Green Energy", flickrAlbum: "72177720297263737", coverImage: "51931079590_9fbe2009b0_z.jpg" },
        { title: "ISUW 2022: 11th EU - India Workshop Part B", flickrAlbum: "72177720297269488", coverImage: "51929506852_bc0c7733d3_z.jpg" },
        { title: "ISUW 2022: 8th US - India Smart Grid Workshop", flickrAlbum: "72177720297267169", coverImage: "51930505816_b6b197cb83_z.jpg" },
        { title: "ISUW 2022: Smart City Gas Distribution", flickrAlbum: "72177720297276874", coverImage: "51931286048_b7f646b252_z.jpg" },
        { title: "ISUW 2022: Smart Communication Solutions", flickrAlbum: "72177720297289661", coverImage: "51932388876_677ffff797_z.jpg" },
        { title: "ISUW 2022: Smart Metering Rollout", flickrAlbum: "72177720297322145", coverImage: "51936299059_a4e3e3bbaf_z.jpg" },
        { title: "ISUW 2022: Electric Cooking", flickrAlbum: "72177720297322450", coverImage: "51936621440_6bc48ff668_z.jpg" },
        { title: "ISUW 2022: Project Lunar Oasis", flickrAlbum: "72177720297356066", coverImage: "51938923554_3d059b7828_z.jpg" },
        { title: "ISUW 2022: Multiplanetary Species", flickrAlbum: "72177720297341489", coverImage: "51936333172_e833a879e0_z.jpg" },
        { title: "ISUW 2022: Green Hydrogen Mission", flickrAlbum: "72177720297324447", coverImage: "51935050177_8d5d37f666_z.jpg" },
        { title: "ISUW 2022: Disruptive Technologies for Utilities", flickrAlbum: "72177720297323145", coverImage: "51936395014_60b5ea557e_z.jpg" },
        { title: "ISUW 2022: Role of Media in Green Energy", flickrAlbum: "72177720297325377", coverImage: "51936183218_d1eb1b1300_z.jpg" },
        { title: "ISUW 2022: Live Line Maintenance", flickrAlbum: "72177720297332950", coverImage: "51936086512_2d070f11c5_z.jpg" },
        { title: "ISUW 2022: Smart Water Distribution", flickrAlbum: "72177720297336086", coverImage: "51937698035_e5cd85c41e_z.jpg" },
        { title: "ISUW 2022: Technical Papers Part 2", flickrAlbum: "72177720297333240", coverImage: "51937415334_d9a9a08324_z.jpg" },
        { title: "ISUW 2022: Urban Air Mobility Systems", flickrAlbum: "72177720297339734", coverImage: "51936190747_498d5f6cd2_z.jpg" },
        { title: "ISUW 2022: District Cooling Systems", flickrAlbum: "72177720297339794", coverImage: "51936197267_abf6cca58a_z.jpg" },
        { title: "ISUW 2022: ISGF Innovation Awards", flickrAlbum: "72177720297181639", coverImage: "51924063755_e68b3524dd_z.jpg" },
        { title: "ISUW 2022: Digital Exhibition", flickrAlbum: "72177720297351360", coverImage: "51937476712_24eca753e9_z.jpg" }
    ],
    
    // ==================== 2021 PHOTO DATA ====================
    2021: [
        { title: "ISUW 2021: Inauguration of ISUW 2021 Conference", flickrAlbum: "72157718605580492", coverImage: "51024440893_c9e11390cc.jpg" },
        { title: "ISUW 2021: Innovation in Utilities During Pandemic", flickrAlbum: "72157718590766638", coverImage: "51021813671_44886c2da0.jpg" },
        { title: "ISUW 2021: Regulatory Support for Revival of Utilities", flickrAlbum: "72157718525324721", coverImage: "51005284456_23f3369e01.jpg" },
        { title: "ISUW 2021: Customer Rights Protection Order", flickrAlbum: "72157718603124798", coverImage: "51025255062_ac482e78d4.jpg" },
        { title: "ISUW 2021: 10th EU - India Smart Grid Workshop Part A", flickrAlbum: "72157718517002336", coverImage: "51003279822_85ccc2a6c1.jpg" },
        { title: "ISUW 2021: Technical Papers Part 1", flickrAlbum: "72157718516713661", coverImage: "51003196697_773aca9ca7.jpg" },
        { title: "ISUW 2021: Interconnection of Regional Grids", flickrAlbum: "72157718575164931", coverImage: "51018518381_93a7191107.jpg" },
        { title: "ISUW 2021: Smart Meter Rollout", flickrAlbum: "72157718594620007", coverImage: "51021455748_006f67cb35.jpg" },
        { title: "ISUW 2021: Energy Storage Systems", flickrAlbum: "72157718592228268", coverImage: "51022192706_e156d1b07a.jpg" },
        { title: "ISUW 2021: Disaster Resilient Utilities", flickrAlbum: "72157718594685807", coverImage: "51022303537_bb1c1e1765.jpg" },
        { title: "ISUW 2021: 5G for Smart Utilities", flickrAlbum: "72157718589656601", coverImage: "51021510628_1a9ca1acf2.jpg" },
        { title: "ISUW 2021: 7th US - India Smart Grid Workshop", flickrAlbum: "72157718589682356", coverImage: "51022248766_ff7b9a01ae.jpg" },
        { title: "ISUW 2021: 10th EU - India Workshop Part B", flickrAlbum: "72157718592517038", coverImage: "51022270886_d93f9ce493.jpg" },
        { title: "ISUW 2021: Smart Water Distribution", flickrAlbum: "72157718519593298", coverImage: "51003136906_d348843f6f.jpg" },
        { title: "ISUW 2021: IEC-IEEE Standardization Workshop", flickrAlbum: "72157718521959182", coverImage: "51003230052_199f7404a1.jpg" },
        { title: "ISUW 2021: Electric Cooking Roundtable", flickrAlbum: "72157718517079551", coverImage: "51003298502_e5e2c04b27.jpg" },
        { title: "ISUW 2021: Digital Architecture for Smart Metering", flickrAlbum: "72157718522344032", coverImage: "51003213251_0df820cd3a.jpg" },
        { title: "ISUW 2021: Cyber Security for Utilities", flickrAlbum: "72157718527660583", coverImage: "51005293452_e0677894b8.jpg" },
        { title: "ISUW 2021: Disruptive Technologies Part A", flickrAlbum: "72157718575399346", coverImage: "51018676072_5ceed17342_z.jpg" },
        { title: "ISUW 2021: New Revenue Opportunities", flickrAlbum: "72157718578202728", coverImage: "51018692847_4c125348db.jpg" },
        { title: "ISUW 2021: Grid Integrated Vehicles", flickrAlbum: "72157718590039636", coverImage: "51021612543_3b8f55a0be.jpg" },
        { title: "ISUW 2021: District Cooling System Workshop", flickrAlbum: "72157718590141546", coverImage: "51021635548_e408d2b3b8.jpg" },
        { title: "ISUW 2021: DST & Swedish Energy Agency Workshop", flickrAlbum: "72157718590120611", coverImage: "51022361561_e2109a7f6d.jpg" },
        { title: "ISUW 2021: Smart City Gas Distribution", flickrAlbum: "72157718590086596", coverImage: "51022457382_49a5bdd66c.jpg" },
        { title: "ISUW 2021: Urban Air Mobility Systems", flickrAlbum: "72157718592814178", coverImage: "51022451832_c9c0e5c461.jpg" },
        { title: "ISUW 2021: Blockchain for Utilities", flickrAlbum: "72157718592795938", coverImage: "51022348526_f4c43967de.jpg" },
        { title: "ISUW 2021: Disruptive Technologies Part B", flickrAlbum: "72157718595406797", coverImage: "51022490692_e408d2b3b8.jpg" },
        { title: "ISUW 2021: Live Line Maintenance Workshop", flickrAlbum: "72157718592961858", coverImage: "51022485367_34f5d991f2.jpg" },
        { title: "ISUW 2021: Technical Papers Part 2", flickrAlbum: "72157718687617161", coverImage: "51047882578_13a4568bce.jpg" },
        { title: "ISUW 2021: ISGF Innovation Awards", flickrAlbum: "72157718590478608", coverImage: "51021008293_c0f667f21b.jpg" }
    ],
    
    // ==================== 2020 PHOTO DATA ====================
    2020: [
        { title: "RTI & ISGF Webinar on Electricity Distribution - Creating the Change", flickrAlbum: "72157716774572452", coverImage: "50571679078_a08d1f04ba_z.jpg" },
        { title: "Webinar - Electricity Distribution - Creating the Change", flickrAlbum: "72157715583554376", coverImage: "50254791827_61bfef0b32_z.jpg" }
    ],
    
    // ==================== 2019 PHOTO DATA ====================
    2019: [
        { title: "Power Quality of Smart Grids & EV Charging Infrastructure Workshop", flickrAlbum: "72157710582419778", coverImage: "48635475746_2a89a96b29_z.jpg" },
        { title: "Day 2 - Electric Mobility and Charging Infrastructure", flickrAlbum: "72157709821711471", coverImage: "48354016071_9a1d329ab6_z.jpg" },
        { title: "Day 1 - Electric Mobility and Charging Infrastructure", flickrAlbum: "72157709804153611", coverImage: "48346640262_18a6186777_z.jpg" },
        { title: "Brainstorming Session on Urban Water Crisis", flickrAlbum: "72157709825977782", coverImage: "48355146121_35a60a1b34_z.jpg" },
        { title: "Energy Storage Roadmap of India Workshop", flickrAlbum: "72157709803356862", coverImage: "48345891257_1013288024_z.jpg" }
    ],
    
    // ==================== 2018 PHOTO DATA ====================
    2018: [
        { title: "ISUW 2018 Conference Photos", flickrAlbum: "72177720324731404", coverImage: "54415432050_e1ed408518_c.jpg" }
    ],
    
    // ==================== 2017 PHOTO DATA ====================
    2017: [
        { title: "ISUW 2017 Conference Photos", flickrAlbum: "72177720324731404", coverImage: "54415432050_e1ed408518_c.jpg" }
    ]
};

// Track loaded years to prevent duplicate loading
const loadedYears = {};

// Function to load photos for a specific year
function loadPhotosForYear(year, containerElement) {
    const photos = photoData[year];
    
    if (!photos || photos.length === 0) {
        containerElement.innerHTML = '<div class="photo-loader">No photos found for this year.</div>';
        return;
    }
    
    let html = '<div class="container slider_margin1">';
    
    // Group photos into rows of 2
    for (let i = 0; i < photos.length; i += 2) {
        html += '<div class="row">';
        
        // First photo in row
        if (photos[i]) {
            html += `
                <div class="col-md-6">
                    <div class="clearfix"></div>
                    <h3 class="p-head">${photos[i].title}</h3>
                    <ul>
                        <a data-flickr-embed="true" data-header="true" data-footer="true" 
                           href="https://www.flickr.com/photos/indiasmartgridforum/albums/${photos[i].flickrAlbum}" 
                           target="_blank">
                            <img src="https://live.staticflickr.com/65535/${photos[i].coverImage}" 
                                 width="100%" height="auto" 
                                 alt="${photos[i].title}"
                                 loading="lazy">
                        </a>
                    </ul>
                </div>
            `;
        }
        
        // Second photo in row
        if (photos[i + 1]) {
            html += `
                <div class="col-md-6">
                    <div class="clearfix"></div>
                    <h3 class="p-head">${photos[i + 1].title}</h3>
                    <ul>
                        <a data-flickr-embed="true" data-header="true" data-footer="true" 
                           href="https://www.flickr.com/photos/indiasmartgridforum/albums/${photos[i + 1].flickrAlbum}" 
                           target="_blank">
                            <img src="https://live.staticflickr.com/65535/${photos[i + 1].coverImage}" 
                                 width="100%" height="auto" 
                                 alt="${photos[i + 1].title}"
                                 loading="lazy">
                        </a>
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
        
        // Load photos if not already loaded
        if (!loadedYears[year] && photoData[year]) {
            const photoContainer = currentTab.querySelector('.container');
            if (photoContainer) {
                loadPhotosForYear(year, photoContainer);
                loadedYears[year] = true;
            }
        }
    }
}

// Initialize on page load - Load default year (2026)
document.addEventListener('DOMContentLoaded', function() {
    const defaultYear = '2026';
    const defaultTab = document.getElementById(defaultYear);
    const defaultButton = document.querySelector('.tab button');
    
    if (defaultButton) {
        defaultButton.className += " active";
    }
    
    if (defaultTab && photoData[defaultYear]) {
        const photoContainer = defaultTab.querySelector('.container');
        if (photoContainer) {
            loadPhotosForYear(defaultYear, photoContainer);
            loadedYears[defaultYear] = true;
        }
    }
});
</script>