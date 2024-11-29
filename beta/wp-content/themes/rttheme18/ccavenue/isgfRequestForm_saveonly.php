<?php ob_start(); session_start()?>
<html>
<head>
<title> India Smart Grid Forum</title>
</head>
<body>
<center>

<?php include "inc_connection.php";

?>
<?php 

	error_reporting(2);
	
	$merchant_data='';
	$working_key='E1560C9ABE00212F4D57228388DF22F1';//Shared by CCAVENUES
	$access_code='AVES06CJ92BP68SEPB';//Shared by CCAVENUES
	
	date_default_timezone_set('Asia/Kolkata');
	$orderid = date(YmdHis);
	
	/**************Create Order ***********************************************/
	$query = mysqli_query($conn,"insert into isgf_member_orders(order_id,group_reg,status,date_added) values('".$orderid."','".$_POST['group_reg']."','1','".date('Y-m-d H:i:s')."')");
	
	/********************************Create Order End ******************************/
	
	if($_POST['group_reg']=='1'){
		for($i=1;$i<=$_POST['quantitycategory'];$i++){
			$query = mysqli_query($conn,"insert into isgf_order_details(order_id,category_id,company_name,address_line,telephone,country,city,state,pincode,ticket_name,ticket_mobile,ticketemail,ticketdesc) values('".$orderid."','".$_POST['categoryid'.$i]."','".$_POST['company_name']."','".$_POST['address']."','".$_POST['telephone']."','".$_POST['country']."','".$_POST['state']."','".$_POST['city']."','".$_POST['pincode']."','".$_POST['person_name'.$i]."','".$_POST['telephone'.$i]."','".$_POST['email'.$i]."','".$_POST['designation'.$i]."')");
		}		
	}else{
		echo "<pre/>";
		print_r($_POST);
		exit;
			for($i=1;$i<=$_POST['quantitycategory'];$i++){
				echo "insert into isgf_order_details(order_id,category_id,company_name,address_line,telephone,country,city,state,pincode,ticket_name,ticket_mobile,ticketemail,ticketdesc) values('".$orderid."','".$_POST['categoryid'.$i]."','".$_POST['company_name'.$i]."','".$_POST['address'.$i]."','".$_POST['telephone'.$i]."','".$_POST['country'.$i]."','".$_POST['state'.$i]."','".$_POST['city'.$i]."','".$_POST['pincode'.$i]."','".$_POST['person_name'.$i]."','".$_POST['telephone'.$i]."','".$_POST['email'.$i]."','".$_POST['designation'.$i]."')";
			$query = mysqli_query($conn,"insert into isgf_order_details(order_id,category_id,company_name,address_line,telephone,country,city,state,pincode,ticket_name,ticket_mobile,ticketemail,ticketdesc) values('".$orderid."','".$_POST['categoryid'.$i]."','".$_POST['company_name'.$i]."','".$_POST['address'.$i]."','".$_POST['telephone'.$i]."','".$_POST['country'.$i]."','".$_POST['state'.$i]."','".$_POST['city'.$i]."','".$_POST['pincode'.$i]."','".$_POST['person_name'.$i]."','".$_POST['telephone'.$i]."','".$_POST['email'.$i]."','".$_POST['designation'.$i]."')");
			
			}
			exit;
		
		}
	header('location:http://www.indiasmartgrid.org/isgfpaymentgateway1.php');
	exit;
	
?>
</center>
</body>
</html>

