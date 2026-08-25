@extends('master')
@section('content')
<style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
 <div class="container">
 <div class="row justify-content-left ">
<p></p>
<div class="k_cheading">
		<h1>THE ENERGY SINGULARITY SUMMIT (TESS)<span class="k_greencolor"> TECHNICAL PAPERS</span></h1>
		<img src="/public/uploads/images/kborder_bottom.PNG" alt=""> 
	</div>
<!--	<p><b><marqee>We thank all the Authors for the overwhelming response for your Technical Paper Abstract Submission. As the number of Technical Papers Abstracts received is very high, we shall be announcing the results for the next round of Full Paper Submission by 15th November 2023.</marqee></b></p>
   --> 
<div class="accordion accordion-flush" id="technicalPapersAccordion">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsewinners" aria-expanded="false" aria-controls="flush-collapsewinners">
       <H4 style="color: green;"><strong>Call for Technical Papers Abstracts</strong></style></H4>
      </button>
    </h2>
    <div id="flush-collapsewinners" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#technicalPapersAccordion">
      <div class="accordion-body">
          <h3 style="color:green; text-align:center;">Call for Technical Papers - Abstracts</h3>

          <h4 style="color:green; text-align:center;">THE ENERGY SINGULARITY SUMMIT (TESS) 2027</h4>
          <h4 style="text-align:center;">Last date for Abstract Submission: 30th September 2026</h4>
          <p style="text-align:center;"><b>Abstract Submission for TESS 2027 at following link:<br/>
          <a href="https://bit.ly/4ztWLWr" target="_blank">https://bit.ly/4ztWLWr</a></b></p>

          <p>From India Smart Utility Week (ISUW) to The Energy Singularity Summit (TESS) — the journey continues into a new era of energy and technology convergence. Building on 12 successful editions of ISUW conducted by the India Smart Grid Forum (ISGF) since 2015, TESS 2027 brings together the worlds of intelligent energy systems and artificial intelligence to explore the technologies, innovations and solutions shaping the future of energy. The Summit will focus on the transformation towards self-optimising, decarbonised, flexible and resilient energy systems capable of meeting the demands of an increasingly AI-driven world.</p>

          <p>TESS 2027 is pleased to invite subject matter experts to submit abstracts for Technical Papers on the below-mentioned themes. The Technical Papers Presentation will be part of THE ENERGY SINGULARITY SUMMIT (TESS) 2027, an international conference and exhibition scheduled from 05 – 10 April, 2027. For details about the event, please visit <a href="https://www.energysingularitysummit.com" target="_blank">www.energysingularitysummit.com</a></p>

          <h4 style="color:green; text-align:center;">THEMES OF TECHNICAL PAPERS:</h4>
          <ul style="margin-left: 20px; padding-left: 20px; line-height: 1.8;">
              <li>AI and Digital Superintelligence for Grid Management: Demand Forecasting, Autonomous Grid Control, Digital Twins and Predictive Maintenance</li>
              <li>Smart Microgrids and Resilient Power Systems: For Critical Infrastructure and AI</li>
              <li>Demand-Side Flexibility: Smart Meters, Time-of-Use (TOU) Tariffs, Vehicle-to-Grid (V2G) and AI-Managed Smart Buildings and Campuses</li>
              <li>The Cooling Challenge: Cooling as a Service through District Cooling Systems (DCS) and Enhanced Flexibility for the Distribution Grid</li>
              <li>New Architecture and Control Systems for the Green Grid: With Multidirectional Power Flows</li>
              <li>Digital Energy Grids: Where Customers (and Smart Appliance/EV/Drone/Robot) can Buy Electricity from the Greenest and Cheapest Source through P2P Transactions</li>
              <li>New Loads and New Customers: GW Scale AI Data Centres, MW Scale EV Charging Stations; and Billions of Humanoid Robots and Trillions of AI Agents</li>
              <li>Grid-Scale and Long-Duration Energy Storage: LFP Batteries, Pumped Hydro, Flow Batteries, Thermal Storage, Iron-Air and Gravity-Based Energy Storage Technologies</li>
              <li>Nuclear Renaissance: Small Modular Reactors (SMRs) for Firm, Dispatchable, Carbon-Free Power</li>
              <li>Offshore and Floating Wind: Unlocking New Resource Frontiers</li>
              <li>Green Hydrogen: Long-Duration Storage and Decarbonisation of Hard-to-Abate Industries</li>
              <li>Enabling Policies, Regulations and Skilled Workforce: With Gender Balance for the Energy Singularity Era</li>
              <li>“Everything to the Grid” Energy Systems for the “Reimagined Grid”</li>
              <li>Advanced Transmission Infrastructure: HVDC, FACTS, Grid-Forming Inverters and Superconducting Cables</li>
              <li>Powering Data Centres: On Land, in Orbit and under the Sea</li>
              <li>Wired and Wireless Charging of EVs, Drones, Humanoid Robots and Flying Cars</li>
              <li>Agentic AI-Based VPP-ESS Interconnections for Grid Flexibility</li>
              <li>Room-Temperature Superconductors and AI-Driven Materials Discovery</li>
              <li>Next-Generation Solar: Perovskites, Bifacial Modules and Agrivoltaics</li>
              <li>Nuclear Fusion: AI-Accelerated Path to Commercial Fusion Power</li>
              <li>Advanced Power Electronics: Wide-Bandgap Semiconductors (SiC and GaN) for a More Efficient Energy Conversion Chain</li>
              <li>Quantum Technologies and Quantum Algorithms: For Power Flow Control and Optimization in Real-Time</li>
              <li>Biomimicry and Artificial Photosynthesis</li>
              <li>Cyber Security, Quantum Safe and Lattice-Based Cryptography</li>
              <li>Emerging Space Technologies: Architecture and Energy Systems for Colonising the Moon and Mars, and the Autonomous and Zero Pollution Mobility</li>
              <li>Autonomous and Zero Emission Vehicles</li>
          </ul>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-heading-guidelines" style="margin-top: 12px;">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-guidelines" aria-expanded="false" aria-controls="flush-collapse-guidelines">
        <H4 style="color: green;"><strong>Guidelines For Submission Of Technical Paper Abstracts</strong></H4>
      </button>
    </h2>
    <div id="flush-collapse-guidelines" class="accordion-collapse collapse" aria-labelledby="flush-heading-guidelines" data-bs-parent="#technicalPapersAccordion">
      <div class="accordion-body">
          <div id="technical-paper-guidelines" style="margin-top: 10px;">
              <p>To Submit the Abstract for THE ENERGY SINGULARITY SUMMIT 2027, please visit the following Link:<br/>
              <a href="https://docs.google.com/forms/d/e/1FAIpQLSd0m6CSpMXdxyCvZCNfmhIP4hZt1FA7RunnWig-KvZTqX_Prw/viewform?usp=dialog" target="_blank">https://docs.google.com/forms/d/e/1FAIpQLSd0m6CSpMXdxyCvZCNfmhIP4hZt1FA7RunnWig-KvZTqX_Prw/viewform?usp=dialog</a></p>

              <ul style="margin-left: 20px; padding-left: 20px; line-height: 1.8;">
                  <li>Utility Experts and Researchers on Smart Grid Technologies are Eligible to Submit Technical Papers</li>
                  <li>Abstract of paper: Max 250 words to be submitted with this application no later than 30th September 2026</li>
                  <li>Shortlisted Paper Abstracts will be announced by 21st October 2026 for Full Paper Submission</li>
                  <li>Full Paper: Authors of shortlisted papers will be required to submit the full paper in IEEE paper format by 20th November, 2026 | Max: 4 pages / 1000 Words | Download the format from following: <a href="https://docs.google.com/document/d/11IJQoLsK9_XN20KCUHlzgsDQRPkJBy0c/edit?usp=sharing&ouid=103484490277585705632&rtpof=true&sd=true" target="_blank">https://docs.google.com/document/d/11IJQoLsK9_XN20KCUHlzgsDQRPkJBy0c/edit?usp=sharing&ouid=103484490277585705632&rtpof=true&sd=true</a></li>
                  <li>Shortlisted Papers will be announced by 15th December 2026</li>
                  <li>Papers deemed purely commercial in nature will not be selected</li>
                  <li>No change in topic/title of Abstract or full paper submission will be allowed after submission</li>
                  <li>Those whose name is mentioned as the primary author will only be allowed to make the presentation during TESS 2027; co-authors will be allowed in special cases</li>
                  <li>File name should not be more than 10 words</li>
                  <li>Add Theme + title + your name during Abstract submission</li>
              </ul>

              <p>For queries, email us at: <a href="mailto:tp@isuw.in">tp@isuw.in</a></p>
          </div>
      </div>
    </div>
  </div>
</div>
	  
<p align="center" style="line-height: 108%; margin-bottom: 0.11in"></p>

<div class="accordion accordion-flush" id="juryAccordion">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOneJury">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsesix" aria-expanded="false" aria-controls="flush-collapsesix">
        <H4 style="color: green;"><strong>Esteemed Jury Members of Technical Papers 2027</strong></H4>
      </button>
    </h2>
    <div id="flush-collapsesix" class="accordion-collapse collapse" aria-labelledby="flush-headingOneJury" data-bs-parent="#juryAccordion">
      <div class="accordion-body">
        <TABLE>
          <COL WIDTH=76*>
          <COL WIDTH=180*>
          <TR>
            <TD WIDTH=30% BGCOLOR="#ed7d31"; STYLE="border-top: 1px solid #ed7d31; border-bottom: 1.50pt solid #ed7d31; border-left: 1.50pt solid #ed7d31; border-right: none; padding-top: 0.1in; padding-bottom: 0.1in; padding-left: 0.1in; padding-right: 0in">
              <P ALIGN=JUSTIFY STYLE="margin-left: 0.1in; margin-right: 0.1in; margin-top: 0.1in">
                &nbsp;<FONT COLOR="#ffffff"><FONT ><B>Jury Panel</B></FONT></FONT>
              </P>
            </TD>
            <TD WIDTH=70% BGCOLOR="#ed7d31"; STYLE="border-top: 1px solid #ed7d31; border-bottom: 1.50pt solid #ed7d31; border-left: 1.50pt solid #ed7d31; border-right: 1px solid #ed7d31; padding: 0.1in">
              <P ALIGN=JUSTIFY STYLE="margin-left: 0.1in; margin-right: 0.1in; margin-top: 0.1in">
                <FONT COLOR="#ffffff"><FONT ><B>Brief Profile of Jury Panel</B></FONT></FONT>
              </P>
            </TD>
          </TR>
          
          <!-- Anjuli Chandra - Updated from 2026 document -->
          <TR>
            <TD WIDTH=30% VALIGN=TOP STYLE="border-top: none; border-bottom: 1.50pt solid #ed7d31; border-left: 1.50pt solid #ed7d31; border-right: none; padding-top: 0in; padding-bottom: 0.1in; padding-left: 0.1in; padding-right: 0in">
              <P ALIGN=JUSTIFY STYLE="margin-bottom: 0.11in"><IMG SRC="http://www.isuw.in/public/uploads/images/anjuli.PNG" NAME="Picture 2" ALIGN=BOTTOM WIDTH=190 HEIGHT=200 BORDER=0></P>
              <P><FONT ><B>Anjuli Chandra, Former Member, Punjab State Electricity Regulatory Commission (PSERC)</B></FONT></P>
            </TD>
            <TD WIDTH=70% STYLE="border-top: none; border-bottom: 1.50pt solid #ed7d31; border-left: 1.50pt solid #ed7d31; border-right: 1px solid #ed7d31; padding-top: 0in; padding-bottom: 0.1in; padding-left: 0.1in; padding-right: 0.1in">
              <P ALIGN=JUSTIFY STYLE="margin-bottom: 0.11in"><FONT > 
                Anjuli Chandra, former member, Punjab State Electricity Regulatory Commission (PSERC), brings to the table four decades of experience in the power sector. Her areas of expertise include distribution and transmission network planning, formulating standards, devising regulatory frameworks and load forecasting. Prior to joining PSERC, Chandra was principal chief engineer at the Central Electricity Authority (CEA), where she was responsible for power survey and load forecasting, power system monitoring, project appraisal and distribution planning and development. She has also served as executive director, tariff and engineering, at the Delhi Electricity Regulatory Commission.
              </FONT></P>
            </TD>
          </TR>
          
          <!-- Dr. Faruk Kazi - Updated from 2026 document -->
          <TR>
            <TD WIDTH=30% VALIGN=TOP STYLE="border-top: none; border-bottom: 1.50pt solid #ed7d31; border-left: 1.50pt solid #ed7d31; border-right: none; padding-top: 0in; padding-bottom: 0.1in; padding-left: 0.1in; padding-right: 0in">
              <P ALIGN=JUSTIFY STYLE="margin-bottom: 0.11in"><IMG SRC="http://www.isuw.in/public/uploads/images/faruk.PNG" NAME="Picture 6" ALIGN=BOTTOM WIDTH=170 HEIGHT=179 BORDER=0></P>
              <P><FONT ><B>Dr. Faruk Kazi --- Chair, ISGF Working Group on Digital Architecture & Cyber Security; Professor & Dean (R&D), VJTI, Mumbai</B></FONT></P>
            </TD>
            <TD WIDTH=70% STYLE="border-top: none; border-bottom: 1.50pt solid #ed7d31; border-left: 1.50pt solid #ed7d31; border-right: 1px solid #ed7d31; padding-top: 0in; padding-bottom: 0.1in; padding-left: 0.1in; padding-right: 0.1in">
              <P ALIGN=JUSTIFY><FONT >
                Dr. Faruk Kazi received his Ph.D. in Systems and Control Engineering from IIT Bombay in 2009. He is currently Professor and Dean (R&D) at VJTI, Mumbai. His work focuses on cyber-physical systems, critical infrastructure protection, and cybersecurity for SCADA, Industrial Control Systems (ICS), and Operational Technology (OT). He serves as Chair of Working Group-3 (Digital Architecture and Cyber Security) of the India Smart Grid Forum (ISGF), a PPP initiative of the Ministry of Power, Government of India, and is a consultant with Tata Consulting Engineers for Smart Grid projects. Dr. Kazi has been a visiting scholar at EPFL, Switzerland, and Tufts University, USA, has delivered invited talks globally, and has published over 90 research papers with funding support from ISRO, BARC, DRDO, and DST.
              </FONT></P>
            </TD>
          </TR>
          
          <!-- Ravi Seethapathy - New from 2026 document -->
          <TR>
            <TD WIDTH=30% VALIGN=TOP STYLE="border-top: none; border-bottom: 1.50pt solid #ed7d31; border-left: 1.50pt solid #ed7d31; border-right: none; padding-top: 0in; padding-bottom: 0.1in; padding-left: 0.1in; padding-right: 0in">
              <P ALIGN=JUSTIFY STYLE="margin-bottom: 0.11in"><IMG SRC="http://www.isuw.in/public/uploads/images/ravi.PNG" NAME="Picture 5" ALIGN=BOTTOM WIDTH=190 HEIGHT=220 BORDER=0></P>
              <P><FONT ><B>Ravi Seethapathy, Executive Chairman of Biosirus Inc., Canada and Advisor, India Smart Grid Forum</B></FONT></P>
            </TD>
            <TD WIDTH=70% STYLE="border-top: none; border-bottom: 1.50pt solid #ed7d31; border-left: 1.50pt solid #ed7d31; border-right: 1px solid #ed7d31; padding-top: 0in; padding-bottom: 0.1in; padding-left: 0.1in; padding-right: 0.1in">
              <P ALIGN=JUSTIFY STYLE="margin-bottom: 0.11in"><FONT > 
                Ravi Seethapathy, is Executive Chairman of Biosirus Inc., Canada and a Corporate Director of Larsen & Toubro's - Power Transmission & Distribution (IC), India. He also serves as the "Ambassador for the Americas", for the Global Smart Energy Federation, USA, and as an Advisor to the India Smart Grid Forum. With over 35+ years of experience in the Energy and Power Systems area in Canada, he mentors several utilities and companies in their technology development. His is active in several IEC, CSA, GSEF, ISGF technical committees, in the areas of sustainable energy, transportation, energy storage, microgrid and e-mobility. He is an invited speaker internationally and has co-authored over 50 technical papers and 50 published articles. His former Corporate Directorships include Toronto Atmospheric Fund, Smart Grid Canada, Ryerson University, TV Ontario, Scarborough Hospital, and as Chairs of Engineers Without Borders Canada, Canadian Club of Toronto, and Indo-Canada Chamber of Commerce.
              </FONT></P>
            </TD>
          </TR>
          
          <!-- Mr. Reji Kumar Pillai - Updated from 2026 document -->
          <TR>
            <TD WIDTH=30% VALIGN=TOP STYLE="border-top: none; border-bottom: 1.50pt solid #ed7d31; border-left: 1.50pt solid #ed7d31; border-right: none; padding-top: 0in; padding-bottom: 0.1in; padding-left: 0.1in; padding-right: 0in">
              <P ALIGN=JUSTIFY STYLE="margin-bottom: 0.11in"><IMG SRC="http://www.isuw.in/public/uploads/images/reji.PNG" NAME="Picture 2" ALIGN=BOTTOM WIDTH=190 HEIGHT=220 BORDER=0></P>
              <P><FONT ><B>Mr. Reji Kumar Pillai, President -- India Smart Grid Forum, Chairman - Global Smart Energy Federation</B></FONT></P>
            </TD>
            <TD WIDTH=70% STYLE="border-top: none; border-bottom: 1.50pt solid #ed7d31; border-left: 1.50pt solid #ed7d31; border-right: 1px solid #ed7d31; padding-top: 0in; padding-bottom: 0.1in; padding-left: 0.1in; padding-right: 0.1in">
              <P ALIGN=JUSTIFY STYLE="margin-bottom: 0.11in"><FONT > 
                Reji has been President of the India Smart Grid Forum since its inception in 2011 and Chairman of the Global Smart Energy Federation (GSEF) since November 2016. He is an internationally renowned expert with nearly four decades of experience across the electricity value chain. He leads efforts to modernize electric grids and expand access to clean, reliable, and affordable electricity, while advocating for the "Right to Electricity Act." Reji has played a key role in advancing renewable energy, smart grids, electric mobility, energy storage, and digitalization in India. His current work spans grid-integrated vehicles, smart cities, AI applications for utilities, and regional grid interconnections in Asia. He advises the Arab Renewable Energy Commission and collaborates closely with APUA and ISGAN. He has worked with NTPC, IBM, and as a consultant to ADB, World Bank, and USAID, and is a sought-after international keynote speaker.
              </FONT></P>
            </TD>
          </TR>
          
          <!-- Ashok Kumar Rajput - New from 2026 document -->
          <TR>
            <TD WIDTH=30% VALIGN=TOP STYLE="border-top: none; border-bottom: 1.50pt solid #ed7d31; border-left: 1.50pt solid #ed7d31; border-right: none; padding-top: 0in; padding-bottom: 0.1in; padding-left: 0.1in; padding-right: 0in">
              <P ALIGN=JUSTIFY STYLE="margin-bottom: 0.11in"><IMG SRC="images/2026/Ashokrajput.jpg" NAME="Picture 2" ALIGN=BOTTOM WIDTH=190 HEIGHT=220 BORDER=0></P>
              <P><FONT ><B>Ashok Kumar Rajput, Member (Power System), Central Electricity Authority, GoI</B></FONT></P>
            </TD>
            <TD WIDTH=70% STYLE="border-top: none; border-bottom: 1.50pt solid #ed7d31; border-left: 1.50pt solid #ed7d31; border-right: 1px solid #ed7d31; padding-top: 0in; padding-bottom: 0.1in; padding-left: 0.1in; padding-right: 0.1in">
              <P ALIGN=JUSTIFY STYLE="margin-bottom: 0.11in"><FONT > 
                Shri Ashok Kumar Rajput served as Member (Power Systems) and Ex-Officio Additional Secretary to the Government of India at the Central Electricity Authority (CEA), Ministry of Power from 15 November 2022 until his superannuation on 28 February 2025. A 1986-batch officer of the Central Power Engineering Services, he joined CEA in 1988. He holds a B.Tech in Electrical Engineering from GBPUA&T, Pantnagar, and an M.Tech in Power Systems from IIT Delhi. With nearly four decades in the power sector, he made significant contributions to transmission planning, distribution reforms, smart meters, renewable energy integration, and grid modernization. He played a key role in REMCs, transformer quality control orders, e-mobility, hydrogen economy initiatives, and the Great Indian Bustard (GIB) expert committee on underground lines. He has authored several technical papers and publications in English and Hindi.
              </FONT></P>
            </TD>
          </TR>
          
          <!-- N Murugesan - New from 2026 document -->
          <TR>
            <TD WIDTH=30% VALIGN=TOP STYLE="border-top: none; border-bottom: 1.50pt solid #ed7d31; border-left: 1.50pt solid #ed7d31; border-right: none; padding-top: 0in; padding-bottom: 0.1in; padding-left: 0.1in; padding-right: 0in">
              <P ALIGN=JUSTIFY STYLE="margin-bottom: 0.11in"><IMG SRC="images/2026/NMurugesan.jpg" NAME="Picture 2" ALIGN=BOTTOM WIDTH=190 HEIGHT=220 BORDER=0></P>
              <P><FONT ><B>N Murugesan, Former Director General, Central Power Research Institute</B></FONT></P>
            </TD>
            <TD WIDTH=70% STYLE="border-top: none; border-bottom: 1.50pt solid #ed7d31; border-left: 1.50pt solid #ed7d31; border-right: 1px solid #ed7d31; padding-top: 0in; padding-bottom: 0.1in; padding-left: 0.1in; padding-right: 0.1in">
              <P ALIGN=JUSTIFY STYLE="margin-bottom: 0.11in"><FONT > 
                N. Murugesan has over 40 years of experience in Power Systems, Transmission & Distribution, Substation and Distribution Automation, Smart Grids, AMI, Smart Meters, and power system communication protocols, along with testing and certification of low- and high-voltage equipment as per national and international standards. He served as Chief Executive Officer of one of India's largest Power Engineering Research Institutes from March 2010 to March 2015, during which he upgraded its seven laboratories to meet global IEC and BIS standards. Since 2015, he has been working as an Independent Consultant, advising utilities on new technologies, equipment specifications, market studies, and capacity building in areas such as SCADA, AMI, storage systems, safety, and quality assurance of electrical equipment.
              </FONT></P>
            </TD>
          </TR>
          
          <!-- BP Singh - Existing jury member (not in 2026 document - kept as-is) -->
          <!-- <TR>
            <TD WIDTH=30% VALIGN=TOP STYLE="border-top: none; border-bottom: 1.50pt solid #ed7d31; border-left: 1.50pt solid #ed7d31; border-right: none; padding-top: 0in; padding-bottom: 0.1in; padding-left: 0.1in; padding-right: 0in">
              <P ALIGN=JUSTIFY STYLE="margin-bottom: 0.11in"><IMG SRC="images/2025/BP.jpg" NAME="Picture 2" ALIGN=BOTTOM WIDTH=190 HEIGHT=220 BORDER=0></P>
              <P><FONT ><B>Mr. BP Singh&nbsp;&nbsp;&nbsp;<BR>Former Member<BR>Delhi Electricity Regulatory Commission (DERC)</B></FONT></P>
            </TD>
            <TD WIDTH=70% STYLE="border-top: none; border-bottom: 1.50pt solid #ed7d31; border-left: 1.50pt solid #ed7d31; border-right: 1px solid #ed7d31; padding-top: 0in; padding-bottom: 0.1in; padding-left: 0.1in; padding-right: 0.1in">
              <P ALIGN=JUSTIFY STYLE="margin-bottom: 0.11in"><FONT > 
                Mr. BP Singh   
                Former Member
                Delhi Electricity Regulatory Commission (DERC) Mr. BP Singh is a graduate in Mining Engineering from Indian School of Mines, Dhanbad and has over 40 years of experience in the power & energy sector.  
                He was a Former Member in DERC (Delhi Electricity Regulatory Commission). He has issued three successive Tariff Orders for the period 2014 to 2018, being consumer friendly, were highly acclaimed at all levels. As a part of Power sector Reforms, formulated progressive Regulations on Tariff, Net Metering and Demand Side Management and Modified SOP to make it more consumer friendly. Efficacious remedy for redressal of Consumer's Grievance has been enhanced by making the Regulations consumer friendly and initiated action for creation of legal aid cell for the benefit of the Consumer's.
                Prior to taking up the assignment as Member DERC, he rose to the position of Director (Projects) in NTPC, where he additionally had also held assignments viz, Chairman, BRBCL; Chairman NTPC SCCL Global Ventures Pvt. Ltd.; whole time Director of NTPC Hydro Ltd.; BFSNL Ltd. etc.
                He has been part of numerous high-level committees constituted by the Government of India for formulation of Plan proposals and Policies including Energy Policy, pricing of Coal etc.
                He has actively participated in formulation of policies for the Regulatory Commissions under the aegis of Forum of India Regulators. He has been associated with numerous professional institutions, viz
                <br/>
                1. "Institute Senate Member' – Dr BR Ambedkar National Institute of Technology, Jalandhar;<br/>
                2. Member of General Body & Peer Review Committee of National Institute of Rock Mechanics under Ministry of Mines,<br/>
                3 Member of the Board of Construction Industry Development Council, joint council by Indian Construction industry and Planning Commission,<br/>
                He had been adjudged and awarded Best Director Projects Corporate Excellence Award 2012-13 – GEOMINTECH; Awarded at Brisbane Dadari Project – awarded for project excellence in 25th IPMA World Congress at Brisbane in 2011.
              </FONT></P>
            </TD>
          </TR>
          
          
          <TR>
            <TD WIDTH=30% VALIGN=TOP STYLE="border-top: none; border-bottom: 1.50pt solid #ed7d31; border-left: 1.50pt solid #ed7d31; border-right: none; padding-top: 0in; padding-bottom: 0.1in; padding-left: 0.1in; padding-right: 0in">
              <P ALIGN=JUSTIFY STYLE="margin-bottom: 0.11in"><IMG SRC="images/2025/rajesh.png" alt="Rajesh Bansal" ALIGN=BOTTOM WIDTH=190 HEIGHT=220 BORDER=0></P>
              <P><FONT ><B>Mr. Rajesh Bansal
                <BR>Former CEO of BSES Rajdhani Power Ltd
              </B></FONT></P>
            </TD>
            <TD WIDTH=70% STYLE="border-top: none; border-bottom: 1.50pt solid #ed7d31; border-left: 1.50pt solid #ed7d31; border-right: 1px solid #ed7d31; padding-top: 0in; padding-bottom: 0.1in; padding-left: 0.1in; padding-right: 0.1in">
              <P ALIGN=JUSTIFY STYLE="margin-bottom: 0.11in"><FONT > 
                Rajesh Bansal started his career as Scientist in Indian Space Research Organization. Later he was involved in the development of first Single Phase Electronic Meter, in India. He has worked for various energy meter companies including DZG Germany. In 2004, he joined BSES Delhi, Reliance group, as Head of Meter Management and Energy Audit and in 2021 reached to position of CEO.
                </p>    
                <p>He has good exposure of world-wide metering, data usage and power distribution technology. He has shared his experience with various international meter manufacturers, Meter ASIC designers, Utilities and service providers to Utilities across the globe. He has written a series of papers about "Role of energy meters and usage of meter data", Smart Apps – next step to data analytics, How to leverage benefits from smart grid data, validation of smart metering system, addressing utility objectives.
                </p>        
                <p>Presently he is advising various companies and start Ups, sharing his knowledge and experience at various platform, conduct session on "Fascinating world of power distribution" regularly to enhance interest of student and young professional into core engineering. He is member of various government committees/ task force and Chairman of CBIP Metering manual committee.
                </p>
              </FONT></P>
            </TD>
          </TR> -->
        </TABLE>
      </div>
    </div>
  </div>
</div>

<p align="center" style="line-height: 108%; margin-bottom: 0.11in"></p>
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseeight" aria-expanded="false" aria-controls="flush-collapseeight">
        <h4 style="color: green;"><strong>ISUW 2026 Technical Papers for Presentation and Publication</strong></h4>
      </button>
    </h2>
    <div id="flush-collapseeight" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <div id="TextSection" dir="ltr">
          <p class="western" style="margin-top: 0in; text-decoration: none">
          <b>


<table width="100%" cellpadding="5" cellspacing="0" border="1" style="border-collapse: collapse; margin-bottom: 30px;">
  
  <thead>
            <tr>
				<th colspan="5" style="background: #EF7B00;text-align: center;">Top 31 - ISUW 2026 Technical Papers Selected for Presentation</th>
			</tr>
			<tr>
                <th>SL.</th>
                <th>Theme</th>
                <th>Paper Title</th>
                <th>Presenter</th>
                <th>Organization</th>
            </tr>
        </thead>
  <tbody>
    <!-- Row 1 -->
    <tr>
      <td align="center">1</td>
      <td>Smart City Gas Distribution</td>
      <td>Loss Unaccounted for Gas Prevention with CNG Station IOT Driven Automation</td>
      <td>Sumit Gupta</td>
      <td>Asset Plus Consulting Pvt Ltd.</td>
    </tr>
    <!-- Row 2 -->
    <tr>
      <td align="center">2</td>
      <td>Disruptive Innovations for Utilities</td>
      <td>Agentic AI for India's Utilities: From Loss Reduction to Grid Edge Orchestration</td>
      <td>Priyanshu Agrawal</td>
      <td>Cognizant Technology Solutions Pvt. Ltd.</td>
    </tr>
    <!-- Row 3 -->
    <tr>
      <td align="center">3</td>
      <td>Disruptive Innovations for Utilities</td>
      <td>Use of Artificial Intelligence for Automated Defect Detection in Transmission Infrastructure using UAV</td>
      <td>Utkarsh Jaiswal</td>
      <td>Resonia Limited</td>
    </tr>
    <!-- Row 4 -->
    <tr>
      <td align="center">4</td>
      <td>Disruptive Innovations for Utilities</td>
      <td>The Sentient Grid: How Agentic AI is Creating the Autonomous Utility of the Future</td>
      <td>Sai Keshava Srinivas</td>
      <td>Cognizant Technology Solutions Pvt. Ltd</td>
    </tr>
    <!-- Row 5 -->
    <tr>
      <td align="center">5</td>
      <td>Disruptive Innovations for Utilities</td>
      <td>Leveraging the Power of AI in Identifying Power Theft</td>
      <td>Suhaas Mani</td>
      <td>TP Western Odisha Distribution Limited</td>
    </tr>
    <!-- Row 6 -->
    <tr>
      <td align="center">6</td>
      <td>Disruptive Innovations for Utilities</td>
      <td>Solar Eligibility Token - A RTS Marketplace</td>
      <td>Vijay Dhonde</td>
      <td>Orangecurrent Technologies Private Limited</td>
    </tr>
<!-- Row 7 -->
    <tr>
      <td align="center">7</td>
      <td>Disruptive Innovations for Utilities</td>
      <td>Powering the Future: Digital Twins for Smarter, Reliable, and Efficient Grids</td>
      <td>V. Lavanya</td>
      <td>Vellore Institute of Technology, Chennai</td>
    </tr>
    <!-- Row 8 -->
    <tr>
      <td align="center">8</td>
      <td>Disruptive Innovations for Utilities</td>
      <td>Sanjoga: A GIS-Enabled Real-Time Feasibility Assessment Tool for Accelerating New Electricity Connections</td>
      <td>Saurav Darshana Mohapatra</td>
      <td>TP Western Odisha Distribution Limited</td>
    </tr>
    <!-- Row 9 -->
    <tr>
      <td align="center">9</td>
      <td>Disruptive Innovations for Utilities</td>
      <td>WeatheXpert: The PAN TATA Weather Tool</td>
      <td>Trusha Biswas</td>
      <td>TATA Power Mumbai</td>
    </tr>
    <!-- Row 10 -->
    <tr>
      <td align="center">10</td>
      <td>Disruptive Innovations for Utilities</td>
      <td>Transforming Smart Meter Troubleshooting and Solar Integration through Digital Twins and Agentic AI with Real-Time Communication</td>
      <td>Nikita Nayak</td>
      <td>TP Central Odisha Distribution Limited</td>
    </tr>
    <!-- Row 11 -->
    <tr>
      <td align="center">11</td>
      <td>Disruptive Innovations for Utilities</td>
      <td>AI/ML and RPA Led Digital Transformation in Transmission Line Design</td>
      <td>Purna Chandra Rao</td>
      <td>KEC International Limited</td>
    </tr>
    <!-- Row 12 -->
    <tr>
      <td align="center">12</td>
      <td>Disruptive Innovations for Utilities</td>
      <td>Energy Performance Optimization System (EPOS)</td>
      <td>Ritu Raj</td>
      <td>Noida Power Company Limited</td>
    </tr>
    <!-- Row 13 -->
    <tr>
      <td align="center">13</td>
      <td>Disruptive Innovations for Utilities</td>
      <td>Accelerating India's Solar Mission: A Tech-Enabled Customer Engagement Model under PM Surya Ghar</td>
      <td>Ranjeet Kumar</td>
      <td>BSES Rajdhani Power Limited</td>
    </tr>
    <!-- Row 14 -->
    <tr>
      <td align="center">14</td>
      <td>Disruptive Innovations for Utilities</td>
      <td>GIS-Based Mapping of RMUs & DTs for Asset Relationship Modeling Using AI based Machine Learning Algorithms in Power Distribution Systems</td>
      <td>Vikas Gupta</td>
      <td>Noida Power Company Ltd.</td>
    </tr>
    <!-- Row 15 -->
    <tr>
      <td align="center">15</td>
      <td>Disruptive Innovations for Utilities</td>
      <td>Digital Twins for Distribution Utilities: From Grid Visibility to Operational Foresight</td>
      <td>B Gidean Praveen</td>
      <td>Fluentgrid Limited</td>
    </tr>
    <!-- Row 16 -->
    <tr>
      <td align="center">16</td>
      <td>Foundational Blocks for Smart Grids</td>
      <td>LTE Network a Reliable & Cost Effective SCADA Communication System</td>
      <td>Soumendra Sahoo</td>
      <td>TP Central Odisha Distribution Limited</td>
    </tr>
    <!-- Row 17 -->
    <tr>
      <td align="center">17</td>
      <td>Evolving Architecture of the 21st Century Grid with Two Way Power Flows</td>
      <td>Integrated Ring-Based Network Architecture for IT and OT Service Segregated</td>
      <td>Swagat Narayan Mohanty</td>
      <td>TP Western Odisha Distribution Limited</td>
    </tr>
    <!-- Row 18 -->
    <tr>
      <td align="center">18</td>
      <td>Evolving Architecture of the 21st Century Grid with Two Way Power Flows</td>
      <td>SIM-Based Secure Connectivity for Utility Operations in Non-MPLS Feasible Areas</td>
      <td>Pritesh Kumar Srivastava</td>
      <td>TP Western Odisha Distribution Limited</td>
    </tr>
    <!-- Row 19 -->
    <tr>
      <td align="center">19</td>
      <td>Evolving Architecture of the 21st Century Grid with Two Way Power Flows</td>
      <td>Advanced Network Management System for OT: A Unified Approach to Digital Utility Operations</td>
      <td>Ankur Kaushik</td>
      <td>Tata Power Distribution Limited</td>
    </tr>
    <!-- Row 20 -->
    <tr>
      <td align="center">20</td>
      <td>Evolving Architecture of the 21st Century Grid with Two Way Power Flows</td>
      <td>Reimagining Distribution Grid Planning: Integrating Prosumers, EVs, and DERs through Integrated Distribution Resource Planning</td>
      <td>Adarsh Nagarajan</td>
      <td>BSES Rajdhani Power Limited</td>
    </tr>
    <!-- Row 21 -->
    <tr>
      <td align="center">21</td>
      <td>Evolving Architecture of the 21st Century Grid with Two Way Power Flows</td>
      <td>Strengthening Underground Cable Networks for Reliable and Flexible Distribution Systems</td>
      <td>Sanjeev Kumar Atri</td>
      <td>Tata Power Delhi Distribution Limited</td>
    </tr>
    <!-- Row 22 -->
    <tr>
      <td align="center">22</td>
      <td>Smart Water</td>
      <td>Multi-Agentic AI for Non-Revenue Water</td>
      <td>Yasin Mohamed</td>
      <td>Cognizant Technology Solutions India Private Limited</td>
    </tr>
    <!-- Row 23 -->
    <tr>
      <td align="center">23</td>
      <td>Smart Water</td>
      <td>An Integrated System for Water Distribution Network Management</td>
      <td>Moreshwar Salpekar</td>
      <td>Sevya Multimedia Pvt Ltd</td>
    </tr>
    <!-- Row 24 -->
    <tr>
      <td align="center">24</td>
      <td>INDIA @ 100 in 2047: Vision for the Indian Power System</td>
      <td>Transformation of Aging EHV Substation Assets Through Automation And Digital Technologies For Improved System Reliability</td>
      <td>Sunil Bansod</td>
      <td>Maharashtra State Electricity Transmission Company Ltd.</td>
    </tr>
    <!-- Row 25 -->
    <tr>
      <td align="center">25</td>
      <td>Smart Grids for Smart Cities</td>
      <td>Digital Twin-Enabled Virtual Power Plants for Optimal Renewable Energy Integration and Grid Flexibility in India</td>
      <td>T. Kesavan</td>
      <td>Easwari Engineering College</td>
    </tr>
    <!-- Row 26 -->
    <tr>
      <td align="center">26</td>
      <td>Regulations for the Evolving Smart Energy Systems</td>
      <td>Implementation of Resource Adequacy (RA) Measures for Ensuring Reliable Integration of Renewable Energy (RE) Across India</td>
      <td>Balawant Joshi</td>
      <td>Idam Infrastructure Advisory Pvt Ltd</td>
    </tr>
    <!-- Row 27 -->
    <tr>
      <td align="center">27</td>
      <td>New and Emerging Technologies and Trends</td>
      <td>Battery Energy Storage System: A Milestone in Mumbai's Grid Evolution</td>
      <td>Swapnil Rao</td>
      <td>Tata Power Company Limited</td>
    </tr>
    <!-- Row 28 -->
    <tr>
      <td align="center">28</td>
      <td>Electric Mobility</td>
      <td>Virtual Green Fleet Orchestration</td>
      <td>Yasin Mohamed</td>
      <td>Cognizant Technology Solutions India Private Limited</td>
    </tr>
    <!-- Row 29 -->
    <tr>
      <td align="center">29</td>
      <td>Electric Mobility</td>
      <td>REVOLUTIONIZING ENERGY MANAGEMENT WITH MATTER PROTOCOL</td>
      <td>Aravindhan Sugumar</td>
      <td>Renault Nissan Technology & Business Centre India Private Limited</td>
    </tr>
    <!-- Row 30 -->
    <tr>
      <td align="center">30</td>
      <td>Cyber Security for the Digitalized Grids</td>
      <td>Cyber Crisis Management Plan (CCMP)</td>
      <td>Aamir Hussain Khan</td>
      <td>Tata Power-DDL</td>
    </tr>
    <!-- Row 31 -->
    <tr>
      <td align="center">31</td>
      <td>Cyber Security for the Digitalized Grids</td>
      <td>Enhancing Cybersecurity Visibility of OT Assets in Critical Infrastructure: A Practical Approach</td>
      <td>Ankit</td>
      <td>Power Grid Corporation of India Ltd</td>
    </tr>
  </tbody>
</table>

<table width="100%" cellpadding="5" cellspacing="0" border="1" style="border-collapse: collapse;">
  
  <thead>
            <tr>
				<th colspan="5" style="background: #EF7B00;text-align: center;">Top 31 - ISUW 2026 Technical Papers Selected for Publication</th>
			</tr>
			<tr>
                <th>SL.</th>
                <th>Theme</th>
                <th>Paper Title</th>
                <th>Presenter</th>
                <th>Organization</th>
            </tr>
        </thead>
  <tbody>
    <!-- Row 1 -->
    <tr>
      <td align="center">1</td>
      <td>Smart Water</td>
      <td>AI-driven Smart Water Grid for India's Water Supply Management</td>
      <td>Aashutosh Soni</td>
      <td>Cognizant Technology Solutions</td>
    </tr>
    <!-- Row 2 -->
    <tr>
      <td align="center">2</td>
      <td>Smart Water</td>
      <td>Digital Pathways for Water Security</td>
      <td>Anisha Vyas</td>
      <td>Cognizant Technology Solutions</td>
    </tr>
    <!-- Row 3 -->
    <tr>
      <td align="center">3</td>
      <td>Disruptive Innovations for Utilities</td>
      <td>Development of physical testbed for digital twin of Battery Management System</td>
      <td>Kumar Chandra Prakash Barun</td>
      <td>IIITDM Kancheepuram</td>
    </tr>
    <!-- Row 4 -->
    <tr>
      <td align="center">4</td>
      <td>Disruptive Innovations for Utilities</td>
      <td>Vehicle Tracking System (VTS)</td>
      <td>Pritesh Kumar Srivastava</td>
      <td>TP Western Odisha Distribution Limited</td>
    </tr>
    <!-- Row 5 -->
    <tr>
      <td align="center">5</td>
      <td>Disruptive Innovations for Utilities</td>
      <td>Agentic AI for Industrial Cooling Systems Utilities: Deep Reinforcement Learning based Performance Optimization with LLM-Enhanced Decision Support</td>
      <td>Gourav Sarkar</td>
      <td>Service Now</td>
    </tr>
    <!-- Row 6 -->
    <tr>
      <td align="center">6</td>
      <td>Disruptive Innovations for Utilities</td>
      <td>From Legacy to Digital - Leveraging Artificial Intelligence, Machine Learning and Robotics for Future-Ready DISCOMs</td>
      <td>Gaurav Kapoor</td>
      <td>TekUncorked AI IoT Pvt Ltd</td>
    </tr>
    <!-- Row 7 -->
    <tr>
      <td align="center">7</td>
      <td>Disruptive Innovations for Utilities</td>
      <td>Transforming Customer Engagement with Smart Interactive Voice Bot for Enhancing Green Billing Adoption</td>
      <td>Subransu Keshari Samantray</td>
      <td>TP Western Odisha Distribution Limited</td>
    </tr>
    <!-- Row 8 -->
    <tr>
      <td align="center">8</td>
      <td>Disruptive Innovations for Utilities</td>
      <td>Smart Urban Reliability Enhancer</td>
      <td>Sukhendu Dash</td>
      <td>TP Western Odisha Distribution Limited</td>
    </tr>
    <!-- Row 9 -->
    <tr>
      <td align="center">9</td>
      <td>Disruptive Innovations for Utilities</td>
      <td>Identification and Analysis of Electricity Theft in Power Distribution Network through Integration of Drone Data with Deep Learning Algorithms</td>
      <td>Vikas Gupta</td>
      <td>Noida Power Company Ltd</td>
    </tr>
    <!-- Row 10 -->
    <tr>
      <td align="center">10</td>
      <td>Disruptive Innovations for Utilities</td>
      <td>Reimagining Outage Management in Indian Utilities: A Tech-Enabled Framework for the Future</td>
      <td>Abhijit Panda</td>
      <td>Cognizant Technology Solutions Pvt. Ltd</td>
    </tr>
    <!-- Row 11 -->
    <tr>
      <td align="center">11</td>
      <td>Disruptive Innovations for Utilities</td>
      <td>Enhancement of Safe work culture through demonstration of Virtual Reality in Electrical Operation of Power Distribution Utility-BUILDING A ZERO HARM CULTURE</td>
      <td>Gourab Kumar Dhal</td>
      <td>TP Western Odisha Distribution Limited</td>
    </tr>
    <!-- Row 12 -->
    <tr>
      <td align="center">12</td>
      <td>Disruptive Innovations for Utilities</td>
      <td>Agentic Artificial Intelligence for Optimizing Field Force Operations and Work Management in the Utility Sector</td>
      <td>Sayli Gaikwad</td>
      <td>Cognizant Technology Solutions Pvt. Ltd</td>
    </tr>
    <!-- Row 13 -->
    <tr>
      <td align="center">13</td>
      <td>Disruptive Innovations for Utilities</td>
      <td>An Intelligent Vision-Based System for Automating Smart Meter Replacement and Digital Documentation in Power Utilities</td>
      <td>Sumit Gupta</td>
      <td>Asset Plus Consulting Pvt Ltd.</td>
    </tr>
    <!-- Row 14 -->
    <tr>
      <td align="center">14</td>
      <td>Disruptive Innovations for Utilities</td>
      <td>Virtual Reality, Augmented Reality, Assisted Reality and Mixed Reality Technologies for the Smart Grids and Smart Cities</td>
      <td>Binayak Debta</td>
      <td>Cognizant Technology Solutions India Private Limited</td>
    </tr>
    <!-- Row 15 -->
    <tr>
      <td align="center">15</td>
      <td>INDIA @ 100 in 2047: Vision for the Indian Power System</td>
      <td>A Digital, Resilient, and Renewable India Power Sector</td>
      <td>Varun Sharma</td>
      <td>Oman National Engineering and investment company (SAOG)</td>
    </tr>
    <!-- Row 16 -->
    <tr>
      <td align="center">16</td>
      <td>INDIA @ 100 in 2047: Vision for the Indian Power System</td>
      <td>Comprehensive Strategies and Roadmap For Achieving The "24x7 Affordable and Reliable Power to All" With Indian Context</td>
      <td>Mehebub Alam</td>
      <td>Damodar Valley Corporation</td>
    </tr>
    <!-- Row 17 -->
    <tr>
      <td align="center">17</td>
      <td>INDIA @ 100 in 2047: Vision for the Indian Power System</td>
      <td>Building Disaster Resilient Power Distribution Infrastructure</td>
      <td>Subhankar Palit</td>
      <td>Ernst & Young GDS India LLP</td>
    </tr>
    <!-- Row 18 -->
    <tr>
      <td align="center">18</td>
      <td>INDIA @ 100 in 2047: Vision for the Indian Power System</td>
      <td>Demystifying the potential of Digital innovation in achieving Energy Transition and Energy Democracy</td>
      <td>Surekha Deshmukh</td>
      <td>IEEE Pune Section</td>
    </tr>
    <!-- Row 19 -->
    <tr>
      <td align="center">19</td>
      <td>New and Emerging Technologies and Trends</td>
      <td>WI_COM Wireless Bridge in Substation Automation</td>
      <td>Om Prakash Rathore</td>
      <td>TP Western Odisha Distribution Limited</td>
    </tr>
    <!-- Row 20 -->
    <tr>
      <td align="center">20</td>
      <td>Cyber Security for the Digitalized Grids</td>
      <td>Threat Pulse Live Intelligence Hub</td>
      <td>Aamir Hussain Khan</td>
      <td>Tata Power Delhi Distribution Limited</td>
    </tr>
    <!-- Row 21 -->
    <tr>
      <td align="center">21</td>
      <td>Cyber Security for the Digitalized Grids</td>
      <td>Digital Forensics in Distributed Energy Resources: Current Challenges and Future Research Directions</td>
      <td>Navneet Singh</td>
      <td>DAV University</td>
    </tr>
    <!-- Row 22 -->
    <tr>
      <td align="center">22</td>
      <td>Cyber Security for the Digitalized Grids</td>
      <td>Post Quantum Cryptography</td>
      <td>Yasin Mohamed</td>
      <td>Cognizant Technology Solutions India Private Limited</td>
    </tr>
    <!-- Row 23 -->
    <tr>
      <td align="center">23</td>
      <td>Foundational Blocks for Smart Grids</td>
      <td>SCADA "ADMS for Real-Time Protection Assessment</td>
      <td>Megha Vanmore</td>
      <td>TP Western Odisha Distribution Limited</td>
    </tr>
    <!-- Row 24 -->
    <tr>
      <td align="center">24</td>
      <td>Foundational Blocks for Smart Grids</td>
      <td>Smart Metering-Indian Experience and Lessons Learned</td>
      <td>Pinaki Sur</td>
      <td>Tata Power Northern Odisha Distribution Limited</td>
    </tr>
    <!-- Row 25 -->
    <tr>
      <td align="center">25</td>
      <td>Foundational Blocks for Smart Grids</td>
      <td>Optimizing Diesel Generator Operation of Remote Island Grid through BESS Utilization and Innovative Leasing Scheme</td>
      <td>Devni Syafrianto</td>
      <td>PT PLN (Persero)</td>
    </tr>
    <!-- Row 26 -->
    <tr>
      <td align="center">26</td>
      <td>Smart Grids for Smart Cities</td>
      <td>PSL Based Digital VCB Cloning in IEDs for SCADA Testing in Distribution Substations – Without Feeder Interruptions</td>
      <td>Brijesh Yadav</td>
      <td>TP Western Odisha Distribution Limited</td>
    </tr>
    <!-- Row 27 -->
    <tr>
      <td align="center">27</td>
      <td>Smart City Gas Distribution</td>
      <td>A Fault-Tolerant and Predictive Maintenance Framework for Gas Distribution Networks</td>
      <td>Moreshwar Salpekar</td>
      <td>Sevya Multimedia Pvt Ltd</td>
    </tr>
    <!-- Row 28 -->
    <tr>
      <td align="center">28</td>
      <td>Electric Mobility</td>
      <td>Second Life for EV Batteries</td>
      <td>Shruti Manocha</td>
      <td>Siemens</td>
    </tr>
    <!-- Row 29 -->
    <tr>
      <td align="center">29</td>
      <td>Evolving Architecture of the 21st Century Grid with Two Way Power Flows</td>
      <td>Voltage Profile Analysis in Prosumer-Driven Distribution Grids with High Solar PV Penetration</td>
      <td>Sanjay Kumar Gandabhai Prajapati</td>
      <td>Gujarat Power Research and Development Cell</td>
    </tr>
    <!-- Row 30 -->
    <tr>
      <td align="center">30</td>
      <td>Evolving Architecture of the 21st Century Grid with Two Way Power Flows</td>
      <td>Uncovering the Hidden Prosumers: Integrating SME Clusters into the Distribution Grid Architecture</td>
      <td>Hemant Menaria</td>
      <td>Cognizant Technology Solutions Pvt. LTd.</td>
    </tr>
    <!-- Row 31 -->
    <tr>
      <td align="center">31</td>
      <td>Regulations for the Evolving Smart Energy Systems</td>
      <td>Regulations for the Evolving Smart Energy Systems- Carbon Markets</td>
      <td>Gaurav Rai</td>
      <td>Cognizant Technology Solutions</td>
    </tr>
  </tbody>
</table>

            <!-- </b>
          </p>
        </div>
      </div>
    </div>
  </div>
</div> -->

<!-- <table>
        <thead>
            <tr>
				<th colspan="5" style="background: #EF7B00;text-align: center;">Top 24 - ISUW 2025 Technical Paper Selected for Presentation</th>
			</tr>
			<tr>
                <th>SL.</th>
                <th>Theme</th>
                <th>Paper Title</th>
                <th>Presenter</th>
                <th>Organization</th>
            </tr>
        </thead>
        <tbody>
		<tr>
                <td>1</td>
                <td>Disruptive Innovations for Utilities</td>
                <td>Object-based classification for vegetation encroachment analysis and change detection in greater noida for electrical network planning and utility management</td>
                <td>Vikas Gupta</td>
                <td>Noida Power Company Limited</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Disruptive Innovations for Utilities</td>
                <td>SVM and DWT based Detection and Classification of Microgrid Faults using Single Point Measurement</td>
                <td>Sumangal Bhau</td>
                <td>Abacus Institute of Engineering and Management</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Disruptive Innovations for Utilities</td>
                <td>Unlocking the Intelligent Utility with Generative AI</td>
                <td>Dheeraj Gangadhar</td>
                <td>Accenture</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Disruptive Innovations for Utilities</td>
                <td>A CIM Based Network Model Management</td>
                <td>Najda VM</td>
                <td>TNEI India Services Limited</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Disruptive Innovations for Utilities</td>
                <td>Governance Frameworks for GenAI in Sustainable Utility Management: An ESG Perspective</td>
                <td>Priyanshu Agrawal</td>
                <td>Cognizant</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Disruptive Innovations for Utilities</td>
                <td>Robotics Process Automation for Master Data Integration</td>
                <td>Anil Kumar Ojha</td>
                <td>TPWODL</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Disruptive Innovations for Utilities</td>
                <td>Application of digital twins for the low-voltage electricity grid--Challenges and opportunities of Distribution Grid Analytics in India</td>
                <td>Ajit Kumar Singh</td>
                <td>The Energy & Resources Institute</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Disruptive Innovations for Utilities</td>
                <td>Disruptive Innovations for Utilities: Digitalization, New Services and Revenue Streams : Evolution of Substation Automation System</td>
                <td>Tushar Kanti Bag</td>
                <td>TP Central Odisha Distribution Ltd.</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Regulations for the Evolving Smart Energy Systems</td>
                <td>Framework for Indian Carbon Markets</td>
                <td>Purnima M Gupta</td>
                <td>Central Electricity Authority</td>
            </tr>
            <tr>
                <td>10</td>
                <td>Regulations for the Evolving Smart Energy Systems</td>
                <td>Enhancing Regional Energy Cooperation in South Asia: Lessons from Success Stories and the Need for a Unified Regulatory Framework</td>
                <td>Maitreyi Karthik</td>
                <td>RTI International (USAID Implementation partner)</td>
            </tr>
            <tr>
                <td>11</td>
                <td>Regulations for the Evolving Smart Energy Systems</td>
                <td>Regulatory Framework for Ancillary Services in Evolving Smart Energy Systems Challenges and Strategic Solutions</td>
                <td>Gufran Basit</td>
                <td>Siemens Technology and Services</td>
            </tr>
            <tr>
                <td>12</td>
                <td>Electric Mobility</td>
                <td>Effect of vehicle dynamics on Performance of Electric Vehicle</td>
                <td>Minal Rade</td>
                <td>D.Y. Patil College of Engineering</td>
            </tr>
            <tr>
                <td>13</td>
                <td>Electric Mobility</td>
                <td>Opportunity For Battery Swapping In India</td>
                <td>Eshwar Pislakar</td>
                <td>Blue Energy Commercial Vehicle Limited</td>
            </tr>
            <tr>
                <td>14</td>
                <td>Electric Mobility</td>
                <td>Advanced Modulation Techniques for Multilevel Inverters in Vehicle-to-Grid Applications</td>
                <td>Nasreen Banu Mansoori</td>
                <td>Silver Oak University, Ahmedabad, Gujarat</td>
            </tr>
            <tr>
                <td>15</td>
                <td>Electric Mobility</td>
                <td>Strategic Charging Demand Management of Electric Buses: A Case Study on Urban Decarbonization</td>
                <td>Mahavir Singh</td>
                <td>The Energy and Resources Institute</td>
            </tr>
            <tr>
                <td>16</td>
                <td>Electric Mobility</td>
                <td>Harnessing Drone Technology to Transforming India's Future in Mobility</td>
                <td>Sanjay Singh Rawat</td>
                <td>Accenture Ltd.</td>
            </tr>
            <tr>
                <td>17</td>
                <td>Foundational Blocks for Smart Grids</td>
                <td>Improving Frequency Regulation and Reliability in Renewable Energy Based Distribution Networks through Advanced Inertia Control and Optimized Fault Passage Indicators (FPIs)</td>
                <td>Aditya Kumar Pati</td>
                <td>PSCC, TPWODL, BURLA</td>
            </tr>
            <tr>
                <td>18</td>
                <td>Foundational Blocks for Smart Grids</td>
                <td>Estimation of Most Probable Root cause using Digital tools for Inverter Dominated Power Grid</td>
                <td>Sarthak Dash</td>
                <td>GE Vernova</td>
            </tr>
            <tr>
                <td>19</td>
                <td>Foundational Blocks for Smart Grids</td>
                <td>Integrated Bespoke Outage Management System: Effective solution for Indian Power Utilities to address Customer Power Failure Grievance</td>
                <td>Birendra Choudhary</td>
                <td>Noida Power Company Limited</td>
            </tr>
            <tr>
                <td>20</td>
                <td>India@100 in 2047: Vision for the Indian Power System</td>
                <td>IEEE 2800 Complied Power Hardware- in-the-Loop (PHIL) Setup for Analyzing PV Plant's Behaviour in Power Systems</td>
                <td>Sarasij Das</td>
                <td>Indian Institute of Science, Bangalore</td>
            </tr>
            <tr>
                <td>21</td>
                <td>India@100 in 2047: Vision for the Indian Power System</td>
                <td>Generation Planning Analysis in India's Evolving Policy Landscape: A Case Study of Uttar Pradesh</td>
                <td>Sairam Thandra</td>
                <td>Centre for Study of Science, Technology and Policy (CSTEP)</td>
            </tr>
            <tr>
                <td>22</td>
                <td>Smart Grids for Smart Cities</td>
                <td>Integrated Modelling for Sustainable Energy Transition: Renewable Energy Planning, Resource Adequacy, and Green Hydrogen & Ammonia Supply in India</td>
                <td>Aditya Narang</td>
                <td>Energy Exemplar</td>
            </tr>
            <tr>
                <td>23</td>
                <td>Smart Grids for Smart Cities</td>
                <td>The Role of Decentralized Energy Communities in Supporting Telecom Infrastructure</td>
                <td>Jagruti Thakur</td>
                <td>KTH Royal Institute of Technology</td>
            </tr>
            <tr>
                <td>24</td>
                <td>New and Emerging Technologies and Trends</td>
                <td>Exploring Renewable Energy Dynamics in Power Grids Through Synchrophasor Technology</td>
                <td>Aman Gautam</td>
                <td>Grid India</td>
            </tr>
            
        </tbody>
    </table>
	<br/> -->
	<!-- <table>
        <thead>
			<tr>
			<th colspan="5" style="background: #EF7B00;text-align: center;">Top 44 - ISUW 2025 Technical Paper Selected for Publication</th>
			</tr>
			<tr>
				<th>S No.</th>
				<th>Theme</th>
				<th>Title of Technical Paper</th>
				<th>Technical Paper Author</th>
				<th>Organization</th>
			</tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Evolving Architecture of the 21st Century Grid with Two Way Power Flows</td>
            <td>Dual VRF Network Design for Grid IT Offices</td>
            <td>Swagat Naryan Mohanty</td>
            <td>TP Western Odisha Company Limited</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Evolving Architecture of the 21st Century Grid with Two Way Power Flows</td>
            <td>Implementing Resource Adequacy Framework using PLEXOS for DISCOMs in India</td>
            <td>Aumkar V Borgaonkar</td>
            <td>Energy Exemplar India Pvt Ltd</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Disruptive Innovations for Utilities</td>
            <td>Leveraging AI in Power Portfolio Optimization</td>
            <td>Trusha Biswas</td>
            <td>TATA Power Company Limited</td>
        </tr>
        <tr>
            <td>4</td>
            <td>New and Emerging Technology and Trends</td>
            <td>Real time monitoring of Distribution transformer (IoT & Smart meter Interface through cloud server)</td>
            <td>J. Durairaj</td>
            <td>TP Western Odisha Distribution limited</td>
        </tr>
        <tr>
            <td>5</td>
            <td>New and Emerging Technology and Trends</td>
            <td>Public Sentiment Analysis on Power Distribution: Leveraging Advanced Machine Learning</td>
            <td>Tajveer Tyagi</td>
            <td>Noida Power Company Ltd</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Smart Grids for Smart Cities</td>
            <td>Consumer to Prosumer to Flexumer: Shifting paradigm</td>
            <td>Prakhar Chaudhary</td>
            <td>Cognizant Technology Solutions Pvt. Ltd.</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Disruptive Innovations for Utilities</td>
            <td>Redundant Communication for Unmanned Grids</td>
            <td>Swagat Naryan Mohanty</td>
            <td>TP Western Odisha Company Limited</td>
        </tr>
        <tr>
            <td>8</td>
            <td>Regulations for the Evolving Smart Energy Systems</td>
            <td>Advancing Decarbonization in India's Power Sector through Green Electricity Markets</td>
            <td>Shivam Puri</td>
            <td>NTPC Vidyut Vyapar Nigam Ltd</td>
        </tr>
        <tr>
            <td>9</td>
            <td>Regulations for the Evolving Smart Energy Systems</td>
            <td>Tariff rationalization as a key electricity distribution reform</td>
            <td>Raman Garg</td>
            <td>REC Ltd</td>
        </tr>
        <tr>
            <td>10</td>
            <td>Foundational Blocks for Smart Grids</td>
            <td>Multi-directional Integration of EGIS with other IT/OT Systems</td>
            <td>Manish Kumar Sharma</td>
            <td>TP Western Odisha Distribution Ltd.</td>
        </tr>
        <tr>
            <td>11</td>
            <td>New and Emerging Technology and Trends</td>
            <td>Dynamic Islanding Readiness Scheme for Enhanced Power System Stability</td>
            <td>Anil Kr Vedula</td>
            <td>The Tata Power Company Limited</td>
        </tr>
        <tr>
            <td>12</td>
            <td>New and Emerging Technology and Trends</td>
            <td>Optimization of a Hybrid plant with Wind, Solar and Battery system for Round the Clock Power -- a Case Study</td>
            <td>Sunil Pritam</td>
            <td>GE VERNOVA (Consulting Services)</td>
        </tr>
        <tr>
            <td>13</td>
            <td>Disruptive Innovations for Utilities</td>
            <td>Flex-Xplore Solution: A Digital Solution</td>
            <td>Sagar Verma</td>
            <td>Cognizant Technology Solutions</td>
        </tr>
        <tr>
            <td>14</td>
            <td>Disruptive Innovations for Utilities</td>
            <td>AI ML Enabled Asset Digital Twin - Enhancing Asset Management Techniques</td>
            <td>Sayli Gaikwad/Aashutosh Soni</td>
            <td>Cognizant Technology Solutions</td>
        </tr>
        <tr>
            <td>15</td>
            <td>Smart Grids for Smart Cities</td>
            <td>Managing Utilities Smartly in a Smart Building</td>
            <td>Moreshwar Salpekar</td>
            <td>Sevya Multimedia Pvt. Ltd</td>
        </tr>
        <tr>
            <td>16</td>
            <td>Smart Grids for Smart Cities</td>
            <td>Combined Billing and Customer Care Systems for All Utilities in a Smart City</td>
            <td>Rohit Satghare</td>
            <td>Accenture</td>
        </tr>
        <tr>
            <td>17</td>
            <td>Foundational Blocks for Smart Grids</td>
            <td>Smart Metering Operations Center: Setting the Foundation of a Smart Grid</td>
            <td>Hem Thukral</td>
            <td>Abu Dhabi Distribution Company</td>
        </tr>
        <tr>
            <td>18</td>
            <td>Evolving Architecture of the 21st Century Grid with Two Way Power Flows</td>
            <td>Optimizing Distribution Networks: A software Based Approach for Network Modelling and Reactive Component Studies</td>
            <td>Swapnil Rao</td>
            <td>TATA Power Company Limited</td>
        </tr>
        <tr>
            <td>19</td>
            <td>New and Emerging Technology and Trends</td>
            <td>Reimagine the Utilities Customer Experience by harnessing the power of Generative AI</td>
            <td>Kumar Mayank</td>
            <td>Cognizant Technology Solutions</td>
        </tr>
        <tr>
            <td>20</td>
            <td>New and Emerging Technology and Trends</td>
            <td>Smart Cities for a Sustainable Future: Leveraging Grid-Interactive Buildings and Smart Street Lighting</td>
            <td>Manan Pathak</td>
            <td>Gujarat Energy Research and Management Institute (GERMI)</td>
        </tr>
        <tr>
            <td>21</td>
            <td>Foundational Blocks for Smart Grids</td>
            <td>Imperatives for transitioning from Advanced DMS to DERMS (Distributed Energy Resource Management Systems)</td>
            <td>Mohan Singh</td>
            <td>Noida Power Company Limited</td>
        </tr>
        <tr>
            <td>22</td>
            <td>Evolving Architecture of the 21st Century Grid with Two Way Power Flows</td>
            <td>Importance of Transmission Network Planning for Effective Renewable Energy Integration: A case Study of Rajasthan</td>
            <td>Harikrishhna KV</td>
            <td>Centre for Study of Science, Technology and Policy CSTEP</td>
        </tr>
        <tr>
            <td>23</td>
            <td>Disruptive Innovations for Utilities</td>
            <td>Smart Way of Consumer Indexing</td>
            <td>Ganesh Mane</td>
            <td>TP Western Odisha Company Limited</td>
        </tr>
        <tr>
            <td>24</td>
            <td>New and Emerging Technology and Trends</td>
            <td>Smart Energy Management - The Role of AIoT in Grid-Interactive Efficient Buildings</td>
            <td>Aashutosh Soni</td>
            <td>Cognizant</td>
        </tr>
        <tr>
            <td>25</td>
            <td>Disruptive Innovations for Utilities</td>
            <td>Enhancing Utility Customer Engagement through Digital Tools</td>
            <td>Gufran Basit</td>
            <td>Siemens Technology and Services</td>
        </tr>
        <tr>
            <td>26</td>
            <td>Disruptive Innovations for Utilities</td>
            <td>Voice of the Customer - What the Digital Customers Want?</td>
            <td>Aditya Dutt Mishra</td>
            <td>Accenture</td>
        </tr>
        <tr>
            <td>27</td>
            <td>Disruptive Innovations for Utilities</td>
            <td>Utilities Agent Assist</td>
            <td>Jessica Shah</td>
            <td>Accenture</td>
        </tr>
        <tr>
            <td>28</td>
            <td>Smart Grids for Smart Cities</td>
            <td>Leveraging GIS-Enabled Intelligent Energy Management Systems for Optimized Smart Grid</td>
            <td>Sion Dutta</td>
            <td>Cognizant Technology Solutions, Pune, India</td>
        </tr>
        <tr>
            <td>29</td>
            <td>New and Emerging Technology and Trends</td>
            <td>Advancing Carbon Capture, Utilization, and Storage (CCUS) in India: Insights from the USA and Path Forward</td>
            <td>Abhishek Kr Singh</td>
            <td>Accenture</td>
        </tr>
        <tr>
            <td>30</td>
            <td>New and Emerging Technology and Trends</td>
            <td>Assessing Feasibility of BESS as a Sustainable Replacement for Diesel Generators</td>
            <td>Aditya Dutt Mishra</td>
            <td>Accenture</td>
        </tr>
        <tr>
            <td>31</td>
            <td>New and Emerging Technology and Trends</td>
            <td>Criteria for a Typical Resource Adequacy & Generation Expansion Planning at Regional Level</td>
            <td>Suramya Dwivedi</td>
            <td>GE Vernova Consulting Services - GERETPL</td>
        </tr>
        <tr>
            <td>32</td>
            <td>Foundational Blocks for Smart Grids</td>
            <td>Smart Grid Evolution Covering Data Communication Need Related Studies And Smart Grid Applications For Transmission Utilities</td>
            <td>Amit R. Kulkarni</td>
            <td>MAHATRANSCO</td>
        </tr>
        <tr>
            <td>33</td>
            <td>Foundational Blocks for Smart Grids</td>
            <td>Energy Storage: Applications and Business Models</td>
            <td>Adesh Golash</td>
            <td>BSES Rajdhani Power Ltd</td>
        </tr>
        <tr>
            <td>34</td>
            <td>Smart Water</td>
            <td>Smart Solutions for Water Production, Transmission and Distribution</td>
            <td>Abhjit Panda</td>
            <td>Cognizant</td>
        </tr>
        <tr>
            <td>35</td>
            <td>Smart Water</td>
            <td>Using Smart Water Techniques to reuse water for cleaning and washing to alleviate water shortage problems in Urban and Communities</td>
            <td>Srinivasa Murthy Lolla</td>
            <td>Bio Electrical & Energy systems</td>
        </tr>
        <tr>
            <td>36</td>
            <td>New and Emerging Technology and Trends</td>
            <td>Generative AI for Smarter In-House Automation</td>
            <td>Yogender Kumar</td>
            <td>Noida Power Company Limited</td>
        </tr>
        <tr>
            <td>37</td>
            <td>Disruptive Innovations for Utilities</td>
            <td>Mitigating Default Risks in Utility Payments: A Predictive Analytics Framework with Machine learning</td>
            <td>Tajveer Tyagi</td>
            <td>Noida Power Company Limited</td>
        </tr>
        <tr>
            <td>38</td>
            <td>Disruptive Innovations for Utilities</td>
            <td>Assessment of Commercial Feasibility for New Electricity Connections: Leveraging AI -- Fuzzy Search, Phonetic Matching with SAP Integrations</td>
            <td>Vivek Kumar Choubey</td>
            <td>Noida Power Company Limited</td>
        </tr>
        <tr>
            <td>39</td>
            <td>Smart Water</td>
            <td>Smart Technologies to Address India's Urban Water Crisis</td>
            <td>Anisha Vyas</td>
            <td>Accenture</td>
        </tr>
        <tr>
            <td>40</td>
            <td>Cyber Security</td>
            <td>Enhancing Cybersecurity in Digitalized Grids through the Implementation of Secure R-GOOSE Protocols</td>
            <td>Supratik Pathak</td>
            <td>GE Vernova</td>
        </tr>
        <tr>
            <td>41</td>
            <td>Foundational Blocks for Smart Grids</td>
            <td>Smart Microgrids for Campuses etc.</td>
            <td>Surendra P Sharma</td>
            <td>NTPC Ltd.</td>
        </tr>
        <tr>
            <td>42</td>
            <td>Electric Mobility</td>
            <td>Predictive Modelling and Detection of Electric Vehicle (EV) charging infrastructure using household data and Grid Optimization</td>
            <td>Shishir Shekar</td>
            <td>Landis+Gyr</td>
        </tr>
        <tr>
            <td>43</td>
            <td>Foundational Blocks for Smart Grids</td>
            <td>Unified HES and MDMS for Multiple OEMs Smart Meters</td>
            <td>Anil Kumar Ojha</td>
            <td>TPWODL</td>
        </tr>
        <tr>
            <td>44</td>
            <td>Electric Mobility</td>
            <td>EVs as Virtual Power Plants (VPP)</td>
            <td>Somdeb Bhattacharya</td>
            <td>Accenture</td>
        </tr>
    </tbody>
    </table>

	<br/> -->




	
</div>
	  </div></div></div></div>
	  
	  <p align="center" style="line-height: 108%; margin-bottom: 0.11in"></p>
	  <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseD" aria-expanded="false" aria-controls="flush-collapseD">
       <H4 style="color: green;"><strong>View/Download Published Technical Papers</strong></style></H4>
      </button>
    </h2>
    <div id="flush-collapseD" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
	  <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=926
 style='width:694.35pt;border-collapse:collapse;border:none'>
 <tr style='height:33.0pt'>
  <td width=73 style='width:54.45pt;border:solid windowtext 1.0pt;background:
  #92D050;padding:0in 5.4pt 0in 5.4pt;height:33.0pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:-6.0pt;text-align:center;text-indent:7.1pt;
  line-height:normal'><b><span lang=EN-IN style='color:black'>Year</span></b></p>
  </td>
  <td width=201 style='width:150.85pt;border:solid windowtext 1.0pt;border-left:
  none;background:#92D050;padding:0in 5.4pt 0in 5.4pt;height:33.0pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:-6.0pt;text-align:center;text-indent:7.1pt;
  line-height:normal'><b><span lang=EN-IN style='color:black'>Title</span></b></p>
  </td>
  <td width=265 style='width:198.45pt;border:solid windowtext 1.0pt;border-left:
  none;background:#92D050;padding:0in 5.4pt 0in 5.4pt;height:33.0pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:-6.0pt;text-align:center;text-indent:7.1pt;
  line-height:normal'><b><span lang=EN-IN style='color:black'>Shortlisted Papers
for Presentation
and Publication</span></b></p>
  </td>
  <td width=180 style='width:134.65pt;border:solid windowtext 1.0pt;border-left:
  none;background:#92D050;padding:0in 5.4pt 0in 5.4pt;height:33.0pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:-6.0pt;text-align:center;text-indent:7.1pt;
  line-height:normal'><b><span lang=EN-IN style='color:black'>Published
Compendium</span></b></p>
  </td>
  <td width=208 style='width:155.95pt;border:solid windowtext 1.0pt;border-left:
  none;background:#92D050;padding:0in 5.4pt 0in 5.4pt;height:33.0pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:-6.0pt;text-align:center;text-indent:7.1pt;
  line-height:normal'><b><span lang=EN-IN style='color:black'>Published Technical
Papers</span></b></p>
  </td>
 </tr>

 <tr style='height:30.0pt'>
  <td width=73 style='width:54.45pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><span lang=EN-IN style='color:black'>2026</span></p>
  </td>
  <td width=201 style='width:150.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  lang=EN-IN style='color:black'>TECHNICAL PAPERS – ISUW 2026</span></p>
  </td>
  <td width=265 style='width:198.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  lang=EN-IN style='color:black'>To be uploaded</span></p>
  </td>
  <td width=180 style='width:134.65pt;border-top:none;border-left:none
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  lang=EN-IN style='color:black'>To be uploaded</span></p>
  </td>
  <td width=208 nowrap style='width:155.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><span lang=EN-IN style='color:black'>To be uploaded</span></p>
  </td>
 </tr>

 <tr style='height:30.0pt'>
  <td width=73 style='width:54.45pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><span lang=EN-IN style='color:black'>2025</span></p>
  </td>
  <td width=201 style='width:150.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  lang=EN-IN style='color:black'>TECHNICAL PAPERS – ISUW 2025</span></p>
  </td>
  <td width=265 style='width:198.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  lang=EN-IN style='color:black'>To be uploaded</span></p>
  </td>
  <td width=180 style='width:134.65pt;border-top:none;border-left:none
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  lang=EN-IN style='color:black'>To be uploaded</span></p>
  </td>
  <td width=208 nowrap style='width:155.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><span lang=EN-IN style='color:black'>To be uploaded</span></p>
  </td>
 </tr>

 <tr style='height:30.0pt'>
  <td width=73 style='width:54.45pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><span lang=EN-IN style='color:black'>2024</span></p>
  </td>
  <td width=201 style='width:150.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  lang=EN-IN style='color:black'>TECHNICAL PAPERS – ISUW 2024</span></p>
  </td>
  <td width=265 style='width:198.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  lang=EN-IN style='color:black'><a href="images/2026/ISUW2024TechnicalPaper.pdf" target="_blank">2024 Shortlisted Papers for Presentation and Publication</a></span></p>
  </td>
  <td width=180 style='width:134.65pt;border-top:none;border-left:none
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  lang=EN-IN style='color:black'><a href="https://indiasmartgrid.org/white-papers-technical-reports" target="_blank">Compendium of Technical Papers India Smart Utility Week 2024</a></span></p>
  </td>
  <td width=208 nowrap style='width:155.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <a href="https://indiasmartgrid.org/white-papers-technical-reports" target="_blank">2024 Published Technical Paper</a></span></p>
  </td>
 </tr>

 <tr style='height:30.0pt'>
  <td width=73 style='width:54.45pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><span lang=EN-IN style='color:black'>2023</span></p>
  </td>
  <td width=201 style='width:150.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  lang=EN-IN style='color:black'>TECHNICAL PAPERS – ISUW 2023</span></p>
  </td>
  <td width=265 style='width:198.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  lang=EN-IN style='color:black'><a href="https://isuw.in/public/uploads/images/ISUW 2023 Technical Paper List Results_FINAL.pdf" target="_blank">2023 Shortlisted Papers for Presentation and Publication </a></span></p>
  </td>
  <td width=180 style='width:134.65pt;border-top:none;border-left:none
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  lang=EN-IN style='color:black'><a href="https://www.indiasmartgrid.org/white-papers-technical-reports" target="_blank">Compendium of Technical Papers India Smart Utility Week 2023</a></span></p>
  </td>
  <td width=208 nowrap style='width:155.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><span lang=EN-IN style='color:black'><a href="https://isuw.in/public/uploads/images/ISUW 2023 Technical Paper List Results_FINAL.pdf" target="_blank">2023 Published Technical Paper</a></span></p>
  </td>
 </tr>
 <tr style='height:30.0pt'>
  <td width=73 style='width:54.45pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><span lang=EN-IN style='color:black'>2022</span></p>
  </td>
  <td width=201 style='width:150.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  lang=EN-IN style='color:black'>TECHNICAL PAPERS – ISUW 2022</span></p>
  </td>
  <td width=265 style='width:198.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  lang=EN-IN style='color:black'><a href="https://isuw.in/public/uploads/images/ISUW 2022 Shortlisted Papers for Presentation and Publication.pdf" target="_blank">2022 Shortlisted Papers for Presentation and Publication </a></span></p>
  </td>
  <td width=180 style='width:134.65pt;border-top:none;border-left:none
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  lang=EN-IN style='color:black'><a href="https://isuw.in/public/uploads/images/ISUW 2022 Technical Paper Compendium_Final (1).pdf" target="_blank">Compendium of Technical Papers India Smart Utility Week 2022</a></span></p>
  </td>
  <td width=208 nowrap style='width:155.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><span lang=EN-IN style='color:black'><a href="https://isuw.in/public/uploads/images/ISUW 2022 Shortlisted Papers for Presentation and Publication (1).pdf" target="_blank">2022 Published Technical Paper</a></span></p>
  </td>
 </tr>
 <tr style='height:30.0pt'>
  <td width=73 style='width:54.45pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><span lang=EN-IN style='color:black'>2021</span></p>
  </td>
  <td width=201 style='width:150.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  lang=EN-IN style='color:black'>TECHNICAL PAPERS – ISUW 2021</span></p>
  </td>
  <td width=265 style='width:198.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  lang=EN-IN style='color:black'><a href="https://isuw.in/public/uploads/images/2021 Shortlisted Papers for Presentation and Publication.pdf" target="_blank">2021 Shortlisted Papers for Presentation and Publication </a></span></p>
  </td>
  <td width=180 style='width:134.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  lang=EN-IN style='color:black'>ISUW 2021 Technical Papers Proceedings of the 7th International Conference and Exhibition on Smart Energy and Smart Mobility for Smart Cities - <a href="https://link.springer.com/book/10.1007/978-981-16-8727-3" target="_blank">https://link.springer.com/book/10.1007/978-981-16-8727-3</a></span></p>
  </td>
  <td width=208 nowrap style='width:155.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><span lang=EN-IN style='color:black'><a href="https://isuw.in/public/uploads/images/2021 Selected Technical Papers for Presentation and Springer Publication.pdf" target="_blank">2021 Published Technical Paper</a></span></p>
  </td>
 </tr>
 <tr style='height:30.0pt'>
  <td width=73 style='width:54.45pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><span lang=EN-IN style='color:black'>2020</span></p>
  </td>
  <td width=201 style='width:150.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  lang=EN-IN style='color:black'>TECHNICAL PAPERS – ISUW 2020</span></p>
  </td>
  <td width=265 style='width:198.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  lang=EN-IN style='color:black'><a href="https://isuw.in/public/uploads/images/2020 Shortlisted Papers for Presentation and Publication.pdf" target="_blank">2020 Shortlisted Papers for Presentation and Publication</a></span></p>
  </td>
  <td width=180 style='width:134.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  lang=EN-IN style='color:black'>ISUW 2020 Proceedings of the 6th International Conference and Exhibition on Smart Grids and Smart Cities -  <a href="https://link.springer.com/book/10.1007/978-981-16-9008-2" target="_blank">https://link.springer.com/book/10.1007/978-981-16-9008-2</a></span></p>
  </td>
  <td width=208 nowrap style='width:155.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><span lang=EN-IN style='color:black'><a href="https://isuw.in/public/uploads/images/2020 Selected Technical Papers for Presentation and Springer Publication.pdf" target="_blank">2020 Published Technical Paper</a></span></p>
  </td>
 </tr>
 <tr style='height:30.0pt'>
  <td width=73 style='width:54.45pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><span lang=EN-IN style='color:black'>2019</span></p>
  </td>
  <td width=201 style='width:150.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  lang=EN-IN style='color:black'>TECHNICAL PAPERS – ISUW 2019</span></p>
  </td>
  <td width=265 style='width:198.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  lang=EN-IN style='color:black'><a href="https://isuw.in/public/uploads/images/2019 Shortlisted Papers for Presentation and Publication.pdf" target="_blank">2019 Shortlisted Papers for Presentation and Publication</a></span></p>
  </td>
  <td width=180 style='width:134.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  lang=EN-IN style='color:black'>ISUW 2019
Proceedings of the
5th International
Conference and
Exhibition on Smart
Grids and Smart
Cities by Springer
Journal - <a href="https://link.springer.c
om/book/10.1007/97
8-981-16-1299-2" target="_blank">
https://link.springer.c
om/book/10.1007/97
8-981-16-1299-2</a></span></p>
  </td>
  <td width=208 nowrap style='width:155.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><span lang=EN-IN style='color:black'><a href="https://isuw.in/public/uploads/images/2019 Published Technical Paper.pdf" target="_blank">2019 Published
Technical Paper </a></span></p>
  </td>
 </tr>
 <tr style='height:30.0pt'>
  <td width=73 style='width:54.45pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><span lang=EN-IN style='color:black'>2018</span></p>
  </td>
  <td width=201 style='width:150.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  lang=EN-IN style='color:black'>TECHNICAL PAPERS – ISUW 2018</span></p>
  </td>
  <td width=265 style='width:198.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  lang=EN-IN style='color:black'><a href="https://isuw.in/public/uploads/images/2018 Shortlisted Papers for Presentation and Publication.pdf" target="_blank">2018 Shortlisted Papers for Presentation and Publication</a></span></p>
  </td>
  <td width=180 style='width:134.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  lang=EN-IN style='color:black'>isuw 2018
Compendium of
Technical Papers by
Springer Journal - <a href="https://link.springer.c
om/book/10.1007%2
F978-981-32-9119-5" target="_blank">
https://link.springer.c
om/book/10.1007%2
F978-981-32-9119-5</a></span></p>
  </td>
  <td width=208 nowrap style='width:155.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><span lang=EN-IN style='color:black'><a href="https://isuw.in/public/uploads/images/2018 Published Technical Paper.pdf" target="_blank">2018 Published
Technical Paper</a></span></p>
  </td>
 </tr>
 <tr style='height:30.0pt'>
  <td width=73 style='width:54.45pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><span lang=EN-IN style='color:black'>2017</span></p>
  </td>
  <td width=201 style='width:150.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  lang=EN-IN style='color:black'>TECHNICAL PAPERS – ISUW 2017</span></p>
  </td>
  <td width=265 style='width:198.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  lang=EN-IN style='color:black'><a href="https://isuw.in/public/uploads/images/2017 Shortlisted Papers for Presentation and Publication.pdf" target="_blank">2017 Shortlisted Papers for Presentation and Publication</a></span></p>
  </td>
  <td width=180 style='width:134.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  lang=EN-IN style='color:black'>isuw 2017:
Compendium of
Technical Papers BY
SPRINGER JOURNAL - <a href="https://link.springer.c
om/book/10.1007/97
8-981-10-8249-8" target="_blank">
https://link.springer.c
om/book/10.1007/97
8-981-10-8249-8</a></span></p>
  </td>
  <td width=208 nowrap style='width:155.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><span lang=EN-IN style='color:black'><a href="https://isuw.in/public/uploads/images/2017 Published Technical Paper.pdf" target="_blank">2017 Published
Technical Paper</a></span></p>
  </td>
 </tr>
  <tr style='height:30.0pt'>
  <td width=73 style='width:54.45pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><span lang=EN-IN style='color:black'>2016</span></p>
  </td>
  <td width=201 style='width:150.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  lang=EN-IN style='color:black'>TECHNICAL PAPERS – ISUW 2016</span></p>
  </td>
  <td width=265 style='width:198.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  lang=EN-IN style='color:black'><a href="https://isuw.in/public/uploads/images/2016 Shortlisted Papers for Presentation and Publication.pdf" target="_blank">2016 Shortlisted Papers for Presentation and Publication</a></span></p>
  </td>
  <td width=180 style='width:134.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span
  lang=EN-IN style='color:black'><a href="https://isuw.in/public/uploads/images/Compendium of Technical Papers of isuw 2016 (2).pdf" target="_blank">Compendium of
Technical Papers
India Smart Utility
Week 2016</a></span></p>
  </td>
  <td width=208 nowrap style='width:155.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><span lang=EN-IN style='color:black'><a href="https://isuw.in/public/uploads/images/2016 Published Technical Paper.pdf" target="_blank">2016 Published
Technical Paper</a></span></p>
  </td>
 </tr>
 </table>
	  </div></div></div></div>
	  
	  <p align="center" style="line-height: 108%; margin-bottom: 0.11in"></p>
	  <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseten" aria-expanded="false" aria-controls="flush-collapseten">
       <H4 style="color: green;"><strong>ISUW Technical Paper Secretariat </strong></style></H4>
      </button>
    </h2>
    <div id="flush-collapseten" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
	  <p>For queries, please write to us at <a href="mailto:tp@isuw.in">tp@isuw.in</a></p>
	  </div></div></div></div>
</div>
</div>

 


 
@endsection