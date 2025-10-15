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
<style>
.reports-table {
	max-width: 980px;
	margin: 20px auto;
	border: 1px solid #e9ecef;
	border-radius: 8px;
	background: #fff;
	box-shadow: 0 2px 8px rgba(0,0,0,0.03);
	padding: 14px;
	box-sizing: border-box;
}
.reports-table .row { display:flex; gap:12px; align-items:center; }
.reports-table .col-left { flex: 1 1 60%; min-width:220px; font-weight:600; }
.reports-table .col-right { flex: 0 0 260px; text-align:right; }
.reports-table .row.header { background: #8cc63e; color: #fff; padding: 10px; border-radius: 6px; }
.reports-table .row.header .col-left,
.reports-table .row.header .col-right { color: #fff; font-weight:700; }
.reports-table .divider { margin:12px 0; border-top:1px dashed #e6e6e6; }
.reports-table a.pdf-link { color:#0a58ca; text-decoration:none; font-weight:600; }
.reports-table a.pdf-link:hover { text-decoration:underline; }
@media (max-width:700px) {
	.reports-table .row { flex-direction:column; align-items:flex-start; }
	.reports-table .col-right { width:100%; text-align:left; }
}
</style>

<div class="reports-table" role="region" aria-label="ISUW reports">
		<div class="row header" style="margin-bottom:6px;">
		<div class="col-left">Particulars</div>
		<div class="col-right">Read / Download Reports</div>
	</div>
	<div class="divider" aria-hidden="true"></div>

	<div class="row" style="margin-bottom:8px;">
		<div class="col-left">ISUW 2025 Outcome Report</div>
		<div class="col-right"><a class="pdf-link" href="/public/images/ISUW2025OUTCOMEREPORT-13October2025-FINAL.pdf" target="_blank" rel="noopener">Read / Download</a></div>
	</div>

	<div class="row" style="margin-bottom:8px;">
		<div class="col-left">ISUW 2025 Post Event Report</div>
		<div class="col-right"><a class="pdf-link" href="/public/images/ISUW_2025_Post_Event_Report.pdf" target="_blank" rel="noopener">Read / Download</a></div>
	</div>

	<div class="row">
		<div class="col-left">ISUW 2024 Post Event Report</div>
		<div class="col-right"><a class="pdf-link" href="/public/images/Post Event Report (ISUW 2024) March (08-04-2024).pdf" target="_blank" rel="noopener">Read / Download</a></div>
	</div>
</div>

<!-- <iframe src="/public/images/ISUW2025OUTCOMEREPORT-13October2025-FINAL.pdf" height="600" width="150" title="Iframe Example" style="width: 800px;text-align: center;"></iframe> -->

<p></p>
</div>
</div>

@endsection
