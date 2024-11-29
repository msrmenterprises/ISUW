<?php ob_start(); ?>
<html>
<head>
<title> India Smart Grid Forum</title>
</head>
<body>
<?php 
include $_SERVER['DOCUMENT_ROOT']."/wp-load.php";
global $wpdb;
if($_POST['submit']=='Proceed to Payment'){?>
<center>

<?php include('Crypto.php');
//include "inc_connection.php";

?>
<?php 

	error_reporting(0);
	
	$merchant_data='';
	$working_key='E1560C9ABE00212F4D57228388DF22F1';//Shared by CCAVENUES
	$access_code='AVES06CJ92BP68SEPB';//Shared by CCAVENUES
	/*echo "<pre/>";
	print_r($_POST);
	exit;*/
	date_default_timezone_set('Asia/Kolkata');
	$orderid = "ISGW_".date('Yis');
	$mode_of_payment = 'Payment By CCAVENUE';
	$group_reg = sanitize_key($_POST['group_reg']);
	$amount = sanitize_key($_POST['amount']);
	$date_of_order = date('Y-m-d H:i:s');
	/**************Create Order ***********************************************/
	if(!is_numeric($amount) && empty($amount) && $amount==0){
		 header('location:'.home_url().'/competition-page-1/?msg=-1');
		 exit;
	}
	$wpdb->insert( 
					'participations_orders', 
					array( 
						'order_id' => $orderid, 
						'group_reg' => $group_reg,
						'status' => 2,
						'amount' =>$amount,
						'mode_of_payment' =>$mode_of_payment,
						'date_added' => $date_of_order,						
					), 
					array( 
						'%s',
						'%d',
						'%d',
						'%f',
						'%s',
						'%s'
						
					) 
				);
	
	/********************************Create Order End ******************************/
	if($_POST['group_reg']=='1'){
		for($i=1;$i<=$_POST['quantitycategory'];$i++){

			$category_id = sanitize_key($_POST['categoryid'.$i]);
			$category_name = sanitize_key($_POST['company_name']);
			$address = sanitize_key($_POST['address']);
			$telephone = sanitize_key($_POST['telephone']);
			$country = sanitize_key($_POST['country']);
			$state = sanitize_key($_POST['state']);
			$city = sanitize_key($_POST['city']);
			$pincode = sanitize_key($_POST['pincode']);
			$person_name = sanitize_key($_POST['person_name'.$i]);
			$telephone = sanitize_key($_POST['telephone'.$i]);
			$email = sanitize_email($_POST['email'.$i]);
			$designation = sanitize_key($_POST['designation'.$i]);

			/*$query = mysqli_query($conn,"insert into order_details(order_id,category_id,company_name,address_line,telephone,country,city,state,pincode,ticket_name,ticket_mobile,ticketemail,ticketdesc) values('".$orderid."','".$category_id."','".$category_name."','".$address."','".$telephone."','".$country."','".$state."','".$city."','".$pincode."','".$person_name."','".$telephone."','".$email."','".$designation."')");*/

			$wpdb->insert( 
					'order_details', 
					array( 
						'order_id' => $orderid, 
						'category_id' => $category_id,
						'company_name' =>$category_name,
						'address_line' =>$address,
						'telephone' =>$telephone,
						'country' => $country,
						'city' =>$city,
						'state' =>$state,
						'pincode' =>$pincode,
						'ticket_name' =>$person_name,
						'ticket_mobile' =>$telephone,
						'ticketemail' =>$email,
						'ticketdesc' =>$designation
						
					), 
					array( 
						'%s',
						'%d',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s',
						'%d',
						'%s',
						'%s',
						'%s',
						'%s'
					) 
				);
			
		}		
	}else{
		for($i=1;$i<=$_POST['quantitycategory'];$i++){

			$category_id = sanitize_key($_POST['categoryid'.$i]);
			$category_name = sanitize_key($_POST['company_name'.$i]);
			$address = sanitize_key($_POST['address'.$i]);
			$telephone = sanitize_key($_POST['telephone'.$i]);
			$country = sanitize_key($_POST['country'.$i]);
			$state = sanitize_key($_POST['state'.$i]);
			$city = sanitize_key($_POST['city'.$i]);
			$pincode = sanitize_key($_POST['pincode'.$i]);
			$person_name = sanitize_key($_POST['person_name'.$i]);
			$telephone = sanitize_key($_POST['telephone'.$i]);
			$email = sanitize_email($_POST['email'.$i]);
			$designation = sanitize_key($_POST['designation'.$i]);

			$wpdb->insert( 
					'order_details', 
					array( 
						'order_id' => $orderid, 
						'category_id' => $category_id,
						'company_name' =>$category_name,
						'address_line' =>$address,
						'telephone' =>$telephone,
						'country' => $country,
						'city' =>$city,
						'state' =>$state,
						'pincode' =>$pincode,
						'ticket_name' =>$person_name,
						'ticket_mobile' =>$telephone,
						'ticketemail' =>$email,
						'ticketdesc' =>$designation
						
					), 
					array( 
						'%s',
						'%d',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s',
						'%d',
						'%s',
						'%s',
						'%s',
						'%s'
					) 
				);
		}
	}

	$_POST['order_id'] = sanitize_key($orderid);
	$_POST['tid'] = sanitize_key($orderid);
	
	foreach ($_POST as $key => $value){
		$value = sanitize_key($value);
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
<?php if(!empty($amount) && $amount!=0 && is_numeric($amount) && ($amount == $_POST['amount'])){ ?>
<script language='javascript'>document.redirect.submit();</script>
<?php }?>

<?php } elseif($_POST['submit']=='Save Now Pay Later') { 


//include "inc_connection.php";
date_default_timezone_set('Asia/Kolkata');

	$orderid = "ISGW_".date('Yis');
	$mode_of_payment = 'Save Now Pay Later';
	$group_reg = sanitize_key($_POST['group_reg']);
	$amount = sanitize_key($_POST['amount']);
	$date_of_order = date('Y-m-d H:i:s');
/**************Create Order ***********************************************/
	if(!is_numeric($amount) && empty($amount) && $amount==0){
		 header('location:'.home_url().'/competition-page-1/?msg=-1');
		 exit;
	}
	$wpdb->insert( 
					'participations_orders', 
					array( 
						'order_id' => $orderid, 
						'group_reg' => $group_reg,
						'status' => 4,
						'amount' =>$amount,
						'mode_of_payment' =>$mode_of_payment,
						'date_added' => $date_of_order,						
					), 
					array( 
						'%s',
						'%d',
						'%d',
						'%f',
						'%s',
						'%s'
						
					) 
				);
	
	/********************************Create Order End ******************************/
	if($_POST['group_reg']=='1'){
		for($i=1;$i<=$_POST['quantitycategory'];$i++){
			$category_id = sanitize_key($_POST['categoryid'.$i]);
			$category_name = sanitize_key($_POST['company_name']);
			$address = sanitize_key($_POST['address']);
			$telephone = sanitize_key($_POST['telephone']);
			$country = sanitize_key($_POST['country']);
			$state = sanitize_key($_POST['state']);
			$city = sanitize_key($_POST['city']);
			$pincode = sanitize_key($_POST['pincode']);
			$person_name = sanitize_key($_POST['person_name'.$i]);
			$telephone = sanitize_key($_POST['telephone'.$i]);
			$email = sanitize_email($_POST['email'.$i]);
			$designation = sanitize_key($_POST['designation'.$i]);
			
			
			$wpdb->insert( 
					'order_details', 
					array( 
						'order_id' => $orderid, 
						'category_id' => $category_id,
						'company_name' =>$category_name,
						'address_line' =>$address,
						'telephone' =>$telephone,
						'country' => $country,
						'city' =>$city,
						'state' =>$state,
						'pincode' =>$pincode,
						'ticket_name' =>$person_name,
						'ticket_mobile' =>$telephone,
						'ticketemail' =>$email,
						'ticketdesc' =>$designation
						
					), 
					array( 
						'%s',
						'%d',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s'
					) 
				);	
			
		}
	}else{
		for($i=1;$i<=$_POST['quantitycategory'];$i++){
			$category_id = sanitize_key($_POST['categoryid'.$i]);
			$category_name = sanitize_key($_POST['company_name'.$i]);
			$address = sanitize_key($_POST['address'.$i]);
			$telephone = sanitize_key($_POST['telephone'.$i]);
			$country = sanitize_key($_POST['country'.$i]);
			$state = sanitize_key($_POST['state'.$i]);
			$city = sanitize_key($_POST['city'.$i]);
			$pincode = sanitize_key($_POST['pincode'.$i]);
			$person_name = sanitize_key($_POST['person_name'.$i]);
			$telephone = sanitize_key($_POST['telephone'.$i]);
			$email = sanitize_email($_POST['email'.$i]);
			$designation = sanitize_key($_POST['designation'.$i]);
			
			$wpdb->insert( 
					'order_details', 
					array( 
						'order_id' => $orderid, 
						'category_id' => $category_id,
						'company_name' =>$category_name,
						'address_line' =>$address,
						'telephone' =>$telephone,
						'country' => $country,
						'city' =>$city,
						'state' =>$state,
						'pincode' =>$pincode,
						'ticket_name' =>$person_name,
						'ticket_mobile' =>$telephone,
						'ticketemail' =>$email,
						'ticketdesc' =>$designation
						
					), 
					array( 
						'%s',
						'%d',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s'
					) 
				);
			
		}
	}
	 header('location:'.home_url().'/competition-page-1/?msg=1');
	exit;
 } else if($_POST['submit']=='Pay Offline'){ 
	date_default_timezone_set('Asia/Kolkata');
	$orderid = "ISGW_".date('Yis');
	$mode_of_payment = sanitize_key($_POST['mode_of_payment']);
	$group_reg = sanitize_key($_POST['group_reg']);
	$amount = sanitize_key($_POST['amount']);
	$date_of_order = date('Y-m-d H:i:s');
	if(!is_numeric($amount) && empty($amount) && $amount==0){
		 header('location:'.home_url().'/competition-page-1/?msg=-1');
		 exit;
	}
	/**************Create Order ***********************************************/
	$wpdb->insert( 
		'participations_orders', 
		 array( 
			'order_id' => $orderid, 
			'group_reg' => $group_reg,
			'status' => 4,
			'amount' =>$amount,
			'mode_of_payment' =>$mode_of_payment,
			'date_added' => $date_of_order,						
		), 
		array( 
			'%s',
			'%d',
			'%d',
			'%f',
			'%s',
			'%s'
			) 
		);
	
	/********************************Create Order End ******************************/
	if($_POST['group_reg']=='1'){
		for($i=1;$i<=$_POST['quantitycategory'];$i++){
			$category_id = sanitize_key($_POST['categoryid'.$i]);
			$category_name = sanitize_key($_POST['company_name']);
			$address = sanitize_key($_POST['address']);
			$telephone = sanitize_key($_POST['telephone']);
			$country = sanitize_key($_POST['country']);
			$state = sanitize_key($_POST['state']);
			$city = sanitize_key($_POST['city']);
			$pincode = sanitize_key($_POST['pincode']);
			$person_name = sanitize_key($_POST['person_name'.$i]);
			$telephone = sanitize_key($_POST['telephone'.$i]);
			$email = sanitize_email($_POST['email'.$i]);
			$designation = sanitize_key($_POST['designation'.$i]);
			
			$wpdb->insert( 
					'order_details', 
					array( 
						'order_id' => $orderid, 
						'category_id' => $category_id,
						'company_name' =>$category_name,
						'address_line' =>$address,
						'telephone' =>$telephone,
						'country' => $country,
						'city' =>$city,
						'state' =>$state,
						'pincode' =>$pincode,
						'ticket_name' =>$person_name,
						'ticket_mobile' =>$telephone,
						'ticketemail' =>$email,
						'ticketdesc' =>$designation
						
					), 
					array( 
						'%s',
						'%d',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s'
					) 
				);
		}
	}else{
		for($i=1;$i<=$_POST['quantitycategory'];$i++){
			
			$category_id = sanitize_key($_POST['categoryid'.$i]);
			$category_name = sanitize_key($_POST['company_name'.$i]);
			$address = sanitize_key($_POST['address'.$i]);
			$telephone = sanitize_key($_POST['telephone'.$i]);
			$country = sanitize_key($_POST['country'.$i]);
			$state = sanitize_key($_POST['state'.$i]);
			$city = sanitize_key($_POST['city'.$i]);
			$pincode = sanitize_key($_POST['pincode'.$i]);
			$person_name = sanitize_key($_POST['person_name'.$i]);
			$telephone = sanitize_key($_POST['telephone'.$i]);
			$email = sanitize_email($_POST['email'.$i]);
			$designation = sanitize_key($_POST['designation'.$i]);
			
			$wpdb->insert( 
					'order_details', 
					array( 
						'order_id' => $orderid, 
						'category_id' => $category_id,
						'company_name' =>$category_name,
						'address_line' =>$address,
						'telephone' =>$telephone,
						'country' => $country,
						'city' =>$city,
						'state' =>$state,
						'pincode' =>$pincode,
						'ticket_name' =>$person_name,
						'ticket_mobile' =>$telephone,
						'ticketemail' =>$email,
						'ticketdesc' =>$designation
						
					), 
					array( 
						'%s',
						'%d',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s',
						'%s'
					) 
				);
			
		}
	}
	 header('location:'.home_url().'/pay-offline/?msg=1');
	exit;
 } ?>
</body>
</html>

