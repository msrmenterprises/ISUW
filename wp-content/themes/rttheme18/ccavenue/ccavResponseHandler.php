<?php 
ob_start();
include $_SERVER['DOCUMENT_ROOT']."/wp-load.php";
//include "inc_connection.php";
include('Crypto.php')?>
<?php
	global $wpdb;
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

		$wpdb->update( 
			'participations_orders', 
			array( 
				'status' => 2	// string
				
			), 
			array( 'order_id' => $order_id ), 
			array( 
				'%d'	// value1
				
			), 
			array( '%s' ) 
		);
		
		
		function getParentCategory($category_id = ''){
			global $conn;
			$getQuery = $wpdb->get_results("Select parent_category_id from packagecategory where category_id='".$category_id."'");
			if($getQuery){
				foreach($getQuery as $result){
					$parent_category_id = $result->parent_category_id;
				}
			}else{
				$parent_category_id = 0;
			}
			return $parent_category_id;
		} 
		function getCategoryName($category_id = ''){
			global $conn;
			$getQuery = $wpdb->get_results("Select category_name from packagecategory where category_id='".$category_id."'");
			if($getQuery){
				foreach($getQuery as $result){
				$category_name = $result->category_name;
			}
			return $category_name;
		}
		$getdata = $wpdb->get_results("select * from participations_orders po inner join order_details od on (po.order_id = od.order_id) where po.order_id = '".$order_id."'");

					/*if($getdata){
						foreach($getdata as $getdata1){
						
							if($getdata1['status'] == 2){
								$to = $getdata1['ticketemail'];
								$subject = "India Smart Grid Week 2016 Payment";
								$message  = "Hi ".$getdata1['ticket_name']."<br/><br/>";
								$message .= "Thank you for your payment. We have received Amount ".$getdata1['amount']." towards your Order No. ".$order_id."<br/><br/>";

								$message .= "Your Details is as follows:<br/><br/>";
								$message .= "Name :".$getdata1->ticket_name."<br/>";
								$message .= "Email :".$getdata1->ticketemail."<br/><br/>";

								$message .= "<a href='http://www.indiasmartgrid.org/reciept_det.php?i=".$order_id."'> Please click here to view or print your receipt for the payment</a><br/><br/>";
								$message .= "Please save the order number for future reference<br/><br/>";

								$message .= "Thanks and Regards,<br/>";
								$message .= "Team ISGF<br/>";
								$message .= "<a href='http://www.indiasmartgrid.org'>www.indiasmartgrid.org</a><br/>";
								//$message .= "<a href='http://www.indiasmartgrid.org/reports/".$getFileResult['upload_file_path']."'>Click Here to download the File</a>";

								// Always set content-type when sending HTML email
								$headers = "MIME-Version: 1.0" . "\r\n";
								$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

										// More headers
								$headers .= 'From: <payments@isgw.in>' . "\r\n";
								$headers .= 'Cc: payments@isgw.in' . "\r\n";
								mail($to,$subject,$message,$headers);
								
							}
							else{
								
							}
							
							
						} 
						
					 } */
		/*header('location:http://indiasmartgrid.org/myorders.php?order_id='.$order_id);
		exit;*/
		echo "Order is successfully placed";

	}
	else if($order_status==="Aborted")
	{
		echo "<br>Your Transaction has been cancelled1";
		
	
	}
	else if($order_status==="Failure")
	{
		echo "<br>The transaction has been declined.";
	}
	else
	{
		echo "<br>Security Error. Illegal access detected";
	
	}

	echo "<br><br>";

	echo "<h2><a href='http://www.isgw.in'>Go to isgw.in</a></h2>";
	/*echo "<table cellspacing=4 cellpadding=4>";
	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
	    	echo '<tr><td>'.$information[0].'</td><td>'.$information[1].'</td></tr>';
	}

	echo "</table><br>";*/
	echo "</center>";
	
	
?>
