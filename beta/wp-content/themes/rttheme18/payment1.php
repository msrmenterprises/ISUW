<?php 
/**
 * Template Name: Payment Gateway Step 1
 */
get_header();
global $wpdb;
?>
<style type="text/css">
.col-md-4 {
    float: left;
    margin-right: 100px;
}

table.pay_g {
    width: 100%;
}
</style>
<script type="text/javascript">

function clickontypepayment1(){
	addHTML = "<a href='<?php echo home_url(); ?>/competition-page-2/?category=104' class='w3-btn w3-margin-bottom'>Individual Payment</a>&nbsp;&nbsp;<a href='<?php echo home_url(); ?>/competitiont/?category=107' class='w3-btn w3-margin-bottom'>Team Payment</a>";
	document.getElementById("dynamicsituation1").innerHTML = addHTML;
}
function clickontypepayment2(){
	addHTML = "<a href='<?php echo home_url(); ?>/competition-page-2/?category=105' class='w3-btn w3-margin-bottom'>Individual Payment</a>&nbsp;&nbsp;<a href='<?php echo home_url(); ?>/competitiont/?category=108' class='w3-btn w3-margin-bottom'>Team Payment</a>";
	document.getElementById("dynamicsituation1").innerHTML = addHTML;
}
function clickontypepayment3(){
	addHTML = "<a href='<?php echo home_url(); ?>/competition-page-2/?category=106' class='w3-btn w3-margin-bottom'>Individual Payment</a>&nbsp;&nbsp;<a href='<?php echo home_url(); ?>/competitiont/?category=109' class='w3-btn w3-margin-bottom'>Team Payment</a>";
	document.getElementById("dynamicsituation1").innerHTML = addHTML;
}
</script>
<section class="content_block clearfix">
<div class="tab-pane fade <?php echo $className; ?>" id="package_competetion" style="margin-top:30px;">
				  <span style="color:#337ab7;font-weight:bold;font-size:15px;">Click Here to Register Online for Payment&nbsp;&#10140;&nbsp;&nbsp;</span>
					  <a href="javascript:void(0)" class="w3-btn w3-margin-bottom" onclick="clickontypepayment1()">PAY FOR HACKATHON</a>
					  <a href="javascript:void(0)" class="w3-btn w3-margin-bottom" onclick="clickontypepayment2()">PAY FOR INNO-THON</a>
					   <a href="javascript:void(0)" class="w3-btn w3-margin-bottom" onclick="clickontypepayment3()">PAY FOR APP-ATHON</a>
						<div id="dynamicsituation1" style="text-align:center;margin-top:20px;"></div>
					  <table width="100%" style="margin-top:20px;" class="pay_g">
						<thead>
							<tr style="background:#FF9933;color:#FFF;">
								<td width="65%">Competition Category</td>
								<?php 
								$changeLevelLessOneToArray = array('102','103');
								foreach($changeLevelLessOneToArray as $l1){ 
								$queryToGetPackageName = $wpdb->get_results("select * from packagecategory where category_id='".$l1."'");
								/*while($totalResult = mysql_fetch_array($queryToGetPackageName)){
									echo "<td>".$totalResult->category_name."</td>";
									
								}*/
								
								foreach($queryToGetPackageName as $totalResult){
									echo "<td>".$totalResult->category_name."</td>";
								}
								}?>
							</tr>
						</thead>
						<tbody>
						<?php 
						$packages = array();
						$changelastLevelToArray = '';
						$changelastLevelToArray1 = '';
						
						$getpackages = $wpdb->get_results("select distinct(category_name) from packagecategory where parent_category_id in (102,103)");
						foreach($getpackages as $getpackage){
							$changelastLevelToArray1 .= $getpackage->category_name."__";
						}
						$changelastLevelToArray1 = rtrim($changelastLevelToArray1,"__");
						$changelastLevelToArray = explode("__",$changelastLevelToArray1);

						foreach($changelastLevelToArray as $l2){
							echo "<tr>";
							echo "<td>".$l2."</td>";
							foreach($changeLevelLessOneToArray as $l1){
								$queryToGetFee = $wpdb->get_results("select * from packagecategory where category_name='".$l2."' and parent_category_id='".$l1."'");
								foreach($queryToGetFee as $totalResult){
								if($totalResult->category_id=='107'){
								echo "<td><img src='".get_bloginfo('template_url')."/images/inr.png'>&nbsp;&nbsp;".$totalResult->fee."*</td>";	
								}elseif($totalResult->category_id=='108' || $totalResult->category_id=='109'){
								echo "<td><img src='".get_bloginfo('template_url')."/images/inr.png'>&nbsp;&nbsp;".$totalResult->fee."**</td>";	
								}else {
								echo "<td><img src='".get_bloginfo('template_url')."/images/inr.png'>&nbsp;&nbsp;".$totalResult->fee."</td>";	
								}
								
								
							}
							}
							echo "</tr>";
							
						}?>
						</tbody>
					</table>
					<p>*Upto three participants per team - HACKATHON<br/>
					 **Upto four participants per team - INNO-THON & APP-ATHON</p><br/>
					 <h3>Prizes is as follows:</h3>
					 <div class="col-md-4"><center><h5><strong>HACKATHON</strong></h5><img src="http://www.isgw.in/wp-content/uploads/2015/12/New-Picture-1.png"></center></div>
					 <div class="col-md-4"><center><h5><strong>INNO-THON</strong></h5><img src="http://www.isgw.in/wp-content/uploads/2015/12/New-Picture-2.png"></center></div>
					 <div class="col-md-4"><center><h5><strong>APP-ATHON</strong></h5><img src="http://www.isgw.in/wp-content/uploads/2015/12/New-Picture-2.png"></center></div>
</div>
</section>
<?php get_footer(); ?>