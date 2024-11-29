<?php include "header.php"; error_reporting(0); include 'config.php'; ?>
<body>
<style>
.cast_vote{
	font-weight:600;
	margin-bottom:20px;
	color:#000;
	font-size:25px;
	text-align:left;
	float:none;
}
.inner p{
	text-align:Left;
}

</style>
	
	<div class="clearfix"></div>

	<section class="main" style="margin-top: 10px;">
		<div class="inner">
		
		
			<div class="clearfix"></div>
			<h3 class="cast_vote">Voting Result</h3>
			<br/>
			<table border=1 cellspacing="5" cellpadding="10">
				<thead class="award_cermny">
					<tr>
						<td>Sr. No</td>
						<td>Award Categories and Companies</td>
						<td>Nomination Title</td>
						<td>TOTAL VOTES</td>
						<td>View Voters</td>
						
					</tr>
				</thead>
			<?php 
			$getProjectCategory = mysqli_query($conn, "select distinct(voting_category) as v_category from voting_category");
			if(mysqli_num_rows($getProjectCategory)>0){
				
				while($result = mysqli_fetch_array($getProjectCategory)){ 
				
					$getProjectByCategory = mysqli_query($conn, "select * from voting_category where voting_category = '".$result['v_category']."'");
				?>
					<tr><td colspan="5"><strong><?php echo $result['v_category']; ?></strong></td><tr>
						
						<?php if(mysqli_num_rows($getProjectByCategory)>0){
						$i=0;
						while($resultmain = mysqli_fetch_array($getProjectByCategory)){
							$sum = 0;
							$i++;
							$query = mysqli_query($conn, "select count(*) as count_main,vote_category,vote_categorymain  from voting where vote_category='".$resultmain['nominee']."' and vote_categorymain = '".$result['v_category']."'");
							if(mysqli_num_rows($query) > 0){
								
								while($resultQuery = mysqli_fetch_array($query)){
									
									$sum = $resultQuery['count_main'];
								}
							}
						?>
							<tr class="<?php if($i%2==0){ echo "even"; }else{ echo "odd";}?>">
								<td><?php echo $i; ?></td>
									<td><?php echo ucwords($resultmain['company_Det']); ?></td>
									<td><?php echo $resultmain['nominee']; ?></td>
									<td><?php echo $sum; ?></td>
									<td>
									<form action="view_voters.php" method="POST">
										<input type="hidden" name="nominee" value="<?php echo $resultmain['nominee'];?>">
										<button type="submit" class="btn btn-success">View Voters</button>
									</form>
									</td>
									
								</tr>
							<?php }
						}
						?>
						
						
						
					</tr>
				<?php }
			}
			?>
			
			
			
			
			</table>
			
		</div>
	</section>
	<style>
	    .btn-success:hover {
            color: #fff;
            background-color: #449d44;
            border-color: #398439;
        }
        .btn-success {
            color: #fff;
            background-color: #5cb85c;
            border-color: #4cae4c;
        }
        .btn {
            display: inline-block;
            margin-bottom: 0;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            background-image: none;
            border: 1px solid transparent;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            border-radius: 4px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        .btn-success.focus, .btn-success:focus {
            color: #fff;
            background-color: #449d44;
            border-color: #255625;
        }
        .even{ background:#f3f2f2;}
	</style>
	<div class="clearfix"></div>
<?php include "footer.php"; ?>