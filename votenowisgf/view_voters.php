<?php include "header.php"; error_reporting(0); include 'config.php'; ?>
<body>
<style>
.cast_vote{
	font-weight:600;
	margin-bottom:20px;
	color:#e27618;
	font-size:30px;
	text-align:center;
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
			<h3><?php echo $_POST['nominee']; ?></h3><br/>
			<table border=1 cellspacing="5" cellpadding="10">
				<thead class="award_cermny">
					<tr>
						<td><b>Sr. No</b></td>
						<td><b>Voter Name</b></td>
						<td><b>Twitter ID</b></td>						
					</tr>
					</thead>
					<?php $i=0;
					    $sQL    =   "SELECT * FROM `voting` where vote_category='".$_POST['nominee']."'";
					    
					    //echo $sQL;  exit;
						$q = mysqli_query($conn, $sQL);
						while($res = mysqli_fetch_array($q)){ $i++; ?>
							<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $res['name']; ?></td>
							<td><?php echo $res['screenname']; ?></td>
						</tr>
					<?php } ?>								
			</table>
			<div class="clearfix"></div>
			<br/><br/><br/>
			<a href="http://isgw.in/votenowisgf/isgf_vote_result.php" class="btn btn-success">Go Back</a>
			<br/><br/>
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