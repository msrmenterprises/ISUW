@extends('master')
@section('content')

 <div class="container">
	<style>
		.tabletheme, td, th{padding:6px;}
	</style>
    <style>
        :root {
            --primary: #EF7B00;
            --primary-dark: #d46c00;
            --secondary: #0056b3;
            --light: #f8f9fa;
            --dark: #343a40;
            --gray: #6c757d;
            --light-gray: #e9ecef;
            --border: #dee2e6;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        header {
            text-align: center;
            margin-bottom: 30px;
            padding: 20px 0;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .logo-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        
        .logo-container img {
            max-height: 100px;
            max-width: 100%;
        }
        
        h1 {
            color: var(--primary);
            margin-bottom: 10px;
            font-size: 2.2rem;
            text-align: center;
        }
        
        h2 {
            color: var(--primary);
            margin: 25px 0 15px;
            padding-bottom: 8px;
            border-bottom: 2px solid var(--primary);
        }
        
        h3 {
            color: var(--secondary);
            margin: 20px 0 10px;
        }
        
        .underline {
            text-decoration: underline;
            text-underline-offset: 3px;
        }
        
        .table-container {
            overflow-x: auto;
            margin: 30px 0;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }
        
        th, td {
            padding: 15px;
            text-align: left;
            border: 1px solid var(--border);
        }
        
        thead th {
            background-color: var(--primary);
            color: white;
            font-weight: 600;
            text-align: center;
        }
        
        tbody tr:nth-child(even) {
            background-color: var(--light-gray);
        }
        
        tbody tr:hover {
            background-color: rgba(239, 123, 0, 0.05);
        }
        
        .package-list {
            list-style-type: none;
        }
        
        .package-list li {
            margin-bottom: 8px;
            position: relative;
            padding-left: 20px;
        }
        
        .package-list li:before {
            content: "•";
            color: var(--primary);
            font-weight: bold;
            position: absolute;
            left: 0;
        }
        
        .note {
            background-color: #fff9e6;
            padding: 15px;
            border-left: 4px solid #ffc107;
            margin: 20px 0;
            border-radius: 4px;
        }
        
        .discounts-container {
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin: 30px 0;
        }
        
        .discount-table {
            width: 100%;
            margin: 20px 0;
        }
        
        .discount-table th {
            background-color: var(--primary);
            color: white;
            padding: 12px 15px;
        }
        
        .discount-table td {
            padding: 12px 15px;
            vertical-align: top;
        }
        
        .discount-table tr:nth-child(even) {
            background-color: var(--light-gray);
        }
        
        .disclaimer {
            background-color: #f8d7da;
            padding: 20px;
            border-left: 4px solid #dc3545;
            margin: 30px 0;
            border-radius: 4px;
        }
        
        .disclaimer h3 {
            color: #721c24;
        }
        
        .contact-info {
            margin: 20px 0;
            padding: 15px;
            background-color: #e7f3ff;
            border-radius: 8px;
        }
        
        footer {
            text-align: center;
            margin-top: 40px;
            padding: 20px;
            color: var(--gray);
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            th, td {
                padding: 10px;
                font-size: 0.9rem;
            }
            
            h1 {
                font-size: 1.8rem;
            }
            
            .logo-container {
                flex-direction: column;
                align-items: center;
            }
        }
        
        @media (max-width: 576px) {
            th, td {
                padding: 8px;
                font-size: 0.85rem;
            }
            
            .container {
                padding: 10px;
            }
        }
        
        .highlight {
            background-color: rgba(255, 215, 0, 0.15);
            font-weight: bold;
        }
    </style>
 <div class="row justify-content-left ">     
<p></p>

<style type="text/css">.diff_ss1{margin-left:30px;}</style>
<div class="k_cheading"> 
		<h1>INDIA SMART UTILITY WEEK <span class="k_greencolor">2025 Registration</span> </h1>
		<img src="/public/uploads/images/kborder_bottom.png" alt=""> 
	</div>
	
	<p><img src="images/2026/ISUWReg.jpg" alt=""> </p>
	<div class="k_cheading">
	
	<a href="#" target="_blank"><img src="https://isuw.in/public/uploads/images/register-now.PNG" class="center" style="margin-right:50px;"></img></a>
	
	</div>

	<p></p>
<section>
            <h2>Registration Categories & Fees</h2>
    <p class="note"><strong>Note:</strong> 18% GST will be applicable on all the above-mentioned amounts</p>
            
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Registration Categories</th>
                            <th>Fee in INR + 18% GST Extra</th>
                            <th>Fee in USD + Taxes</th>
                            <th>Package Includes Passes For</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="highlight">
                            <td><strong>Conference Full Pass</strong><br>
                                4 Day Conference and Exhibition package with Special Workshops, Master classes, 
                                Technical Tours, Gala Dinner and ISGF Innovation Awards (10 - 14 March 2026)
                            </td>
                            <td><strong>40,000*</strong></td>
                            <td><strong>500*</strong></td>
                            <td>
                                <ul class="package-list">
                                    <li><strong>Access to ISUW Conference and Exhibition for 3 Days (11 – 13 March 2026)</strong></li>
                                    <li><strong>Access to Master classes on 10 March 2026 and Technical Tours on 14 March 2026</strong></li>
                                    <li><strong>1 coupon of the amazing lunch buffet spread for 3 days (11 – 13 March 2026)</strong></li>
                                    <li><strong>High tea and coffee throughout the conference day</strong></li>
                                    <li><strong>Exclusively designed Delegate Bag with goodies and information/details of the event, participating partners sponsor and exhibitors</strong></li>
                                    <li><strong>Special access to ISGF Innovation Awards Night on 13 March 2026</strong></li>
                                    <li><strong>Gala Dinner for 1 Pax on 13 March 2026</strong></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>3 Day Conference and Exhibition package (Including Gala Dinner)</strong></td>
                            <td><strong>35,000*</strong></td>
                            <td><strong>450*</strong></td>
                            <td>
                                <ul class="package-list">
                                    <li><strong>Access to ISUW Conference and Exhibition for 3 Days (11 – 13 March 2026)</strong></li>
                                    <li>1 coupon of the amazing lunch buffet spread for 3 days <strong>(11 – 13 March 2026)</strong></li>
                                    <li>High tea and coffee throughout the conference day</li>
                                    <li>Exclusively designed Delegate Bag with goodies and information/details of the event, participating partners sponsor and exhibitors</li>
                                    <li>Special access to ISGF Innovation Awards Night on <strong>13 March 2026</strong></li>
                                    <li>Gala Dinner for 1 Pax on <strong>13 March 2026</strong></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>ISGF Innovation Awards 2026 with Gala Dinner Pass (13 March 2026)</strong></td>
                            <td><strong>10,000*</strong></td>
                            <td><strong>150*</strong></td>
                            <td>
                                <ul class="package-list">
                                    <li><strong>Access to ISGF Innovation Awards Night and Gala Dinner for 1 Pax** on 13 March 2026</strong></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Master Classes on 10 March 2026 and 3 Days Exhibition only (11-13 March 2026)</strong></td>
                            <td><strong>8,000*</strong></td>
                            <td><strong>100*</strong></td>
                            <td>
                                <ul class="package-list">
                                    <li><strong>Access to Master Classes on 10 March 2026</strong></li>
                                    <li><strong>3 Days Exhibition only (11-13 March 2026)</strong></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Bonafide Indian Students Pass for Conference & Exhibition** (10-13 March 2026)</strong></td>
                            <td><strong>10,000</strong></td>
                            <td><strong>NA</strong></td>
                            <td>
                                <ul class="package-list">
                                    <li><strong>Package including Master Classes, Conference, Exhibition and Special Workshops.</strong></li>
                                    <li>Attach/Email your valid ID card to avail the offer at isuw@isuw.in</li>
                                    <li>Access to ISUW Conference and Exhibition for 3 days <strong>(11 – 13 March 2026)</strong></li>
                                    <li>1 coupon of the amazing lunch buffet spread for 3 days</li>
                                    <li>High tea and coffee throughout the conference day</li>
                                </ul>
                                <p class="note" style="margin-top: 10px;">
                                    <strong>Please note:</strong> Only valid students with valid ID card will be allowed to get this pass. 
                                    ISGF holds the right to cancel the registration in case invalid ID is found. 
                                    Student id card shall be emailed at <a href="mailto:isuw@isuw.in">isuw@isuw.in</a> in advance.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Visitor Pass for 3 Days Exhibition Only (11-13 March 2026)</strong></td>
                            <td><strong>Complimentary</strong></td>
                            <td><strong>Complimentary</strong></td>
                            <td>
                                <ul class="package-list">
                                    <li><strong>Access to Exhibition from 11 – 13 March 2026</strong></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Indian Utility Pass</strong></td>
                            <td><strong>Complimentary</strong></td>
                            <td><strong>Complimentary</strong></td>
                            <td>
                                <ul class="package-list">
                                    <li><strong>For Registration of Indian Utility Officials,</strong> Attach/Email your valid ID card at <a href="mailto:yashika@indiasmartgrid.org">yashika@indiasmartgrid.org</a></li>
                                    <li>Valid requests will get access to ISUW Conference and Exhibition for 3 days <strong>(11 – 13 March 2026),</strong> 1 coupon of the amazing lunch buffet spread for 3 days, High tea and coffee throughout the conference day</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="discounts-container">
            <h2>Offers and Discounts</h2>
            
            <table class="discount-table">
                <thead>
                    <tr>
                        <th>Discount Percentage</th>
                        <th>Terms and Conditions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>20%</strong></td>
                        <td>Early Bird offer is valid till <strong>10 Feb 2026</strong>. To get this code, please write to us at <a href="mailto:secretariat@isuw.in">secretariat@isuw.in</a> and <a href="mailto:isuw@isuw.in">isuw@isuw.in</a> with your organisation details</td>
                    </tr>
                    <tr>
                        <td><strong>20%</strong></td>
                        <td>Only for ISGF Members valid till <strong>20 Feb 2026</strong> - <a href="https://indiasmartgrid.org/members-list" target="_blank">https://indiasmartgrid.org/members-list</a>. To get this code, please write to us at <a href="mailto:secretariat@isuw.in">secretariat@isuw.in</a> and <a href="mailto:isuw@isuw.in">isuw@isuw.in</a> with your organisation details</td>
                    </tr>
                    <tr>
                        <td><strong>20%</strong></td>
                        <td>This offer is valid for <strong>Delegate group of 4 till 15 Feb 2026</strong>. In case, after getting the DISCOUNT CODE, registration is not made for the mentioned number of Delegates, ISGF holds the right to cancel your registration. To get this code, please write to us at <a href="mailto:secretariat@isuw.in">secretariat@isuw.in</a> and <a href="mailto:isuw@isuw.in">isuw@isuw.in</a> with delegate details such as Name, Email id and Company Name</td>
                    </tr>
                    <tr>
                        <td><strong>30%</strong></td>
                        <td>This offer is valid for <strong>Delegate group of 5 and above till 15 Feb 2026.</strong> In case, after getting the DISCOUNT CODE, registration is not made for the mentioned number of Delegates, ISGF holds the right to cancel your registration. To get this code, please write to us at <a href="mailto:secretariat@isuw.in">secretariat@isuw.in</a> and <a href="mailto:isuw@isuw.in">isuw@isuw.in</a> with Delegate Details such as Name, Email id and Company Name</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section class="disclaimer">
            <h2>Disclaimer</h2>
            <ul class="package-list">
                <li><strong>All the Foreign Delegates</strong> interested in visiting ISUW 2026 may apply for e-visa. For Visa letter request please register yourself and send us a request for visa letter on email id <a href="mailto:isuw@isuw.in">isuw@isuw.in</a></li>
                <li>ISGF holds the right of admission, registration cancellation and to revoke any discount offers</li>
                <li>GST and other important charges will be over and above the mentioned fee</li>
                <li>For queries, please write to us at <a href="mailto:secretariat@isuw.in">secretariat@isuw.in</a> and <a href="mailto:isuw@isuw.in">isuw@isuw.in</a></li>
            </ul>
	    </section>
    <!-- <table class="tabletheme" border="1">
        <thead>
            <tr style="background: #EF7B00;color: white;">
                <th>Registration Categories</th>
                <th>Fee in INR + 18% GST Extra</th>
                <th>Fee in USD + Taxes</th>
                <th>Package Includes Passes For</th>
            </tr>
        </thead>
        <tbody>
            <tr style="font-weight:bold">
                <td>Conference Full Pass<br/>3 Day Conference and Exhibition package with Special Workshops, Master classes, Technical Tours, Gala Dinner and ISGF Innovation Awards (18 - 22March 2025)</td>
                <td>40,000*</td>
                <td>500*</td>
                <td>
                <ul class="theme">
                    
                <li>Access to ISUW Conference and Exhibition for 3 Days (19 – 21 March 2025)</li>
                <li>Access to Master classes on 18 March 2025 and Technical Tours on 22 March 2025</li>
                <li> 1 coupon of the amazing lunch buffet spread for 3 days (19 – 21 March 2025)</li>
                <li> High tea and coffee throughout the conference day</li>
                <li> Exclusively designed Delegate Bag with goodies and information/details of the event, participating partners, sponsors, and exhibitors</li>
                <li> Special access to ISGF Innovation Awards Night on 21 March 2025<</li>
                <li> Gala Dinner for 1 Pax on 21 March 2025</li>
                </ul>   
                </td>
            </tr>
            <tr>
                <td><b>3 Day Conference and Exhibition package (Including Gala Dinner)</b></td>
                <td><b>35,000*</b></td>
                <td><b>450*</b></td>
                <td>
                <ul class="theme">
                    <li><b>Access to ISUW Conference and Exhibition for 3 Days (19 – 21 March 2025)</b></li>
                    <li>1 coupon of the amazing lunch buffet spread for 3 days <b>(19 – 21 March 2025)</b></li>
                    <li>High tea and coffee throughout the conference day</li>
                    <li> Exclusively designed Delegate Bag with goodies and information/details of the event, participating partners, sponsors, and exhibitors</li>
                    <li>Special access to ISGF Innovation Awards Night on 21 March 2025</li>
                    <li>Gala Dinner for 1 Pax on 21 March 2025</li>
                </ul>    
                </td>
            </tr>
            <tr>
                <td>ISGF Innovation Awards 2025 with Gala Dinner Pass (21 March 2025)</td>
                <td>10,000*</td>
                <td>150*</td>
                <td>Access to ISGF Innovation Awards Night and Gala Dinner for 1 Pax on 21 March 2025</td>
            </tr>
            <tr>
                <td>Master Classes on 18 March 2025 and 3 Days Exhibition only (18 - 21 March 2025)</td>
                <td>8,000*</td>
                <td>100*</td>
                <td>
                <ul class="theme">
                    <li>Access to Master Classes on 18 March 2025</li>
                    <li>3 Days Exhibition only (18 - 21 March 2025)</li>
                </ul>    
                </td>
            </tr>
            <tr>
                <td>Bonafide Indian Students Pass for Conference & Exhibition (18 - 21 March 2025)</td>
                <td>10,000</td>
                <td>NA</td>
                <td>
                <ul class="theme">
                    <li>Package including Master Classes, Conference, Exhibition, and Special Workshops</li>
                    <li>Attach/Email your valid ID card to avail the offer at isuw@isuw.in</li>
                    <li>Access to ISUW Conference and Exhibition for 3 days (13 – 15 March 2024)</li>
                    <li>1 coupon of the amazing lunch buffet spread for 3 days</li>
                    <li>High tea and coffee throughout the conference day</li>
                    <li>Please note: Only valid students with a valid ID card will be allowed to get this pass. ISGF holds the right to cancel the registration in case an invalid ID is found. The student ID card shall be emailed at isuw@isuw.in in advance</li>
                </ul>    
                </td>
            </tr>
            <tr>
                <td>Visitor Pass for 3 Days Exhibition Only (19 - 21 March 2025)</td>
                <td>Complimentary</td>
                <td>Complimentary</td>
                <td>Access to Exhibition from 19 – 21 March 2025</td>
            </tr>
            <tr>
                <td>Indian Utility Pass</td>
                <td>Complimentary</td>
                <td>Complimentary</td>
                <td>
                <ul class="theme">
                    <li>For Registration of Indian Utility Officials, Attach/Email your valid ID card at yashika@indiasmartgrid.org</li>
                    <li>Valid requests will get access to ISUW Conference and Exhibition for 3 days (13 – 15 March 2024), 1 coupon of the amazing lunch buffet spread for 3 days, High tea and coffee throughout the conference day</li>
                </ul>
                </td>
            </tr>
        </tbody>
    </table>
    <p>*18% GST will be applicable on all the above-mentioned amounts</p>

	<h2>Offers and Discounts</h2>
    <table class="tabletheme" border="1">
        <thead>
		<tr style="background: #EF7B00;color: white;">
			<th>Discount Percentage</th>
			<th>Terms and Conditions</th>
		</tr>
        </thead>
        <tbody>
            <tr>
                <td>20%</td>
                <td>Early Bird offer is valid till 10 Feb 2025. To get this code, please write to us at secretariat@isuw.in and isuw@isuw.in with your organisation details</td>
            </tr>
            <tr>
                <td>20%</td>
                <td>Only for ISGF Members valid till 20 Feb 2025. To get this code, please write to us at secretariat@isuw.in and isuw@isuw.in with your organisation details</td>
            </tr>
            <tr>
                <td>20%</td>
                <td>This offer is valid for Delegate group of 4 till 15 Feb 2025. In case, after getting the DISCOUNT CODE, registration is not made for the mentioned number of Delegates, ISGF holds the right to cancel your registration. To get this code, please write to us at secretariat@isuw.in and isuw@isuw.in with delegate details such as Name, Email id, and Company Name</td>
            </tr>
            <tr>
                <td>30%</td>
                <td>This offer is valid for Delegate group of 5 and above till 15 Feb 2025. In case, after getting the DISCOUNT CODE, registration is not made for the mentioned number of Delegates, ISGF holds the right to cancel your registration. To get this code, please write to us at secretariat@isuw.in and isuw@isuw.in with Delegate Details such as Name, Email id, and Company Name</td>
            </tr>
        </tbody>
    </table>




<p><b>Disclaimer:</b><br/>
<ul>
    <li>All the Foreign Delegates interested in visiting ISUW 2025 may apply for e-visa.For Visa
letter request please register yourself and send us a request for visa letter on email id
<a href="mailto:isuw@isuw.in">isuw@isuw.in</a></li>
    <li>ISGF holds the right of admission, registration cancellation and to revoke any discount offers</li>
<li>GST and other important charges will be over and above the mentioned fee</li>
<li>For queries, please write to us at <a href="mailto:secretariat@isuw.in">secretariat@isuw.in</a> and <a href="mailto:isuw@isuw.in">isuw@isuw.in</a></li></ul>
<p></p>

	<div class="k_cheading">
	
	<img src="https://isuw.in/public/uploads/images/register-now.PNG" class="center" style="margin-right:50px;"></img>
	
	</div> -->
	

	<p></p>
</div></div>
@endsection