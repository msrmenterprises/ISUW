<html>
<head>
<title> India Smart Grid Forum</title>
</head>
<body>
<center>
<?php include('Crypto.php');
include "inc_connection.php";

?>
<?php 

	error_reporting(0);
	
	$merchant_data='';
	$working_key='E1560C9ABE00212F4D57228388DF22F1';//Shared by CCAVENUES
	$access_code='AVES06CJ92BP68SEPB';//Shared by CCAVENUES
	
	date_default_timezone_set('Asia/Kolkata');
	$orderid = date('YmdHis');
	
	
	$_POST['order_id'] = $orderid;
	$_POST['tid'] = $orderid;
	

	$amount = strip_tags($_POST['amount']);
	$type_contribution = strip_tags($_POST['type_contribution']);
	$start_date = date('Y-m-d H:i:s',strtotime($_POST['start_date']));
	$company_name = strip_tags($_POST['company_name']);
	$telephone = strip_tags($_POST['telephone']);
	$pincode = strip_tags($_POST['pincode']);
	$address = strip_tags($_POST['address']);
	$country = strip_tags($_POST['country']);
	//$state = strip_tags($_POST['state']);
	$city = strip_tags($_POST['city']);
	$currency = strip_tags($_POST['currency']);
	
	mysqli_query($conn,"insert into contributions(`contribution_id`, `type_contribution`, `date_contribution`, `company_name`, `telephone`, `pincode`, `company_address`, `country`,`city`, `currency`, `date_added`, `contribute_amount`) values('".$orderid."','".$type_contribution."','".$start_date."','".$company_name."','".$telephone."','".$pincode."','".$address."','".$country."','".$city."','".$currency."','".date('Y-m-d H:i:s')."','".$amount."')");
	

	
	foreach ($_POST as $key => $value){
		$merchant_data.=$key.'='.$value.'&';
	}

	$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.

?>
<form method="post" name="redirect" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> 
<?php
echo "<input type=hidden name=encRequest value=$encrypted_data>";
echo "<input type=hidden name=access_code value=$access_code>";
?>
</form>
</center>
<script language='javascript'>document.redirect.submit();</script>

</body>
</html>

