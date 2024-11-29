<?php include "header.php"; ?>
<style>
.cast_vote{
	font-weight:600;
	margin-bottom:20px;
	color:#000;
	font-size:25px;
	text-align:left;
	float:none;
}
.inner p{
	text-align:Left;
}

</style>
<body>
	<div class="holder">
	  <div class="video-container">
		<center><img src="Banner_v6.gif"></center>
		<div id="overlay"><div class="content"><h3>ISGF INNOVATION AWARDS 2019<br/><span>Date: 15 March 2019 | Venue: Hotel Le Meridien, New Delhi</span></h3></div></div>
	  
	  </div>
	  </div>
	<div class="clearfix"></div>
	<ul>
	  
	  <li><a href="vote.php" class="active">Vote</a></li>
	  <li><a href="contact-us.php">Contact Us</a></li>
	  <li><a class="a2a_dd" href="https://www.addtoany.com/share">Share</a></li>
		<script async src="https://static.addtoany.com/menu/page.js"></script>
	</ul>
	<section class="main" style="margin-top: 10px;">
		<div class="inner">
			<?php 
			if(isset($_REQUEST['msg']) && !empty($_REQUEST['msg']) && $_REQUEST['msg'] == -1){
				echo "You already cast your vote. Thank you";
			}
			if(isset($_REQUEST['msg']) && !empty($_REQUEST['msg']) && $_REQUEST['msg'] == 1){
				echo "Thank you for the Vote";
			}
			?>
			
			<!--<div class="contentmain">
				<div class="points">
					<h1>&nbsp;</h1>

				<p><span><span style="background-color:white"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:12.0pt"><span style="font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;"><span style="color:#471f1f">Instructions</span></span></span></strong><span style="font-size:12.0pt"><span style="font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;"><span style="color:#471f1f">:</span></span></span></span></span></span></p>

			<ol>
				<li><span><span style="background-color:white"><span style="color:#471f1f"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;">Go to <strong>&lsquo;VOTE&rsquo; option and scroll down to &lsquo;CAST YOUR VOTE&rsquo;</strong></span></span></span></span></span></span></li>
				<li><span><span style="background-color:white"><span style="color:#471f1f"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;">Click on <strong>&lsquo;VOTE NOW&rsquo; </strong>button. (Please note : you can only cast one vote)</span></span></span></span></span></span></li>
				<li><span><span style="background-color:white"><span style="color:#471f1f"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:12.0pt"><span style="font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;">&lsquo;Sign in through Twitter&rsquo;&nbsp;</span></span></strong><span style="font-size:12.0pt"><span style="font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;">and&nbsp;proceed to<strong>&nbsp;&lsquo;Vote&rsquo;.&nbsp;&nbsp;</strong>Click&nbsp;<strong>&lsquo;Confirm&rsquo;</strong>&nbsp;on the pop-up to cast your vote.</span></span></span></span></span></span></li>
				<li><span><span style="background-color:white"><span style="color:#471f1f"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;">Share with your stakeholders and peers to increase your desired project&rsquo;s winning chances!</span></span></span></span></span></span></li>
				<li><span><span style="background-color:white"><span style="color:#471f1f"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;">Voting Page will be active from 29 Jan 2019 till 14 Feb 2019</span></span></span></span></span></span></li>
			</ol>

				</div>
				<div class="imag"><img src="http://www.isgw.in/wp-content/uploads/2018/08/award-683x1024.jpg"></div>
			</div>-->
			<div class="clearfix"></div>
			<h3 class="cast_vote">CAST YOUR VOTE</h3>
			<p style="font-size:15px;">Click on '<strong>VOTE NOW</strong>' and '<strong>Sign in through Twitter</strong>' to '<strong>Vote</strong>' for your favourite Nomination. An individual can caste only one vote through Twitter account. Voting will be active from 29 Jan 2019 to 14 Feb 2019. Your Votes will help the nominees to win this award!</p><br/>
			<table border=1 cellspacing="5" cellpadding="10">
				<thead class="award_cermny">
					<tr>
						<td>Sr. No</td>
						<td>Awards Categories</td>
						<td>Nominees</td>
						
					</tr>
				</thead>
			<?php 
			$getProjectCategory = mysqli_query($conn, "select distinct(voting_category) as v_category from voting_category");
			if(mysqli_num_rows($getProjectCategory)>0){
				$i=0;
				while($result = mysqli_fetch_array($getProjectCategory)){ 
				
					$getProjectByCategory = mysqli_query($conn, "select * from voting_category where voting_category = '".$result['v_category']."'");
					
					$i++;
				?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $result['v_category']; ?></td>
						<td>
						<table border="1"><thead  class="innerthead"><tr><th>Company</th><th>Nominee</th><th>Click Here to Vote</th><th>Total Vote</th></tr></thead>
						<?php if(mysqli_num_rows($getProjectByCategory)>0){
						while($resultmain = mysqli_fetch_array($getProjectByCategory)){
							$sum = 0;
							
							$query = mysqli_query($conn, "select count(*) as count_main,vote_category,vote_categorymain  from voting where vote_category='".$resultmain['nominee']."' and vote_categorymain = '".$result['v_category']."'");
							if(mysqli_num_rows($query) > 0){
								while($resultQuery = mysqli_fetch_array($query)){
									$sum = $resultQuery['count_main'];
								}
							}
						?>
							<tr><td><?php echo ucwords($resultmain['company_Det']); ?></td><td><?php echo $resultmain['nominee']; ?></td><td><a onclick="votenow1('<?php echo $result['v_category']; ?>','<?php echo $resultmain['nominee']; ?>')" id="nomination2" style="background:#1ea236;padding:10px;color:#FFF;cursor:pointer;display:flex">Vote Now</a></td><td><?php echo $sum; ?></td></tr>
							<?php }
						}
						?>
						</table></td>
						
						
					</tr>
				<?php }
			}
			?>
			
			
			
			
			</table>
			
		</div>
	</section>
<?php include "footer.php"; ?>