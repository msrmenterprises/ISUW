@extends('master')
@section('content')

 <div class="container">
 <div class="row justify-content-center ">
<p></p>
<div class="k_cheading">
		<h1>ISUW<span class="k_greencolor"> Post Event Reports</span> </h1>
		<img src="/public/uploads/images/kborder_bottom.png" alt=""> 
	</div>
<p></p>
<!--<p style="text-align:center; font-size:16px;"><a href="/public/images/ISUW 2023 Post Event Report (1).pdf" class="getstartedd ">Last Edition Post Event Report</a></p>-->
</p>

<!-- Reports table (styled like presentations page) -->
<style type="text/css">
	table {
	width: 100%;
	border-collapse: collapse;
	}
	th, td {
	border: 1px solid #000;
	padding: 8px;
	text-align: left;
	}
	.session-header {
	background-color: #FFF2CC;
	font-weight: bold;
	}
	.session-head{
	background-color:#8cc63e;
	}

</style>

<table role="region" aria-label="ISUW reports" style="width:100%; border-collapse:collapse;">
	<thead>
		<tr style="background:#8cc63e; color:#fff;">
			<th style="border:1px solid #000; padding:8px; text-align:left;">Particulars</th>
			<th style="border:1px solid #000; padding:8px; text-align:left;">Read / Download Reports</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="border:1px solid #000; padding:8px;">ISUW 2025 Outcome Report</td>
			<td style="border:1px solid #000; padding:8px;"><a href="/public/images/ISUW2025OUTCOMEREPORT-13October2025-FINAL.pdf" target="_blank" rel="noopener">Read / Download</a></td>
		</tr>
		<tr>
			<td style="border:1px solid #000; padding:8px;">ISUW 2025 Post Event Report</td>
			<td style="border:1px solid #000; padding:8px;"><a href="/public/images/PostEventISUW2025.pdf" target="_blank" rel="noopener">Read / Download</a></td>
		</tr>
		<tr>
			<td style="border:1px solid #000; padding:8px;">ISUW 2024 Post Event Report</td>
			<td style="border:1px solid #000; padding:8px;"><a href="/public/images/Post Event Report (ISUW 2024) March (08-04-2024).pdf" target="_blank" rel="noopener">Read / Download</a></td>
		</tr>
	</tbody>
</table>

<!-- <iframe src="/public/images/ISUW2025OUTCOMEREPORT-13October2025-FINAL.pdf" height="600" width="150" title="Iframe Example" style="width: 800px;text-align: center;"></iframe> -->

<p></p>
</div>
</div>

@endsection
