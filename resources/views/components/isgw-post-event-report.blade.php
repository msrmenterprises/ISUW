@extends('master')
@section('content')

 <div class="container">
 <div class="row justify-content-center ">
<p></p>
<div class="k_cheading">
		<h1>ISUW<span class="k_greencolor"> Post Event Report</span> </h1>
		<img src="/public/uploads/images/kborder_bottom.png" alt=""> 
	</div>
<p></p>
<!--<p style="text-align:center; font-size:16px;"><a href="/public/images/ISUW 2023 Post Event Report (1).pdf" class="getstartedd ">Last Edition Post Event Report</a></p>-->
</p>

<!-- Reports box: two columns -->
<div class="reports-box" style="max-width:980px;margin:20px auto;padding:18px;border:1px solid #e1e1e1;border-radius:8px;background:#fff;box-shadow:0 2px 8px rgba(0,0,0,0.03);">
	<div style="display:flex;flex-wrap:wrap;gap:12px;align-items:flex-start;">
		<div style="flex:1 1 50%;min-width:240px;font-weight:700;">Particulars</div>
		<div style="flex:0 0 40%;min-width:180px;text-align:right;font-weight:700;">Read / Download Reports</div>
	</div>

	<hr style="margin:12px 0;border:none;border-top:1px dashed #e6e6e6;">

	<div style="display:flex;flex-direction:column;gap:10px;">
		<div style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;">
			<div style="flex:1 1 60%;min-width:220px;">ISUW 2025 Outcome Report</div>
			<div style="flex:0 0 200px;text-align:right;"><a href="/public/images/ISUW2025OUTCOMEREPORT-13October2025-FINAL.pdf" target="_blank" rel="noopener">Read / Download</a></div>
		</div>

		<div style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;">
			<div style="flex:1 1 60%;min-width:220px;">ISUW 2025 Post Event Report</div>
			<div style="flex:0 0 200px;text-align:right;"><a href="/public/images/ISUW_2025_Post_Event_Report.pdf" target="_blank" rel="noopener">Read / Download</a></div>
		</div>

		<div style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;">
			<div style="flex:1 1 60%;min-width:220px;">ISUW 2024 Post Event Report</div>
			<div style="flex:0 0 200px;text-align:right;"><a href="/public/images/Post Event Report (ISUW 2024) March (08-04-2024).pdf" target="_blank" rel="noopener">Read / Download</a></div>
		</div>
	</div>
</div>

<iframe src="/public/images/ISUW2025OUTCOMEREPORT-13October2025-FINAL.pdf" height="600" width="150" title="Iframe Example" style="width: 800px;text-align: center;"></iframe>

<p></p>
</div>
</div>

@endsection
