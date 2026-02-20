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

.supporting-links {
	text-align: center;
	font-size: 16px;
}

.supporting-links p {
	margin: 8px 0;
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
	<section class="page-section">
		<div class="section-title">
			<h2>ISUW 2026 Supporting Organisations</h2>
		</div>
		<div class="partners-grid grid-4">
			<div class="logo-card">
				<a href="https://aida-india.org/" target="_blank" rel="noopener noreferrer">
					<img src="public/uploads/images/2026/AIDA.png" alt="AIDA">
				</a>
			</div>
			<div class="logo-card">
				<a href="http://globalsmartenergy.org/" target="_blank" rel="noopener noreferrer">
					<img src="images/2025/GSEF.png" alt="GSEF">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://indiaesa.info/" target="_blank" rel="noopener noreferrer">
					<img src="images/2026/IESA.png" alt="India Energy Storage Alliance">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://www.cbip.org/" target="_blank" rel="noopener noreferrer">
					<img src="https://www.isuw.in/public/uploads/organizations/CBIP PNG.png" alt="CBIP">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://sscgj.in/" target="_blank" rel="noopener noreferrer">
					<img src="images/2026/SCGJ.png" alt="Skill Council for Green Jobs">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://www.netraglobal.org/" target="_blank" rel="noopener noreferrer">
					<img src="images/2026/NETRA.png" alt="NETRA">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://apua-asea.org/en/" target="_blank" rel="noopener noreferrer">
					<img src="https://www.isuw.in/public/uploads/organizations/LOGO APUA.jpg" alt="APUA">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://standards.ieee.org/" target="_blank" rel="noopener noreferrer">
					<img src="images/2026/IEEE.jpg" alt="IEEE Standards Association">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://www.apuea.org/" target="_blank" rel="noopener noreferrer">
					<img src="images/2026/APUEA.png" alt="APUEA">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://iea-isgan.org/" target="_blank" rel="noopener noreferrer">
					<img src="images/2026/ISGAN.png" alt="ISGAN">
				</a>
			</div>
		</div>
	</section>

	<section class="page-section">
		<div class="section-title">
			<h2>ISUW 2025 Supporting Organisations</h2>
		</div>
		<div class="partners-grid grid-4">
			<div class="logo-card">
				<a href="https://energyalliance.org/" target="_blank" rel="noopener noreferrer">
					<img src="images/2025/globalEnergy.png" alt="Global Energy Alliance">
				</a>
			</div>
			<div class="logo-card">
				<a href="http://globalsmartenergy.org/" target="_blank" rel="noopener noreferrer">
					<img src="images/2025/GSEF.png" alt="GSEF">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://www.cbip.org/" target="_blank" rel="noopener noreferrer">
					<img src="https://www.isuw.in/public/uploads/organizations/CBIP PNG.png" alt="CBIP">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://apua-asea.org/en/" target="_blank" rel="noopener noreferrer">
					<img src="https://www.isuw.in/public/uploads/organizations/LOGO APUA.jpg" alt="APUA">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://www.cigre.org/" target="_blank" rel="noopener noreferrer">
					<img src="https://www.isuw.in/public/uploads/organizations/cigre.jpg" alt="CIGRE">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://www.indiacgd.in/" target="_blank" rel="noopener noreferrer">
					<img src="https://www.isuw.in/public/uploads/organizations/Indiacgd.jpeg" alt="India CGD">
				</a>
			</div>
			<div class="logo-card">
				<a href="#" target="_blank" rel="noopener noreferrer">
					<img src="public/uploads/images/2026/AIDA.png" alt="AIDA">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://www.boci.org.in/" target="_blank" rel="noopener noreferrer">
					<img src="images/2025/BOCI.jpg" alt="BOCI">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://www.busworld.org/" target="_blank" rel="noopener noreferrer">
					<img src="images/2025/LOGOBaseline.png" alt="Busworld">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://www.cencenelec.eu/" target="_blank" rel="noopener noreferrer">
					<img src="https://www.isuw.in/public/uploads/exhibitor/cenelec.jpeg" alt="CENELEC">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://www.cencenelec.eu/" target="_blank" rel="noopener noreferrer">
					<img src="https://www.isuw.in/public/uploads/exhibitor/cen.jpeg" alt="CEN">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://www.etsi.org/" target="_blank" rel="noopener noreferrer">
					<img src="https://www.isuw.in/public/uploads/organizations/ETSI.jpg" alt="ETSI">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://www.iea-isgan.org/" target="_blank" rel="noopener noreferrer">
					<img src="https://www.isuw.in/public/uploads/organizations/ISGAN.png" alt="ISGAN">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://sscgj.in/" target="_blank" rel="noopener noreferrer">
					<img src="https://sscgj.in/wp-content/themes/sscgj/images/scgj.gif" alt="SCGJ">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://energyforum.in/" target="_blank" rel="noopener noreferrer">
					<img src="images/2025/IGEF.svg" alt="IGEF">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://vjti.ac.in/" target="_blank" rel="noopener noreferrer">
					<img src="images/2025/VJTI.jpg" alt="VJTI">
				</a>
			</div>
		</div>
	</section>

	<section class="page-section">
		<div class="section-title">
			<h2>ISUW 2024 Supporting Organisations</h2>
		</div>
		<div class="partners-grid grid-4">
			<div class="logo-card">
				<a href="http://globalsmartenergy.org/" target="_blank" rel="noopener noreferrer">
					<img src="http://www.isuw.in/beta/wp-content/uploads/2020/12/GSEF-LOGO-1.png" alt="GSEF">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://www.indiacgd.in/" target="_blank" rel="noopener noreferrer">
					<img src="https://www.isuw.in/public/uploads/organizations/Indiacgd.jpeg" alt="India CGD">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://www.cbip.org/" target="_blank" rel="noopener noreferrer">
					<img src="https://www.isuw.in/public/uploads/organizations/CBIP PNG.png" alt="CBIP">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://www.boci.org.in/" target="_blank" rel="noopener noreferrer">
					<img src="https://www.isuw.in/public/uploads/organizations/BOCI Logo.jpg" alt="BOCI">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://www.energyforum.in/home/" target="_blank" rel="noopener noreferrer">
					<img src="https://www.isuw.in/public/uploads/organizations/2019_IGEF_logo_SVG.svg" alt="IGEF">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://vjti.ac.in/" target="_blank" rel="noopener noreferrer">
					<img src="https://www.isuw.in/public/uploads/organizations/VJTI.jpeg" alt="VJTI">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://www.etsi.org/" target="_blank" rel="noopener noreferrer">
					<img src="https://www.isuw.in/public/uploads/organizations/ETSI.jpg" alt="ETSI">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://www.apuea.org/" target="_blank" rel="noopener noreferrer">
					<img src="https://www.isuw.in/public/uploads/organizations/apuea-logo-200px.png" alt="APUEA">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://ngsindia.org/" target="_blank" rel="noopener noreferrer">
					<img src="https://www.isuw.in/public/uploads/organizations/NGSLogo.png" alt="NGS">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://www.cencenelec.eu/" target="_blank" rel="noopener noreferrer">
					<img src="https://www.isuw.in/public/uploads/exhibitor/cenelec.jpeg" alt="CENELEC">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://www.cencenelec.eu/" target="_blank" rel="noopener noreferrer">
					<img src="https://www.isuw.in/public/uploads/exhibitor/cen.jpeg" alt="CEN">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://www.cigre.org/" target="_blank" rel="noopener noreferrer">
					<img src="https://www.isuw.in/public/uploads/organizations/cigre.jpg" alt="CIGRE">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://www.phdcci.in/" target="_blank" rel="noopener noreferrer">
					<img src="https://www.isuw.in/public/uploads/organizations/PHD.png" alt="PHDCCI">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://www.apuea.org/" target="_blank" rel="noopener noreferrer">
					<img src="https://www.isuw.in/public/uploads/exhibitor/e-notes_p5_apuea-logo_may17.png" alt="APUEA">
				</a>
			</div>
			<div class="logo-card">
				<a href="https://www.iea-isgan.org/" target="_blank" rel="noopener noreferrer">
					<img src="https://www.isuw.in/public/uploads/organizations/ISGAN.png" alt="ISGAN">
				</a>
			</div>
		</div>
	</section>

	<div class="supporting-links">
		<p><a href="https://www.isuw.in/supporting-organization-2023" class="getstartedd">Supporting Organization 2023</a></p>
		<p><a href="https://www.isuw.in/supporting-organization-2022" class="getstartedd">Supporting Organization 2022</a></p>
		<p><a href="https://www.isuw.in/supporting-organization" class="getstartedd">Supporting Organization 2021</a></p>
	</div>
</div>

@endsection
