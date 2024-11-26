<?php include 'header.php'; include 'config.php';?>
<div class="holder">
 <div class="video-container">
	
	<div id="overlay"><div class="content"><h3 style="font-size:30px; color:#e27618"><center>ISGF INNOVATION AWARDS 2022<br/><span>Date: 04 March 2022 | On Digital Platform</center></span></h3></div></div>
    <center><img src="AWARDS BANNER HD (1).jpg"></center>
	<h4 class="cyv" style="font-size:25px;"><center><a href="http://www.isgw.in/votenowisgf/index.php" style="color:#e27618">CAST YOUR VOTE</a></center></h4>
  </div>
  </div>
<div class="clearfix"></div>
<ul style="display:none1">
  
	<li><a href="http://www.isgw.in/votenowisgf/index.php" class="active"><b>Vote</b></a></li>
	<li><a href="http://www.isgw.in/votenowisgf/contact-us.php"><b>Contact Us</b></a></li>
		  <!-- AddToAny BEGIN -->
	<li><a class="a2a_dd" href="https://www.addtoany.com/share"><b>Share</b></a></li>
	<script async src="https://static.addtoany.com/menu/page.js"></script>
	<!-- AddToAny END -->
</ul>
<h4>Voting is closed now.</h4>
<!--<section class="main" style="margin-top: 10px;">
		<div class="inner">
		<div class="clearfix"></div>
		<p>&nbsp </p>
			<p style="font-size:15px;" class="cast_info">Click on<strong> 'VOTE NOW'</strong> and <strong>'Sign in through Twitter'</strong> to <strong>'Vote'</strong> for your favorite Nomination and help them in winning <strong>"ISGF Innovation Awards 2022"</strong>. </p>
			<p>Please note:<br/>
&nbsp  1. An individual can cast only one vote through a Twitter account.<br/>
&nbsp  2. Voting will be active till<b> 11:30 AM -04:00 PM 10 February 2022</b><br/>
&nbsp  3. ISGF will have no access to your Tweets, protected Tweets, Lists and collections<br/>
&nbsp  4. ISGF will have no access to see your Twitter profile information, account settings, accounts you follow, mute, and block<br/>
&nbsp  5. ISGF will have no access to follow and unfollow accounts for you<br/>
&nbsp  6. ISGF will have no access to update your profile, account settings, Post and delete Tweets for you, engage with Tweets posted by others etc.<br/>
&nbsp  7. The only objective of having Twitter login is to have unique voting counts. Twitter voting helps the system in avoiding spam and gives us unique votes for fair marking.</p>
</ul>
<p><strong>Your Votes will help the nominees to win this award!</strong></p>
			<br/>
			<table border=1 cellspacing="5" cellpadding="10">
				<thead class="award_cermny">
					<tr>
						<td><b>Sr. No</b></td>
						<td><b>Award Categories and Companies</b></td>
						<td><b>Nomination Title</b></td>
						<td><b>Click Here to Vote</b></td>
						<td><b>Total Votes</b></td>						
					</tr>
				</thead>		    
		    
<?php
require 'autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;
define('CONSUMER_KEY', 'TWEI2X4pBiBSKdzjfwGnqGj9k'); 	// add your app consumer key between single quotes
define('CONSUMER_SECRET', 'XWxK1UN5Jp3Xr0Uui43JHFvY0F7NrAkRG7as9zvGlPGlXa8SBy'); // add your app consumer 																			secret key between single quotes
define('OAUTH_CALLBACK', 'http://www.isgw.in/votenowisgf/callback.php'); 


// your app callback URL i.e. page you want to load after successful getting the data
//define('oauth_token', '842987337353052160-LL8z2AHxYRP7lHo8iDaq8cLNzeSu8OP');
//define('oauth_token_secret', '6eZZno5qC6d8E5Gtc9jakmhEgvP07F3MfxOBwJ5ysLm8x');


if (!isset($_SESSION['access_token'])) {
	$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);
	$request_token = $connection->oauth('oauth/request_token', array('oauth_callback' => OAUTH_CALLBACK));
	$_SESSION['oauth_token'] = $request_token['oauth_token'];
	$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];
	$url = $connection->url('oauth/authorize', array('oauth_token' => $request_token['oauth_token']));
	
	/* ************************************* */
	?>
	<?php 
			$getProjectCategory = mysqli_query($conn, "select distinct(voting_category) as v_category from voting_category order by id ASC");
			if(mysqli_num_rows($getProjectCategory)>0){
				
				while($result = mysqli_fetch_array($getProjectCategory)){ 
				
					$getProjectByCategory = mysqli_query($conn, "select * from voting_category where voting_category = '".$result['v_category']."'  order by id ASC");
				?>
					<tr><td colspan="5" style="color:#f60;"><strong><?php echo $result['v_category']; ?></strong></td><tr>
						
						<?php if(mysqli_num_rows($getProjectByCategory)>0){
						$i=0;
						while($resultmain = mysqli_fetch_array($getProjectByCategory)){
							$sum = 0;
							$i++;
							$query = mysqli_query($conn, "select count(*) as count_main,vote_category,vote_categorymain  from voting where vote_category='".$resultmain['nominee']."' and vote_categorymain = '".$result['v_category']."'");
							if(mysqli_num_rows($query) > 0){
								
								while($resultQuery = mysqli_fetch_array($query)){
									
									$sum = $resultQuery['count_main'];
								}
							}
						?>
							<tr class="<?php if($i%2==0){ echo "even"; }else{ echo "odd";}?>">
							    <td><?php echo $i; ?></td>
							    <td><?php 
							    if($resultmain['company_Det']=='Married Accommodation Project (MAP)'){
							    echo 'Married Accommodation Project - MAP  (Military Engineering Services)';
							    }else{
							       echo ucwords($resultmain['company_Det']); 
							    }
							    ?></td>
							    <td><?php echo $resultmain['nominee']; ?></td>
							    <td><a onclick="votenow1('<?php echo $result['v_category']; ?>','<?php echo $resultmain['nominee']; ?>')" id="nomination2" class="btn btn-success">Vote Now</a></td>
							    <td><?php echo $sum; ?></td></tr>
							<?php }
						}
						?>
						
						
						
					</tr>
				<?php }
			}
			?>
	<?php
	/* ************************************* */
	
	//echo $url;
	//echo "<a href='$url'><img src='twitter-login-blue.png' style='margin-left:4%; margin-top: 4%'></a>";
} else { //session_unset();
	$auth_token		= $access_token['oauth_token'];
	$access_token 	= $_SESSION['access_token'];
	$connection 	= new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);
	$user 			= $connection->get("account/verify_credentials", ['include_email' => 'true']);
   
	$connection->post('friendships/create', array('screen_name' => 'IndiaSmartGridF'));
	$connection->post('friendships/create', array('screen_name' => 'DUM_India'));
	//$connection->post('friendships/create', array('screen_name' => 'ISUW2019'));
    /* **************************** */
	$screenname     = $user->screen_name;
	$username       = $user->name;
	$project_category 	= $_COOKIE['project_category'];
	$nomination 		= $_COOKIE['nominee'];
	
	$checkifalreadyvoted = mysqli_query($conn, "select * from voting where screenname = '".$screenname."'");
	if(mysqli_num_rows($checkifalreadyvoted)>0){ ?>
    <p class="error_message">You already cast your vote. Thank you</p>
    <style>.award_cermny, .cast_vote, .cast_info{display:none;}</style>
	<?php } else {
		$sQL = "insert into voting set vote_category = '".$nomination."',vote_categorymain = '".$project_category."', name = '".$username."', screenname='".$screenname."', date_added='".date('Y-m-d H:i:s')."'";
		//echo $sQL; exit;
		$addQuery = mysqli_query($conn, $sQL);ob_start(); 
		?>
		<style>.award_cermny, .cast_vote, .cast_info{display:none;}, .cyv{display:none;}</style>
		<p class="success_message" style="font-size: 20; color:#e27618">Thank you for your valuable vote.</p>
		<!------------------------------------------>
		<thead>
			<tr>
				<th style="color: #008000;">Date and Venue</th>
				<th style="color: #008000;">Program</th>
				<th style="color: #008000;">Program Type</th>
				<th style="color: #008000;">Website</th>
			</tr>
		</thead>
		<tbody>
		<tr>
			<td>02 – 04 March 2022</td>
			<td><strong>India Smart Utility Week 2022</strong></td>
			<td>International Conference and Exhibition on Smart Utilities for Smart Cities</td>
			<td><a href="http://www.isgw.in" target="_blank" style="color:#008000;text-decoration: underline;">View</a></td>
		</tr>
		<tr>
			<td>04 March 2022</td>
			<td><strong>ISGF Innovation Awards Ceremony 2022</strong></td>
			<td>Award Distribution Ceremony</td>
			<td><a href="http://www.isgw.in/isgf-innovation-awards-2022/" target="_blank" style="color:#008000;text-decoration: underline;">View</a></td>
		</tr>
		<tr><td style="border-left: solid 1px #fff;border-bottom: solid 1px #fff;"></td><td colspan="2" style="border-bottom: solid 1px #fff;border-left: solid 1px #fff;border-right: solid 1px #fff;" align="CENTER">For queries, please write to us at <a href="mailto:awards@isuw.in" style="color: #fbab18;
">awards@isuw.in</a> | <a href="mailto:isuw@isuw.in" style="color: #fbab18;">isuw@isuw.in</a></td><td style="border-bottom: solid 1px #fff;border-right: solid 1px #fff;"></td></tr>
		</tbody>
		<!------------------------------------------>
	<?php
	}
    /* **************************** */
    /* echo "<img src='$user->profile_image_url'>";echo "<br>";		//profile image twitter link
    echo $user->name;echo "<br>";									//Full Name
    echo $user->location;echo "<br>";								//location
    echo $user->screen_name;echo "<br>";							//username
    echo $user->created_at;echo "<br>";
    echo $user->email;echo "<br>";									//Email, note you need to check permission on Twitter App Dashboard and it will take max 24 hours to use email 
    echo "<pre>";
    print_r($user);
    echo "<pre>";								//These are the sets of data you will be getting from Twitter 	 */
	
    session_destroy();
} ?>
</table>
		</div>
	</section>-->
	<style>
	    .btn-success:hover {
            color: #fff;
            background-color: #449d44;
            border-color: #398439;
        }
        .btn-success {
            color: #fff;
            background-color: #5cb85c;
            border-color: #4cae4c;
        }
        .btn {
            display: inline-block;
            margin-bottom: 0;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            background-image: none;
            border: 1px solid transparent;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            border-radius: 4px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        .btn-success.focus, .btn-success:focus {
            color: #fff;
            background-color: #449d44;
            border-color: #255625;
        }
        .even{ background:#f3f2f2;}
                .success_message {
            font-weight: bold;
            color: #008000;
            margin-bottom: 20px;
            font-size: 18px;
        }
		
		li a:hover {
			padding: 10px;
    background-color: rgb(226, 118, 24);
    color: rgb(255, 255, 255);
}

ul {
    list-style-type: none;
    margin: 0px;
    overflow: hidden;
    padding: 0px 17%;
    border-bottom: 1px solid rgb(204, 204, 204);
}

li {
  display: inline;
}
li a{
 padding: 15px;
}
 li a.active {
    
    color: rgb(255, 255, 255);
    text-align: center;
    font-size: 24px;
    padding: 14px 16px;
    text-decoration: none;
    background: rgb(226, 118, 24);
}

        .error_message {
            font-weight: bold;
            color: #FF0000;
            margin-bottom: 20px;
            font-size: 18px;
        }
	</style>
	<div class="clearfix"></div>
<?php include 'footer.php'; ?>