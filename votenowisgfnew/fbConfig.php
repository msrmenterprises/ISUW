<?php
session_start();

//Include Facebook SDK
require_once 'inc/facebook.php';

/*
 * Configuration and setup FB API
 */
$appId = '1575094829597845'; 								//Facebook App ID(create this from 																				developer.facebook.com)
$appSecret = 'b53899e4a279483ac463ac883bb0a73f'; 			// Facebook App Secret
$redirectURL = 'https://isuw.in/votenowisgfnew/'; // Callback URL i.e. page where you want to redirect after 														login, this should be same as oauth login in dashboard
//$redirectURL = 'http://cp.chasingpapers.com/'; // Callback URL
//$redirectURL = 'http://cp4.chasingpapers.com/';
$fbPermissions = 'email';  //Required facebook permissions

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret
));
$fbUser = $facebook->getUser();
?>