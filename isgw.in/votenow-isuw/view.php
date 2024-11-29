<?php 
session_start();
if(!isset($_SESSION['userData'])){
	header('location: index.php');
}
$profile_banner_url=$_SESSION['userData']->profile_banner_url;
$profile_image_url=$_SESSION['userData']->profile_image_url;
$location=$_SESSION['userData']->location;
$description=$_SESSION['userData']->description;
$profileLink = 'https://twitter.com/'.$_SESSION['userData']->screen_name;
$followers_count=$_SESSION['userData']->followers_count;
$friends_count=$_SESSION['userData']->friends_count;
$statuses_count=$_SESSION['userData']->statuses_count;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>CodeCastra Login & Registration with twitter using Php </title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<header>
		<div class="head_left">
			<img src="assets/image/logo.png" height="50px"  >
		</div>
	</header>
	<p class="main_title">
		Login & Registration with Twitter using Php 	<br/>
		<a href="http://www.codecastra.com/login-with-twitter-using-php/"><small>← Back to article</small></a>
	</p>
	<section class="main">

		<div class="inner">
			
			
			<div class="wthree_tab_content">
				<div class="wthree_tab_content_pos">
					<div class="wthree_tab_content_pos_grid">
						<img src="<?= $profile_banner_url; ?>" class="cover" > 
						<img src="<?= str_replace("_normal","",$profile_image_url); ?>" class="profile_pic" > 
						<br>
						<h2>Hello</h2>
						<h3>I'm <?= $_SESSION['userData']->name; ?></h3>
						<h6>Visit <a class="clor" target="_blank" href="<?= $profileLink; ?>">Twitter Profile</a></h6>
						<ul class="address">
							<li>
								<ul class="address-text">
									<li><b>Description : </b></li>
									<li><?= $description; ?></li>
								</ul>
							</li>
							<li>
								<ul class="address-text">
									<li><b>Location : </b></li>
									<li><?= $location; ?></li>
								</ul>
							</li>
							<li>
								<ul class="address-text">
									<li><b>Friends : </b></li>
									<li class="pad"><?= $friends_count; ?></li>
									<li><b>Followers : </b></li>
									<li class="pad"><?= $followers_count; ?></li>
									<li><b>Total Tweet : </b></li>
									<li><?= $statuses_count; ?></li>
								</ul>
							</li>
							
							<li>
								<ul class="address-text">
									<li><a class="clor" href="logout.php">Logout</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div>

	</section>

	<section class="content content--related">
		<p>If you enjoyed this demo you might also like:</p>
		<a class="media-item" href="http://codecastra.com/login-with-facebook-using-php/">
			<img class="media-item__img" src="assets/related/related_fb.png">
			<h3 class="media-item__title">Login & Registration With  Facebook</h3>
		</a>
		<a class="media-item" href="http://codecastra.com/login-with-google-using-php/">
			<img class="media-item__img" src="assets/related/related_goole.png">
			<h3 class="media-item__title">Login & Registration With  Google</h3>
		</a>
	</section>

</body>
</html>