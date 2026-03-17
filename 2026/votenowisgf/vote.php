<?php include 'header.php'; include 'config.php';?>
<div class="holder">
<div class="video-container">
	
	<div id="overlay"><div class="content"><h3 style="font-size:30px; color:#e27618"><center>ISGF INNOVATION AWARDS 2023<br/><span>Date: 03 March 2023 | Hotel Lalit, New Delhi</center></span></h3></div></div>
	<h4 class="cyv" style="font-size:25px;"><center><a href="http://www.isuw.in/votenowisgf/" style="color:#e27618">CAST YOUR VOTE</a></center></h4>
  </div>
  
 <div class="container">
 <div class="row justify-content-left ">
<p></p>
<div class="container form-enq">
  <!--<form method="POST" action="{{ route('contact.store') }}" >
  @csrf
    <label for="fname">Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name..">
    <label for="fname">Email</label>
    <input type="email" id="email" name="email" placeholder="Your email..">
    <label for="fname">Contact</label>
    <input type="text" id="contact" name="contact" placeholder="Your contact..">
    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.."></textarea>
  <button type="submit">Submit</button>
  </form>
 <form class="row g-3" method="POST" action="Thanks.php">
     <!-- <form class="row g-3" method="POST" action="/thanku">

 
  <div class="col-md-6">
    <label for="fname" class="form-label"><b>Your Name</b></label>
    <input type="text" class="form-control" name="name"  id="name" required>
  </div>
  <div class="col-md-6">
    <label for="fname" class="form-label"><b>Email Id</b></label>
    <input type="email" class="form-control" name="email"  id="email" required>
  </div>
    <div class="col-md-6">
    <label for="organization" class="form-label"><b>Your Organization</b></label>
    <input type="text" class="form-control" name="organization"  id="organization" required>
  </div>

   <div class="col-md-6">
      <label for="category" class="form-label"><b>Award Category</b></label>
     <select name="category" id="category" required>
        <option>1A) Best Smart Grid Project in India - Utility</option>
        <option>1B) Best Smart Grid Project in India - Technology Company/Implementing Agency</option>
        <option>2A) Most Innovative Renewable Energy Programs/Projects in India - Solar (Utility Scale)</option>
        <option>2B) Most Innovative Renewable Energy Programs/Projects in India - Wind (Utility Scale)</option>
        <option>3A) Smart Technology - Electricity Generation</option>
        <option>3B) Smart Technology - Electricity Transmission</option>
        <option>3C) Smart Technology - Electricity Distribution</option>
        <option>3D) Smart Technology - Energy Storage Systems</option>
        <option>3E) Smart Technology - Smart Gas Distribution</option>
        <option>3F) Smart Technology - Smart Water Distribution</option>
        <option>4A) Emerging Innovation in Electric Mobility Domain - Electric Vehicle (2/3/4 Wheelers and Public Transportation)</option>
        <option>4B) Emerging Innovation in Electric Mobility Domain - EV and EVSE Rollouts</option>
        <option>4C) Emerging Innovation in Electric Mobility Domain - EV and Charging Technology/Solution Providers</option>
        <option>4E) Emerging Innovation in Electric Mobility Domain - Smart Innovations in Smart Charging Infrastructure (including Smart Business Models)</option>
        <option>5A) Adoption of Disruptive Technology/Solution - Utility</option>
        <option>5B) Adoption of Disruptive Technology/Solution - Industry</option>
        <option>6A) Smart Start-up of the Year</option>
        <option>7A) Smart Incubator of the Year</option>
        <option>8A) Best Business Growth and Innovation amongst previous years ISGF Innovation Award Winners</option>
      </select>
  </div>
  <p></p>
  <div class="col-md-6">
      <label for="category" class="form-label"><b>Nominated Company And Title</b></label>
     <select name="subcategory" id="subcategory" required>
         <option><b>JVVNL And Asset Plus ConsultingTM (Atpugplus Consulting OPC Private Limited) + AWS + REC + SINE - </b>Smart Meter data modelling using AI/ML driving AT&C Loss Reduction for JVVNL at Bayana, Bharatpur</option>
         <option><b>Hitachi Energy Technology Services Private Limited - </b>Economical and accurate multi-ended fault locator for power network outage management: Innovative digital solution to keep lives lit</option>
         <option><b>Smart Energy Water And IntelliSmart Infrastructure Private Limited - </b>Powering India with Bharat eSmartMeter App: Naye Bharat Ki Nayi Urja</option>
         <option><b>Post Graduate Government College - </b>The Net Zero Energy Building With Carbon Credits for Sustainable Future: A Case Study in Chandigarh</option>
         <option><b>Madhya Gujarat Vij Company Limited - </b>Achievement in Installation of Grid Connected Rooftop Solar Projects under MGVCL.</option>
         <option><b>Damodar Valley Corporation - </b>Development of Hybrid Microgrid for Stable and Secure Operation of Interconnected power distribution.</option>
         <option><b>Leap Green Energy Private Limited - </b>Advance Analytics and Monitoring Systems in Wind Park</option>
         <option><b>Dr OGKs Renewable Energy Innovations - </b>Rooftop Wind Energy Generator Having Radial Flux Multiple Generator Stators With Self Excited Rotor</option>
         <option><b>CESC Limited ( Budge Budge Generating Station) - </b>Efficiency Based Online Load Prediction Module</option>
         <option><b>SCOPE T&M Pvt Ltd - </b>Real Time Feeder Monitoring</option>
         <option><b>SLDC, Odisha Power Transmission Corporation Ltd. (OPTCL) - </b>A smart utility in power transmission of Odisha ensuring integrated operation of power system.</option>
         <option><b>State Load Despatch Center Gujarat Energy Transmission Corporation Limited - </b>Wide Area Monitoring System (WAMS) using Phasor Measurement Unit (PMU) data & its Analytics for the power system of Gujarat</option>
         <option><b>Ramelex Private Limited - </b>Saver Assembly - An Elucidation to Conductor Snapping</option>
         <option><b>Tata Consultancy Services Ltd - </b>Artificial Intelligence Powered Control and Management of Power Networks</option>
         <option><b>The Tata Power Company Limited - </b>Monitoring of remote S/S through Robotics, Augmented Reality and Artificial Intelligence</option>
         <option><b>Tamil Nadu Generation And Distribution Corporation Limited - </b>Implementation of AMR for Renewable Generators in Tangedco</option>
         <option><b>Fr. C.Rodrigues Institute Of Technology - </b>Transformer-Less Inverter with improved gain suitable for Photovoltaic-Grid Interface</option>
         <option><b>TP Central Odisha Distribution Limited - </b>HT Line Voltage Regulator Transformer - Economical solution to improve voltages in remote areas</option>
         <option><b>TP Central Odisha Distribution Limited - </b>Rebar Lacing Pole suspension/tangent type structure</option>
         <option><b>Tata Power Delhi Distribution Limited - </b>Vertical Fall Arrestor System" for working and climbing on Monopole tower</option>
         <option><b>TP Central Odisha Distribution Limited - </b>Interlock b/w RMU Electrical Operation & SF6 Pressure Indicator</option>
         <option><b>CESC Limited - </b>Online Monitoring of Transformers using IoT sensors on a vendor-agnostic platform</option>
         <option><b>BSES Yamuna Power Limited - </b>Robotic Process Automation of Commercial Feasibility For New Connection Application</option>
         <option><b>Noida Power Company Limited - </b>Centralized and Interoperable Self-Healing System on 11kV RMU Distribution System</option>
         <option><b>Indian Institute Of Technology Gandhinagar - </b>SMART AGENT: A Universal IoT-based Smart Energy Management Device</option>
         <option><b>Tata Power Delhi Distribution Limited - </b>Waste to wealth- In-house repairing of internally failed 11kV RMUs</option>
         <option><b>BSES Yamuna Power Limited And Asset Plus Consulting TM (Atpugplus Consulting OPC Private Limited) - </b>Revenue Recovery & Cash flow improvement for BSES Yamuna Power Limited by using AI/ML driven approaches</option>
         <option><b>Fluentgrid Limited - </b>Smart Metering Operations Center (SMOC) / An innovative and holistic approach for Utilities</option>
         <option><b>BSES Rajdhani Power Limited - </b>Green field Cable Laying Project using Trenchless Technology for connecting infeed of 400 KV DTL (Mundka) Grid to BRP</option>
         <option><b>Smart Energy Water (SEW) and Bihar BSPHCL - </b>Revolutionizing Customer Experience in the Utility Industry with Bihar Bijli Smart Meter</option>
         <option><b>TP Central Odisha Distribution Limited - </b>Mobile Substation For Rural Remote Areas</option>
         <option><b>TP Western Odisha Distribution Ltd. - </b>Rural Digital Substation</option>
         <option><b>Noida Power Company Limited - </b>Low-Cost LT Feeder Pillar Outage Monitoring System</option>
         <option><b>Tata Power Delhi Distribution Limited - </b>Co-extruded Power Cable (CCD Cable)</option>
         <option><b>Noida Power Company Limited - </b>Fibre Monitoring & Management System</option>
         <option><b>Paschim Gujarat Vij Company Limited - </b>Adoption of Specially Designed Medium Voltage Covered Conductor (SD-MVCC)</option>
         <option><b>Semco Infratech Pvt. Ltd. - </b>Best Battery Technology Solution Provider of the Year</option>
         <option><b>Mahanagar Gas Limited And Asset Plus ConsultingTM (ATPUG Plus Consulting OPC Private Limited) - </b>Self-metering improvement with AI enabled meter reading for Mahanagar Gas Limited (MGL) Mumbai</option>
         <option><b>Aumsat Technologies LLP - </b>Water leaks detection, tracking, estimation, and remediation by novel non-invasive techniques for smart water management.</option>
         <option><b>PSG College Of Technology - </b>Internet of Things (IoT) based Smart Water Supply and Distribution System for Coimbatore City</option>
         <option><b>Baroda Electric Meters Ltd. - </b>Worldwide First Solar Bicycle Rollout - Disruptive Innovation in Electric Mobility</option>
         <option><b>Lohia Auto Industries - </b>Developed Electric 3W (L5) with Advance Techonology & Comfort Ergonomics Featurs</option>
         <option><b>Kerala State Electricity Board Limited - </b>Innovative Pole Mounted Chargers makes e-mobility accessible to commoners & scaling up DC Fast Chargers making Kerala EV-ready</option>
         <option><b>Maharashtra State Electricity Distribution Company Ltd - </b>MSEDCL’s EV Initiatives</option>
         <option><b>The Tata Power Company Limited - </b>Smart compact EV Charging infrastructure design project - PSS near charger</option>
         <option><b>The Tata Power Company Limited - </b>End-to-end EV Charging Solutions across India covering 490+ cities & towns</option>
         <option><b>BSES Yamuna Power Limited - </b>Smart Managed Charging Station</option>
         <option><b>The Tata Power Company Limited - </b>Robotic Process Automation for utility processes</option>
         <option><b>Powergrid Corporation Of India Limited - </b>Automatic identification and preparation of defect reports from tower photos captured during transmission line inspection using Artificial Intelligence</option>
         <option><b>Tata Power Delhi Distribution Limited - </b>Meter Anomaly detection using Image Analytics</option>
         <option><b>Noida Power Company Limited - </b>AI Learning-Based Theft Detection & Landbase Digitization Using Drone Orthomosaic Imagery</option>
         <option><b>CESC Limited - </b>CESC-AASTHA(TM) – The Multi-Lingual Intelligent Digital Voice Assistant Enhancing Consumer Interaction & Experience</option>
         <option><b>Algo8 AI Private Limited - </b>Improve the quality of Generation-forecasting using Artificial Intelligence by improving quality of input data</option>
         <option><b>Climate Connect Digital - </b>Adoption of Artificial Intelligence & Machine Learning for Renewable Generation Forecasting</option>
         <option><b>Indraprastha Gas Limited And Asset Plus ConsultingTM (Atpugplus Consulting OPC Private Limited) - </b>AI based audit and inspection of meter reading inaccuracies for Indraprastha Gas Limited (IGL)</option>
         <option><b>Elocity - </b>DR based EV Charging Technology</option>
         <option><b>Radius Synergies International Pvt Ltd, Noida, Uttar Pradesh - </b>Seamless Transition from Single Point to Multipoint Prepaid Electricity Distribution Model as mandated by UPERC</option>
         <option><b>Foundation For Innovation & Research In Science & Technology - </b>A Deep Tech incubator working towards innovation and sustainability</option>
         <option><b>VJTI Technology Business Incubator - </b>VJTI - TBI A technology-focused incubator that supports start-ups developing novel and impactful products/services.</option>
         <option><b>Maker Village, Kochi, Kerala - </b>Maker Village, ESDM project catalysed by Ministry of Electronics and Information Technology, Government of India supported by Government of Kerala, Kerala Digital University, Kerala Startup Mission</option>
         <option><b>Zypp Electric - </b>India's largest Tech Enabled EV-as-a-Service platform</option>
         <option><b>Grid Controller Of India Limited (Formerly POSOCO) - </b>Implementation of National Open Access Registry (NOAR) for Pan India Administration of Short Term Electricity Market</option>
         <option><b>Husk Power Systems - </b>Scaling rural utilities and powering prosperity with frugal innovation</option>
         
          </select>
  </div>
   <!--<div class="col-md-6">
     <select name="category-three" id="category-three">
        <option>3D) Smart Technology - Energy Storage Systems</option>
        <option>3E) Smart Technology - Smart Gas Distribution</option>
        <option>3F) Smart Technology - Smart Water Distribution</option>
      </select>
  </div>
 <p></p>

  <div class="col-12">
      <a href="/thanku"> 
    <button type="submit" class="btn btn-primary">Submit</button>
    </a>
    <!--<a href="/thanku" class="btn btn-primary">Submit</a>-->
  </div>
</form>

<style>
/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=email] {
  width: 100%;
  padding: 12px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>

<p></p>
</div>
</div>
</div>
 