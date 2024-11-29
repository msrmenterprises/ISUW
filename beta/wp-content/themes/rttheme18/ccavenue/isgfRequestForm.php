<?php 
ob_start();
session_start();?>
<html>
<head>
<title> India Smart Grid Forum</title>
</head>
<body>
<?php if($_POST['submit']=='Pay Offline'){
include "inc_connection.php";
	date_default_timezone_set('Asia/Kolkata');
	$mode_of_payment = $_POST['mode_of_payment'];
	$orderid = date(YmdHis);
/**************Create Order ***********************************************/
	$query = mysqli_query($conn,"insert into isgf_member_orders(order_id,group_reg,status,amount,mode_of_payment,date_added) values('".$orderid."','".$_POST['group_reg']."','4','".$_POST['amount']."','".$_POST['mode_of_payment']."','".date('Y-m-d H:i:s')."')");
	
	/********************************Create Order End ******************************/
	if($_POST['group_reg']=='1'){
		for($i=1;$i<=$_POST['quantitycategory'];$i++){
			$query = mysqli_query($conn,"insert into isgf_order_details(order_id,category_id,company_name,address_line,telephone,country,city,state,pincode,ticket_name,ticket_mobile,ticketemail,ticketdesc) values('".$orderid."','".$_POST['categoryid'.$i]."','".$_POST['company_name']."','".$_POST['address']."','".$_POST['telephone']."','".$_POST['country']."','".$_POST['state']."','".$_POST['city']."','".$_POST['pincode']."','".$_POST['person_name']."','".$_POST['telephone']."','".$_POST['email']."','".$_POST['designation']."')");
		}		
	}else{
			for($i=1;$i<=$_POST['quantitycategory'];$i++){
			$query = mysqli_query($conn,"insert into isgf_order_details(order_id,category_id,company_name,address_line,telephone,country,city,state,pincode,ticket_name,ticket_mobile,ticketemail,ticketdesc) values('".$orderid."','".$_POST['categoryid'.$i]."','".$_POST['company_name']."','".$_POST['address']."','".$_POST['telephone']."','".$_POST['country']."','".$_POST['state']."','".$_POST['city']."','".$_POST['pincode']."','".$_POST['person_name']."','".$_POST['telephone']."','".$_POST['email']."','".$_POST['designation']."')");
			
			}
		
		}
	 header('location:http://www.indiasmartgrid.org/payoffline.php?msg=1');
	exit;

 } elseif($_POST['submit']=='Proceed to Payment'){?>
<center>

<?php 

include('Crypto.php');
include "inc_connection.php";

?>
<?php 

	error_reporting(0);
	
	$merchant_data='';
	$working_key='E1560C9ABE00212F4D57228388DF22F1';//Shared by CCAVENUES
	$access_code='AVES06CJ92BP68SEPB';//Shared by CCAVENUES
	
	date_default_timezone_set('Asia/Kolkata');
	$orderid = date(YmdHis);
	
	/**************Create Order ***********************************************/
	$query = mysqli_query($conn,"insert into isgf_member_orders(order_id,group_reg,status,amount,mode_of_payment,date_added) values('".$orderid."','".$_POST['group_reg']."','1','".$_POST['amount']."','By Ccavenue','".date('Y-m-d H:i:s')."')");
	
	/********************************Create Order End ******************************/
	if($_POST['group_reg']=='1'){
		for($i=1;$i<=$_POST['quantitycategory'];$i++){
			$query = mysqli_query($conn,"insert into isgf_order_details(order_id,category_id,company_name,address_line,telephone,country,city,state,pincode,ticket_name,ticket_mobile,ticketemail,ticketdesc) values('".$orderid."','".$_POST['categoryid'.$i]."','".$_POST['company_name']."','".$_POST['address']."','".$_POST['telephone']."','".$_POST['country']."','".$_POST['state']."','".$_POST['city']."','".$_POST['pincode']."','".$_POST['person_name']."','".$_POST['telephone']."','".$_POST['email']."','".$_POST['designation']."')");
		}		
	}else{
			for($i=1;$i<=$_POST['quantitycategory'];$i++){
			$query = mysqli_query($conn,"insert into isgf_order_details(order_id,category_id,company_name,address_line,telephone,country,city,state,pincode,ticket_name,ticket_mobile,ticketemail,ticketdesc) values('".$orderid."','".$_POST['categoryid'.$i]."','".$_POST['company_name']."','".$_POST['address']."','".$_POST['telephone']."','".$_POST['country']."','".$_POST['state']."','".$_POST['city']."','".$_POST['pincode']."','".$_POST['person_name']."','".$_POST['telephone']."','".$_POST['email']."','".$_POST['designation']."')");
			
			}
		
		}
	
	$_POST['order_id'] = $orderid;
	$_POST['tid'] = $orderid;
	
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
<?php } else { 


date_default_timezone_set('Asia/Kolkata');
include "inc_connection.php";
$orderid = date(YmdHis);
	
	/**************Create Order ***********************************************/
	$query = mysqli_query($conn,"insert into isgf_member_orders(order_id,group_reg,status,amount,mode_of_payment,date_added) values('".$orderid."','".$_POST['group_reg']."','4','".$_POST['amount']."','Save Now Pay Later','".date('Y-m-d H:i:s')."')");
	
	/********************************Create Order End ******************************/
	if($_POST['group_reg']=='1'){
		for($i=1;$i<=$_POST['quantitycategory'];$i++){
			$query = mysqli_query($conn,"insert into isgf_order_details(order_id,category_id,company_name,address_line,telephone,country,city,state,pincode,ticket_name,ticket_mobile,ticketemail,ticketdesc) values('".$orderid."','".$_POST['categoryid'.$i]."','".$_POST['company_name']."','".$_POST['address']."','".$_POST['telephone']."','".$_POST['country']."','".$_POST['state']."','".$_POST['city']."','".$_POST['pincode']."','".$_POST['person_name']."','".$_POST['telephone']."','".$_POST['email']."','".$_POST['designation']."')");
		}		
	}else{
			for($i=1;$i<=$_POST['quantitycategory'];$i++){
				
			$query = mysqli_query($conn,"insert into isgf_order_details(order_id,category_id,company_name,address_line,telephone,country,city,state,pincode,ticket_name,ticket_mobile,ticketemail,ticketdesc) values('".$orderid."','".$_POST['categoryid'.$i]."','".$_POST['company_name']."','".$_POST['address']."','".$_POST['telephone']."','".$_POST['country']."','".$_POST['state']."','".$_POST['city']."','".$_POST['pincode']."','".$_POST['person_name']."','".$_POST['telephone']."','".$_POST['email']."','".$_POST['designation']."')");
			
			}
			
		
		}
 

 header('location:http://www.indiasmartgrid.org/isgfpaymentgateway1.php?msg=1');
	exit;
} ?>

</body>
</html>

