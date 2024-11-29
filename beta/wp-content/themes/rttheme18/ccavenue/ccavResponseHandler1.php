<?php 
ob_start();
include "inc_connection.php";
include('Crypto.php');

function getParentCategory($category_id = ''){
	global $conn;
	$getQuery = mysqli_query($conn,"Select parent_category_id from isgfpackagecategory where category_id='".$category_id."'");
	if(mysqli_num_rows($getQuery) > 0){
		$result = mysqli_fetch_array($getQuery);
		$parent_category_id = $result['parent_category_id'];
	}else{
		$parent_category_id = 0;
	}
	return $parent_category_id;
}

?>
<?php

	error_reporting(0);
	
	$workingKey='E1560C9ABE00212F4D57228388DF22F1';		//Working Key should be provided here.
	$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
	$rcvdString=decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
	$order_status="";
	$order_id = "";
	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);
	/*echo "<br/>";
	print_r($dataSize);
	echo "==================";
	print_r($decryptValues);
	exit;*/
	
	echo "<center>";

	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
	
		
		if($i==3)	$order_status=$information[1];
		if($i==0)   $order_id = $information[1];
	}

	if($order_status==="Success")
	{
		echo "<br>Thank you for the Payment. We will keep you posted regarding the status of your order through e-mail";
		mysqli_query($conn,"update isgf_member_orders set status = '2' where order_id='".$order_id."'");
		//header('location:myorders.php?order_id='.$order_id);
		
		$get_order_details = mysqli_query($conn,"select ticketemail,category_id from isgf_order_details where order_id='".$order_id."'");
		if(mysqli_num_rows($get_order_details)>0){
			while($dataResult = mysqli_fetch_array($get_order_details)){
				$getfile = mysqli_query($conn,"select upload_file_path from isgfpackagecategory where category_id='".$dataResult['category_id']."'");
				$getFileResult = mysqli_fetch_array($getfile);
				//$to = $_POST['email'.$i];
				if(!empty($getFileResult['upload_file_path'])){
				$getParentCategoryId = getParentCategory($dataResult['category_id']);
				if($getParentCategoryId == 6 || $getParentCategoryId == 7){
				$to = $dataResult['ticketemail'];
				$subject = "Thank you for the Payment to ISGF";
				$message = "Please find the URL below:\n";
				$message .= "<a href='http://www.indiasmartgrid.org/reports/".$getFileResult['upload_file_path']."'>Click Here to download the File</a>";

			    // Always set content-type when sending HTML email
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

						// More headers
				$headers .= 'From: <contactus@indiasmartgrid.org>' . "\r\n";
				mail($to,$subject,$message,$headers);
				} else if($getParentCategoryId == 21 || $getParentCategoryId == 22){

				$to = $dataResult['ticketemail'];
				$subject = "Thank you for the Payment to ISGF";
				$message = "Please find the URL below:\n";
				$message .= "<a href='http://www.indiasmartgrid.org/".$getFileResult['upload_file_path']."'>Click Here to get the Directory</a>";

			    // Always set content-type when sending HTML email
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

						// More headers
				$headers .= 'From: <contactus@indiasmartgrid.org>' . "\r\n";
				mail($to,$subject,$message,$headers);

				}
				}else {
				/*$to = $dataResult['ticketemail'];
				$subject = "Thank you for the Payment";
				$message = "The Report will be sent to you shortly";
				//$message = "<a href='http://www.indiasmartgrid.org/reports/'>Click Here to download the File</a>";

			    // Always set content-type when sending HTML email
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

						// More headers
				$headers .= 'From: <contactus@indiasmartgrid.org>' . "\r\n";
				mail($to,$subject,$message,$headers);*/
				}
			}
		}
		header('location:http://indiasmartgrid.org/myorders.php?order_id='.$order_id);
		exit;
	}
	else if($order_status==="Aborted")
	{
		echo "<br>The transaction has been cancelled.";
		header('location:http://indiasmartgrid.org/isgfpaymentgateway1.php?msg=-1');
		exit;
		
		//echo "update isgf_member_orders set status = '2' where order_id='".$order_id."'";
	
	}
	else if($order_status==="Failure")
	{
		echo "<br>the transaction has been declined.";
	}
	else
	{
		echo "<br>Security Error. Illegal access detected";
	
	}

	echo "<br><br>";
	echo "<h2><a href='http://www.indiasmartgrid.org'>Go to indiasmartgrid.org</a></h2>";
	/*echo "<table cellspacing=4 cellpadding=4>";
	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
	    	echo '<tr><td>'.$information[0].'</td><td>'.$information[1].'</td></tr>';
	}

	echo "</table><br>";*/
	echo "</center>";
	
	
?>
