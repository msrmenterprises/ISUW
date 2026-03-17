<?php include "header.php";?>
<style>
table{
	border-collapse: collapse;
	margin-bottom:20px;
}
.cast_vote{
	font-weight:600;
	margin-bottom:20px;
	color:#000;
	font-size:25px;
	text-align:left;
	float:none;
}
.success_message{
	font-weight:bold;
	color: #008000;
	margin-bottom:20px;
	font-size:18px;
}
.error_message{
	font-weight:bold;
	color: #FF0000;
	margin-bottom:20px;
	font-size:18px;
}
</style>
<body>
	<div class="holder">
	  <div class="video-container  v80">
		<center><img src="Banner_v6.gif"></center>
		<div id="overlay"><div class="content"><h3>ISGF INNOVATION AWARDS 2019<br/><span>Date: 15 March 2019 | Venue: Hotel Le Meridien, New Delhi</span></h3></div></div>
	  
	  </div>
	  </div>
	<div class="clearfix"></div>
	<ul>
	  
	  <li><a href="http://www.isgw.in/votenow/index.php">Vote</a></li>
	  <li><a href="http://www.isgw.in/votenow/contact-us.php">Contact Us</a></li>
	  <li><a class="a2a_dd" href="https://www.addtoany.com/share">Share</a></li>
		<script async src="https://static.addtoany.com/menu/page.js"></script>
	</ul>
	<section class="main">
		<div class="inner">
			<?php 
			if(isset($_REQUEST['msg']) && !empty($_REQUEST['msg']) && $_REQUEST['msg'] == -1){
				echo "<p class='error_message'>You already cast your vote. Thank you</p>";
			}
			if(isset($_REQUEST['msg']) && !empty($_REQUEST['msg']) && $_REQUEST['msg'] == 1){
				echo "<p class='success_message'>Thank you for your valuable vote.</a>";
			}
			?>
			<h3 class="cast_vote">To attend and to register for</h3>
			<table border="1" >
				<thead>
					<tr>
						<th>Date and Venue</th>
						<th>Program</th>
						<th>Program Type</th>
						<th>Website</th>
					</tr>
				</thead>
				<tbody>
				<tr>
					<td>12 – 16 March 2019, ManekshawCenter, New Delhi</td>
					<td>India Smart Utility Week 2019</td>
					<td>International Conference and Exhibition on Smart Utilities for Smart Cities</td>
					<td><a href="http://www.isgw.in" target="_blank" style="color:#008000;text-decoration: underline;">View</a></td>
				</tr>
				<tr>
					<td>15 March 2019, Le Meridien Hotel, New Delhi</td>
					<td>ISGF Innovation Awards Ceremony</td>
					<td>Award Distribution Ceremony, Gala Dinner and Cultural Program</td>
					<td><a href="http://www.isgw.in/isgf-innovation-awards-2019/" target="_blank" style="color:#008000;text-decoration: underline;">View</a></td>
				</tr>
				</tbody>
			</table>
			<a href="http://www.isgw.in/isuw-registration-2019/" target="_blank"><img src="http://www.isgw.in/wp-content/uploads/2017/09/Register_Now_Button.png" style="width:181px;"></a>
		</div>
	</section>


</body>
<?php include "footer.php"; ?>