@extends('master')
@section('content')

<style>
.partners-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-bottom: 40px;
}

.partners-grid.grid-4 {
    grid-template-columns: repeat(4, 1fr);
}

.partners-grid.grid-5 {
    grid-template-columns: repeat(5, 1fr);
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

    .partners-grid.grid-4 {
        grid-template-columns: repeat(2, 1fr);
    }

    .partners-grid.grid-5 {
        grid-template-columns: repeat(3, 1fr);
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

    .partners-grid.grid-4,
    .partners-grid.grid-5 {
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
            <h2>ISUW 2026 Participating Utilities</h2>
        </div>
        <div class="partners-grid grid-5">
            <div class="logo-card"><a href="https://www.bsesdelhi.com/web/brpl" target="_blank" rel="noopener noreferrer"><img src="https://www.isuw.in/public/uploads/utility/1641110129.png" alt="BSES Rajdhani Power Limited"></a></div>
            <div class="logo-card"><a href="https://www.bsesdelhi.com/web/bypl" target="_blank" rel="noopener noreferrer"><img src="https://www.isuw.in/public/uploads/utility/1641110101.png" alt="BSES Yamuna Power Limited"></a></div>
            <div class="logo-card"><a href="http://www.tatapower-ddl.com/" target="_blank" rel="noopener noreferrer"><img src="https://www.isuw.in/public/uploads/utility/1641110211.png" alt="Tata Power DDL"></a></div>
            <div class="logo-card"><a href="https://www.tatapower.com/" target="_blank" rel="noopener noreferrer"><img src="https://www.isuw.in/public/uploads/utility/1641110147.png" alt="Tata Power Company Limited"></a></div>
            <div class="logo-card"><a href="https://www.noidapower.com/" target="_blank" rel="noopener noreferrer"><img src="images/2026/NPCL_logo.png" alt="NPCL"></a></div>
            <div class="logo-card"><a href="https://www.powergrid.in/en/" target="_blank" rel="noopener noreferrer"><img src="images/2025/Powergrid.png" alt="Powergrid"></a></div>
            <div class="logo-card"><a href="https://grid-india.in/en/" target="_blank" rel="noopener noreferrer"><img src="images/2025/Grid-India.png" alt="Grid India"></a></div>
            <div class="logo-card"><a href="https://kseb.in/" target="_blank" rel="noopener noreferrer"><img src="images/2025/KSEB.png" alt="KSEB"></a></div>
            <div class="logo-card"><a href="https://pgvcl.com/" target="_blank" rel="noopener noreferrer"><img src="images/2025/PGVCL.jpg" alt="PGVCL"></a></div>
            <div class="logo-card"><a href="https://pedservices.py.gov.in/" target="_blank" rel="noopener noreferrer"><img src="public/uploads/utility/Puducherry.jpg" alt="Puducherry Electricity Department"></a></div>
            <div class="logo-card"><a href="https://www.tpnodl.com/" target="_blank" rel="noopener noreferrer"><img src="images/2025/TPNODL.png" alt="TPNODL"></a></div>
            <div class="logo-card"><a href="https://www.tpwesternodisha.com/" target="_blank" rel="noopener noreferrer"><img src="images/2025/TPWODL.png" alt="TPWODL"></a></div>
            <div class="logo-card"><a href="https://www.tpcentralodisha.com/" target="_blank" rel="noopener noreferrer"><img src="images/2025/TPCODL.png" alt="TPCODL"></a></div>
            <div class="logo-card"><a href="https://www.tpsouthernodisha.com/" target="_blank" rel="noopener noreferrer"><img src="images/2025/TPSODL.png" alt="TPSODL"></a></div>
            <div class="logo-card"><a href="https://www.apcpdcl.in/" target="_blank" rel="noopener noreferrer"><img src="https://logo.clearbit.com/apcpdcl.in" alt="APCPDCL"></a></div>
            <div class="logo-card"><a href="https://www.cesc.co.in/" target="_blank" rel="noopener noreferrer"><img src="images/2025/CESC_Logo.png" alt="CESC Limited"></a></div>
            <div class="logo-card"><a href="https://uppcl.org/uppcl/en" target="_blank" rel="noopener noreferrer"><img src="images/2025/UPPCL.png" alt="UPPCL"></a></div>
            <div class="logo-card"><a href="https://www.guvnl.com/" target="_blank" rel="noopener noreferrer"><img src="images/2025/GUVNL.png" alt="GUVNL"></a></div>
            <div class="logo-card"><a href="https://apdcl.org/website/" target="_blank" rel="noopener noreferrer"><img src="https://logo.clearbit.com/apdcl.org" alt="APDCL"></a></div>
            <div class="logo-card"><a href="https://kesco.co.in/Default" target="_blank" rel="noopener noreferrer"><img src="public/uploads/utility/KESCO.png" alt="KESCo"></a></div>
            <div class="logo-card"><a href="https://energy.rajasthan.gov.in/content/raj/energy-department/jdvvnl/en/home.html" target="_blank" rel="noopener noreferrer"><img src="public/uploads/utility/JdVVNLa.jpg" alt="JDVVNL"></a></div>
            <div class="logo-card"><a href="https://puvvnl.up.nic.in/" target="_blank" rel="noopener noreferrer"><img src="public/uploads/utility/PUVVNL.jpeg" alt="PUVVNL"></a></div>
            <div class="logo-card"><a href="https://www.mahadiscom.in/en/home/" target="_blank" rel="noopener noreferrer"><img src="images/2025/MSEDCL.png" alt="MSEDCL"></a></div>
            <div class="logo-card"><a href="https://energy.rajasthan.gov.in/content/raj/energy-department/avvnl/en/home.html" target="_blank" rel="noopener noreferrer"><img src="https://logo.clearbit.com/energy.rajasthan.gov.in" alt="AVVNL"></a></div>
            <div class="logo-card"><a href="https://www.mvvnl.in/" target="_blank" rel="noopener noreferrer"><img src="public/uploads/utility/Madhyanchal Vidyut Vitran Nigam Ltd.png" alt="MVVNL"></a></div>
            <div class="logo-card"><a href="https://www.nbpdcl.co.in/" target="_blank" rel="noopener noreferrer"><img src="public/uploads/utility/North Bihar Power Distribution Company Limited.jpg" alt="NBEDCL"></a></div>
            <div class="logo-card"><a href="https://www.torrentpower.com/" target="_blank" rel="noopener noreferrer"><img src="public/uploads/utility/Torrent Power Ltd.png" alt="Torrent Power"></a></div>
            <div class="logo-card"><a href="https://energy.rajasthan.gov.in/content/raj/energy-department/jvvnl/en/home.html" target="_blank" rel="noopener noreferrer"><img src="https://logo.clearbit.com/energy.rajasthan.gov.in" alt="JVVNL"></a></div>
            <div class="logo-card"><a href="https://www.wbsedcl.in/" target="_blank" rel="noopener noreferrer"><img src="public/uploads/utility/WBSEDCL.png" alt="WBSEDCL"></a></div>
            <div class="logo-card"><a href="https://www.adanielectricity.com/" target="_blank" rel="noopener noreferrer"><img src="public/uploads/utility/adani.jpg" alt="Adani Electricity"></a></div>
            <div class="logo-card"><a href="https://www.pvvnl.org/" target="_blank" rel="noopener noreferrer"><img src="images/2025/PVVNL-Logo.png" alt="PVVNL"></a></div>
            <div class="logo-card"><a href="https://gescomglb.org/gescom/main/home" target="_blank" rel="noopener noreferrer"><img src="public/uploads/utility/GESCOM.jpg" alt="GESCOM"></a></div>
            <div class="logo-card"><a href="https://dvc.gov.in/" target="_blank" rel="noopener noreferrer"><img src="images/2026/DVCLogo.png" alt="DVC"></a></div>
            <div class="logo-card"><a href="https://www.apspdcl.in/index.jsp" target="_blank" rel="noopener noreferrer"><img src="images/2025/APSPDCL.png" alt="APSPDCL"></a></div>
            <div class="logo-card"><a href="https://www.mahatransco.in/" target="_blank" rel="noopener noreferrer"><img src="https://logo.clearbit.com/mahatransco.in" alt="MSETCL"></a></div>
            <div class="logo-card"><a href="https://dnhddpcl.in/" target="_blank" rel="noopener noreferrer"><img src="images/2027/Dadarhaveli.jpg" alt="DNH and DD Power Corporation Ltd"></a></div>
        </div>
    </section>

    <section class="page-section">
        <div class="section-title">
            <h2>ISUW 2025 Participating Utilities</h2>
        </div>
        <div class="partners-grid grid-5">
            <div class="logo-card"><a href="https://www.bsesdelhi.com/web/bypl#loaded" target="_blank" rel="noopener noreferrer"><img src="https://www.isuw.in/public/uploads/utility/1641110101.png" alt="BYPL"></a></div>
            <div class="logo-card"><a href="https://www.bsesdelhi.com/web/brpl" target="_blank" rel="noopener noreferrer"><img src="https://www.isuw.in/public/uploads/utility/1641110129.png" alt="BRPL"></a></div>
            <div class="logo-card"><a href="http://www.tatapower-ddl.com/" target="_blank" rel="noopener noreferrer"><img src="https://www.isuw.in/public/uploads/utility/1641110211.png" alt="Tata Power DDL"></a></div>
            <div class="logo-card"><a href="https://www.tatapower.com/" target="_blank" rel="noopener noreferrer"><img src="https://www.isuw.in/public/uploads/utility/1641110147.png" alt="Tata Power"></a></div>
            <div class="logo-card"><a href="https://www.mgvcl.com/" target="_blank" rel="noopener noreferrer"><img src="images/2025/MGVCL.png" alt="MGVCL"></a></div>
            <div class="logo-card"><a href="https://www.tpcentralodisha.com/" target="_blank" rel="noopener noreferrer"><img src="images/2025/TPCODL.png" alt="TPCODL"></a></div>
            <div class="logo-card"><a href="https://www.tpnodl.com/" target="_blank" rel="noopener noreferrer"><img src="images/2025/TPNODL.png" alt="TPNODL"></a></div>
            <div class="logo-card"><a href="https://www.powergrid.in/en" target="_blank" rel="noopener noreferrer"><img src="images/2025/Powergrid.png" alt="Powergrid"></a></div>
            <div class="logo-card"><a href="https://www.noidapower.com/Home" target="_blank" rel="noopener noreferrer"><img src="images/2025/NPCL.png" alt="NPCL"></a></div>
            <div class="logo-card"><a href="https://uppcl.org/uppcl/en" target="_blank" rel="noopener noreferrer"><img src="images/2025/UPPCL.png" alt="UPPCL"></a></div>
            <div class="logo-card"><a href="https://www.guvnl.com/" target="_blank" rel="noopener noreferrer"><img src="images/2025/GUVNL.png" alt="GUVNL"></a></div>
            <div class="logo-card"><a href="https://dgvcl.com/" target="_blank" rel="noopener noreferrer"><img src="images/2025/DGVCL.png" alt="DGVCL"></a></div>
            <div class="logo-card"><a href="https://www.uhbvn.org.in/web/portal/home" target="_blank" rel="noopener noreferrer"><img src="images/2025/UHBVN.png" alt="UHBVN"></a></div>
            <div class="logo-card"><a href="https://www.dhbvn.org.in/web/portal/home" target="_blank" rel="noopener noreferrer"><img src="images/2025/DHBVN.jpg" alt="DHBVN"></a></div>
            <div class="logo-card"><a href="https://kseb.in/ksebhome" target="_blank" rel="noopener noreferrer"><img src="images/2025/KSEB.png" alt="KSEB"></a></div>
            <div class="logo-card"><a href="https://www.tpsouthernodisha.com/" target="_blank" rel="noopener noreferrer"><img src="images/2025/TPSODL.png" alt="TPSODL"></a></div>
            <div class="logo-card"><a href="https://tgnpdcl.com/" target="_blank" rel="noopener noreferrer"><img src="images/2025/TGNPDCLTelangana.png" alt="TGNPDCL"></a></div>
            <div class="logo-card"><a href="https://tsecl.in/" target="_blank" rel="noopener noreferrer"><img src="images/2025/Tripura(TSECL).jpg" alt="TSECL"></a></div>
            <div class="logo-card"><a href="https://www.pvvnl.org/" target="_blank" rel="noopener noreferrer"><img src="images/2025/PVVNL-Logo.png" alt="PVVNL"></a></div>
            <div class="logo-card"><a href="https://www.cesc.co.in/" target="_blank" rel="noopener noreferrer"><img src="images/2025/CESC_Logo.png" alt="CESC"></a></div>
            <div class="logo-card"><a href="https://www.mpwz.co.in/#/home" target="_blank" rel="noopener noreferrer"><img src="images/2025/MPPKVVCL.png" alt="MPPKVVCL"></a></div>
            <div class="logo-card"><a href="https://www.mahadiscom.in/en/home/" target="_blank" rel="noopener noreferrer"><img src="images/2025/MSEDCL.png" alt="MSEDCL"></a></div>
            <div class="logo-card"><a href="https://www.pgvcl.com/" target="_blank" rel="noopener noreferrer"><img src="images/2025/PGVCL.jpg" alt="PGVCL"></a></div>
            <div class="logo-card"><a href="https://www.tpwesternodisha.com/" target="_blank" rel="noopener noreferrer"><img src="images/2025/TPWODL.png" alt="TPWODL"></a></div>
            <div class="logo-card"><a href="https://www.apspdcl.in/index.jsp" target="_blank" rel="noopener noreferrer"><img src="images/2025/APSPDCL.png" alt="APSPDCL"></a></div>
            <div class="logo-card"><a href="https://grid-india.in/en/" target="_blank" rel="noopener noreferrer"><img src="images/2025/Grid-India.png" alt="Grid India"></a></div>
        </div>
    </section>

    <div class="supporting-links">
        <p><a href="https://www.isuw.in/2024/participating-utilies-2024" class="getstartedd">Participating Utilities 2024</a></p>
        <p><a href="https://www.isuw.in/participating-utilies-2023" class="getstartedd">Participating Utilities 2023</a></p>
        <p><a href="https://www.isuw.in/participating-utilies" class="getstartedd">Participating Utilities 2022</a></p>
        <p><a href="https://www.isuw.in/participating-utilies-2021" class="getstartedd">Participating Utilities 2021</a></p>
    </div>
</div>

@endsection
