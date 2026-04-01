@extends('master')
@section('content')

<style>
        h5 {
            text-align: center;
            color: #2c3e50;
			margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
		td{
			font-size:13px
		}
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        /* .diamond {
            background-color: #b9f2ff;
        }
        .platinum {
            background-color: #e5e4e2;
        }
        .gold {
            background-color: #ffd700;
        }
        .certificate {
            background-color: #d4edda;
        }
        .award {
            background-color: #fff3cd;
        } */
    </style>
 <div class="container">
 <div class="justify-content-left ">

 <h5>WINNERS OF 10TH ISGF INNOVATION AWARDS 2026</h5>
    
    <table>
        <thead>
            <tr>
                <th>S.No</th>
                <th>Nomination Category as Received</th>
                <th>Company/Individual Name</th>
                <th>Nomination Title</th>
                <th>Marking Category</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Best Smart Grid Project in India - Utility</td>
                <td>Maharashtra State Electricity Distribution Company Limited</td>
                <td>Substation Monitoring System in MSEDCL</td>
                <td>Diamond</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Best Smart Grid Project in India - Utility</td>
                <td>Assam Power Distribution Company Limited</td>
                <td>Unified mobile app for monitoring smart meter communication status of multiple AMISPs</td>
                <td>Platinum</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Best Smart Grid Project in India - Utility</td>
                <td>Tata Power Delhi Distribution Limited</td>
                <td>Gen AI-ML based IoT Revolution in TPDDL Networks</td>
                <td>Platinum</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Best Smart Grid Project in India - Utility</td>
                <td>Tata Power Western Odisha Distribution Limited</td>
                <td>End-to-end Digital Transformation of Metering Through AMI: From Installation to Remote Operations and Billing</td>
                <td>Gold</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Best Smart Grid Project in India - Utility</td>
                <td>Noida Power Company Limited</td>
                <td>Intelligence-Driven Indigenous Outage Management System with Integrated GIS, SCADA, SAP and Field Mobility</td>
                <td>Gold</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Best Smart Grid Project in a DISCOM in India – Technology Company/Implementing Agency</td>
                <td>Tata Power western Odisha Distribution Limited</td>
                <td>GridAir_Wireless communication in SAS</td>
                <td>Gold</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Most Innovative Renewable Energy Programs/Projects in India including Energy Storage Systems (ESS)</td>
                <td>BSES Rajdhani Power Limited</td>
                <td>20MW/40MWh Standalone Battery Energy Storage System at 11kV Distribution Network in BRPL Licensee Area</td>
                <td>Diamond</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Most Innovative Renewable Energy Programs/Projects in India including Energy Storage Systems (ESS)</td>
                <td>Grid Controller of India Limited</td>
                <td>AGC pilot projects on BESS, Solar, and PSP in Indian power system</td>
                <td>Diamond</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Most Innovative Renewable Energy Programs/Projects in India including Energy Storage Systems (ESS)</td>
                <td>Ciel et Terre Solar Private Limited</td>
                <td>FUSIO: A Game-Changing Floating Solar Innovation for a Sustainable Future</td>
                <td>Platinum</td>
            </tr>
            <tr>
                <td>10</td>
                <td>Smart Technology – Electricity – Distribution - Network improvements in both Urban and Rural area</td>
                <td>CESC Limited</td>
                <td>Enhancing network reliability by reducing no. of feeder tripping due to HT flashovers as a result of failure of accessories for DTR by 29 % and ensuring higher network ,public safety by reducing the no. of fire incidents, due to DTR failure by 47 % and reducing DTR failure rate from 5.7 % to 0.44 % of total population by shifting from preventive to predictive maintenance after implementing some in-house developed innovation projects and doing stringent fault analysis.</td>
                <td>Diamond</td>
            </tr>
            <tr>
                <td>11</td>
                <td>Smart Technology – Electricity – Distribution - Network improvements in both Urban and Rural area</td>
                <td>BSES Rajdhani Power Limited</td>
                <td>India’s first of Kind 990 KVA SF6 Free Underground substation at kalkaji represents a pioneering sustainable milestone in power distribution infrastructure.</td>
                <td>Diamond</td>
            </tr>
            <tr>
                <td>12</td>
                <td>Smart Technology – Electricity – Distribution - Network improvements in both Urban and Rural area</td>
                <td>BSES Yamuna Power limited</td>
                <td>“PQMS” – India’s first enterprise-level Power Quality monitoring Solution deployment in a Discom</td>
                <td>Platinum</td>
            </tr>
            <tr>
                <td>13</td>
                <td>Smart Technology – Electricity – Distribution - Network improvements in both Urban and Rural area</td>
                <td>Tata Power Southern Odisha Distribution Limited</td>
                <td>LT Automation and Back-Feeding Protection using Smart Controller</td>
                <td>Platinum</td>
            </tr>
            <tr>
                <td>14</td>
                <td>Smart Technology – Electricity – Distribution - Network improvements in both Urban and Rural area</td>
                <td>Tata Power Delhi Distribution Limited</td>
                <td>Leveraging Asset Management Strategies for Environmental Sustainability in India's Power Sector.</td>
                <td>Gold</td>
            </tr>
            <tr>
                <td>15</td>
                <td>Smart Technology – Electricity – Distribution - Network improvements in both Urban and Rural area</td>
                <td>Tata Power Central Odisha Distribution Limited</td>
                <td>Low Cost Auto Sectionaliser</td>
                <td>Gold</td>
            </tr>
            <tr>
                <td>16</td>
                <td>Smart Technology – Electricity – Distribution - Network improvements in both Urban and Rural area</td>
                <td>Tata Power Central Odisha Distribution Limited</td>
                <td>Reduction of Technical Losses and Jumper Failure using inhouse Developed Tool</td>
                <td>Gold</td>
            </tr>
            <tr>
                <td>17</td>
                <td>Smart Technology – Electricity – Distribution - Behind The Meter (BTM) Innovations/ Projects</td>
                <td>Tata Power Northern Odisha Distribution Limited</td>
                <td>Behind-the-Meter Innovations for Smart DT Load Management Using Smart Meter and GIS Data</td>
                <td>Gold</td>
            </tr>
            <tr>
                <td>18</td>
                <td>Smart Technology – Electricity – Distribution - Behind The Meter (BTM) Innovations/ Projects</td>
                <td>Tata Power Plus Limited</td>
                <td>OMS Prediction using Smart Meters + AI based Communication Analysis Tool + Integrated Energy Audit and Revenue Protection Modules + AMI Data Quality & Integrity</td>
                <td>Gold</td>
            </tr>
            <tr>
                <td>19</td>
                <td>Smart Technology – Electricity – Distribution - Network Operations</td>
                <td>Allied Engineering Works Limited</td>
                <td>Smart Distribution Transformer Asset Management and Utility O&M Solution</td>
                <td>Diamond</td>
            </tr>
            <tr>
                <td>20</td>
                <td>Smart Technology – Electricity – Distribution - Network Operations</td>
                <td>CESC Limited</td>
                <td>Reducing SAIFI by 23 %, SAIDI by 35 %& T&D loss from 14 % to 7.98% in the system and increasing PLF and PAF up to a considerable limit by implementing low cost in house developed innovation projects, enabling proper monitoring of asset for network planning and faster restoration of supply during any fault condition.</td>
                <td>Diamond</td>
            </tr>
            <tr>
                <td>21</td>
                <td>Smart Technology – Electricity – Distribution - Network Operations</td>
                <td>Tata Power Delhi Distribution Limited</td>
                <td>Next-Generation LT ACB: Redefining Electrical Safety Standards</td>
                <td>Platinum</td>
            </tr>
            <tr>
                <td>22</td>
                <td>Smart Technology – Electricity – Distribution - Network Operations</td>
                <td>Hitachi Energy Technology Services Private Limited</td>
                <td>Innovative Distance Protection for Diverse Earthing Systems in Distribution Networks</td>
                <td>Platinum</td>
            </tr>
            <tr>
                <td>23</td>
                <td>Smart Technology – Electricity – Distribution - Network Operations</td>
                <td>Tata Power Southern Odisha Distribution Limited</td>
                <td>TPSODL Press Fit Fuse</td>
                <td>Gold</td>
            </tr>
            <tr>
                <td>24</td>
                <td>Smart Technology – Electricity – Distribution - Network Operations</td>
                <td>Tata Power Northern Odisha Distribution Limited</td>
                <td>The Project “Sunishchita” identified a critical safety concern associated with the operation of Air Break (AB) Switches in the electrical distribution network. The existing design of AB Switch lacks assured automatic grounding provisions with Self-Indicators as feedback.</td>
                <td>Gold</td>
            </tr>
            <tr>
                <td>25</td>
                <td>Smart Technology – Electricity – Distribution - Network Operations</td>
                <td>Gujarat Power Research and Development cell, GUVNL</td>
                <td>WatchDog Transformer: Smarter Power Distribution with Real-Time Monitoring, Control and Theft Prevention</td>
                <td>Gold</td>
            </tr>
            <tr>
                <td>26</td>
                <td>Smart Technology – Electricity – Distribution - Network Operations</td>
                <td>Gujarat Power Research and Development cell, GUVNL</td>
                <td>Empowering Reliability: Enhancing Power Supply Reliability with ATS-Enabled 11 KV RMUs</td>
                <td>Gold</td>
            </tr>
            <tr>
                <td>27</td>
                <td>Smart Technology – Electricity – Distribution - Network Operations</td>
                <td>BSES Yamuna Power Limited</td>
                <td>Implementation of Online Circuit Breaker Rack-In Rack-Out System for 11 kV Switchgear at Sonia Vihar Grid Substation<br>(A first-of-its-kind initiative among India’s distribution utilities)</td>
                <td>Gold</td>
            </tr>
            <tr>
                <td>28</td>
                <td>Smart Technology – Electricity – Distribution - Network Operations</td>
                <td>Tata Power Delhi Distribution Limited</td>
                <td>Design and Implementation: PVT Micro Substation Direct conversion of 66/√3 kV to LT supply (230 V).</td>
                <td>Gold</td>
            </tr>
            <tr>
                <td>29</td>
                <td>Smart Technology – Electricity – Domains other than Distribution - Generation</td>
                <td>Tata power company limited Mundra Thermal power stattion</td>
                <td>Cost effective reliability enhancement of generator seal oil system</td>
                <td>Platinum</td>
            </tr>
            <tr>
                <td>30</td>
                <td>Smart Technology – Electricity – Domains other than Distribution - Transmission</td>
                <td>Power Grid Corporation of India Limited</td>
                <td>Implementation of e-vegetation management concept for Extra High Voltage (EHV) Transmission Lines</td>
                <td>Platinum</td>
            </tr>
            <tr>
                <td>31</td>
                <td>Smart Technology – Electricity – Domains other than Distribution - Transmission</td>
                <td>Power Grid Corporation of India Limited</td>
                <td>A Smart Asset Health Monitoring Approach Using Alcohol as Chemical Indicator for Transformers and Reactors.</td>
                <td>Platinum</td>
            </tr>
            <tr>
                <td>32</td>
                <td>Smart Technology – Electricity – Domains other than Distribution - Transmission</td>
                <td>REConnect Energy Solutions Limited</td>
                <td>SAMAST: Streamlining Haryana’s Power for a Smarter Future</td>
                <td>Gold</td>
            </tr>
            <tr>
                <td>33</td>
                <td>Smart Technology – Electricity – Domains other than Distribution – Others</td>
                <td>Maharashtra State Load Despatch Centre,<br>(Maharashtra State Electricity Transmission Company Limited)</td>
                <td>Real Time Pilot of Intra State Security Constrained Economic Despatch in Maharashtra</td>
                <td>Diamond</td>
            </tr>
            <tr>
                <td>34</td>
                <td>Smart Technology – Electricity – Domains other than Distribution – Others</td>
                <td>Tata Power Delhi Distribution Limited</td>
                <td>Next-Gen OT-NMS for Predictive & Secure Smart Operations</td>
                <td>Platinum</td>
            </tr>
            <tr>
                <td>35</td>
                <td>Smart Technology – Electricity – Domains other than Distribution – Others</td>
                <td>Gujarat Electricity Transmission Corporation Limited, SLDC, Gujarat</td>
                <td>"Implementation of Wide Area Monitoring System (WAMS) using Phasor Measurement Unit (PMU) data & its Analytics in the State of Gujarat"</td>
                <td>Gold</td>
            </tr>
            <tr>
                <td>36</td>
                <td>Smart Technology – Domains other than Electricity – Smart Gas Distribution</td>
                <td>Rajasthan State Gas Limited</td>
                <td>City Gas Distribution CNG station Gas reconciliation & LUAG ( Gas Loss) Using IOT-AI Automation</td>
                <td>Diamond</td>
            </tr>
            <tr>
                <td>37</td>
                <td>Emerging Innovation in Electric Mobility Domain – EV and EVSE Rollouts including New Business Models, Solar EV Charging Stations etc</td>
                <td>Kazam EV Tech Private Limited</td>
                <td>Energy Management System for Grid-Optimised Electric Bus Depots in Indian Cities</td>
                <td>Gold</td>
            </tr>
            <tr>
                <td>38</td>
                <td>Adoption of Artificial Intelligence, Machine Learning, Virtual Reality (VR)/Augmented Reality (AR) and Robotic Solutions - Utility</td>
                <td>BSES Yamuna Power Limited and BSES Rajdhani Power Limited</td>
                <td>Implementation of In-house Artificial Intelligence and Machine Learning based Demand forecasting tool for BYPL and BRPL</td>
                <td>Diamond</td>
            </tr>
            <tr>
                <td>39</td>
                <td>Adoption of Artificial Intelligence, Machine Learning, Virtual Reality (VR)/Augmented Reality (AR) and Robotic Solutions - Utility</td>
                <td>Power Grid Corporation of India Limited</td>
                <td>Indigenously Designed Valve Hall Inspection Robot for HVDC Converter Stations</td>
                <td>Diamond</td>
            </tr>
            <tr>
                <td>40</td>
                <td>Adoption of Artificial Intelligence, Machine Learning, Virtual Reality (VR)/Augmented Reality (AR) and Robotic Solutions - Utility</td>
                <td>The Tata Power Company Limited</td>
                <td>WeatherXpert : The PAN Tata Weather Platform</td>
                <td>Diamond</td>
            </tr>
            <tr>
                <td>41</td>
                <td>Adoption of Artificial Intelligence, Machine Learning, Virtual Reality (VR)/Augmented Reality (AR) and Robotic Solutions - Utility</td>
                <td>SEW.AI</td>
                <td>From Digitization to Intelligence: Tata Power’s Industry-Defining Vertical AI Utility Transformation</td>
                <td>Platinum</td>
            </tr>
            <tr>
                <td>42</td>
                <td>Adoption of Artificial Intelligence, Machine Learning, Virtual Reality (VR)/Augmented Reality (AR) and Robotic Solutions - Utility</td>
                <td>BSES Rajdhani Power Limited</td>
                <td>Adoptions of Artificial Intelligence & Machine Learning for monitoring health of Power Transformer</td>
                <td>Gold</td>
            </tr>
            <tr>
                <td>43</td>
                <td>Adoption of Artificial Intelligence, Machine Learning, Virtual Reality (VR)/Augmented Reality (AR) and Robotic Solutions - Industry/Technology Provider</td>
                <td>TekUncorked AIIoT Private Limited</td>
                <td>AI-Driven LVIoT Platform for Self-Healing Last-Mile Distribution Grids</td>
                <td>Gold</td>
            </tr>
            <tr>
                <td>44</td>
                <td>Adoption of Artificial Intelligence, Machine Learning, Virtual Reality (VR)/Augmented Reality (AR) and Robotic Solutions - Industry/Technology Provider</td>
                <td>Plutomen Technologies Private Limited</td>
                <td>AI & XR-Enabled Connected Worker Platform Enhancing Safety, Productivity and Reliability in Utilities</td>
                <td>Gold</td>
            </tr>
            <tr>
                <td>45</td>
                <td>Adoption of Artificial Intelligence, Machine Learning, Virtual Reality (VR)/Augmented Reality (AR) and Robotic Solutions - Industry/Technology Provider</td>
                <td>IntelliSmart Infrastructure Private Limited</td>
                <td>Smart Meter MI (Meter Installation) & MRN ( Meter Replacement Note) QUALITY VALIDATION through AI</td>
                <td>Gold</td>
            </tr>
            <tr>
                <td>46</td>
                <td>Smart Start-up and Incubator of the Year</td>
                <td>Nashik Engineering Cluster</td>
                <td>Innovative Startup Incubation: Empowering Entrepreneurs at Nashik Engineering Cluster for Sustainable Growth</td>
                <td>Platinum</td>
            </tr>
            <tr>
                <td>47</td>
                <td>Innovative Financing For Energy Transition</td>
                <td>Tata Power Southern Odisha Distribution Limited</td>
                <td>Utility LED Aggregation Model of PM Surya Ghar: Muft Bijli Yojana</td>
                <td>Gold</td>
            </tr>
            <tr class="award">
                <td>48</td>
                <td>Woman in Energy and Utilities</td>
                <td>Abha Shukla (IAS), Additional Chief Secretary (Energy), Energy Department, Government of Maharashtra</td>
                <td></td>
                <td>Exceptional Contribution Award</td>
            </tr>
            <tr class="award">
                <td>49</td>
                <td>Woman in Energy and Utilities</td>
                <td>Meenakshi Vashist, Founder and CEO, TekUncorked AIIoT Pvt. Ltd.</td>
                <td></td>
                <td>Exceptional Contribution Award</td>
            </tr>
            <tr class="award">
                <td>50</td>
                <td>Woman in Energy and Utilities</td>
                <td>Shivani Sharma, Principal Technical Consultant, Hitachi Energy India Limited</td>
                <td></td>
                <td>Exceptional Contribution Award</td>
            </tr>
            <tr class="award">
                <td>51</td>
                <td>Woman in Energy and Utilities</td>
                <td>Kiran Gupta, Chief- Commercial, Customer experience, Govt affairs, EAC& consumer litigation, Tata Power Delhi Distribution Ltd</td>
                <td></td>
                <td>Exceptional Contribution Award</td>
            </tr>
            <tr class="award">
                <td>52</td>
                <td>ISGF President's Award for the Best Contribution towards Energy Transition in India</td>
                <td>Dr. Jyoti Parikh, Executive Director, Integrated Research and Action for Development (IRADe) <br>Former Member of The Prime Minister's Council on Climate Change</td>
                <td></td>
                <td>Award</td>
            </tr>
            <tr class="award">
                <td>53</td>
                <td>ISGF President's Award for the Best Contribution towards Energy Transition in India</td>
                <td>Shri Alok Kumar, Director General, All India Discoms Association (AIDA)</td>
                <td></td>
                <td>Award</td>
            </tr>
            <tr class="award">
                <td>54</td>
                <td>ISGF President's Award for the Best Contribution towards Energy Transition in India</td>
                <td>Shri RK Verma, Former Chairman Central Electricity Authority (CEA) and Former Member APTEL</td>
                <td></td>
                <td>Award</td>
            </tr>
            <tr class="award">
                <td>55</td>
                <td>ISGF President's Award for the Best Contribution towards Energy Transition in India</td>
                <td>Shri Ajay Mathur, Former Director General, Internaltional Solar Alliance (ISA); Former Director General, BEE; Former Director General,TERI</td>
                <td></td>
                <td>Award</td>
            </tr>
        </tbody>
    </table>

    <h5>CERTIFICATE OF MERIT WINNERS OF 10TH ISGF INNOVATION AWARDS 2026</h5>
    
    <table>
        <thead>
            <tr>
                <th>S.No</th>
                <th>Nomination Category as Received</th>
                <th>Company/Individual Name</th>
                <th>Nomination Title</th>
                <th>Marking Category</th>
            </tr>
        </thead>
        <tbody>
            <tr class="certificate">
                <td>56</td>
                <td>Best Smart Grid Project in a DISCOM in India – Technology Company/Implementing Agency</td>
                <td>SEW.AI</td>
                <td>EDF’s Scalable Blueprint: Redefining Customer Experience in the Utility Industry with Bihar Bijli Smart Meter</td>
                <td>Certificate of Merit</td>
            </tr>
            <tr class="certificate">
                <td>57</td>
                <td>Most Innovative Renewable Energy Programs/Projects in India including Energy Storage Systems (ESS)</td>
                <td>Tata Power Delhi Distribution Limited</td>
                <td>Smart Meter–Enabled Solar Analytics for Optimized Distribution Transformer Planning</td>
                <td>Certificate of Merit</td>
            </tr>
            <tr class="certificate">
                <td>58</td>
                <td>Smart Technology – Electricity – Distribution - Network improvements in both Urban and Rural area</td>
                <td>Gujarat Power Research and Development Cell, GUVNL</td>
                <td>Safer LT Distribution with Polyolefin Insulators: Electrical Leakage Mitigation and Electrocution Prevention</td>
                <td>Certificate of Merit</td>
            </tr>
            <tr class="certificate">
                <td>59</td>
                <td>Smart Technology – Electricity – Distribution - Behind The Meter (BTM) Innovations/ Projects</td>
                <td>Puducherry Electricity Department</td>
                <td>Smart Technology – Electricity – Distribution - Behind The Meter (BTM) Projects integrated with NFMS real time Monitoring (MoP).</td>
                <td>Certificate of Merit</td>
            </tr>
            <tr class="certificate">
                <td>60</td>
                <td>Smart Technology – Electricity – Distribution - Behind The Meter (BTM) Innovations/ Projects</td>
                <td>North Bihar Power Distribution Company Limited</td>
                <td>Behind The Meter (BTM) Innovations/ Projects under NBPDCL</td>
                <td>Certificate of Merit</td>
            </tr>
            <tr class="certificate">
                <td>61</td>
                <td>Smart Technology – Electricity – Distribution - Network Operations</td>
                <td>Tata Power Central Odisha Distribution Limited</td>
                <td>Intelligent Fault Detection, Localization and Management System (IFDLMS)</td>
                <td>Certificate of Merit</td>
            </tr>
            <tr class="certificate">
                <td>62</td>
                <td>Smart Technology – Electricity – Distribution - Network Operations</td>
                <td>Noida Power Company Limited</td>
                <td>Next-Generation Network Restoration: Fault Current–Based Intelligent Decision Making</td>
                <td>Certificate of Merit</td>
            </tr>
            <tr class="certificate">
                <td>63</td>
                <td>Adoption of Artificial Intelligence, Machine Learning, Virtual Reality (VR)/Augmented Reality (AR) and Robotic Solutions - Industry/Technology Provider</td>
                <td>KEC International Limited</td>
                <td>AI/ML-Led Digital Engineering Transformation for Transmission Line Design</td>
                <td>Certificate of Merit</td>
            </tr>
        </tbody>
    </table>
    <br/>

</div>
</div>
 
@endsection