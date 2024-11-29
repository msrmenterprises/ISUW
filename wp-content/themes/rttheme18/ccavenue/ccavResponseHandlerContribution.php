<?php 
include "inc_connection.php";
include('Crypto.php')?>
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
		header('location:contributions.php?msg=1');
		exit;
		mysqli_query($conn,"update participations_orders set status = '2' where order_id='".$order_id."'");
		//header('location:myorders.php?order_id='.$order_id);

	}
	else if($order_status==="Aborted")
	{
		echo "<br>Thank you for shopping with us.We will keep you posted regarding the status of your order through e-mail";
	
	}
	else if($order_status==="Failure")
	{
		echo "<br>Thank you for shopping with us.However,the transaction has been declined.";
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
