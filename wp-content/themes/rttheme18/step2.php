<?php 
/**
 * Template Name: Payment Gateway Step 2
 */
get_header();
global $wpdb;
$category_id_from_url = absint($_REQUEST['category']);
function getservicetax($category_id = ''){
	global $wpdb;
	$getQuery = $wpdb->get_results("Select service_tax from packagecategory where category_id='".$category_id."'");
	if($getQuery){
		foreach($getQuery as $result){
		$service_tax = $result->service_tax;}
	}else{
		$service_tax = 0;
	}
	return $service_tax;

}
function getParentCategory($category_id = ''){
	global $wpdb;
	$getQuery = $wpdb->get_results("Select parent_category_id from packagecategory where category_id='".$category_id."'");
	foreach($getQuery as $result){
		$parent_category_id = $result->parent_category_id;
	}
	return $parent_category_id;
}

function getcurrency($category_id = ''){
	global $wpdb;
	$getQuery = $wpdb->get_results("Select currency from packagecategory where category_id='".$category_id."'");
		foreach($getQuery as $result){
			$currency = $result->currency;
		}
	return $currency;
}

function getCategoryNameByCategoryId($category_id=''){
	global $wpdb;
	$getCategoryName = $wpdb->get_results("select * from packagecategory where category_id='".$category_id."'");
	foreach($getCategoryName as $getCategoryName1){
		return $getCategoryName1->category_name;
	}
}
?>

<style type="text/css">
.required{
	color:red;
}
.col-md-4 {
    float: left;
    width: 32%;
    margin-left: 5px;
}
.col-md-12 {
    float: left;
    width: 100%;
}


table.pay_g {
    width: 100%;
}
.col-md-12.well {
    margin-bottom: 30px;
}
.form-group {
    margin-bottom: 15px;
}
.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}

</style>
<script type="text/javascript">

function toggle_visibility(id) 
{
    var e = document.getElementById(id);
    if (e.style.display == 'block' || e.style.display=='')
    {
        e.style.display = 'none';
    }
    else 
    {
        e.style.display = 'block';
    }
}

function changeprice(){
	qty=document.getElementById("qty").value;
	price = document.getElementById("price").value;
	qtyprice = qty*price;
	document.getElementById("qtyprice").innerHTML=qtyprice;
	document.getElementById("totalamount").innerHTML=qtyprice;
	document.getElementById("totalamount1").innerHTML=qtyprice;
	document.getElementById("amount").value=qtyprice;
	document.getElementById("totalquantity").value=qty;
}




function checkquantityandgenerateticket(){
	gettotalquanitity = document.getElementById("totalquantity").value;
	
	if(gettotalquanitity==''){
		alert("Empty Quantity");
		return false;
	}else if(gettotalquanitity > 6){
		alert("Quantity Exceeded. Please check again");
		return false;
	}else{
		ticketnames = document.getElementById("ticketnames").value;
		strsplit = ticketnames.split("==");
		ticketcategory = document.getElementById("ticketcategoryid").value;
		strsplitCategory = ticketcategory.split("==");
		group_reg = '';
		if(document.getElementById("radio_yes").checked){
			group_reg=1;
			companyDetails = document.getElementById("companyDetails");
			groupticket = document.getElementById("groupticket");
			appendedDetails = "<div class='col-md-12 well'><div class='col-md-4'><div class='form-group'><label for='company_name'>Company Name<span class='required'>*</span></label><input type='text' name='company_name' id='company_name' class='form-control'></div><div class='form-group'><label for='telephone'>Telephone<span class='required'>*</span></label><input type='text' name='telephone' id='telephone' class='form-control'></div><div class='form-group'><label for='pincode'>Pincode<span class='required'>*</span></label><input type='text' name='pincode' id='pincode' class='form-control'></div></div><div class='col-md-4'><div class='form-group'><label for='address'>Company Address<span class='required'>*</span></label><textarea name='address' id='address' class='form-control' style='height:180px;'></textarea></div></div><div class='col-md-4'><div class='form-group'><label for='country'>Country<span class='required'>*</span></label><input type='text' name='country' id='country' class='form-control'></div><div class='form-group'><label for='State'>State<span class='required'>*</span></label><input type='text' name='state' id='state' class='form-control'></div><div class='form-group'><label for='city'>City<span class='required'>*</span></label><input type='text' name='city'  id='city' class='form-control'></div></div></div>";
			companyDetails.innerHTML = companyDetails.innerHTML + appendedDetails;
			
			for(ticket=1;ticket<=gettotalquanitity;ticket++){
				
				appendedDetailsTicket = "<div class='col-md-4 well'><div>Ticket #"+ticket+" "+strsplit[ticket-1]+" Details</div><div class='form-group'><label for='name'>Name<span class='required'>*</span></label><input type='text' name='person_name"+ticket+"' id='person_name"+ticket+"' class='form-control'></div><div class='form-group'><label for='mobile'>Mobile<span class='required'>*</span></label><input type='text' name='telephone"+ticket+"' id='telephone"+ticket+"' class='form-control'></div><div class='form-group'><label for='email'>Email<span class='required'>*</span></label><input type='text' name='email"+ticket+"' id='email"+ticket+"' class='form-control'><input type='hidden' name='categoryid"+ticket+"' id='categoryid"+ticket+"' class='form-control' value="+strsplitCategory[ticket-1]+"></div><div class='form-group'><label for='designation'>Designation</label><input type='text' name='designation"+ticket+"' id='designation"+ticket+"' class='form-control'></div></div>";
				groupticket.innerHTML = groupticket.innerHTML + appendedDetailsTicket;
			}
			if(document.getElementById("amount").value=='' || document.getElementById("amount").value==0){
			document.getElementById("proceedtopayment").style.display="none";	
			document.getElementById("proceedtopayment1").style.display="none";
			document.getElementById("proceedtopayment2").style.display="none";
			}else{
			document.getElementById("proceedtopayment").style.display="inline-block";	
			document.getElementById("proceedtopayment1").style.display="inline-block";
			document.getElementById("proceedtopayment2").style.display="inline-block";
			}
			
		}else if(document.getElementById("radio_no").checked){
			group_reg = 0;
			companyDetails = document.getElementById("companyDetails");
			for(ticket=1;ticket<=gettotalquanitity;ticket++){
			
			appendedDetails = "<div class='col-md-12 well'><div>Ticket # "+ ticket+" "+strsplit[ticket-1]+" Details</div><div class='col-md-12'><div class='col-md-4'><div class='form-group'><label for='name'>Name<span class='required'>*</span></label><input type='text' name='person_name"+ticket+"'  id='person_name"+ticket+"' class='form-control'></div></div><div class='col-md-4'><div class='form-group'><label for='mobile'>Company/College Name<span class='required'>*</span></label><input type='text' name='company_name"+ticket+"' id='company_name"+ticket+"' class='form-control'></div></div><div class='col-md-4'><div class='form-group'><label for='email'>Designation<span class='required'>*</span></label><input type='text' name='designation"+ticket+"' id='designation"+ticket+"' class='form-control'></div></div></div><div class='col-md-12'><div class='col-md-4'><div class='form-group'><label for='mobile'>Mobile<span class='required'>*</span></label><input type='text' name='telephone"+ticket+"' id='telephone"+ticket+"' class='form-control'></div></div><div class='col-md-4'><div class='form-group'><label for='email'>Email<span class='required'>*</span></label><input type='text' name='email"+ticket+"' id='email"+ticket+"' class='form-control'></div></div><div class='col-md-4'><div class='form-group'><label for='name'>Pincode<span class='required'>*</span></label><input type='text' name='pincode"+ticket+"'  id='pincode"+ticket+"' class='form-control'></div></div></div><div class='col-md-12'><div class='form-group'><label for='mobile'>Company/College Address<span class='required'>*</span></label><textarea name='address"+ticket+"' id='address"+ticket+"' class='form-control'></textarea></div></div><div class='col-md-12'><div class='col-md-4'><div class='form-group'><label for='name'>City</label><input type='text' name='city"+ticket+"'  id='city"+ticket+"' class='form-control'></div></div><div class='col-md-4'><div class='form-group'><label for='mobile'>State</label><input type='text' name='state"+ticket+"' id='state"+ticket+"' class='form-control'><input type='hidden' name='categoryid"+ticket+"' id='categoryid"+ticket+"' class='form-control' value='<?php echo $category_id_from_url?>'></div></div><div class='col-md-4'><div class='form-group'><label for='email'>Country</label><input type='text' name='country"+ticket+"' id='country"+ticket+"' class='form-control'></div></div></div>";

			
			companyDetails.innerHTML = companyDetails.innerHTML + appendedDetails;
			}
			if(document.getElementById("amount").value=='' || document.getElementById("amount").value==0){
			document.getElementById("proceedtopayment").style.display="none";	
			document.getElementById("proceedtopayment1").style.display="none";	
			document.getElementById("proceedtopayment2").style.display="none";
			}else{
			document.getElementById("proceedtopayment").style.display="inline-block";	
			document.getElementById("proceedtopayment1").style.display="inline-block";	
			document.getElementById("proceedtopayment2").style.display="inline-block";
			}
		}
	}
	document.getElementById("group_reg").value=group_reg;
	document.getElementById("proceed").disabled=true;
	document.getElementById("quantitycategory").value=gettotalquanitity;
}

function resetall(){
	window.location.href="<?php echo $_SERVER['REQUEST_URI']; ?>";
}

function validatebeforesubmit(){
	if(document.getElementById("group_reg").value=='1'){
		company_name = document.getElementById("company_name").value;
		address = document.getElementById("address").value;
		telephone = document.getElementById("telephone").value;
		country = document.getElementById("country").value;
		state = document.getElementById("state").value; 
		city = document.getElementById("city").value;
		pincode = document.getElementById("pincode").value;
		if(company_name == '' || address == '' || telephone == '' || country == '' || state == '' || city == '' || pincode == ''){
			alert("Please fill in details");
			return false;
		}
		quantitycategory = document.getElementById("quantitycategory").value;
		for($validatei=1;$validatei<=quantitycategory;$validatei++){
			if(document.getElementById("person_name"+$validatei).value==''){
				alert("Please fill in Details");
				return false;
			}
			if(document.getElementById("telephone"+$validatei).value==''){
				alert("Please fill in Details");
				return false;
			}
			if(document.getElementById("email"+$validatei).value==''){
				alert("Please fill in Details");
				return false;
			}
			
		}
	}else if(document.getElementById("group_reg").value=='0'){
		quantitycategory = document.getElementById("quantitycategory").value;
		for($validatei=1;$validatei<=quantitycategory;$validatei++){
			if(document.getElementById("person_name"+$validatei).value==''){
				alert("Please fill in Details");
				return false;
			}
			if(document.getElementById("telephone"+$validatei).value==''){
				alert("Please fill in Details");
				return false;
			}
			if(document.getElementById("email"+$validatei).value==''){
				alert("Please fill in Details");
				return false;
			}
			if(document.getElementById("address"+$validatei).value==''){
				alert("Please fill in Details");
				return false;
			}
			if(document.getElementById("pincode"+$validatei).value==''){
				alert("Please fill in Details");
				return false;
			}
			if(document.getElementById("state"+$validatei).value==''){
				alert("Please fill in Details");
				return false;
			}
			if(document.getElementById("city"+$validatei).value==''){
				alert("Please fill in Details");
				return false;
			}
			
		}
	}
	
}
</script>
<section class="content_block clearfix">
<div class="container slider_margin1" style="min-height:500px;">
		<div class="col-md-12">
			<h3 style="color:#FF9933;"><strong>India Smart Grid Week 2016 Registration</strong>
			<a href="paymentgateway1.php" style="float:right;font-size:10px;font-size:17px;">Go to main menu</a>
			</h3>
			<table width="100%" border="1" style="margin-top:20px;" class="pay_g">
					<thead>
						<tr style="background:#5C342B;color:#FFF;" class="step2">
							<td width="40%">Package</td>
							<td width="25%">Price Per Person</td>
							<td width="25%">Number of Person</td>
							<td width="25%">Total</td>
						</tr>
					</thead>
					<tbody>
					<?php $getDetailbycategoryId = $wpdb->get_results("select * from packagecategory where category_id='".$category_id_from_url."'");
						  if($getDetailbycategoryId){
							 foreach($getDetailbycategoryId as $getDetailbycategoryIdResult){
							 //$getDetailbycategoryIdResult = mysqli_fetch_array($getDetailbycategoryId);
							  ?>
							<tr>
							<td>
								<?php echo $getDetailbycategoryIdResult->category_name; ?>
							</td>
							<td>
								<?php echo $getDetailbycategoryIdResult->fee; ?>
							</td>
							<td>
							<input type="hidden" name="price" id="price" value="<?php echo $getDetailbycategoryIdResult->fee;?>">
								<input type="number" name="qty" id="qty" min="0" max="6" style="width:100%;" onchange="changeprice()">
							</td>
							<td><p id="qtyprice"></p></td>
							</tr>
						  <?php } }?>
					</tbody>
					<input type="hidden" name="totalPackages" id="totalPackages" value="1">
				</table>
				<div class="col-md-4"></div>
				<div class="col-md-2"></div>
				<div class="col-md-6" style="margin-top:10px;">
					<div class="col-md-8 total">Amount:</div>
					<?php if($category_id_from_url=='2' || $category_id_from_url=='27' || $category_id_from_url=='39' || $category_id_from_url=='31' || $category_id_from_url=='32' || $category_id_from_url=='72' || $category_id_from_url=='82' || $category_id_from_url=='104'|| $category_id_from_url=='105' || $category_id_from_url=='106'){?>
					<div class="col-md-2"><p style="float:left;"><img src="<?php echo get_bloginfo('template_url')?>/images/inr.png">&nbsp;</p><p id="totalamount" class="total">0</p></div>
					<?php } else {?>
					<div class="col-md-2"><p style="float:left;">&#36;&nbsp;</p><p id="totalamount" class="total">0</p></div>
					<?php }?>
					<?php 
					$service_tax = getservicetax($category_id_from_url);
					if(!empty($service_tax)){ ?>
					<div class="col-md-8 total">14% Service Tax on Principal Amount(+):</div>
					<div class="col-md-2"><p id="service_tax" class="total">0</p></div>	
					<div class="col-md-8 total">0.5% Swach Bharat Cess on Principal Amount(+):</div>
					<div class="col-md-2"><p id="swachbharat" class="total">0</p></div>	
					<?php } ?>
					<div class="col-md-8 total">Grand Total (Including Service Tax 14.5%):</div>
					<?php if($category_id_from_url=='2' || $category_id_from_url=='27' || $category_id_from_url=='39' || $category_id_from_url=='31' || $category_id_from_url=='32' || $category_id_from_url=='72' || $category_id_from_url=='82' || $category_id_from_url=='104'|| $category_id_from_url=='105' || $category_id_from_url=='106'){?>
					<div class="col-md-2"><p style="float:left;"><img src="<?php echo get_bloginfo('template_url')?>/images/inr.png">&nbsp;</p><p id="totalamount1" class="total">0</p></div>
					<?php } else {?>
					<div class="col-md-2"><p style="float:left;">&#36;&nbsp;</p><p id="totalamount1" class="total">0</p></div>
					<?php } ?>
					
				</div>
</div>

				<div class="col-md-12" style="background:#f99d26;padding:10px;color:#FFF;text-align:center;font-size:17px;">
				<?php 
				$getParentId = getParentCategory($category_id_from_url);
				if($getParentId=='26' || $getParentId=='27' || $getParentId=='29' || $getParentId=='30') {?>
				<span>Group Registration &nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="radio1" id="radio_yes" value="yes">Yes
				&nbsp;&nbsp;&nbsp;
				<input type="radio" name="radio1" id="radio_no" value="no" checked="checked">No
				&nbsp;&nbsp;&nbsp;</span>
				<?php } else{ ?>
				<input type="radio" name="radio1" id="radio_yes" value="yes" style="display:none;">
				<input type="radio" name="radio1" id="radio_no" value="no" checked="checked" style="display:none;">
				<?php }?>
				<div class="radio-custom radio-inline">
				
					<input type="hidden" name="ticketnames" id="ticketnames">
					<input type="hidden" name="ticketcategoryid" id="ticketcategoryid">
					<input type="hidden" name="totalquantity" id="totalquantity">
                    <button type="submit" id="proceed" class=" btn btn-default btn-sm show1" href="javascript:void(0)" onclick="checkquantityandgenerateticket()">Proceed</button>
					<!--<button type="submit" class=" btn btn-default btn-sm" id="reset1" href="javascript:void(0)" value="Reset form">Reset</button> -->
					<a href="javascript:void(0)" onclick="resetall()" class="btn btn-default btn-sm">Reset</a>
                </div>
				</div>
			<form name="form_details" method="post" action="<?php echo get_bloginfo('template_url')?>/ccavenue/ccavRequestHandler.php" onsubmit="return validatebeforesubmit()">
				<div id="companyDetails"></div>
				<div id="groupticket" class="col-md-12"></div><br/>
				<input type="hidden" name="quantitycategory" id="quantitycategory">
				<input type="hidden" name="group_reg" id="group_reg">
				<input type="hidden" name="merchant_id" id="merchant_id" value="80773">
				<input type="hidden" name="tid" id="tid" value="1448619178821">
				<input type="hidden" name="amount" id="amount">
				
				<input type="hidden" name="currency" value="<?php echo getcurrency($category_id_from_url); ?>">
				<input type="hidden" name="redirect_url" value="<?php echo get_bloginfo('template_url')?>/ccavenue/ccavResponseHandler.php">
				<input type="hidden" name="cancel_url" value="<?php echo get_bloginfo('template_url')?>/ccavenue/ccavResponseHandler.php">
				<input type="hidden" name="language" value="EN">
				<center><input type="submit" name="submit" id="proceedtopayment" value="Proceed to Payment" class="btn btn-primary category_css" style="text-align:center;display:none;">
				<input type="submit" name="submit" id="proceedtopayment1" value="Save Now Pay Later" class="btn btn-primary category_css" style="display:none;margin-left:20px;">
				<button type="button" id="proceedtopayment2" class="btn btn-primary category_css" onclick="toggle_visibility('dialog')" style="display:none;margin-left:20px;">Pay Offline</button>
				</center>

				<div id="dialog" title="Pay Offline" style="display:none;">
					<div class="modal-content">
					  
					  <div class="modal-body">
						<p>Select Mode of Payment</p>
						<input type="radio" name="mode_of_payment" value="Demand Draft" selected>&nbsp;&nbsp;Demand Draft<br/>
						<input type="radio" name="mode_of_payment" value="Cheque">&nbsp;&nbsp;Cheque<br/>
						<input type="radio" name="mode_of_payment" value="Cash">&nbsp;&nbsp;Cash
					  </div>
					  <div class="modal-footer">
						<input type="submit" name="submit"  value="Pay Offline" class="btn btn-primary category_css" style="margin-left:20px;">
					  </div>
					</div>
				</div>

				<!-----------------Modal ------------------------------>
				<!--<div id="myModal" class="modal fade" role="dialog" aria-hidden="true">
				  <div class="modal-dialog">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Offline Payment</h4>
					  </div>
					  <div class="modal-body">
						<p>Select Mode of Payment</p>
						<input type="radio" name="mode_of_payment" value="Demand Draft" selected>&nbsp;&nbsp;Demand Draft<br/>
						<input type="radio" name="mode_of_payment" value="Cheque">&nbsp;&nbsp;Cheque<br/>
						<input type="radio" name="mode_of_payment" value="Cash">&nbsp;&nbsp;Cash
					  </div>
					  <div class="modal-footer">
						<input type="submit" name="submit"  value="Pay Offline" class="btn btn-primary category_css" style="margin-left:20px;">
					  </div>
					</div>

				  </div>
				</div>-->
				<!-------------------End Modal ------------------------>
			</form>
			
			

</div>
</section>
<?php get_footer(); ?>