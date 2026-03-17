<?php include 'header.php'; include 'config.php';?>
<div class="holder">
  <div class="video-container">
	<center><img src="Banner_v6.gif"></center>
	<div id="overlay"><div class="content"><h3>ISGF INNOVATION AWARDS 2019<br/><span>Date: 15 March 2019 | Venue: Hotel Le Meridien, New Delhi</span></h3></div></div>
  
  </div>
  </div>
<div class="clearfix"></div>
<ul style="display:none1">
  
	<li><a href="http://www.isgw.in/votenownew/index.php" class="active">Vote</a></li>
	<li><a href="http://www.isgw.in/votenownew/contact-us.php">Contact Us</a></li>
		  <!-- AddToAny BEGIN -->
	<li><a class="a2a_dd" href="https://www.addtoany.com/share">Share</a></li>
	<script async src="https://static.addtoany.com/menu/page.js"></script>
	<!-- AddToAny END -->
</ul>

<section class="main" style="margin-top: 10px;">
		<div class="inner">
		<div class="clearfix"></div>
			<h3 class="cast_vote">CAST YOUR VOTE</h3>
			<p style="font-size:15px;" class="cast_info">Click on <strong>'VOTE NOW'</strong> and <strong>'Sign in through Twitter'</strong> to <strong>'Vote'</strong> for your favorite Nomination. An individual can caste only one vote through Twitter account. Voting will be active till 15 Feb 2019. Your Votes will help the nominees to win this award! </p><br/>
			<table border=1 cellspacing="5" cellpadding="10">
				<thead class="award_cermny">
					<tr>
						<td>Sr. No</td>
						<td>Awards Categories</td>
						<td>Nominees</td>
						
					</tr>
				</thead>		    
		    
<?php
require 'autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;
define('CONSUMER_KEY', 'TWEI2X4pBiBSKdzjfwGnqGj9k'); 	// add your app consumer key between single quotes
define('CONSUMER_SECRET', 'XWxK1UN5Jp3Xr0Uui43JHFvY0F7NrAkRG7as9zvGlPGlXa8SBy'); // add your app consumer 																			secret key between single quotes
define('OAUTH_CALLBACK', 'http://www.isgw.in/votenownew/callback.php'); 


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
	<?php
	/* ************************************* */
	
	//echo $url;
	//echo "<a href='$url'><img src='twitter-login-blue.png' style='margin-left:4%; margin-top: 4%'></a>";
} else { //session_unset();
	$auth_token		= $access_token['oauth_token'];
	$access_token 	= $_SESSION['access_token'];
	$connection 	= new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);
	$user 			= $connection->get("account/verify_credentials", ['include_email' => 'true']);
   
   
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
		<style>.award_cermny, .cast_vote, .cast_info{display:none;}</style>
		<p class="success_message">Thank you for your valuable vote.			</p>
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
	</section>
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
        .error_message {
            font-weight: bold;
            color: #FF0000;
            margin-bottom: 20px;
            font-size: 18px;
        }
	</style>
	<div class="clearfix"></div>
<?php include 'footer.php'; ?>