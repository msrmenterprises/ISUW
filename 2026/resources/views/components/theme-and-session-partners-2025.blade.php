@extends('master')
@section('content')

<style>
.partners-grid {
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
	gap: 20px;
	margin-bottom: 40px;
}

.partners-grid.grid-2 {
	grid-template-columns: repeat(2, 1fr);
}

.partners-grid.grid-3 {
	grid-template-columns: repeat(3, 1fr);
}

.partners-grid.grid-4 {
	grid-template-columns: repeat(4, 1fr);
}

.logo-card {
	display: flex;
	align-items: center;
	justify-content: center;
	min-height: 160px;
	background: #fff;
	border: solid 1px #D1D1D1;
	border-radius: 15px;
	padding: 15px;
	transition: all 0.3s ease;
}

.logo-card:hover {
	box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.15);
	transform: translateY(-5px);
}

.logo-card a {
	display: flex;
	width: 100%;
	height: 100%;
	align-items: center;
	justify-content: center;
}

.logo-card img {
	max-width: 100%;
	max-height: 100%;
	object-fit: contain;
	width: auto;
	height: auto;
}

@media (max-width: 991px) {
	.partners-grid {
		grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
		gap: 15px;
	}

	.partners-grid.grid-3,
	.partners-grid.grid-4 {
		grid-template-columns: repeat(2, 1fr);
	}

	.logo-card {
		min-height: 140px;
	}
}

@media (max-width: 576px) {
	.partners-grid {
		grid-template-columns: 1fr;
		gap: 15px;
	}

	.partners-grid.grid-2,
	.partners-grid.grid-3,
	.partners-grid.grid-4 {
		grid-template-columns: 1fr;
	}

	.logo-card {
		min-height: 120px;
	}
}
</style>

 <div class="container">
 <div class="row justify-content-left ">
<p></p>



<div class="k_cheading">
	<h1>ISUW 2026 <span class="k_greencolor">SESSION PARTNERS</span> </h1>
	<img src="/2026/uploads/images/kborder_bottom.png" alt=""> 
</div>
<div class="partners-grid grid-4">
	<div class="logo-card">
		<a href="https://www.powerfoundation.org.in/" target="_blank" rel="noopener noreferrer">
			<img src="images/2026/pfi.jpeg" alt="Power Foundation of India">
		</a>
	</div>
	<div class="logo-card">
		<a href="https://www.iexindia.com/" target="_blank" rel="noopener noreferrer">
			<img src="images/2025/IEX.png" alt="Indian Energy Exchange">
		</a>
	</div>
	<!-- <div class="logo-card">
		<a href="https://www.gov.uk/" target="_blank" rel="noopener noreferrer">
			<img src="http://isuw.in/uploads/partner/UK-Gov.png" alt="FCDO UK Government">
		</a>
	</div> -->
	<div class="logo-card">
		<a href="https://www.bis.gov.in/?lang=en" target="_blank" rel="noopener noreferrer">
			<img src="images/2025/BIS.jpg" alt="Bureau of India Standards">
		</a>
	</div>
	<div class="logo-card">
		<a href="https://webstore.iec.ch/en/" target="_blank" rel="noopener noreferrer">
			<img src="images/2025/IEC.png" alt="IEC">
		</a>
	</div>
	<div class="logo-card">
		<a href="https://www.ieee.org/" target="_blank" rel="noopener noreferrer">
			<img src="images/2025/IEEE.png" alt="IEEE">
		</a>
	</div>
	<div class="logo-card">
		<a href="https://aida-india.org/" target="_blank" rel="noopener noreferrer">
			<img src="public/uploads/images/2026/AIDA.png" alt="AIDA">
		</a>
	</div>
	<div class="logo-card">
		<a href="https://www.apuea.org/" target="_blank" rel="noopener noreferrer">
			<img src="images/2026/APUEA.png" alt="APUEA">
		</a>
	</div>
	<div class="logo-card">
		<a href="https://dst.gov.in/" target="_blank" rel="noopener noreferrer">
			<img src="images/2026/DSTGolden.png" alt="Department of Science and Technology">
		</a>
	</div>
	<div class="logo-card">
		<a href="https://nise.res.in/" target="_blank" rel="noopener noreferrer">
			<img src="images/2026/NISE.png" alt="NISE">
		</a>
	</div>
	<div class="logo-card">
		<a href="https://bscesystemsinc.com/" target="_blank" rel="noopener noreferrer">
			<img src="images/2025/BSCE.png" alt="BSCE Systems">
		</a>
	</div>
	<div class="logo-card">
		<a href="https://ulse.org/" target="_blank" rel="noopener noreferrer">
			<img src="images/2026/ulse.svg" alt="UL Standards & Engagement">
		</a>
	</div>
	<div class="logo-card">
		<a href="https://www.cdri.world/" target="_blank" rel="noopener noreferrer">
			<img src="images/2025/CDRI.jpg" alt="CDRI">
		</a>
	</div>
</div>



<div class="k_cheading">
	<h1>ISUW 2025 <span class="k_greencolor">Conference Sessions Partner</span> </h1>
	<img src="/2026/uploads/images/kborder_bottom.png" alt=""> 
</div>
<div class="partners-grid grid-4">
	<div class="logo-card">
		<a href="https://www.aspentech.com/en" target="_blank" rel="noopener noreferrer">
			<img src="images/2025/AspenTech.png" alt="AspenTech">
		</a>
	</div>
	<div class="logo-card">
		<a href="#" target="_blank" rel="noopener noreferrer">
			<img src="images/2025/BSCE.png" alt="BSCE">
		</a>
	</div>
	<div class="logo-card">
		<a href="https://www.ideasmattermost.com/" target="_blank" rel="noopener noreferrer">
			<img src="images/2025/Ideasmatter.png" alt="Ideasmatter">
		</a>
	</div>
	<div class="logo-card">
		<a href="https://www.iec.ch/homepage" target="_blank" rel="noopener noreferrer">
			<img src="images/2025/IEC.png" alt="IEC">
		</a>
	</div>
	<div class="logo-card">
		<a href="https://www.ieee.org/" target="_blank" rel="noopener noreferrer">
			<img src="images/2025/IEEE.png" alt="IEEE">
		</a>
	</div>
	<div class="logo-card">
		<a href="https://apua-asea.org/en/" target="_blank" rel="noopener noreferrer">
			<img src="images/2025/APUA.jpg" alt="APUA">
		</a>
	</div>
	<div class="logo-card">
		<a href="https://openchargealliance.org/" target="_blank" rel="noopener noreferrer">
			<img src="images/2025/OpenChargeAlliance.jpg" alt="Open Charge Alliance">
		</a>
	</div>
	<div class="logo-card">
		<a href="https://www.trade.gov/us-commercial-service" target="_blank" rel="noopener noreferrer">
			<img src="images/2025/UScommercial.png" alt="US Commercial">
		</a>
	</div>
	<div class="logo-card">
		<a href="https://aida-india.org/" target="_blank" rel="noopener noreferrer">
			<img src="public/uploads/images/2026/AIDA.png" alt="AIDA">
		</a>
	</div>
	<div class="logo-card">
		<a href="https://www.bis.gov.in/" target="_blank" rel="noopener noreferrer">
			<img src="images/2025/BIS.jpg" alt="BIS">
		</a>
	</div>
	<div class="logo-card">
		<a href="https://www.cdri.world/" target="_blank" rel="noopener noreferrer">
			<img src="images/2025/CDRI.jpg" alt="CDRI">
		</a>
	</div>
	<div class="logo-card">
		<a href="https://www.indiabrazilchamber.org/home" target="_blank" rel="noopener noreferrer">
			<img src="images/2025/IBCoC.png" alt="India Brazil Chamber of Commerce">
		</a>
	</div>
	<div class="logo-card">
		<a href="https://www.smartgrid.com.br/" target="_blank" rel="noopener noreferrer">
			<img src="images/2025/LATAM.png" alt="LATAM">
		</a>
	</div>
	<div class="logo-card">
		<a href="https://sscgj.in/" target="_blank" rel="noopener noreferrer">
			<img src="images/2025/SCGJ.png" alt="SCGJ">
		</a>
	</div>
	<div class="logo-card">
		<a href="https://www.gov.uk/government/organisations/foreign-commonwealth-development-office" target="_blank" rel="noopener noreferrer">
			<img src="images/2025/UKGovSTACKRGB.png" alt="UK Government">
		</a>
	</div>
	<div class="logo-card">
		<a href="https://pjci.idremember.com/" target="_blank" rel="noopener noreferrer">
			<img src="https://pjci.idremember.com/wp-content/uploads/2022/05/download__1_-removebg-preview.png" alt="PJCI">
		</a>
	</div>
	<div class="logo-card">
		<a href="https://ulse.org/" target="_blank" rel="noopener noreferrer">
			<img src="images/2025/ulstandengage.svg" alt="ULSE">
		</a>
	</div>
</div>

 

<!-- <h5 style="text-align:center;"><b>Session Partners</b></h5>
<div class="col-lg-4"></div>
<div class="col-lg-4"><div class="logo-div"><a href="https://www.aspentech.com/en" target="_blank" rel="noopener noreferrer"><img src="images/2025/AspenTech.png" alt=""  height="102" style="display:inline;"></div></a></div>
<div class="col-lg-4"></div> -->
 
 <p></p>
 <p style="text-align:center; font-size:16px;"><a href="https://www.isuw.in/2024/theme-and-session-partners-2024" class="getstartedd ">Theme and Session Partners 2024</a></p>
 <p style="text-align:center; font-size:16px;"><a href="https://www.isuw.in/theme-and-session-partners-2023" class="getstartedd ">Theme and Session Partners 2023</a></p>
 <p style="text-align:center; font-size:16px;"><a href="https://www.isuw.in/theme-and-session-partners" class="getstartedd ">Theme and Session Partners 2022</a></p>
		
<p></p>
</div>
</div>

@endsection