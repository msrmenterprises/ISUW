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
        .diamond {
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
        }
    </style>
 <div class="container">
 <div class="justify-content-left ">

 <h5>WINNERS OF ISGF INNOVATION AWARDS 2025</h5>
    
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
            <tr class="platinum">
                <td>1</td>
                <td>1A [Best Smart Grid Project in India - Utility]</td>
                <td>TP Western Odisha Distribution Ltd.</td>
                <td>"GridLeap: Concept to Reality"</td>
                <td>Platinum</td>
            </tr>
            <tr class="gold">
                <td>2</td>
                <td>1A [Best Smart Grid Project in India - Utility]</td>
                <td>TATA Power Delhi Distribution Limited , Delhi</td>
                <td>PowerSphere : Smart energy solutions for a sustainable future</td>
                <td>Gold</td>
            </tr>
            <tr class="platinum">
                <td>3</td>
                <td>1B [Best Smart Grid Project in India - Technology Company/Implementing Agency]</td>
                <td>TP Western Odisha Distribution Limited</td>
                <td>Unified HES for Multiple OEM's Smart Meters</td>
                <td>Platinum</td>
            </tr>
            <tr class="gold">
                <td>4</td>
                <td>1B [Best Smart Grid Project in India - Technology Company/Implementing Agency]</td>
                <td>Tata Power Northern Odisha Distribution Limited</td>
                <td>IOT Based solution for non-motorised RMU's</td>
                <td>Gold</td>
            </tr>
            <tr class="diamond">
                <td>5</td>
                <td>2A [Most Innovative Renewable Energy Programs/Projects in India]</td>
                <td>Maharashtra State Electricity Distribution Co. Ltd.</td>
                <td>MSKVY 2.0 – India's largest distributed solar energy project for providing day time supply to farmers</td>
                <td>Diamond</td>
            </tr>
            <tr class="platinum">
                <td>6</td>
                <td>2A [Most Innovative Renewable Energy Programs/Projects in India]</td>
                <td>Larsen and Toubro Limited</td>
                <td>Shaping the future of energy with the trailblazing 90MW(AC) Floating solar power project</td>
                <td>Platinum</td>
            </tr>
            <tr class="platinum">
                <td>7</td>
                <td>2A [Most Innovative Renewable Energy Programs/Projects in India]</td>
                <td>Ciel & Terre Solar Pvt Ltd</td>
                <td>Most Innovative Renewable Energy Programs/Projects in India</td>
                <td>Platinum</td>
            </tr>
            <tr class="diamond">
                <td>8</td>
                <td>3A [Smart Technology - Electricity - Distribution]</td>
                <td>Tata Power Delhi Distribution Limited</td>
                <td>SELF-REGENERATING BREATHER</td>
                <td>Diamond</td>
            </tr>
            <tr class="diamond">
                <td>9</td>
                <td>3A [Smart Technology - Electricity - Distribution]</td>
                <td>BSES Rajdhani Power Limited</td>
                <td>Standalone Community Storage BESS Project connected to low-voltage Distribution Transformers</td>
                <td>Diamond</td>
            </tr>
            <tr class="platinum">
                <td>10</td>
                <td>3A [Smart Technology - Electricity - Distribution]</td>
                <td>CESC Limited</td>
                <td>OVERALL JOURNEY OF CESC LIMITED FOR REDUCING THE FAILURE RATE OF DTR FROM 5.7% TO 0.44% BY IMPLEMENTING LARGE SCALE INHOUSE INNOVATION PROJECTS</td>
                <td>Platinum</td>
            </tr>
            <tr class="gold">
                <td>11</td>
                <td>3A [Smart Technology - Electricity - Distribution]</td>
                <td>Gujarat Power Research and Development</td>
                <td>Research project for Distribution loss reduction by 1.1 KV system power Distibution using Smart Distribution_1.1 System</td>
                <td>Gold</td>
            </tr>
            <tr class="gold">
                <td>12</td>
                <td>3A [Smart Technology - Electricity - Distribution]</td>
                <td>Tata Power Delhi Distribution Limited</td>
                <td>OT Cyber Guard for Resilient Distribution Grid Infrastructure</td>
                <td>Gold</td>
            </tr>
            <tr class="platinum">
                <td>13</td>
                <td>3C (3) [Smart Technology - Others]</td>
                <td>Tabreed India Private Limited</td>
                <td>Tabreed Cooling as a Service Project at Tata Realty's Intellion Park, Gurugram</td>
                <td>Platinum</td>
            </tr>
            <tr class="platinum">
                <td>14</td>
                <td>3C (3) [Smart Technology - Others]</td>
                <td>Trillectric Gridgmend Pvt ltd</td>
                <td>2A) Most Innovative Renewable Energy Programs/Projects in India</td>
                <td>Platinum</td>
            </tr>
            <tr class="diamond">
                <td>15</td>
                <td>4A) [Emerging Innovation in Electric Mobility Domain - Electric Vehicle (2/3/4 Wheelers, Buses, Trucks, Tractors, Boats/Ferries, Drones etc) and Battery for Electric Mobility]</td>
                <td>Kinetic Green Energy & Power Solutions Ltd</td>
                <td>E Luna - Most Versatile EV</td>
                <td>Diamond</td>
            </tr>
            <tr class="platinum">
                <td>16</td>
                <td>4A) [Emerging Innovation in Electric Mobility Domain - Electric Vehicle (2/3/4 Wheelers, Buses, Trucks, Tractors, Boats/Ferries, Drones etc) and Battery for Electric Mobility]</td>
                <td>NeoMotion</td>
                <td>Independent Electric Mobility for Persons with Disabilities</td>
                <td>Platinum</td>
            </tr>
            <tr class="gold">
                <td>17</td>
                <td>4A) [Emerging Innovation in Electric Mobility Domain - Electric Vehicle (2/3/4 Wheelers, Buses, Trucks, Tractors, Boats/Ferries, Drones etc) and Battery for Electric Mobility]</td>
                <td>The Tata Power Company Limited</td>
                <td>Smart and Secured AC EV charging box for home and fleet charging.</td>
                <td>Gold</td>
            </tr>
            <tr class="gold">
                <td>18</td>
                <td>4B) [Emerging Innovation in Electric Mobility Domain - EV and EVSE Rollouts including New Business Models]</td>
                <td>Tata Power EV Charging Solutions Limited</td>
                <td>E-Bus Charger Management System</td>
                <td>Gold</td>
            </tr>
            <tr class="platinum">
                <td>19</td>
                <td>4B) [Emerging Innovation in Electric Mobility Domain - EV and EVSE Rollouts including New Business Models]</td>
                <td>LANDIS GYR LIMITED</td>
                <td>Digital Twin for Advanced eBus Depot Management and Fleet Electrification</td>
                <td>Platinum</td>
            </tr>
            <tr class="diamond">
                <td>20</td>
                <td>5A) [Adoption of Artificial Intelligence, Machine Learning and Robotic Solutions - Utility]</td>
                <td>Power Grid Corporation of India Limited</td>
                <td>AI-Driven Intelligent Objective Analysis of SFRA of Transformers and Reactors</td>
                <td>Diamond (Both projects together)</td>
            </tr>
            <tr class="diamond">
                <td>21</td>
                <td>3B (2) [Smart Technology - Electricity - Domains other than Distribution - Transmission]</td>
                <td>Power Grid Corporation of India Limited</td>
                <td>Asset life management system for health assessment of high voltage power transmission equipment</td>
                <td>Diamond (Both projects together)</td>
            </tr>
            <tr class="platinum">
                <td>22</td>
                <td>5A) [Adoption of Artificial Intelligence, Machine Learning and Robotic Solutions - Utility]</td>
                <td>The Tata Power Co. Ltd.</td>
                <td>AI based Robotic remote discharging rod</td>
                <td>Platinum</td>
            </tr>
            <tr class="gold">
                <td>23</td>
                <td>5A) [Adoption of Artificial Intelligence, Machine Learning and Robotic Solutions - Utility]</td>
                <td>Noida Power Company Limited</td>
                <td>Landbase Change Detection in GIS Using Satellite Imagery and Image Classification Techniques for Electrical Network Planning and Management</td>
                <td>Gold</td>
            </tr>
            <tr class="platinum">
                <td>24</td>
                <td>6A) [Smart Start-up of the Year]</td>
                <td>Terano Finsoft Pvt Ltd</td>
                <td>Innovative Startup - India's 1st Carbon / REC Exchange on Web 3.0 providing solutions for climate finance and P2P /P2E Buyers</td>
                <td>Platinum</td>
            </tr>
            <tr class="gold">
                <td>25</td>
                <td>3B (1) [Smart Technology - Electricity - Domains other than Distribution - Generation]</td>
                <td>New Science Creators Institute</td>
                <td>Hydroelectric Cell 21st century's Biggest Invention to Generate Green Electricity by Water Splitting</td>
                <td>Gold</td>
            </tr>
            <tr class="diamond">
                <td>26</td>
                <td>3B (2) [Smart Technology - Electricity - Domains other than Distribution - Transmission]</td>
                <td>Power Grid Corporation of India Ltd.</td>
                <td>GridVolt: Induction-Powered Solutions</td>
                <td>Diamond</td>
            </tr>
            <tr class="platinum">
                <td>27</td>
                <td>3B (2) [Smart Technology - Electricity - Domains other than Distribution - Transmission]</td>
                <td>Power Grid Corporation of India Ltd</td>
                <td>Novel method for assessment of healthiness of Lightning Arrestors using a Power Quality Analyser</td>
                <td>Platinum</td>
            </tr>
            <tr class="gold">
                <td>28</td>
                <td>3C (1) [Smart Technology - Others - Smart Gas Distribution]</td>
                <td>ATPUG PLUS CONSULTING OPC PRIVATE LIMITED</td>
                <td>GAIL CNG Network "GAS RECONCILIATION" & "STATION GAS DRY OUT" prevention through AI /ML interventions</td>
                <td>Gold</td>
            </tr>
            <tr class="award">
                <td>29</td>
                <td>Woman in Energy and Utilities</td>
                <td>Ms. Anjuli Chandra, Chief Engineer, Ombudsman Office Punjab Govt.</td>
                <td></td>
                <td>Exceptional Contribution Award</td>
            </tr>
            <tr class="award">
                <td>30</td>
                <td>Woman in Energy and Utilities</td>
                <td>Ms. Mili Majumdar, Managing Director, Green Business Certification Institute Pt Ltd</td>
                <td></td>
                <td>Exceptional Contribution Award</td>
            </tr>
            <tr class="award">
                <td>31</td>
                <td>Woman in Energy and Utilities</td>
                <td>Ms. Suman Chandra, Director, Ministry of New and Renewable Energy, Government of India</td>
                <td></td>
                <td>Award</td>
            </tr>
            <tr class="award">
                <td>32</td>
                <td>Woman in Energy and Utilities</td>
                <td>Ms. Surbhi Goyal, Senior Energy Specialist, The World Bank</td>
                <td></td>
                <td>Award</td>
            </tr>
            <tr class="platinum">
                <td>33</td>
                <td>7A) [Smart Incubator of the Year]</td>
                <td>Veermata Jijabai Technological Institute - Technology Business Incubator</td>
                <td>Smart Incubator working in the domains of Energy, EV, AI/ML and Cybersecurity</td>
                <td>Platinum</td>
            </tr>
            <tr class="gold">
                <td>34</td>
                <td>7A) [Smart Incubator of the Year]</td>
                <td>AIC Social Alpha</td>
                <td>Social Alpha: driving innovation in smart and sustainable energy</td>
                <td>Gold</td>
            </tr>
            <tr class="award">
                <td>35</td>
                <td>ISGF President's Award for the Best Contribution towards Energy Transition in India</td>
                <td>Pankaj Batra, Former Chairperson,Central Electricity Authority Chair, ISGF Working Group</td>
                <td>for the Best Contribution towards Promotion of Clean Energy and Grid Modernization</td>
                <td>Winner</td>
            </tr>
            <tr class="award">
                <td>36</td>
                <td>ISGF President's Award for the Best Contribution towards Energy Transition in India</td>
                <td>Sushil Kumar Soonee Former CEO Grid Controller of India Limited</td>
                <td>for the Best Contribution towards Promotion of Clean Energy and Grid Modernization</td>
                <td>Winner</td>
            </tr>
        </tbody>
    </table>

    <h5>CERTIFICATE OF MERIT - ISGF INNOVATION AWARDS 2025</h5>
    
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
                <td>1</td>
                <td>3A [Smart Technology - Electricity - Distribution]</td>
                <td>BSES YAMUNA POWER LIMITED</td>
                <td>Harmonic Simulator</td>
                <td>Certificate of Merit</td>
            </tr>
            <tr class="certificate">
                <td>2</td>
                <td>3C (1) [Smart Technology - Others - Smart Gas Distribution]</td>
                <td>Cloud4Things Technologies Private Limited</td>
                <td>GasGrid: Revolutionizing Smart Gas Metering and Unified Billing in India</td>
                <td>Certificate of Merit</td>
            </tr>
            <tr class="certificate">
                <td>3</td>
                <td>2A [Most Innovative Renewable Energy Programs/Projects in India]</td>
                <td>Centre for Incubation, Innovation, Research and Consultancy</td>
                <td>Green and cost-effective Iron based redox flow batteries</td>
                <td>Certificate of Merit</td>
            </tr>
            <tr class="certificate">
                <td>4</td>
                <td>5A) [Adoption of Artificial Intelligence, Machine Learning and Robotic Solutions - Utility]</td>
                <td>Tata Power Company Limited</td>
                <td>AI based EHV Breaker Healthiness Monitoring</td>
                <td>Certificate of Merit</td>
            </tr>
            <tr class="certificate">
                <td>5</td>
                <td>5B) [Adoption of Artificial Intelligence, Machine Learning and Robotic Solutions - Industry/ Technology Provider]</td>
                <td>HR Knowledge Lab</td>
                <td>AI-Driven Optimization for Portable Suitcase Nano-Grids</td>
                <td>Certificate of Merit</td>
            </tr>
            <tr class="certificate">
                <td>6</td>
                <td>3B (2) [Smart Technology - Electricity - Domains other than Distribution - Transmission]</td>
                <td>The Tata Power Company Limited</td>
                <td>AI based Automatic tree climber & trimming Robot for Trees in vicinity of high voltage transmission lines.</td>
                <td>Certificate of Merit</td>
            </tr>
            <tr class="certificate">
                <td>7</td>
                <td>3B (2) [Smart Technology - Electricity - Domains other than Distribution - Transmission]</td>
                <td>TATA POWER</td>
                <td>Plug & Play of Protection, Automation & Communication System with Portable SCADA for EHV substation.</td>
                <td>Certificate of Merit</td>
            </tr>
            <tr class="certificate">
                <td>8</td>
                <td>3A [Smart Technology - Electricity - Distribution]</td>
                <td>TP Northern Odisha Distribution Limited</td>
                <td>"Arohanam" The Pole Climber</td>
                <td>Certificate of Merit</td>
            </tr>
            <tr class="certificate">
                <td>9</td>
                <td>4A) [Emerging Innovation in Electric Mobility Domain - Electric Vehicle (2/3/4 Wheelers, Buses, Trucks, Tractors, Boats/Ferries, Drones etc) and Battery for Electric Mobility]</td>
                <td>Nexzu Mobility Limited</td>
                <td>Empowering electric mobility with Patented groundbreaking thermal management battery technology.</td>
                <td>Certificate of Merit</td>
            </tr>
            <tr class="certificate">
                <td>10</td>
                <td>4A) [Emerging Innovation in Electric Mobility Domain - Electric Vehicle (2/3/4 Wheelers, Buses, Trucks, Tractors, Boats/Ferries, Drones etc) and Battery for Electric Mobility]</td>
                <td>Maharashtra Electricity Distribution Company limited</td>
                <td>NOT APPLICABLE</td>
                <td>Certificate of Merit</td>
            </tr>
            <tr class="certificate">
                <td>11</td>
                <td>2A [Most Innovative Renewable Energy Programs/Projects in India]</td>
                <td>Defence Institute of High Altitude Research, DRDO, Leh, Ladakh</td>
                <td>Solar based space heating system for cold region shelters</td>
                <td>Certificate of Merit</td>
            </tr>
            <tr class="certificate">
                <td>12</td>
                <td>3C (3) [Smart Technology - Others]</td>
                <td>The Tata Power Company Limited</td>
                <td>Integration of OT Network perimeter firewalls with SOC (Security Operations Center)</td>
                <td>Certificate of Merit</td>
            </tr>
            <tr class="certificate">
                <td>13</td>
                <td>3C (3) [Smart Technology - Others]</td>
                <td>Noida Power Company Limited</td>
                <td>Integrated Endpoint Security Dashboard for Real-Time Antivirus, Patch, and Policy Compliance Monitoring</td>
                <td>Certificate of Merit</td>
            </tr>
            <tr class="certificate">
                <td>14</td>
                <td>3C (3) [Smart Technology - Others]</td>
                <td>Tata Power Delhi Distribution Limited</td>
                <td>AdvisoriesShield: Automating Threat Updates & Threat Feed Management and Malicious Traffic detection</td>
                <td>Certificate of Merit</td>
            </tr>
        </tbody>
    </table>


</div>
</div>
 
@endsection

