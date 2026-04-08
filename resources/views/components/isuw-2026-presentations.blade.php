@extends('master')
@section('content')

<div class="container">
    <div class="justify-content-left ">
        <p></p>
        <div class="k_cheading">
            <h1>ISUW<span class="k_greencolor"> 2026 Presentations</span> </h1>
            <img src="/public/uploads/images/kborder_bottom.png" alt=""> 
        </div>
        <style type="text/css">
            table {
                width: 100%;
                border-collapse: collapse;
                table-layout: fixed;
            }
            th, td {
                border: 1px solid #000;
                padding: 8px;
                text-align: left;
                vertical-align: top;
                overflow-wrap: anywhere;
            }
            th:nth-child(1), td:nth-child(1) { width: 4%; text-align: center; }
            th:nth-child(2), td:nth-child(2) { width: 15%; }
            th:nth-child(3), td:nth-child(3) { width: 16%; }
            th:nth-child(4), td:nth-child(4) { width: 20%; }
            th:nth-child(5), td:nth-child(5) { width: 11%; }
            th:nth-child(6), td:nth-child(6) { width: 14%; }
            th:nth-child(7), td:nth-child(7) { width: 10%; }
            th:nth-child(8), td:nth-child(8) { width: 10%; }
            .session-header {
                background-color: #8cc63e;
                font-weight: bold;
                text-transform: uppercase;
            }
            .session-head {
                background-color: #8cc63e;
                text-transform: uppercase;
            }
            .session {
                background-color: #8cc63e;
                color: white;
                padding: 10px;
                margin: 10px 0;
                font-family: Arial, sans-serif;
                font-size: 16px;
                border-radius: 5px;
                text-transform: uppercase;
            }
            .sub-session {
                background-color: #FFD580;
                text-transform: uppercase;
            }
            .video-link, .photo-link {
                text-decoration: none;
                font-weight: 500;
                padding: 4px 8px;
                border-radius: 4px;
                display: inline-block;
            }
            .video-link {
                background-color: #4CAF50;
                color: white;
            }
            .photo-link {
                background-color: #ff9800;
                color: white;
            }
            .video-link:hover, .photo-link:hover {
                opacity: 0.8;
                text-decoration: none;
                color: white;
            }
        </style>

        <!-- DAY 1: 10 MARCH 2026 | TUESDAY | SPECIAL WORKSHOPS -->
        <div class="session">DAY 1: 10 MARCH 2026 | TUESDAY | SPECIAL WORKSHOPS</div>

        <!-- Agentic AI Workshop -->
        <div class="sub-session" style="background-color: #FFD580; padding: 8px; margin: 15px 0 10px 0; font-weight: bold;">
            Agentic AI – How to Build and Deploy AI Agents
        </div>
        <table>
            <thead>
                <tr class="session-header">
                    <th>S. No</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Organization</th>
                    <th>Category</th>
                    <th>Presentation/Speech</th>
                    <th>Video</th>
                    <th>Photos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Mukesh Kala</td>
                    <td>Hyper Automation Practice Head</td>
                    <td>Boundaryless Group</td>
                    <td>Tutor</td>
                    <td><a href="images/2027/presentations/1. Mukesh_Agentic AI.pdf" target="_blank" class="video-link">Presentation</a></td>
                    <td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNat9" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Shalabh Gupta</td>
                    <td>CEO & Co-founder</td>
                    <td>Sidhhanth</td>
                    <td>Tutor</td>
                    <td><a href="images/2027/presentations/2. Shalabh_Agentic AI.pdf" target="_blank" class="video-link">Presentation</a></td>
                    <td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNat9" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Manoj Batra</td>
                    <td>Vice President – RPA</td>
                    <td>NatWest Group</td>
                    <td>Tutor</td>
                    <td><a href="images/2027/presentations/3. Manoj Batra_Agentic AI.pdf" target="_blank" class="video-link">Presentation</a></td>
                    <td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNat9" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Arani Chaudhuri</td>
                    <td>Founder and CEO</td>
                    <td>AI Library</td>
                    <td>Tutor</td>
                    <td><a href="images/2027/presentations/4. Arani Chaudhuri_Agentic AI.pdf" target="_blank" class="video-link">Presentation</a></td>
                    <td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNat9" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Arani Chaudhuri</td>
                    <td>Founder and CEO</td>
                    <td>AI Library</td>
                    <td>Speech</td>
                    <td>Speech</td>
                    <td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNat9" target="_blank" class="photo-link">View</a></td>
                </tr>
            </tbody>
        </table>

        <!-- 10th IEC–IEEE-BIS Smart Energy Standardization Coordination Workshop -->
        <div class="sub-session" style="background-color: #FFD580; padding: 8px; margin: 15px 0 10px 0; font-weight: bold;">
            10th IEC–IEEE-BIS Smart Energy Standardization Coordination Workshop
        </div>
        
        <!-- Inaugural Session -->
        <div style="background-color: #FFA500; padding: 6px; margin: 10px 0; font-weight: bold;">Inaugural Session</div>
        <table>
            <thead>
                <tr class="session-header">
                    <th>S. No</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Organization</th>
                    <th>Category</th>
                    <th>Presentation/Speech</th>
                    <th>Video</th>
                    <th>Photos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>6</td>
                    <td>Reji Kumar Pillai</td>
                    <td>President, ISGF</td>
                    <td>Chairman, Global Smart Energy Federation</td>
                    <td>Welcome Address</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNfBT" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Vimal Mahendru</td>
                    <td>Vice President</td>
                    <td>International Electrotechnical Commission (IEC)</td>
                    <td>Special Address</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNfBT" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Richard Schomberg</td>
                    <td>Special Envoy on Smart Electrification</td>
                    <td>International Electrotechnical Commission (IEC)</td>
                    <td>Special Address</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNfBT" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Srikanth Chandrasekaran</td>
                    <td>Senior Director</td>
                    <td>Institute of Electrical and Electronics Engineers (IEEE)</td>
                    <td>Special Address</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNfBT" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Reena Garg</td>
                    <td>DDG-Standardization</td>
                    <td>Bureau of Indian Standards (BIS)</td>
                    <td>Special Address</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNfBT" target="_blank" class="photo-link">View</a></td>
                </tr>
            </tbody>
        </table>

        <!-- Session 1: Standards for Grid Integration of DER and EVs -->
        <div style="background-color: #FFA500; padding: 6px; margin: 10px 0; font-weight: bold;">Session 1: Standards for Grid Integration of DER and EVs</div>
        <table>
            <thead>
                <tr class="session-header">
                    <th>S. No</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Organization</th>
                    <th>Category</th>
                    <th>Presentation/Speech</th>
                    <th>Video</th>
                    <th>Photos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>11</td>
                    <td>K Balaraman</td>
                    <td>Chair - ETD 46</td>
                    <td>Bureau of Indian Standards (BIS)</td>
                    <td>Chair</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNfBT" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Sriparn Sourabh</td>
                    <td>Engineering Manager</td>
                    <td>UL Standards & Engagement (ULSE)</td>
                    <td>Moderator</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNfBT" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Richard Schomberg</td>
                    <td>Special Envoy on Smart Electrification</td>
                    <td>International Electrotechnical Commission (IEC)</td>
                    <td>Speaker</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNfBT" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>AK Rajput</td>
                    <td>Former Member – Power Systems</td>
                    <td>Central Electricity Authority (CEA)</td>
                    <td>Speaker</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNfBT" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Asit Kumar Maharana</td>
                    <td>Head - ETD</td>
                    <td>Bureau of Indian Standards (BIS)</td>
                    <td>Speaker</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNfBT" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>Kotthapally Satishkumar</td>
                    <td>Deputy Director</td>
                    <td>Central Electricity Authority (CEA)</td>
                    <td>Speaker</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNfBT" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Ravindra Desai</td>
                    <td>Program Manager</td>
                    <td>Institute of Electrical and Electronics Engineers (IEEE)</td>
                    <td>Speaker</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNfBT" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>Dinesh Sharma</td>
                    <td>Director – Standards & Public Policy</td>
                    <td>SESEI</td>
                    <td>Speaker</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNfBT" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>Kishor Narang</td>
                    <td>Founder</td>
                    <td>Narnix Technologies</td>
                    <td>Speaker</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNfBT" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>Navin Maurya</td>
                    <td>AGM-Quality</td>
                    <td>Luminous Powertech</td>
                    <td>Speaker</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNfBT" target="_blank" class="photo-link">View</a></td>
                </tr>
            </tbody>
        </table>

        <!-- Session 2: Standards for Artificial Intelligence and Cybersecurity -->
        <div style="background-color: #FFA500; padding: 6px; margin: 10px 0; font-weight: bold;">Session 2: Standards for Artificial Intelligence and Cybersecurity for Smart Energy Systems</div>
        <table>
            <thead>
                <tr class="session-header">
                    <th>S. No</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Organization</th>
                    <th>Category</th>
                    <th>Presentation/Speech</th>
                    <th>Video</th>
                    <th>Photos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>21</td>
                    <td>Richard Schomberg</td>
                    <td>Special Envoy on Smart Electrification</td>
                    <td>International Electrotechnical Commission (IEC)</td>
                    <td>Chair</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNfBT" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>Arun Kumar Mishra</td>
                    <td>Ex- ED</td>
                    <td>Power Grid Corporation of India (PGCIL)</td>
                    <td>Moderator</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNfBT" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>PK Agarwal</td>
                    <td>Former Director</td>
                    <td>Grid-India</td>
                    <td>Speaker</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNfBT" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>24</td>
                    <td>V. Shivakumar</td>
                    <td>Joint Director</td>
                    <td>Central Power Research Institute (CPRI)</td>
                    <td>Speaker</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNfBT" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>25</td>
                    <td>Alismita Khag</td>
                    <td>Scientist-D/Joint Director</td>
                    <td>Bureau of Indian Standards (BIS)</td>
                    <td>Speaker</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNfBT" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>26</td>
                    <td>Kishor Narang</td>
                    <td>Founder</td>
                    <td>Narnix Technologies</td>
                    <td>Speaker</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNfBT" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>27</td>
                    <td>Sriparn Sourabh</td>
                    <td>Engineering Manager</td>
                    <td>UL Standards & Engagement (ULSE)</td>
                    <td>Speaker</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNfBT" target="_blank" class="photo-link">View</a></td>
                </tr>
            </tbody>
        </table>

        <!-- WE3 ASIA SUMMIT -->
        <div class="sub-session" style="background-color: #FFD580; padding: 8px; margin: 15px 0 10px 0; font-weight: bold;">
            WE3 ASIA SUMMIT (Co-hosted Event by Smart Energy Water SEW and ISGF)
        </div>
        
        <!-- WE3 Asia Summit Opening -->
        <div style="background-color: #FFA500; padding: 6px; margin: 10px 0; font-weight: bold;">WE3 Asia Summit Opening</div>
        <table>
            <thead>
                <tr class="session-header">
                    <th>S. No</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Organization</th>
                    <th>Category</th>
                    <th>Presentation/Speech</th>
                    <th>Video</th>
                    <th>Photos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>28</td>
                    <td>Mashal Dhawan</td>
                    <td>CEO – Asia</td>
                    <td>SEW.AI</td>
                    <td>Welcome Remark</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>29</td>
                    <td>Amitabh Prasad</td>
                    <td>President – Asia</td>
                    <td>SEW.AI</td>
                    <td>Welcome Remark</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>30</td>
                    <td>Reji Kumar Pillai</td>
                    <td>President</td>
                    <td>India Smart Grid Forum</td>
                    <td>Welcome Remark</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>31</td>
                    <td>Deepak Garg</td>
                    <td>Chairman & CEO</td>
                    <td>SEW.AI</td>
                    <td>Opening Keynote</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>32</td>
                    <td>Atul Bali</td>
                    <td>Director</td>
                    <td>National Smart Grid Mission</td>
                    <td>Powering Ujjwal Bharat</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>33</td>
                    <td>Manoj Kohli</td>
                    <td>Former Country Head, Softbank</td>
                    <td>Former CEO and MD, Bharti Airtel</td>
                    <td>Theme Presentation</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>34</td>
                    <td>Anil Rawal</td>
                    <td>MD & CEO</td>
                    <td>IntelliSmart Infrastructure</td>
                    <td>Theme Presentation</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                </tr>
            </tbody>
        </table>

        <!-- Global CXO Forum -->
        <div style="background-color: #FFA500; padding: 6px; margin: 10px 0; font-weight: bold;">Global CXO Forum: Vertical AI for Energy and Utilities – From Global Transformation to Asia's Leap</div>
        <table>
            <thead>
                <tr class="session-header">
                    <th>S. No</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Organization</th>
                    <th>Category</th>
                    <th>Presentation/Speech</th>
                    <th>Video</th>
                    <th>Photos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>35</td>
                    <td>Suresh Kotha</td>
                    <td>CIO</td>
                    <td>Sacramento Municipal Utility District</td>
                    <td>Speaker</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>36</td>
                    <td>Manoj Kohli</td>
                    <td>Former Country Head, Softbank</td>
                    <td>Former CEO and MD, Bharti Airtel</td>
                    <td>Speaker</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>37</td>
                    <td>Amal Sinha</td>
                    <td>Director & Group CEO</td>
                    <td>BSES</td>
                    <td>Speaker</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>38</td>
                    <td>Eric Lehouelleur</td>
                    <td>Director Project India</td>
                    <td>EDF International Networks</td>
                    <td>Speaker</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>39</td>
                    <td>Reji Kumar Pillai</td>
                    <td>President</td>
                    <td>India Smart Grid Forum</td>
                    <td>Speaker</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                </tr>
                <tr>
                    <td>40</td>
                    <td>Jayant Kumar</td>
                    <td>CEO</td>
                    <td>L&T Digital</td>
                    <td>Speaker</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                </tr>
            </tbody>
        </table>

        <!-- Panel Session: Building Connected Future -->
        <div style="background-color: #FFA500; padding: 6px; margin: 10px 0; font-weight: bold;">Panel Session: Building Connected Future – Customers, Workforce, Grid for Utilities</div>
         <table>
            <thead>
                <tr class="session-header">
                    <th>S. No</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Organization</th>
                    <th>Category</th>
                    <th>Presentation/Speech</th>
                    <th>Video</th>
                    <th>Photos</th>
                 </tr>
            </thead>
            <tbody>
                 <tr>
                     <td>41</td>
                     <td>Abhishek Ranjan</td>
                     <td>CEO</td>
                     <td>BSES Rajdhani Power Limited (BRPL)</td>
                     <td>Speaker</td>
                     <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                     <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                 </tr>
                 <tr>
                     <td>42</td>
                     <td>Amitabh Prasad</td>
                     <td>President – Asia</td>
                     <td>SEW.AI</td>
                     <td>Speaker</td>
                     <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                     <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                 </tr>
                 <tr>
                     <td>43</td>
                     <td>Debasish Bera</td>
                     <td>MD (Partner)</td>
                     <td>Accenture</td>
                     <td>Speaker</td>
                     <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                     <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                 </tr>
                 <tr>
                     <td>44</td>
                     <td>Reena Suri</td>
                     <td>ED</td>
                     <td>India Smart Grid Forum</td>
                     <td>Speaker</td>
                     <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                     <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                 </tr>
                 <tr>
                     <td>45</td>
                     <td>Yashvardhan Poddar</td>
                     <td>Managing Director</td>
                     <td>Subhasree Projects</td>
                     <td>Speaker</td>
                     <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                     <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                 </tr>
            </tbody>
         </table>

        <!-- Inspiration Beyond Energy -->
        <div style="background-color: #FFA500; padding: 6px; margin: 10px 0; font-weight: bold;">Inspiration Beyond Energy: Lessons in Leadership & Resilience</div>
         <table>
            <thead>
                <tr class="session-header">
                    <th>S. No</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Organization</th>
                    <th>Category</th>
                    <th>Presentation/Speech</th>
                    <th>Video</th>
                    <th>Photos</th>
                 </tr>
            </thead>
            <tbody>
                 <tr>
                     <td>46</td>
                     <td>Kapil Dev</td>
                     <td>Legendary Cricketer, Former Captain</td>
                     <td>Indian National Cricket Team</td>
                     <td>Speaker</td>
                     <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                     <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                 </tr>
                 <tr>
                     <td>47</td>
                     <td>Deepak Garg</td>
                     <td>Chairman and Co-CEO</td>
                     <td>SEW.AI</td>
                     <td>Speaker</td>
                     <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                     <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                 </tr>
            </tbody>
         </table>

        <!-- People + AI -->
        <div style="background-color: #FFA500; padding: 6px; margin: 10px 0; font-weight: bold;">People + AI: How SEW.AI COSMOS Redefines the Energy and Utility Experience</div>
         <table>
            <thead>
                <tr class="session-header">
                    <th>S. No</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Organization</th>
                    <th>Category</th>
                    <th>Presentation/Speech</th>
                    <th>Video</th>
                    <th>Photos</th>
                 </tr>
            </thead>
            <tbody>
                 <tr>
                     <td>48</td>
                     <td>Deepak Garg</td>
                     <td>Chairman and Co-CEO</td>
                     <td>SEW.AI</td>
                     <td>Speaker</td>
                     <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                     <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                 </tr>
                 <tr>
                     <td>49</td>
                     <td>Mashal Dhawan</td>
                     <td>CEO – Asia</td>
                     <td>SEW.AI</td>
                     <td>Speaker</td>
                     <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                     <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                 </tr>
            </tbody>
         </table>

        <!-- Panel Session: From Chaos to Order -->
        <div style="background-color: #FFA500; padding: 6px; margin: 10px 0; font-weight: bold;">Panel Session: From Chaos to Order – Making Connected Utilities Real</div>
         <table>
            <thead>
                <tr class="session-header">
                    <th>S. No</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Organization</th>
                    <th>Category</th>
                    <th>Presentation/Speech</th>
                    <th>Video</th>
                    <th>Photos</th>
                 </tr>
            </thead>
            <tbody>
                 <tr>
                     <td>50</td>
                     <td>Raj Kumar Rastogi</td>
                     <td>Chief (Ops & Safety)</td>
                     <td>Tata Power Delhi Distribution Limited</td>
                     <td>Speaker</td>
                     <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                     <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                 </tr>
                 <tr>
                     <td>51</td>
                     <td>Anish Kalucha</td>
                     <td>CIO</td>
                     <td>Noida Power Company Limited</td>
                     <td>Speaker</td>
                     <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                     <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                 </tr>
                 <tr>
                     <td>52</td>
                     <td>Vijay Panpalia</td>
                     <td>VP – Product Engineering</td>
                     <td>SEW.AI</td>
                     <td>Speaker</td>
                     <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                     <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                 </tr>
                 <tr>
                     <td>53</td>
                     <td>Brajesh Kumar</td>
                     <td>COO</td>
                     <td>BSES Yamuna Power Limited (BYPL)</td>
                     <td>Speaker</td>
                     <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                     <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                 </tr>
                 <tr>
                     <td>54</td>
                     <td>Rajesh Sivaprakasam</td>
                     <td>DGM, SAP & IT</td>
                     <td>Sabarmati Gas</td>
                     <td>Speaker</td>
                     <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                     <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                 </tr>
                 <tr>
                     <td>55</td>
                     <td>Suresh Kotha</td>
                     <td>Chief Information Officer</td>
                     <td>Sacramento Municipal Utility District</td>
                     <td>Speaker</td>
                     <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                     <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                 </tr>
            </tbody>
         </table>

        <!-- Vertical AI in High-Stakes Industries -->
        <div style="background-color: #FFA500; padding: 6px; margin: 10px 0; font-weight: bold;">Vertical AI in High-Stakes Industries: Building Intelligence Where Failure Is Not an Option</div>
         <table>
            <thead>
                <tr class="session-header">
                    <th>S. No</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Organization</th>
                    <th>Category</th>
                    <th>Presentation/Speech</th>
                    <th>Video</th>
                    <th>Photos</th>
                 </tr>
            </thead>
            <tbody>
                 <tr>
                     <td>56</td>
                     <td>Ravinder Sajwan</td>
                     <td>CEO</td>
                     <td>UltraGreen.AI</td>
                     <td>Speaker</td>
                     <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                     <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                 </tr>
            </tbody>
         </table>

        <!-- The New Energy Playbook -->
        <div style="background-color: #FFA500; padding: 6px; margin: 10px 0; font-weight: bold;">The New Energy Playbook: Where Innovation Is Happening Across Grid, Customer & Infrastructure</div>
         <table>
            <thead>
                <tr class="session-header">
                    <th>S. No</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Organization</th>
                    <th>Category</th>
                    <th>Presentation/Speech</th>
                    <th>Video</th>
                    <th>Photos</th>
                 </tr>
            </thead>
            <tbody>
                 <tr>
                     <td>57</td>
                     <td>Rajesh Bansal</td>
                     <td>Former CEO</td>
                     <td>BSES Rajdhani Power Limited (BRPL)</td>
                     <td>Speaker</td>
                     <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                     <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                 </tr>
                 <tr>
                     <td>58</td>
                     <td>Piyush Awadhesh</td>
                     <td>Chief Product Officer, eMobility</td>
                     <td>SEW.AI</td>
                     <td>Speaker</td>
                     <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                     <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                 </tr>
                 <tr>
                     <td>59</td>
                     <td>Yves Fouquet</td>
                     <td>CIO</td>
                     <td>EDF-International Networks</td>
                     <td>Speaker</td>
                     <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                     <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                 </tr>
                 <tr>
                     <td>60</td>
                     <td>Saurav Adhikari</td>
                     <td>Founder & Senior Partner</td>
                     <td>Indus TLG Managers LLP</td>
                     <td>Speaker</td>
                     <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                     <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                 </tr>
                 <tr>
                     <td>61</td>
                     <td>Prateek Chandra</td>
                     <td>Product Owner</td>
                     <td>Dominion Energy</td>
                     <td>Speaker</td>
                     <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                     <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                 </tr>
                 <tr>
                     <td>62</td>
                     <td>Suhail Zaidi</td>
                     <td>DG</td>
                     <td>MAIT</td>
                     <td>Speaker</td>
                     <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                     <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                 </tr>
            </tbody>
         </table>

        <!-- From Outreach to Outcomes -->
        <div style="background-color: #FFA500; padding: 6px; margin: 10px 0; font-weight: bold;">From Outreach to Outcomes: Driving Digital Engagement Through People + Vertical AI Powered by SEW Amplify</div>
         <table>
            <thead>
                <tr class="session-header">
                    <th>S. No</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Organization</th>
                    <th>Category</th>
                    <th>Presentation/Speech</th>
                    <th>Video</th>
                    <th>Photos</th>
                 </tr>
            </thead>
            <tbody>
                 <tr>
                     <td>63</td>
                     <td>Chetan Asher</td>
                     <td>Founder & CEO</td>
                     <td>Tonic Worldwide</td>
                     <td>Speaker</td>
                     <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                     <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                 </tr>
                 <tr>
                     <td>64</td>
                     <td>Unmisha Bhatt</td>
                     <td>Co-Founder and Chief Strategy Officer</td>
                     <td>Tonic Worldwide</td>
                     <td>Speaker</td>
                     <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                     <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                 </tr>
            </tbody>
         </table>

        <!-- WE3 Awards & Recognition -->
        <div style="background-color: #FFA500; padding: 6px; margin: 10px 0; font-weight: bold;">WE3 Awards & Recognition</div>
         <table>
            <thead>
                <tr class="session-header">
                    <th>S. No</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Organization</th>
                    <th>Category</th>
                    <th>Presentation/Speech</th>
                    <th>Video</th>
                    <th>Photos</th>
                 </tr>
            </thead>
            <tbody>
                 <tr>
                     <td>65</td>
                     <td>Deepak Garg</td>
                     <td>Chairman and Co-CEO</td>
                     <td>SEW.AI</td>
                     <td>Speaker</td>
                     <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                     <td><a href="https://flic.kr/s/aHBqjCNZ99" target="_blank" class="photo-link">View</a></td>
                 </tr>
            </tbody>
         </table>

    	</div>

		    <!-- DAY 2: 11 MARCH 2026 | WEDNESDAY -->
    <div class="session" style="margin-top: 30px;">DAY 2: 11 MARCH 2026 | WEDNESDAY</div>

    <!-- INAUGURATION OF ISUW 2026 CONFERENCE AND EXHIBITION -->
    <div class="sub-session" style="background-color: #FFD580; padding: 8px; margin: 15px 0 10px 0; font-weight: bold;">
        INAUGURATION OF ISUW 2026 CONFERENCE AND EXHIBITION
    </div>
    <table>
        <thead>
            <tr class="session-header">
                <th>S. No</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Organization</th>
                <th>Category</th>
                <th>Presentation/Speech</th>
                    <th>Video</th>
                <th>Photos</th>
            </tr>
        </thead>
        <tbody>
            <tr><td>66</td><td>Reji Kumar Pillai</td><td>President</td><td>India Smart Grid Forum</td><td>Welcome Address</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNaZf" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>67</td><td>Mashal Dhawan</td><td>CEO – Asia and General Secretary</td><td>SEW.AI and ISGF</td><td>Special Address</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNaZf" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>68</td><td>Brian Motherway</td><td>Head-Energy Efficiency Division</td><td>International Energy Agency (IEA)</td><td>Special Address</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNaZf" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>69</td><td>Amal Sinha</td><td>Director and Group CEO</td><td>BSES Rajdhani Power Limited (BRPL)</td><td>Special Address</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNaZf" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>70</td><td>Ashish Khanna</td><td>DG</td><td>International Solar Alliance (ISA)</td><td>Special Address</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNaZf" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>71</td><td>Piyush Singh</td><td>DG, Power Foundation of India (PFI)</td><td>Add Secretary, Ministry of Power</td><td>Special Address</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNaZf" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>72</td><td>Shivkumar Kalyanaraman</td><td>CEO</td><td>Anusandhan National Research Foundation (ANRF)</td><td>Special Address</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNaZf" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>73</td><td>Richard Schomberg</td><td>Special Envoy on Smart Electrification</td><td>International Electrotechnical Commission (IEC)</td><td>Special Address</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNaZf" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>74</td><td>Ashish Goel</td><td>Chairman</td><td>UP Power Corporation Limited</td><td>Special Address</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNaZf" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>75</td><td>Alok Kumar</td><td>DG</td><td>All India Discoms Association (AIDA)</td><td>Special Address</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNaZf" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>76</td><td>Ghanshyam Prasad</td><td>Chairperson</td><td>Central Electricity Authority (CEA)</td><td>Special Address</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNaZf" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>77</td><td>Reena Suri</td><td>Executive Director</td><td>India Smart Grid Forum</td><td>Vote of Thanks</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNaZf" target="_blank" class="photo-link">View</a></td></tr>
        </tbody>
    </table>

    <!-- 10 MILLION SOLAR ROOFTOP SYSTEMS -->
    <div class="sub-session" style="background-color: #FFD580; padding: 8px; margin: 15px 0 10px 0; font-weight: bold;">
        10 Million Solar Rooftop Systems and Management of Reverse Power Flows on Distribution Feeders (In Partnership with AIDA and NISE)
    </div>
    <table>
        <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
        <tbody>
            <tr><td>78</td><td>Richard Schomberg</td><td>Special Envoy on Smart Electrification</td><td>IEC</td><td>Chair</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNaWD" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>79</td><td>Adarsh Nagarajan</td><td>Strategic Initiatives Advisor</td><td>BSES Rajdhani Power Limited (BRPL)</td><td>Moderator</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNaWD" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>80</td><td>RJ Vala</td><td>CE (Tech)</td><td>Gujarat Urja Vikas Nigam Ltd (GUVNL)</td><td>Theme Presentation</td><td><a href="images/2027/presentations/80. R J Vala_Session - 10 Million.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNaWD" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>81</td><td>Alok Kumar</td><td>DG</td><td>All India Discoms Association (AIDA)</td><td>Special Address</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNaWD" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>82</td><td>KVS Baba</td><td>Former CMD</td><td>GRID-INDIA</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNaWD" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>83</td><td>Mohammad Rihan</td><td>DG</td><td>National Institute of Solar Energy (NISE)</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNaWD" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>84</td><td>Jayant Kumar</td><td>CEO – Power Transmission and Distribution</td><td>Larsen & Toubro Limited (L&T)</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNaWD" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>85</td><td>Brajesh Kumar</td><td>COO</td><td>BSES Yamuna Power Limited (BYPL)</td><td>Speaker</td><td><a href="images/2027/presentations/85. Brajesh Kumar_Session - 10 Million Rooftop Solar.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNaWD" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>86</td><td>Mohan Singh</td><td>DGM - Automation</td><td>Noida Power Company Limited</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNaWD" target="_blank" class="photo-link">View</a></td></tr>
        </tbody>
    </table>

    <!-- Regulations for Digital Grids -->
    <div class="sub-session" style="background-color: #FFD580; padding: 8px; margin: 15px 0 10px 0; font-weight: bold;">
        Regulations for Digital Grids (In Partnership with Power Foundation of India (PFI))
    </div>
    <table>
        <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
        <tbody>
            <tr><td>87</td><td>P Ravi Kumar</td><td>Chairperson</td><td>Karnataka Electricity Regulatory Commission</td><td>Chair</td><td>Speech</td><td><a href="https://youtu.be/or20dWxj_a8?si=ZVMgCr7mWWwcEpcx" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNaXk" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>88</td><td>Himanshu Chawla</td><td>Head Regulatory & Research</td><td>Power Foundation of India</td><td>Moderator and Theme Presenter</td><td><a href="images/2027/presentations/88. Himanshu Chawla_PFI_Regulation for Digital Grid.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtu.be/or20dWxj_a8?si=ZVMgCr7mWWwcEpcx" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNaXk" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>89</td><td>Anand Singh</td><td>GM</td><td>ISGF</td><td>Theme Presentation</td><td><a href="images/2027/presentations/89. Anand Singh_Session - Regulation for Digital Grid.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtu.be/or20dWxj_a8?si=ZVMgCr7mWWwcEpcx" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNaXk" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>90</td><td>Arun Goyal</td><td>Former Member</td><td>Central Electricity Regulatory Commission (CERC)</td><td>Speaker</td><td>Speech</td><td><a href="https://youtu.be/or20dWxj_a8?si=ZVMgCr7mWWwcEpcx" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNaXk" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>91</td><td>Amal Sinha</td><td>Group CEO</td><td>BSES</td><td>Speaker</td><td>Speech</td><td><a href="https://youtu.be/or20dWxj_a8?si=ZVMgCr7mWWwcEpcx" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNaXk" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>92</td><td>Dwijadas Basak</td><td>CEO</td><td>Tata Power Delhi Distribution Limited</td><td>Speaker</td><td>Speech</td><td><a href="https://youtu.be/or20dWxj_a8?si=ZVMgCr7mWWwcEpcx" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNaXk" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>93</td><td>Himanshu Khurana</td><td>Secretary</td><td>Rajasthan Electricity Regulatory Commission</td><td>Speaker</td><td>Speech</td><td><a href="https://youtu.be/or20dWxj_a8?si=ZVMgCr7mWWwcEpcx" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNaXk" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>94</td><td>Anujesh Dwivedi</td><td>Partner</td><td>Deloitte</td><td>Speaker</td><td>Speech</td><td><a href="https://youtu.be/or20dWxj_a8?si=ZVMgCr7mWWwcEpcx" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNaXk" target="_blank" class="photo-link">View</a></td></tr>
        </tbody>
    </table>

    <!-- Square-Mile-Size AI Data Centres -->
    <div class="sub-session" style="background-color: #FFD580; padding: 8px; margin: 15px 0 10px 0; font-weight: bold;">
        Square-Mile-Size AI Data Centres Requiring GW-scale Power Connections
    </div>
    <table>
        <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
        <tbody>
            <tr><td>95</td><td>Rajnath Ram</td><td>Advisor – Energy</td><td>NITI Aayog</td><td>Chair</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNb3G" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>96</td><td>Anant Venkateswaran</td><td>Advisor</td><td>ISGF</td><td>Moderator</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNb3G" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>97</td><td>Shawn DeAngelo</td><td>Former Head of Data Center</td><td>META</td><td>Theme Presentation</td><td><a href="images/2027/presentations/97. Shawn_Session - Square Mile Size.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNb3G" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>98</td><td>Manish Mohanpurkar</td><td>Principal - R&D Delivery</td><td>Fortescue</td><td>Theme Presentation</td><td><a href="images/2027/presentations/98. Manish_Session - Square Mile Size.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNb3G" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>99</td><td>Arvind Jadhav</td><td>Former Chief Secretary</td><td>Govt of Karnataka</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNb3G" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>100</td><td>Tripta Thakur</td><td>Vice Chancellor</td><td>Veer Madho Singh Bhandari Uttarakhand Technical University</td><td>Speaker</td><td><a href="images/2027/presentations/100. Trpta Thakur_Session - Square Mile Size.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNb3G" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>101</td><td>Matt Gleeson</td><td>Vice President - Energy Transition and Water Conservation</td><td>Oracle Utilities</td><td>Speaker</td><td><a href="images/2027/presentations/101. Matt Gleson_Session - Square Mile Size.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNb3G" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>102</td><td>Gaurav A Sharma</td><td>GM</td><td>Noida Power Company Limited</td><td>Speaker</td><td><a href="images/2027/presentations/102. Gaurav A Sharma_Session - Square Mize Size.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNb3G" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>103</td><td>Sourajit Ghosh</td><td>Director – IT</td><td>UP Power Corporation Limited</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNb3G" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>104</td><td>Anwaya Bilas Sengupta</td><td>Alternate CISO</td><td>GRID-INDIA</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNb3G" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>105</td><td>Amit Agrawal</td><td>President</td><td>Techno Digital</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNb3G" target="_blank" class="photo-link">View</a></td></tr>
        </tbody>
    </table>

    <!-- Digital Energy Grids on UEI Architecture -->
    <div class="sub-session" style="background-color: #FFD580; padding: 8px; margin: 15px 0 10px 0; font-weight: bold;">
        Digital Energy Grids on Unified Energy Interface (UEI) Architecture
    </div>
    <table>
        <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
        <tbody>
            <tr><td>106</td><td>Reji Kumar Pillai</td><td>President</td><td>ISGF</td><td>Chair and Moderator</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9fB" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>107</td><td>Swetha Ravi Kumar</td><td>ED and IES Secretariat</td><td>FSR Global</td><td>Theme Presentation</td><td><a href="images/2027/presentations/107. Swetha Ravi Kumar_FSR_UEI.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9fB" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>108</td><td>Abhishek Ranjan</td><td>CEO</td><td>BSES Rajdhani Power Limited (BRPL)</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9fB" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>109</td><td>Tarun Batra</td><td>Head – D & IT</td><td>Tata Power Delhi Distribution Limited</td><td>Speaker</td><td><a href="images/2027/presentations/109. Tarun Batra_TPDDL_UEI.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9fB" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>110</td><td>Nick Singh</td><td>Smart Grid CoE Manager</td><td>Eskom Research Testing & Development</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9fB" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>111</td><td>N.A Khan</td><td>CTO</td><td>Eppeltone Engineers</td><td>Speaker</td><td><a href="images/2027/presentations/111. NA Khan_Eppeltone_UEI.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9fB" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>112</td><td>Dharmveer Singh</td><td>Founder and CEO</td><td>PowerXchange</td><td>Speaker</td><td><a href="images/2027/presentations/112. Dharm_PowerXchange_UEI.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9fB" target="_blank" class="photo-link">View</a></td></tr>
            <tr><td>113</td><td>Arshi Chadha</td><td>Co-founder</td><td>Trillectric</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9fB" target="_blank" class="photo-link">View</a></td></tr>
        </tbody>
    </table>

        <!-- Session 1: Digital Transformation of Utilities and Grid Operations -->
    <div style="background-color: #FFA500; padding: 6px; margin: 10px 0; font-weight: bold;">Session 1: Digital Transformation of Utilities and Grid Operations</div>
    <table>
        <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
        <tbody>
             <tr><td>118</td><td>Ashish Goel</td><td>Chairman</td><td>UP Power Corporation Limited</td><td>Chair</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9go" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>119</td><td>Vikas Gaba</td><td>Partner</td><td>KPMG</td><td>Moderator</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9go" target="_blank" class="photo-link">View</a></td></tr>
        </tbody>
    </table>

    <!-- Session 2: Trusted Digital Energy Infrastructure -->
    <div style="background-color: #FFA500; padding: 6px; margin: 10px 0; font-weight: bold;">Session 2: Trusted Digital Energy Infrastructure: Cybersecurity, Carbon Integrity and Scaling Digital Confidence</div>
     <table>
        <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
        <tbody>
             <tr><td>120</td><td>MAKP Singh</td><td>Former Member</td><td>Central Electricity Authority of India (CEA)</td><td>Chair</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9go" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>121</td><td>Abhishek Ranjan</td><td>CEO</td><td>BSES Rajdhani Power Limited (BRPL)</td><td>Moderator</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9go" target="_blank" class="photo-link">View</a></td></tr>
        </tbody>
     </table>

    <!-- Key Experts / Discussants -->
    <div style="background-color: #FFA500; padding: 6px; margin: 10px 0; font-weight: bold;">Key Experts / Discussants</div>
     <table>
        <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
        <tbody>
             <tr><td>122</td><td>Shambu Kumar</td><td>MD</td><td>Purvanchal Vidyut Vitran Nigam Limited (PUVVNL)</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9go" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>123</td><td>Samuel Paul N</td><td>MD</td><td>Kanpur Electricity Supply Company</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9go" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>124</td><td>Raveesh Gupta</td><td>MD</td><td>Pashchimanchal Vidyut Vitran Nigam Limited</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9go" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>125</td><td>Atul Bali</td><td>Director</td><td>National Smart Grid Mission</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9go" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>126</td><td>Kamalpreet Wadhawan</td><td>GM</td><td>Power Finance Corporation Limited</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9go" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>127</td><td>Arvind Jadhav</td><td>Former Chief Secretary</td><td>Govt. of Karnataka</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9go" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>128</td><td>Lalitkumar Parmar</td><td>Chief Engineer</td><td>Paschim Gujarat Vij Company Limited</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9go" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>129</td><td>Tarun Batra</td><td>Head – D & IT</td><td>Tata Power Delhi Distribution Limited</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9go" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>130</td><td>S.K. Soonee</td><td>Former CEO</td><td>Grid India</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9go" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>131</td><td>Shivakumar V.</td><td>Joint Director</td><td>Central Power Research Institute (CPRI)</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9go" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>132</td><td>Ankur Sharma</td><td>CEO</td><td>Flock Energy</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9go" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>133</td><td>Ashutosh Natraj</td><td>CEO and Co-Founder</td><td>Vidrona Ltd</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9go" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>134</td><td>Heather Murphy</td><td>Head of Growth & Strategy</td><td>Open Climate UK</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9go" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>135</td><td>Alex Hunter</td><td>CEO</td><td>Sherwood Power</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9go" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>136</td><td>Jagdish Shrikrishna Chitre</td><td>CTO</td><td>KIGG Ltd</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9go" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>137</td><td>Anuradha Beri</td><td>Director</td><td>KIGG Ltd</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9go" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>138</td><td>Jai Beri</td><td>Associate Director - Sustainable Energy</td><td>KIGG Ltd</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9go" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>139</td><td>Soma Yeh-Taheri</td><td>CEO</td><td>Urban Chain</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9go" target="_blank" class="photo-link">View</a></td></tr>
        </tbody>
     </table>

    <!-- 12th India - US Smart Energy Workshop -->
    <div class="sub-session" style="background-color: #FFD580; padding: 8px; margin: 15px 0 10px 0; font-weight: bold;">
        12th India - US Smart Energy Workshop | Theme: Rollout of Smart Inverters (In Partnership with UL Standards & Engagement)
    </div>
     <table>
        <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
        <tbody>
             <tr><td>140</td><td>Mohammad Rihan</td><td>DG</td><td>National Institute of Solar Energy (NISE)</td><td>Chair</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9gU" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>141</td><td>Richie Stephen</td><td>Senior Regional Standards Project Manager</td><td>UL Standards & Engagement (ULSE)</td><td>Moderator</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9gU" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>142</td><td>Richard Schomberg</td><td>Special Envoy on Smart Electrification</td><td>International Electrotechnical Commission (IEC)</td><td>Setting the Context</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9gU" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>143</td><td>Alekhya Vaddiraj</td><td>Technical Consultant</td><td>ISGF</td><td>Theme Presentation</td><td><a href="images/2027/presentations/143. Alekhya_Session - 12th India-US Workshop.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9gU" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>144</td><td>A Balan</td><td>Member (Planning)</td><td>Central Electricity Authority (CEA)</td><td>Keynote Address</td><td><a href="images/2027/presentations/144. A Balan_Session - 12th India-US Workshop.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9gU" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>145</td><td>K Balaraman</td><td>Chair ETD 46, BIS</td><td>National Institute of Wind Energy</td><td>Keynote Address</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9gU" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>146</td><td>AK Rajput</td><td>Former Member – Power Systems</td><td>Central Electricity Authority (CEA)</td><td>Keynote Address</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9gU" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>147</td><td>Jayant Kumar</td><td>CEO – Power Transmission and Distribution</td><td>Larsen & Toubro Limited (L&T)</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9gU" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>148</td><td>Adarsh Nagarajan</td><td>Strategic Initiatives Advisor</td><td>BSES Rajdhani Power Limited (BRPL)</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9gU" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>149</td><td>Kishor Narang</td><td>Founder</td><td>Narnix Technologies</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9gU" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>150</td><td>Ravindra Desai</td><td>Program Manager</td><td>Institute of Electrical and Electronics Engineers (IEEE)</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9gU" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>151</td><td>Naveen Nagpal</td><td>Head-CES (DP)</td><td>BSES Rajdhani Power Limited (BRPL)</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9gU" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>152</td><td>Rajan Munjal</td><td>National Channel Business Leader</td><td>Sungrow</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCN9gU" target="_blank" class="photo-link">View</a></td></tr>
        </tbody>
     </table>

    <!-- GENERAL BODY MEETING OF AIDA -->
    <div class="sub-session" style="background-color: #FFD580; padding: 8px; margin: 15px 0 10px 0; font-weight: bold;">
        GENERAL BODY MEETING OF AIDA (FOR AIDA MEMBERS ONLY)
    </div>
     <table>
        <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
        <tbody>
             <tr><td>153</td><td>Alok Kumar</td><td>Director General</td><td>All India Discoms Association</td><td>Chair</td><td>Speech</td><td class="no-data">Close Door Meeting</td><td><a href="https://flic.kr/s/aHBqjCNg5X" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>154</td><td>Ashish Kumar Goel</td><td>General Secretary & Chairman</td><td>AIDA & UPPCL</td><td>Co-Chair</td><td>Speech</td><td class="no-data">Close Door Meeting</td><td><a href="https://flic.kr/s/aHBqjCNg5X" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>155</td><td>PR Kumar</td><td>Treasurer & MD</td><td>AIDA & NPCL</td><td>Speaker</td><td>Speech</td><td class="no-data">Close Door Meeting</td><td><a href="https://flic.kr/s/aHBqjCNg5X" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>156</td><td>Samuel Paul N</td><td>Managing Director</td><td>Kanpur Electricity State Company Limited</td><td>Speaker</td><td>Speech</td><td class="no-data">Close Door Meeting</td><td><a href="https://flic.kr/s/aHBqjCNg5X" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>157</td><td>Raveesh Gupta</td><td>Managing Director</td><td>PVVNL</td><td>Speaker</td><td>Speech</td><td class="no-data">Close Door Meeting</td><td><a href="https://flic.kr/s/aHBqjCNg5X" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>158</td><td>Shambhu Kumar</td><td>Managing Director</td><td>PUVVNL</td><td>Speaker</td><td>Speech</td><td class="no-data">Close Door Meeting</td><td><a href="https://flic.kr/s/aHBqjCNg5X" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>159</td><td>Vivek Goyal</td><td>Chief Engineer</td><td>Central Electricity Authority</td><td>Speaker</td><td>Speech</td><td class="no-data">Close Door Meeting</td><td><a href="https://flic.kr/s/aHBqjCNg5X" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>160</td><td>Dwijadas Basak</td><td>CEO</td><td>Tata Power Delhi Distribution Limited</td><td>Speaker</td><td>Speech</td><td class="no-data">Close Door Meeting</td><td><a href="https://flic.kr/s/aHBqjCNg5X" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>161</td><td>Rajesh Kumar</td><td>Executive Director</td><td>Damodar Valley Corporation (DVC)</td><td>Speaker</td><td>Speech</td><td class="no-data">Close Door Meeting</td><td><a href="https://flic.kr/s/aHBqjCNg5X" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>162</td><td>Ali Shah</td><td>Executive Director</td><td>Power Finance Corporation</td><td>Speaker</td><td>Speech</td><td class="no-data">Close Door Meeting</td><td><a href="https://flic.kr/s/aHBqjCNg5X" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>163</td><td>Brajesh Kumar</td><td>COO</td><td>BSES Yamuna Power Limited</td><td>Speaker</td><td>Speech</td><td class="no-data">Close Door Meeting</td><td><a href="https://flic.kr/s/aHBqjCNg5X" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>164</td><td>Roshan Kumar</td><td>GM</td><td>Damodar Valley Corporation (DVC)</td><td>Speaker</td><td>Speech</td><td class="no-data">Close Door Meeting</td><td><a href="https://flic.kr/s/aHBqjCNg5X" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>165</td><td>Khajan Bhardwaj</td><td>Director Technical</td><td>All India Discoms Association</td><td>Speaker</td><td>Speech</td><td class="no-data">Close Door Meeting</td><td><a href="https://flic.kr/s/aHBqjCNg5X" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>166</td><td>Jamiruddin Ansari</td><td>Director - PMU</td><td>Ministry of Power</td><td>Speaker</td><td>Speech</td><td class="no-data">Close Door Meeting</td><td><a href="https://flic.kr/s/aHBqjCNg5X" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>167</td><td>Satyendra Nath Kalita</td><td>Director (RA)</td><td>All India Discoms Association</td><td>Speaker</td><td>Speech</td><td class="no-data">Close Door Meeting</td><td><a href="https://flic.kr/s/aHBqjCNg5X" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>168</td><td>Prabhat Kumar Singh</td><td>ED</td><td>REC</td><td>Speaker</td><td>Speech</td><td class="no-data">Close Door Meeting</td><td><a href="https://flic.kr/s/aHBqjCNg5X" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>169</td><td>Pradeep Prajapati</td><td>Distribution</td><td>Ministry of Power</td><td>Speaker</td><td>Speech</td><td class="no-data">Close Door Meeting</td><td><a href="https://flic.kr/s/aHBqjCNg5X" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>170</td><td>Uttam Kumar</td><td>Deputy Director</td><td>IEEMA</td><td>Speaker</td><td>Speech</td><td class="no-data">Close Door Meeting</td><td><a href="https://flic.kr/s/aHBqjCNg5X" target="_blank" class="photo-link">View</a></td></tr>
        </tbody>
     </table>

    <!-- DAY 3: 12 MARCH 2026 (THURSDAY) -->
    <div class="session" style="margin-top: 30px;">DAY 3: 12 MARCH 2026 (THURSDAY)</div>

    <!-- Rise of "Flexumers" -->
    <div class="sub-session" style="background-color: #FFD580; padding: 8px; margin: 15px 0 10px 0; font-weight: bold;">
        Rise of "Flexumers" and Digital Tools for DER Management and Grid Integration
    </div>
     <table>
        <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
        <tbody>
             <tr><td>171</td><td>SK Soonee</td><td>Former CEO</td><td>GRID-INDIA</td><td>Chair</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNpVU" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>172</td><td>Reji Kumar Pillai</td><td>President</td><td>ISGF</td><td>Moderator</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNpVU" target="_blank" class="photo-link">View</a></td></tr>
             <tr><td>173</td><td>JK Jethani</td><td>Senior Director</td><td>Ministry of New & Renewable Energy (MNRE)</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNpVU" target="_blank" class="photo-link">View</a></td></tr>
                          <tr><td>174</td><td>Nick Singh</td><td>Smart Grid CoE Manager</td><td>Eskom Research Testing & Development</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNpVU" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>175</td><td>PK Agarwal</td><td>Former Director</td><td>Grid-India</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNpVU" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>176</td><td>Bagus Setiawan</td><td>Director</td><td>Perkumpulan Jaringan Cerdas Indonesia (PJCI)</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNpVU" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>177</td><td>Piyush Awadhesh</td><td>CPO – E-Mobility</td><td>SEW.AI</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNpVU" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>178</td><td>Sunil Sharma</td><td>GM – Sustainability and Clean Technology</td><td>BSES Yamuna Power Limited (BYPL)</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNpVU" target="_blank" class="photo-link">View</a></td></tr>
        </tbody>
     </table>

    <!-- Smart Metering and Smart Meter Data Analytics -->
    <div class="sub-session" style="background-color: #FFD580; padding: 8px; margin: 15px 0 10px 0; font-weight: bold;">
        Smart Metering and Smart Meter Data Analytics
    </div>
    <div style="background-color: #FFA500; padding: 6px; margin: 10px 0; font-weight: bold;">PANEL 1: AMI From Smart Meter Rollout to Smart Data Operations</div>
     <table>
        <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
        <tbody>
              <tr><td>179</td><td>Prabir Neogi</td><td>Mentor</td><td>FICCI's Power Committee</td><td>Chair and Moderator</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNmyn" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>180</td><td>Ajay Padmanabhan</td><td>Head - Corporate Communications and PR</td><td>IntelliSmart Infrastructure</td><td>Theme Presentation</td><td><a href="images/2027/presentations/180. Ajay Padmanabhan_ Session - Smart Metering.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNmyn" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>181</td><td>Sebastien Pellorce</td><td>SVP AMI India</td><td>Wirepas</td><td>Speaker</td><td><a href="images/2027/presentations/181. Sebastien_Session - Smart Metering.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNmyn" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>182</td><td>Aditya Gupta</td><td>SVP - R & D</td><td>Allied Engineering Works Limited</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNmyn" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>183</td><td>Kamalpreet Wadhawan</td><td>GM</td><td>Power Finance Corporation Limited</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNmyn" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>184</td><td>Rupesh Goyal</td><td>Head – Metering, Analysis and Energy Audit</td><td>TP Western Odisha Distribution Limited (TPWODL)</td><td>Speaker</td><td><a href="images/2027/presentations/184. Rupesh Kumar Goyal_Session - Smart Metering.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNmyn" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>185</td><td>Vasu Khurana</td><td>Manager – Projects</td><td>Phoenix Contact</td><td>Speaker</td><td><a href="images/2027/presentations/185. Vasu Khurana__Session - Smart Metering.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNmyn" target="_blank" class="photo-link">View</a></td></tr>
        </tbody>
     </table>

    <div style="background-color: #FFA500; padding: 6px; margin: 10px 0; font-weight: bold;">PANEL 2: AMI 2.0 - GRID Intelligence, DER Integration & Cyber-Resilient Architecture</div>
     <table>
        <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
        <tbody>
              <tr><td>186</td><td>Saurav Shah</td><td>ED</td><td>Power Finance Corporation Limited</td><td>Chair</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNmyn" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>187</td><td>Ajoy Rajani</td><td>MD & CEO</td><td>Meshmerise Networks</td><td>Moderator</td><td><a href="images/2027/presentations/187. Ajoy Rajani__Session - Smart Metering.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNmyn" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>188</td><td>Rohit Pareek</td><td>Chief Product Officer</td><td>Impresa.ai</td><td>Theme Presentation</td><td><a href="images/2027/presentations/188. Rohit Pareek_Session - Smart Metering.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNmyn" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>189</td><td>Matt Gleeson</td><td>Vice President - Energy Transition and Water Conservation</td><td>Oracle Utilities</td><td>Speaker</td><td><a href="images/2027/presentations/189. Matt Gleeson_Session - Smart Metering.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNmyn" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>190</td><td>Atul Bali</td><td>Director</td><td>National Smart Grid Mission</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNmyn" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>191</td><td>Marc Delandre</td><td>-</td><td>EDF International</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNmyn" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>192</td><td>Avner Matmor</td><td>Co-founder</td><td>Yitran Technologies Ltd.</td><td>Speaker</td><td><a href="images/2027/presentations/192. Avner Matmor__Session - Smart Metering.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNmyn" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>193</td><td>Sourajit Ghosh</td><td>Director – IT</td><td>UP Power Corporation Limited</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNmyn" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>194</td><td>Vijay Panpalia</td><td>VP- Product Engineering</td><td>SEW.AI</td><td>Speaker</td><td><a href="images/2027/presentations/194. Vijay_Session - Smart Metering.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNmyn" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>195</td><td>Santadyuti Samanta</td><td>Leader - Product and Solution Management</td><td>Kimbal</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNmyn" target="_blank" class="photo-link">View</a></td></tr>
        </tbody>
     </table>

    <!-- Digitalization Roadmaps for Utilities -->
    <div class="sub-session" style="background-color: #FFD580; padding: 8px; margin: 15px 0 10px 0; font-weight: bold;">
        Digitalization Roadmaps for Utilities (In Partnership with AIDA)
    </div>
     <table>
        <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
        <tbody>
              <tr><td>196</td><td>Alok Kumar</td><td>DG</td><td>All India Discoms Association (AIDA)</td><td>Chair</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNrHL" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>197</td><td>Abhishek Ranjan</td><td>CEO</td><td>BSES Rajdhani Power Limited (BRPL)</td><td>Moderator</td><td><a href="images/2027/presentations/197. Abhisek Ranjan_Digitalization Roadmaps.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNrHL" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>198</td><td>Avinash Aithal</td><td>Head of Open Networks</td><td>Energy Networks Association, UK</td><td>Theme Presentation</td><td><a href="images/2027/presentations/198. Dr Avinash Aithal_Digitalization Roadmaps.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNrHL" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>199</td><td>S Suresh Kumar</td><td>Chairman</td><td>Damodar Valley Corporation</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNrHL" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>200</td><td>Kabir Malik</td><td>Senior Economist</td><td>World Bank</td><td>Speaker</td><td><a href="images/2027/presentations/200. Kabir_Digitalization Roadmaps.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNrHL" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>201</td><td>Amitabh Prasad</td><td>President - Asia</td><td>SEW.AI</td><td>Speaker</td><td><a href="images/2027/presentations/201. Amitabh Prasad_Digitalization Roadmaps.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNrHL" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>202</td><td>Satyendra Nath Kalita</td><td>Director - Regulatory Affairs</td><td>All India Discoms Association (AIDA)</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNrHL" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>203</td><td>Mohan Singh</td><td>DGM – IT and Automation</td><td>Noida Power Company Limited</td><td>Speaker</td><td><a href="images/2027/presentations/203. Mohan Singh_Digitalization Roadmaps.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNrHL" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>204</td><td>SK Senapati</td><td>Head- Sales & Commercials</td><td>Larsen & Toubro Limited (L&T)</td><td>Speaker</td><td><a href="images/2027/presentations/204. Senapti SK_Digitalization Roadmaps.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNrHL" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>205</td><td>Sandip Pal</td><td>Head – Distribution Services</td><td>TP Central Odisha Distribution Limited (TPCODL)</td><td>Speaker</td><td><a href="images/2027/presentations/205. Sandip Pal_Digitalization Roadmaps.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNrHL" target="_blank" class="photo-link">View</a></td></tr>
        </tbody>
     </table>

    <!-- Role of Small Modular Reactors (SMR) -->
    <div class="sub-session" style="background-color: #FFD580; padding: 8px; margin: 15px 0 10px 0; font-weight: bold;">
        Role of Small Modular Reactors (SMR) in the Net Zero Power Systems (In Partnership with BSCE Systems)
    </div>
     <table>
        <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
        <tbody>
              <tr><td>206</td><td>Ganapati Myneni</td><td>Cofounder</td><td>BSCE Systems, Inc</td><td>Chair and Moderator</td><td><a href="images/2027/presentations/206. Ganapati Myneni_Session - Role of SMR.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNn2Q" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>207</td><td>Arnada Prasad Samal</td><td>Chief Executive Officer</td><td>NTPC Parmanu Urja Nigam Limited</td><td>Theme Presentation</td><td><a href="images/2027/presentations/207. Arnada Prasad Samal_Session - Role of SMR.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNn2Q" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>208</td><td>Arun Nayak</td><td>Dean of Research</td><td>Somaiya University</td><td>Theme Presentation</td><td><a href="images/2027/presentations/208. Arun Nayak_Session - Role of SMR.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNn2Q" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>209</td><td>Manoj Upadhyaya</td><td>Dy Advisor, Energy</td><td>NITI Aayog</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNn2Q" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>210</td><td>PK Vijayan</td><td>Professor</td><td>Manipal Institute of Technology</td><td>Speaker</td><td><a href="images/2027/presentations/210. PK Vijayan_Session - Role of SMR.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNn2Q" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>211</td><td>Asiya Rummana</td><td>Nuclear Physics</td><td>Aligarh Muslim University</td><td>Speaker</td><td><a href="images/2027/presentations/211. Asiya Rummana_Session - Role of SMR.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNn2Q" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>212</td><td>Shibashish Pal</td><td>Sector Head - Domestic Nuclear Business</td><td>Tata Consulting Engineers Limited</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNn2Q" target="_blank" class="photo-link">View</a></td></tr>
        </tbody>
     </table>

    <!-- The Cooling Challenge -->
    <div class="sub-session" style="background-color: #FFD580; padding: 8px; margin: 15px 0 10px 0; font-weight: bold;">
        The Cooling Challenge: Accelerating District Cooling System (DCS) Adoption in India (In Partnership with APUEA)
    </div>
     <table>
        <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
        <tbody>
              <tr><td>213</td><td>Peter Lundberg</td><td>Executive Director</td><td>Asia Pacific Urban Energy Association (APUEA)</td><td>Chair and Moderator</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNrLX" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>214</td><td>Aseem Goyal</td><td>General Manager, Business Development</td><td>Tabreed India</td><td>Theme Presentation</td><td><a href="images/2027/presentations/214. Aseem_Tabreed_District Cooling System (DCS).pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNrLX" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>215</td><td>Arijit Sengupta</td><td>Director</td><td>Bureau of Energy Efficiency</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNrLX" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>216</td><td>Pramod Kumar Singh</td><td>Senior Director – Research and Programs</td><td>Alliance for an Energy Efficient Economy (AEEE)</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNrLX" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>217</td><td>Archa Modi</td><td>AGM, Business Development</td><td>Keppel India (EaaS)</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNrLX" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>218</td><td>Madhav Puranik</td><td>AVP – DCS</td><td>GIFT City</td><td>Speaker</td><td><a href="images/2027/presentations/218. Madhav_District Cooling System (DCS).pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNrLX" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>219</td><td>Avinash C Kumar</td><td>AVP</td><td>BSES Rajdhani Power Limited (BRPL)</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNrLX" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>220</td><td>Gaurav Kapoor</td><td>Regional Sales Development Manager</td><td>Grundfos</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNrLX" target="_blank" class="photo-link">View</a></td></tr>
        </tbody>
     </table>

    <!-- Resiliency of the Power Systems Against Extreme Weather Events -->
    <div class="sub-session" style="background-color: #FFD580; padding: 8px; margin: 15px 0 10px 0; font-weight: bold;">
        Resiliency of the Power Systems Against Extreme Weather Events (In Partnership with Power Foundation of India (PFI) and CDRI)
    </div>
     <table>
        <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
        <tbody>
              <tr><td>221</td><td>Ravi Seethapathy</td><td>Advisor; and Executive Chairman</td><td>ISGF; and Biosirus Inc</td><td>Chair</td><td>Speech</td><td><a href="https://youtu.be/r7uzgkOwMVA?si=_6ZOCI2mLs00Nl0p" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvfS" target="_blank" class="photo-link">View</a></td></tr>
              <tr><td>222</td><td>Himanshu Chawla</td><td>Head Regulatory & Research</td><td>Power Foundation of India</td><td>Moderator and Theme Presenter</td><td>Speech</td><td><a href="https://youtu.be/r7uzgkOwMVA?si=_6ZOCI2mLs00Nl0p" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvfS" target="_blank" class="photo-link">View</a></td>
               </tr>
               <tr><td>223</td><td>Anurag Bhagat</td><td>Head Communications</td><td>Power Foundation of India</td><td>Co-Moderator</td><td>Speech</td><td><a href="https://youtu.be/r7uzgkOwMVA?si=_6ZOCI2mLs00Nl0p" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvfS" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>224</td><td>Samhita R</td><td>Co-founder and CEO</td><td>Resilience AI</td><td>Theme Presentation</td><td>Speech</td><td><a href="https://youtu.be/r7uzgkOwMVA?si=_6ZOCI2mLs00Nl0p" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvfS" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>225</td><td>Bagus Setiawan</td><td>Director</td><td>PT.PLN Indonesia</td><td>Theme Presentation</td><td><a href="images/2027/presentations/225. Bagus_Resiliency of the Power Systems.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtu.be/r7uzgkOwMVA?si=_6ZOCI2mLs00Nl0p" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvfS" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>226</td><td>Pourush Garg</td><td>Chief – CCG & Engineering</td><td>TATA Power Central Odisha Distribution Limited</td><td>Theme Presentation</td><td>Speech</td><td><a href="https://youtu.be/r7uzgkOwMVA?si=_6ZOCI2mLs00Nl0p" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvfS" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>227</td><td>Amit Tripathi</td><td>Advisor – Power Sector</td><td>Coalition for Disaster Resilient Infrastructure (CDRI)</td><td>Theme Presentation</td><td><a href="images/2027/presentations/227. Amit Tripathi_CDRI_Resiliency of the Power Systems.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtu.be/r7uzgkOwMVA?si=_6ZOCI2mLs00Nl0p" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvfS" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>228</td><td>Abhishek Ranjan</td><td>CEO</td><td>BSES Rajdhani Power Limited (BRPL)</td><td>Speaker</td><td>Speech</td><td><a href="https://youtu.be/r7uzgkOwMVA?si=_6ZOCI2mLs00Nl0p" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvfS" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>229</td><td>Adarsh Nagarajan</td><td>Utility Fellow NREL</td><td>BSES Rajdhani Power Limited (BRPL)</td><td>Speaker</td><td>Speech</td><td><a href="https://youtu.be/r7uzgkOwMVA?si=_6ZOCI2mLs00Nl0p" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvfS" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>230</td><td>Santanu Sen</td><td>GM</td><td>CESC</td><td>Speaker</td><td>Speech</td><td><a href="https://youtu.be/r7uzgkOwMVA?si=_6ZOCI2mLs00Nl0p" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvfS" target="_blank" class="photo-link">View</a></td></tr>
            </tbody>
         </table>

         <!-- Data Governance Framework -->
         <div class="sub-session" style="background-color: #FFD580; padding: 8px; margin: 15px 0 10px 0; font-weight: bold;">
            Data Governance Framework and Data Management in Utilities (In Partnership with AIDA)
         </div>
         <table>
            <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
            <tbody>
               <tr><td>231</td><td>Ghanshyam Prasad</td><td>Chairperson</td><td>Central Electricity Authority</td><td>Chair</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNkAT" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>232</td><td>Kabir Malik</td><td>Senior Economist</td><td>World Bank</td><td>Moderator</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNkAT" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>233</td><td>Reji Kumar Pillai</td><td>President</td><td>ISGF</td><td>Theme Presentation</td><td><a href="images/2027/presentations/233. Reji Kumar Pillai_Data Governance Framework.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNkAT" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>234</td><td>Alok Kumar</td><td>DG</td><td>All India Discoms Association (AIDA)</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNkAT" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>235</td><td>Pankaj Kumar</td><td>MD</td><td>UP Power Corporation Limited</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNkAT" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>236</td><td>Rahul Tongia</td><td>Senior Fellow</td><td>Centre for Social and Economic Progress (CSEP)</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNkAT" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>237</td><td>Birendra Chaudhary</td><td>DGM-IT</td><td>Noida Power Company Limited</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNkAT" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>238</td><td>Anoop Singh</td><td>CER</td><td>IIT – Kanpur</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNkAT" target="_blank" class="photo-link">View</a></td></tr>
            </tbody>
         </table>

         <!-- 3rd India – Brazil Smart Energy Workshop -->
         <div class="sub-session" style="background-color: #FFD580; padding: 8px; margin: 15px 0 10px 0; font-weight: bold;">
            3rd India – Brazil Smart Energy Workshop
         </div>
         <table>
            <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
            <tbody>
               <tr><td>239</td><td>Ravi Seethapathy</td><td>Advisor ISGF</td><td>Executive Chairman, Biosirus Inc</td><td>Chair</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNh8g" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>240</td><td>Cyro Vicente Boccuzi</td><td>President</td><td>ECOee and Latin American Smart Grid Forum</td><td>Moderator</td><td><a href="images/2027/presentations/240. Cyro Vicente Boccuzi_3rd India – Brazil Smart Energy.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNh8g" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>241</td><td>Thiago Ivanoski</td><td>Planning Director</td><td>Brazilian Energy Planning Enterprise (EPE)</td><td>Speaker</td><td><a href="images/2027/presentations/241. Thiago Ivanoski_3rd India – Brazil Smart Energy.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNh8g" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>242</td><td>Sumara Duarte Ticom</td><td>Executive Advisor to the Planning Board</td><td>National System Operator (ONS)</td><td>Speaker</td><td><a href="images/2027/presentations/242. Sumara_3rd India – Brazil Smart Energy.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNh8g" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>243</td><td>Felipe Alves Calabria</td><td>Deputy Superintendent - Regulation of Generation Services and the Electricity Market</td><td>National Electric Energy Agency (ANEEL)</td><td>Speaker</td><td><a href="images/2027/presentations/243. Felipe_ Livia_3rd India – Brazil Smart Energy.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNh8g" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>244</td><td>Livia Maria de Rezende Raggi</td><td>Regulatory Specialist</td><td>National Electric Energy Agency (ANEEL)</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNh8g" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>245</td><td>Alessandra Amaral</td><td>Executive President</td><td>ADELAT (Association of Latin American Power Distribution Companies)</td><td>Speaker</td><td><a href="images/2027/presentations/245. Alessandra Amaral_3rd India – Brazil Smart Energy.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNh8g" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>246</td><td>Abhishek Ranjan</td><td>CEO</td><td>BSES Rajdhani Power Limited (BRPL)</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNh8g" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>247</td><td>Ashish Singhal</td><td>Director</td><td>Allied Engineering Works Limited</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNh8g" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>248</td><td>Ajoy Rajani</td><td>MD & CEO</td><td>Meshmerise Networks</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNh8g" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>249</td><td>Shashi Bala</td><td>DGM</td><td>PowerXchange</td><td>Speaker</td><td><a href="images/2027/presentations/249. Shashi Bala_3rd India – Brazil Smart Energy.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNh8g" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>250</td><td>Soumya Chakrabarty</td><td>AVP, Head (LR & CPMG)</td><td>BSES Yamuna Power Limited (BYPL)</td><td>Speaker</td><td><a href="images/2027/presentations/250. Soumaya Chakravarty_3rd India – Brazil Smart Energy.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNh8g" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>251</td><td>Amit Tomar</td><td>Asst. VP, Head Central Engineering Services</td><td>BSES Yamuna Power Limited (BYPL)</td><td>Speaker</td><td><a href="images/2027/presentations/251. Amit Tomar_3rd India – Brazil Smart Energy.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNh8g" target="_blank" class="photo-link">View</a></td></tr>
            </tbody>
         </table>

         <!-- DAY 4: 13 MARCH 2026 (FRIDAY) -->
         <div class="session" style="margin-top: 30px;">DAY 4: 13 MARCH 2026 (FRIDAY)</div>

         <!-- New Technologies -->
         <div class="sub-session" style="background-color: #FFD580; padding: 8px; margin: 15px 0 10px 0; font-weight: bold;">
            New Technologies: AI–ML–VR–AR and Robotics Applications and Reliable Communications for Utilities (In Partnership with DST)
         </div>
         <table>
            <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
            <tbody>
               <tr><td>252</td><td>Anita Gupta</td><td>Former Head - CEST</td><td>Department of Science and Technology (DST)</td><td>Chair</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNn3N" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>253</td><td>Reena Suri</td><td>Executive Director</td><td>ISGF</td><td>Moderator</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNn3N" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>254</td><td>Kiran Gupta</td><td>Chief-Customer Experience, Commercial & Govt. Affairs</td><td>Tata Power Delhi Distribution Limited</td><td>Speaker</td><td><a href="images/2027/presentations/254. Kiran Gupta_AI–ML–VR–AR and Robotics Applications.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNn3N" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>255</td><td>Brajesh Kumar</td><td>COO</td><td>BSES Yamuna Power Limited (BYPL)</td><td>Speaker</td><td><a href="images/2027/presentations/255. Brajesh Kumar_AI–ML–VR–AR and Robotics Applications.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNn3N" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>256</td><td>Sandeep Dhamija</td><td>CEO</td><td>Tata Power Power Plus</td><td>Speaker</td><td><a href="images/2027/presentations/256. Sandeep Dhamija_AI–ML–VR–AR and Robotics Applications.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNn3N" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>257</td><td>Meenakshi Vashist</td><td>Founder & CEO</td><td>TekUncorked</td><td>Speaker</td><td><a href="images/2027/presentations/257. Meenakshi  Vashist_AI–ML–VR–AR and Robotics Applications.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNn3N" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>258</td><td>Keyur Bhalavat</td><td>Founder & CEO</td><td>Plutomen Technologies</td><td>Speaker</td><td><a href="images/2027/presentations/258. Keyur Bhalavat_AI–ML–VR–AR and Robotics Applications.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNn3N" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>259</td><td>Kishor Narang</td><td>Founder</td><td>Narnix Technologies</td><td>Speaker</td><td><a href="images/2027/presentations/259. Kishore Naramg_AI–ML–VR–AR and Robotics Applications.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNn3N" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>260</td><td>Indranil Chatterjee</td><td>Sr EVP</td><td>GNA Energy</td><td>Speaker</td><td><a href="images/2027/presentations/260. Indranil Chatterjee_ AI–ML–VR–AR and Robotics Applications.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNn3N" target="_blank" class="photo-link">View</a></td></tr>
            </tbody>
         </table>

         <!-- Electric Vehicles -->
         <div class="sub-session" style="background-color: #FFD580; padding: 8px; margin: 15px 0 10px 0; font-weight: bold;">
            Electric Vehicles – A $200 Billion Opportunity in India to be Unlocked (In Partnership with Power Foundation of India (PFI))
         </div>
         <table>
            <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
            <tbody>
               <tr><td>261</td><td>Richard Schomberg</td><td>Special Envoy on Smart Electrification</td><td>International Electrotechnical Commission (IEC)</td><td>Chair</td><td>Speech</td><td><a href="https://youtu.be/H-OrXqmRMKA?si=mouJe3YEgHQeWOi0" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvd3" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>262</td><td>Sabyasachi Majumdar</td><td>Sr. Director</td><td>CareEdge Rating</td><td>Moderator</td><td>Speech</td><td><a href="https://youtu.be/H-OrXqmRMKA?si=mouJe3YEgHQeWOi0" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvd3" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>263</td><td>Himanshu Chawla</td><td>Head Regulatory & Research</td><td>Power Foundation of India (PFI)</td><td>Co-Moderator and Theme Presenter</td><td><a href="images/2027/presentations/263. Himanshu Chawla_PFI_Electric Vehicles – A $200 Billion.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtu.be/H-OrXqmRMKA?si=mouJe3YEgHQeWOi0" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvd3" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>264</td><td>Raghav Salwan</td><td>Consultant</td><td>Power Foundation of India (PFI)</td><td>Speaker</td><td>Speech</td><td><a href="https://youtu.be/H-OrXqmRMKA?si=mouJe3YEgHQeWOi0" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvd3" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>265</td><td>Meenal Malviya</td><td>Sr. Regional Manager</td><td>ECOG</td><td>Speaker</td><td><a href="images/2027/presentations/265. Meenal Malviya_Electric Vehicles – A $200 Billion.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtu.be/H-OrXqmRMKA?si=mouJe3YEgHQeWOi0" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvd3" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>266</td><td>Saikat Chakrabarti</td><td>Professor</td><td>IIT Kanpur</td><td>Speaker</td><td>Speech</td><td><a href="https://youtu.be/H-OrXqmRMKA?si=mouJe3YEgHQeWOi0" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvd3" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>267</td><td>BK Panigrahi</td><td>Dean</td><td>IIT Delhi</td><td>Speaker</td><td>Speech</td><td><a href="https://youtu.be/H-OrXqmRMKA?si=mouJe3YEgHQeWOi0" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvd3" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>268</td><td>Pradeep Aggarwal</td><td>GM</td><td>BSES Rajdhani Power Limited (BRPL)</td><td>Speaker</td><td>Speech</td><td><a href="https://youtu.be/H-OrXqmRMKA?si=mouJe3YEgHQeWOi0" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvd3" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>269</td><td>Srinu Babu Matta</td><td>Head Project Planning</td><td>Tata Motors Limited</td><td>Speaker</td><td>Speech</td><td><a href="https://youtu.be/H-OrXqmRMKA?si=mouJe3YEgHQeWOi0" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvd3" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>270</td><td>Krishna Chandra</td><td>Chief Manager</td><td>Noida Power Company Limited</td><td>Speaker</td><td>Speech</td><td><a href="https://youtu.be/H-OrXqmRMKA?si=mouJe3YEgHQeWOi0" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvd3" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>271</td><td>Anuj Kumar</td><td>AGM</td><td>Tata Power Company Limited</td><td>Speaker</td><td>Speech</td><td><a href="https://youtu.be/H-OrXqmRMKA?si=mouJe3YEgHQeWOi0" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvd3" target="_blank" class="photo-link">View</a></td></tr>
            </tbody>
         </table>

         <!-- Electrification of Agricultural Sector -->
         <div class="sub-session" style="background-color: #FFD580; padding: 8px; margin: 15px 0 10px 0; font-weight: bold;">
            Electrification of Agricultural Sector and Charging of EVs with Green Electricity
         </div>
         <table>
            <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
            <tbody>
               <tr><td>272</td><td>Gajanan Kale</td><td>CEO</td><td>TP North Odisha Distribution Limited (TPNODL)</td><td>Chair</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNveW" target="_blank" class="photo-link">View</a></td></tr>
               <tr><td>273</td><td>Disha Khosla</td><td>AGM</td><td>India Smart Grid Forum</td><td>Moderator</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNveW" target="_blank" class="photo-link">View</a></td></tr>
                               <tr><td>274</td><td>VN Kale</td><td>Addl Commissioner – Machinery</td><td>Ministry of Agriculture and Farmers Welfare</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNveW" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>275</td><td>Anshuman Srivastava</td><td>Executive Director</td><td>Power Foundation of India (PFI)</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNveW" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>276</td><td>Suresh Babu</td><td>Scientist E – CEST</td><td>Department of Science and Technology (DST)</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNveW" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>277</td><td>Om Krishnan Singh</td><td>Scientist 'E'/ Director – R&D</td><td>Ministry of Electronics and Information Technology</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNveW" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>278</td><td>Aarti Kulkarni</td><td>Deputy Executive Engineer</td><td>Maharashtra State Electricity Distribution Co. Ltd.</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNveW" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>279</td><td>Pankaj Goyal</td><td>Co-Founder and COO</td><td>AutoNxt Automation</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNveW" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>280</td><td>Madhuri Dixit Ghugari</td><td>Director</td><td>Agrinext Technologies</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNveW" target="_blank" class="photo-link">View</a></td></tr>
            </tbody>
          </table>

        <!-- Power Markets and Carbon Markets -->
        <div class="sub-session" style="background-color: #FFD580; padding: 8px; margin: 15px 0 10px 0; font-weight: bold;">
            Power Markets and Carbon Markets (In Partnership with IEX)
        </div>
         <table>
            <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
            <tbody>
                <tr><td>281</td><td>Rajib Mishra</td><td>ED</td><td>Integrated Research and Action for Development (IRADe)</td><td>Chair</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvhg" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>282</td><td>Nithyanandam Yuvaraj Dinesh Babu</td><td>Founder & CEO</td><td>UNMAI Carbon Solutions, Singapore</td><td>Moderator</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvhg" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>283</td><td>Chirag Gajjar</td><td>Director</td><td>PWC India</td><td>Theme Presentation</td><td><a href="images/2027/presentations/283. Chirag Gajjar_Power Markets and Carbon Markets.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvhg" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>284</td><td>Rohit Bajaj</td><td>JMD</td><td>Indian Energy Exchange (IEX)</td><td>Theme Presentation</td><td><a href="images/2027/presentations/284. Rohit Bajaj__Power Markets and Carbon Markets.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvhg" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>285</td><td>Padma Jaiswal</td><td>Secretary</td><td>Govt. of GNCT Delhi</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvhg" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>286</td><td>Nidhi Narang</td><td>Former Director - Finance</td><td>UP Power Corporation Limited</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvhg" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>287</td><td>Gopal Krishna Sarangi</td><td>Associate Professor – Department of Policy & Management Studies</td><td>TERI School of Advanced Studies</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvhg" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>288</td><td>Inderjeet Singh</td><td>Partner – Climate Change & Sustainability</td><td>Deloitte</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvhg" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>289</td><td>Munish Sharma</td><td>Head of Group – Consumer Connect, ESG and ISO Compliance</td><td>BSES Rajdhani Power Limited</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvhg" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>290</td><td>Snigdha Verma</td><td>Founder and Chief Executive Officer</td><td>Global Peepal Policy League</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvhg" target="_blank" class="photo-link">View</a></td></tr>
            </tbody>
          </table>

        <!-- Special Plenary Session by JBV Reddy -->
        <div class="sub-session" style="background-color: #FFD580; padding: 8px; margin: 15px 0 10px 0; font-weight: bold;">
            Special Plenary Session by JBV Reddy, Head Quantum Technology Cell, Department of Science & Technology (DST)
        </div>
         <table>
            <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
            <tbody>
                <tr><td>291</td><td>JBV Reddy</td><td>Head Quantum Technology Cell</td><td>Department of Science & Technology (DST)</td><td>Presentation</td><td><a href="images/2027/presentations/291. JBV Reddy_NQM.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNLA9" target="_blank" class="photo-link">View</a></td></tr>
            </tbody>
          </table>

        <!-- Emerging Solutions for Power System Flexibility -->
        <div class="sub-session" style="background-color: #FFD580; padding: 8px; margin: 15px 0 10px 0; font-weight: bold;">
            Emerging Solutions for Power System Flexibility
        </div>
         <table>
            <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
            <tbody>
                <tr><td>292</td><td>A Balan</td><td>Member – Planning</td><td>Central Electricity Authority</td><td>Chair</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvi8" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>293</td><td>Ravi Seethapathy</td><td>Advisor, ISGF</td><td>Executive Chairman, Biosirus Inc</td><td>Moderator</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvi8" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>294</td><td>Ganesh Das</td><td>Chief - Collaboration & Innovation</td><td>Tata Power Company Limited</td><td>Theme Presentation</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvi8" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>295</td><td>SK Soonee</td><td>Former CEO</td><td>GRID-INDIA</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvi8" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>296</td><td>Abhishek Ranjan</td><td>CEO</td><td>BSES Rajdhani Power Limited (BRPL)</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvi8" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>297</td><td>Santhosh Nair</td><td>Director</td><td>Oracle Utilities</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvi8" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>298</td><td>Gurusharan Dhillon</td><td>Director - Electric Mobility</td><td>India Energy Storage Alliance (IESA)</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvi8" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>299</td><td>Aby Joseph</td><td>Scientist - G and Senior Director</td><td>Centre for Development of Advanced Computing, India</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvi8" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>300</td><td>Praveen Goyal</td><td>Senior Vice President (IT, Automation, Metering and Sustainability)</td><td>Noida Power Company Limited</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvi8" target="_blank" class="photo-link">View</a></td></tr>
            </tbody>
          </table>

        <!-- Future of Work -->
        <div class="sub-session" style="background-color: #FFD580; padding: 8px; margin: 15px 0 10px 0; font-weight: bold;">
            Future of Work: Working with Digital Colleagues and Humanoid Robots
        </div>
         <table>
            <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
            <tbody>
                <tr><td>301</td><td>Reji Kumar Pillai</td><td>President</td><td>ISGF</td><td>Chair and Moderator</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNwXH" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>302</td><td>Mukesh Kala</td><td>Hyper Automation Practice Head</td><td>Boundaryless Group</td><td>Speaker</td><td><a href="images/2027/presentations/302. Mukesh_Future of Work.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNwXH" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>303</td><td>Arani Chaudhary</td><td>Founder and CEO</td><td>AI Library</td><td>Speaker</td><td><a href="images/2027/presentations/303. Arani _FUTURE OF WORK.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNwXH" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>304</td><td>Sandeep Singh Bhadwal</td><td>Co-Founder</td><td>AI Library</td><td>Speaker</td><td><a href="images/2027/presentations/304. Sandeep _FUTURE OF WORK - Copy.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNwXH" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>305</td><td>Sankar Patnaik</td><td>Director</td><td>CITI Bank</td><td>Speaker</td><td><a href="images/2027/presentations/305. Sankar_Future of Work.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNwXH" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>306</td><td>Arjun Reddy</td><td>Founder and CEO</td><td>Spatial Grid</td><td>Speaker</td><td><a href="images/2027/presentations/306. Arjun Reddy_Future of Work.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNwXH" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>307</td><td>Shalabh Gupta</td><td>CEO & Co-founder</td><td>Sidhhanth</td><td>Speaker</td><td><a href="images/2027/presentations/307. Shalabh_Future of Work.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNwXH" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>308</td><td>Saurabh Gupta</td><td>Senior Director – Regional Accounts (India)</td><td>SEW.AI</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNwXH" target="_blank" class="photo-link">View</a></td></tr>
            </tbody>
          </table>

        <!-- GENDER BALANCE IN THE ENERGY SECTOR -->
        <div class="sub-session" style="background-color: #FFD580; padding: 8px; margin: 15px 0 10px 0; font-weight: bold;">
            GENDER BALANCE IN THE ENERGY SECTOR
        </div>
         <table>
            <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
            <tbody>
                <tr><td>309</td><td>Reena Suri</td><td>Executive Director</td><td>ISGF</td><td>Chair</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNxqA" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>310</td><td>Poonam Barua</td><td>Founder & Chairperson</td><td>WILL Forum India</td><td>Moderator</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNxqA" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>311</td><td>Kiran Gupta</td><td>Chief-Customer Experience, Commercial & Govt. Affairs</td><td>Tata Power Delhi Distribution Limited</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNxqA" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>312</td><td>Subrahmanyam Pulipaka</td><td>CEO</td><td>National Solar Energy Federation of India</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNxqA" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>313</td><td>Mini Govindan</td><td>Senior Fellow</td><td>TERI</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNxqA" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>314</td><td>Monali Zeya</td><td>Director – Climate</td><td>Children's Investment Fund (CIFF)</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNxqA" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>315</td><td>Mukuk Saxena</td><td>Head of Standards and Research (and Advisor)</td><td>Skill Council for Green Jobs</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNxqA" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>316</td><td>Isha Dayal</td><td>Consultant</td><td>National Council of Applied Economic Research (NCAER)</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNxqA" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>317</td><td>Rahul Tongia</td><td>Senior Fellow</td><td>Centre for Social and Economic Progress (CSEP)</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNxqA" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>318</td><td>Rashi Gupta</td><td>Founder</td><td>Vision Mechatronics</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNxqA" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>319</td><td>Vishnu Shankar Srivastava</td><td>Head – Strategic Project</td><td>BSES Rajdhani Power Limited</td><td>Speaker</td><td><a href="images/2027/presentations/319. Vishnu Srivastav_Gender Balance in Power Sector.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNxqA" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>320</td><td>Prachii Saini</td><td>Brand Strategist</td><td>Meshmerise Networks</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNxqA" target="_blank" class="photo-link">View</a></td></tr>
            </tbody>
          </table>

        <!-- 2nd India-Indonesia Smart Energy Workshop -->
        <div class="sub-session" style="background-color: #FFD580; padding: 8px; margin: 15px 0 10px 0; font-weight: bold;">
            2nd India-Indonesia Smart Energy Workshop (In Partnership PJCI, Indonesia)
        </div>
         <table>
            <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
            <tbody>
                <tr><td>321</td><td>Ravi Seethapathy</td><td>Advisor, ISGF</td><td>Executive Chairman, Biosirus Inc</td><td>Chair and Moderator</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNC6j" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>322</td><td>Rajesh Dangi</td><td>Secretary</td><td>Joint Electricity Regulatory Commission (JERC)</td><td>Speaker</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNC6j" target="_blank" class="photo-link">View</a></td></tr>
                                 <tr>
                    <td>323</td>
                    <td>Anshuman Srivastava</td>
                    <td>Executive Director</td>
                    <td>Power Foundation of India</td>
                    <td>Speaker</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNC6j" target="_blank" class="photo-link">View</a></td>
                 </tr>
                 <tr>
                    <td>324</td>
                    <td>Shashank Jewalikar</td>
                    <td>Executive Director</td>
                    <td>Maharashtra State Load Despatch Centre</td>
                    <td>Speaker</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNC6j" target="_blank" class="photo-link">View</a></td>
                 </tr>
                 <tr>
                    <td>325</td>
                    <td>Bagus Setiawan</td>
                    <td>Director</td>
                    <td>Perkumpulan Jaringan Cerdas Indonesia (PJCI)</td>
                    <td>Speaker</td>
                    <td><a href="images/2027/presentations/325. Bagus Setiawan_2nd India-Indonesia Smart Energy.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNC6j" target="_blank" class="photo-link">View</a></td>
                 </tr>
                 <tr>
                    <td>326</td>
                    <td>Himanshu Chawla</td>
                    <td>Head Regulatory & Research</td>
                    <td>Power Foundation of India</td>
                    <td>Speaker</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNC6j" target="_blank" class="photo-link">View</a></td>
                 </tr>
                 <tr>
                    <td>327</td>
                    <td>Teguh Prasetya M</td>
                    <td>-</td>
                    <td>Masyarakat Telematika Indonesia - Indonesian Telematics Society (MASTEL)</td>
                    <td>Speaker</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNC6j" target="_blank" class="photo-link">View</a></td>
                 </tr>
                 <tr>
                    <td>328</td>
                    <td>PK Agarwal</td>
                    <td>Former Director</td>
                    <td>Grid-India</td>
                    <td>Speaker</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNC6j" target="_blank" class="photo-link">View</a></td>
                 </tr>
                 <tr>
                    <td>329</td>
                    <td>Rahul Tongia</td>
                    <td>Senior Fellow</td>
                    <td>Centre for Social and Economic Progress (CSEP)</td>
                    <td>Speaker</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNC6j" target="_blank" class="photo-link">View</a></td>
                 </tr>
                 <tr>
                    <td>330</td>
                    <td>Lena Lusiana</td>
                    <td>-</td>
                    <td>Perkumpulan Jaringan Cerdas Indonesia (PJCI)</td>
                    <td>Speaker</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNC6j" target="_blank" class="photo-link">View</a></td>
                 </tr>
                 <tr>
                    <td>331</td>
                    <td>Habibie Razak</td>
                    <td>-</td>
                    <td>Masyarakat Ketenagalistrikan Indonesia (MKI)</td>
                    <td>Speaker</td>
                    <td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td>
                    <td><a href="https://flic.kr/s/aHBqjCNC6j" target="_blank" class="photo-link">View</a></td>
                 </tr>
            </tbody>
          </table>

        <!-- Presentation of Select Technical Papers -->
        <div class="sub-session" style="background-color: #FFD580; padding: 8px; margin: 15px 0 10px 0; font-weight: bold;">
            Presentation of Select Technical Papers
        </div>
        
        <div style="background-color: #FFA500; padding: 6px; margin: 10px 0; font-weight: bold;">Disruptive Innovations for Utilities</div>
         <table>
            <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
            <tbody>
                <tr><td>332</td><td>Santhosh Nair</td><td>Director</td><td>Oracle Utilities</td><td>Chair</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>333</td><td>Priyanshu Agrawal</td><td>Consulting Manager</td><td>Cognizant Technology Solutions Pvt. Ltd.</td><td>Author</td><td><a href="images/2027/presentations/333. PRIYANSHU AGRAWAL_Presentation of Select Technical Papers.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>334</td><td>Utkarsh Jaiswal</td><td>Lead of Operations – Mechanization</td><td>Resonia Limited</td><td>Author</td><td><a href="images/2027/presentations/334. Utkarsh _Presentation of Select Technical Papers.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>335</td><td>Sai Keshava Srinivas</td><td>Manager - Consulting</td><td>Cognizant Technology Solutions Pvt. Ltd</td><td>Author</td><td><a href="images/2027/presentations/335. Sai Keshava Srinivas_Presentation of Select Technical Papers.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>336</td><td>Suhaas Mani</td><td>Manager</td><td>TP Western Odisha Distribution Limited</td><td>Author</td><td><a href="images/2027/presentations/336. Suhaas Mani_Presentation of Select Technical Papers.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>337</td><td>Vijay Dhonde</td><td>Founder & MD</td><td>Orange current Technologies Private Limited</td><td>Author</td><td><a href="images/2027/presentations/337. Vijay Tukaram Dhonde _Presentation of Select Technical Papers.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>338</td><td>V Lavanya</td><td>Associate Professor</td><td>Vellore Institute of Technology, Chennai</td><td>Author</td><td><a href="images/2027/presentations/338. Dr. V. LAVANYA_Presentation of Select Technical Papers.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>339</td><td>Saurav Darshana Mohapatra</td><td>Team Lead Commercial</td><td>TP Western Odisha Distribution Limited</td><td>Author</td><td><a href="images/2027/presentations/339. Saurav Darshana Mohapatra_Presentation of Select Technical Papers.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>340</td><td>Trusha Biswas</td><td>Head Technology & Quality</td><td>TATA Power Mumbai</td><td>Author</td><td><a href="images/2027/presentations/340. Ms. TRUSHA BISWAS _Presentation of Select Technical Papers.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>341</td><td>Nikita Nayak</td><td>Lead Engineer - AMI</td><td>TP Western Odisha Distribution Limited</td><td>Author</td><td><a href="images/2027/presentations/341. Nikita Nayak_Presentation of Select Technical Papers.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>342</td><td>Avnish Gupta</td><td>Manager</td><td>KEC International Limited</td><td>Author</td><td><a href="images/2027/presentations/342. Avinish Gupta_Presentation of Select Technical Papers.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
            </tbody>
         </table>

        <div style="background-color: #FFA500; padding: 6px; margin: 10px 0; font-weight: bold;">Foundational Blocks for Smart Grids</div>
         <table>
            <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
            <tbody>
                <tr><td>343</td><td>Anjuli Chandra</td><td>Former Member</td><td>PERC</td><td>Chair</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>344</td><td>Ritu Raj</td><td>Manager</td><td>Noida Power Company Limited</td><td>Author</td><td><a href="images/2027/presentations/344. Ritu Raj_Presentation of Select Technical Papers.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>345</td><td>Ranjeet Kumar</td><td>Manager</td><td>BSES Rajdhani Power Limited</td><td>Author</td><td><a href="images/2027/presentations/345. Ranjeet Kumar_Presentation of Select Technical Papers.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>346</td><td>Vikas Gupta</td><td>Deputy General Manager</td><td>Noida Power Company Ltd</td><td>Author</td><td><a href="images/2027/presentations/346. Vikas Gupta_Presentation of Select Technical Papers.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>347</td><td>B Gidean Praveen</td><td>Product Manager</td><td>Fluentgrid Limited</td><td>Author</td><td><a href="images/2027/presentations/347. Gidean Praveen_Presentation of Select Technical Papers.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>348</td><td>Soumendra Sahoo</td><td>Team Lead - Automation</td><td>TP Central Odisha Distribution Limited</td><td>Author</td><td><a href="images/2027/presentations/348. Soumendra Sahoo_Presentation of Select Technical Papers.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>349</td><td>Sumit Gupta</td><td>CEO</td><td>Asset Plus Consulting Pvt Ltd.</td><td>Author</td><td><a href="images/2027/presentations/349. Sumit Gupta_Presentation of Select Technical Papers.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
            </tbody>
         </table>

        <div style="background-color: #FFA500; padding: 6px; margin: 10px 0; font-weight: bold;">Evolving Architecture of the 21st Century Grid with Two Way Power Flows</div>
         <table>
            <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
            <tbody>
                <tr><td>350</td><td>Kishore Narang</td><td>Founder</td><td>Narnix Technologies</td><td>Chair</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>351</td><td>Pritesh Kumar Srivastava</td><td>HoG Communication</td><td>TP Western Odisha Distribution Limited</td><td>Author</td><td><a href="images/2027/presentations/351. Pritesh Srivastava_Presentation of Select Technical Papers.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>352</td><td>Pritesh Kumar Srivastava</td><td>HoG Communication</td><td>TP Western Odisha Distribution Limited</td><td>Author</td><td><a href="images/2027/presentations/352. Pritesh Kumar Srivastava_Presentation of Select Technical Papers.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>353</td><td>Ankur Kaushik</td><td>-</td><td>Tata Power Distribution Limited</td><td>Author</td><td><a href="images/2027/presentations/353. Ankur Kaushik_Presentation of Select Technical Papers.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>354</td><td>Adarsh Nagarajan</td><td>Strategic Initiatives Advisor</td><td>BSES Rajdhani Power Limited</td><td>Author</td><td><a href="images/2027/presentations/354. Adarsh Nagarajan_Presentation of Select Technical Papers.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>355</td><td>Ashutosh Jaiswal</td><td>Asst. Manager</td><td>Tata Power Delhi Distribution Limited</td><td>Author</td><td><a href="images/2027/presentations/355. Ashutosh Jaiswal_Presentation of Select Technical Papers.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
            </tbody>
         </table>

        <div style="background-color: #FFA500; padding: 6px; margin: 10px 0; font-weight: bold;">India@100 in 2047: Vision for the Indian Power System</div>
         <table>
            <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
            <tbody>
                <tr><td>356</td><td>Sunil Bansod</td><td>Executive Engineer</td><td>Maharashtra State Electricity Transmission Company Ltd.</td><td>Author</td><td><a href="images/2027/presentations/356. Sunil bansod_Presentation of Select Technical Papers.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
            </tbody>
         </table>

        <div style="background-color: #FFA500; padding: 6px; margin: 10px 0; font-weight: bold;">Smart Grids for Smart Cities</div>
         <table>
            <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
            <tbody>
                <tr><td>357</td><td>T Kesavan</td><td>Professor, Department of Electrical and Electronic Engineering</td><td>Easwari Engineering College</td><td>Author</td><td><a href="images/2027/presentations/357. Dr. T. Kesavan, Assistant_Presentation of Select Technical Papers.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
            </tbody>
         </table>

        <div style="background-color: #FFA500; padding: 6px; margin: 10px 0; font-weight: bold;">Smart Water</div>
         <table>
            <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
            <tbody>
                <tr><td>358</td><td>K Balaraman</td><td>Chair ETD 46 BIS</td><td>Former DG – NIWE</td><td>Chair</td><td>Speech</td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>359</td><td>Yasin Mohamed</td><td>Consulting Manager</td><td>Cognizant Technology Solutions India Private Limited</td><td>Author</td><td><a href="images/2027/presentations/359. YASIN MOHAMED_Presentation of Select Technical Papers.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>360</td><td>Moreshwar Salpekar</td><td>Architect – Systems Engineering</td><td>Sevya Multimedia Pvt Ltd</td><td>Author</td><td><a href="images/2027/presentations/360. Moreshwar Salpekar _Presentation of Select Technical Papers.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
            </tbody>
         </table>

        <div style="background-color: #FFA500; padding: 6px; margin: 10px 0; font-weight: bold;">Regulations for the Evolving Smart Energy Systems</div>
         <table>
            <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
            <tbody>
                <tr><td>361</td><td>Balwant Joshi</td><td>Sr Manager</td><td>Idam Infrastructure Advisory Pvt Ltd</td><td>Author</td><td><a href="images/2027/presentations/361. Balawant Joshi_Presentation of Select Technical Papers.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
            </tbody>
         </table>

        <div style="background-color: #FFA500; padding: 6px; margin: 10px 0; font-weight: bold;">New and Emerging Technologies and Trends</div>
         <table>
            <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
            <tbody>
                <tr><td>362</td><td>Pavithra I Arasan</td><td>Lead Engineer</td><td>Tata Power Company Limited</td><td>Author</td><td><a href="images/2027/presentations/362. Pavithra-Arasan_Presentation of Select Technical Papers.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
            </tbody>
         </table>

        <div style="background-color: #FFA500; padding: 6px; margin: 10px 0; font-weight: bold;">Electric Mobility</div>
         <table>
            <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
            <tbody>
                <tr><td>363</td><td>Yasin Mohamed</td><td>Consulting Manager</td><td>Cognizant Technology Solutions India Private Limited</td><td>Author</td><td><a href="images/2027/presentations/363. Yasin Mohammed_Presentation of Select Technical Papers.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>364</td><td>Nirmala Mantri</td><td>Deputy Manager</td><td>Renault Nissan Technology & Business Centre India Private Limited</td><td>Author</td><td><a href="images/2027/presentations/364. Nirmala Mantri_Presentation of Select Technical Papers.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
            </tbody>
         </table>

        <div style="background-color: #FFA500; padding: 6px; margin: 10px 0; font-weight: bold;">Cyber Security for the Digitalized Grids</div>
         <table>
            <thead><tr class="session-header"><th>S. No</th><th>Name</th><th>Designation</th><th>Organization</th><th>Category</th><th>Presentation/Speech</th>
                    <th>Video</th><th>Photos</th></tr></thead>
            <tbody>
                <tr><td>365</td><td>Aamir Hussain Khan</td><td>CISO</td><td>Tata Power Delhi Distribution Limited</td><td>Author</td><td><a href="images/2027/presentations/365. Aamir Hussain Khan _Presentation of Select Technical Papers.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
                <tr><td>366</td><td>Ankit</td><td>Assistant Manager</td><td>Power Grid Corporation of India Ltd</td><td>Author</td><td><a href="images/2027/presentations/366. Ankit_Presentation of Select Technical Papers.pdf" target="_blank" class="video-link">Presentation</a></td><td><a href="https://youtube.com/playlist?list=PLgSiPGd4NrcgaLODviURRjfp8x9BZVOPc&si=bm-uluLdbfbBkxn2" target="_blank" class="video-link">Watch</a></td><td><a href="https://flic.kr/s/aHBqjCNvNS" target="_blank" class="photo-link">View</a></td></tr>
            </tbody>
         </table>

        <!-- Photo Gallery Sections -->
        <div class="sub-session" style="background-color: #FFD580; padding: 8px; margin: 15px 0 10px 0; font-weight: bold;">
            ISUW 2026 Awards Innovation Award Ceremony and Gala Dinner
        </div>
        <div style="margin-bottom: 20px;">
            <a href="https://flic.kr/s/aHBqjCNLTo" target="_blank" class="photo-link" style="background-color: #ff9800; color: white; padding: 8px 15px; border-radius: 5px; display: inline-block;">View Photos</a>
        </div>

        <div class="sub-session" style="background-color: #FFD580; padding: 8px; margin: 15px 0 10px 0; font-weight: bold;">
            ISUW 2026 Welcome Reception and Partner Recognition Ceremony
        </div>
        <div style="margin-bottom: 20px;">
            <a href="https://flic.kr/s/aHBqjCNMEn" target="_blank" class="photo-link" style="background-color: #ff9800; color: white; padding: 8px 15px; border-radius: 5px; display: inline-block;">View Photos</a>
        </div>

        <div class="sub-session" style="background-color: #FFD580; padding: 8px; margin: 15px 0 10px 0; font-weight: bold;">
            ISUW 2026 Exhibition
        </div>
        <div style="margin-bottom: 20px;">
            <a href="https://flic.kr/s/aHBqjCNMj2" target="_blank" class="photo-link" style="background-color: #ff9800; color: white; padding: 8px 15px; border-radius: 5px; display: inline-block;">View Photos</a>
        </div>

        <div class="sub-session" style="background-color: #FFD580; padding: 8px; margin: 15px 0 10px 0; font-weight: bold;">
            ISUW 2026 Branding
        </div>
        <div style="margin-bottom: 20px;">
            <a href="https://flic.kr/s/aHBqjCNRQD" target="_blank" class="photo-link" style="background-color: #ff9800; color: white; padding: 8px 15px; border-radius: 5px; display: inline-block;">View Photos</a>
        </div>

        <div class="sub-session" style="background-color: #FFD580; padding: 8px; margin: 15px 0 10px 0; font-weight: bold;">
            ISUW 2026 Technical Tours and Demonstrations
        </div>
        <div style="margin-bottom: 20px;">
            <p><strong>TPDDL Smart Grid Lab + Micro Substation + 20MW / 40MWh BESS at BRPL</strong><br>
            <a href="https://flic.kr/s/aHBqjCNMHd" target="_blank" class="photo-link" style="background-color: #ff9800; color: white; padding: 8px 15px; border-radius: 5px; display: inline-block; margin-top: 5px;">View Photos</a></p>
            <p><strong>800 kV HVDC Station in AGRA + TAJ MAHAL</strong><br>
            <a href="https://flic.kr/s/aHBqjCNS44" target="_blank" class="photo-link" style="background-color: #ff9800; color: white; padding: 8px 15px; border-radius: 5px; display: inline-block; margin-top: 5px;">View Photos</a></p>
        </div>

        <!-- <div style="text-align: center; margin-top: 30px;">
            <a href="{{ url('/') }}" class="back-link" style="display: inline-block; background-color: #2c3e50; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">← Back to Home</a>
        </div> -->
        
    </div>
</div>
@endsection