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
    grid-template-columns: repeat(2, auto);
}

.partners-grid.grid-3 {
    grid-template-columns: repeat(3, auto);
}

.partners-grid.grid-4 {
    grid-template-columns: repeat(4, auto);
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

.section-heading {
    text-align: center;
    margin: 40px 0 30px 0;
    font-weight: bold;
    font-size: 18px;
}

@media (max-width: 991px) {
    .partners-grid {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 15px;
    }

    .partners-grid.grid-3,
    .partners-grid.grid-4 {
        grid-template-columns: repeat(2, auto);
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
        grid-template-columns: auto;
    }

    .logo-card {
        min-height: 120px;
    }
}
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">

            <div class="k_cheading">
                <h1>ISUW 2026 <span class="k_greencolor">KEY PARTNERS</span></h1>
                <img src="/public/uploads/images/kborder_bottom.png" alt="">
            </div>

            <h5 class="section-heading">Host Utilities</h5>
            <div class="partners-grid grid-4">
                <div class="logo-card">
                    <a href="https://www.bsesdelhi.com/web/brpl" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.isuw.in/public/uploads/utility/1641110129.png" alt="BRPL">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.bsesdelhi.com/web/bypl" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.isuw.in/public/uploads/utility/1641110101.png" alt="BYPL">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.tatapower.com/" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.isuw.in/public/uploads/utility/1641110147.png" alt="Tata Power">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="http://www.tatapower-ddl.com/" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.isuw.in/public/uploads/utility/1641110211.png" alt="Tata Power DDL">
                    </a>
                </div>
            </div>

            <h5 class="section-heading">Platinum Partner</h5>
            <div class="partners-grid grid-3">
                <div class="logo-card">
                    <a href="https://www.sew.ai/" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.isuw.in/uploads/images/sew-water.png" alt="SEW">
                    </a>
                </div>
            </div>

            <h5 class="section-heading">Knowledge Partner</h5>
            <div class="partners-grid grid-3">
                <div class="logo-card">
                    <a href="https://www.powerfoundation.org.in/" target="_blank" rel="noopener noreferrer">
                        <img src="images/2026/pfi.jpeg" alt="Power Foundation of India">
                    </a>
                </div>
            </div>

            <h5 class="section-heading">Silver Partners</h5>
            <div class="partners-grid grid-3">
                <div class="logo-card">
                    <a href="https://www.oracle.com/in/utilities/" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/images/2026/Oracle_Energy-and-Water_rgb.png" alt="Oracle">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://yitran.com/" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.isuw.in/public/uploads/partner/yitran-logo-PNG-250.png" alt="Yitran">
                    </a>
                </div>
            </div>

            <h5 class="section-heading">Technology Partner</h5>
            <div class="partners-grid grid-3">
                <div class="logo-card">
                    <a href="https://eppeltone.in/" target="_blank" rel="noopener noreferrer">
                        <img src="images/2026/Eppeltone.jpeg" alt="Eppeltone Engineers Limited">
                    </a>
                </div>
            </div>

            <h5 class="section-heading">Delegate Bag Partner</h5>
            <div class="partners-grid grid-3">
                <div class="logo-card">
                    <a href="https://www.wirepas.com/" target="_blank" rel="noopener noreferrer">
                        <img src="images/2026/Wirepas.png" alt="Wirepas">
                    </a>
                </div>
            </div>

            <h5 class="section-heading">Bronze Partners</h5>
            <div class="partners-grid grid-3">
                <div class="logo-card">
                    <a href="https://edx.com/" target="_blank" rel="noopener noreferrer">
                        <img src="images/2025/edxWireless.jpeg" alt="EDX">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://kimbal.io/" target="_blank" rel="noopener noreferrer">
                        <img src="images/2025/Kimbal.jpeg" alt="Kimbal">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://meshmerise.ai/" target="_blank" rel="noopener noreferrer">
                        <img src="images/2026/Meshmerise.jpeg" alt="Meshmerise">
                    </a>
                </div>
            </div>

            <p></p>

            <div class="k_cheading">
                <h1>ISUW 2025 <span class="k_greencolor">KEY PARTNERS</span></h1>
                <img src="/public/uploads/images/kborder_bottom.png" alt="">
            </div>

            <h5 class="section-heading">Host Utilities</h5>
            <div class="partners-grid grid-4">
                <div class="logo-card">
                    <a href="https://www.bsesdelhi.com/web/bypl#loaded" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.isuw.in/public/uploads/utility/1641110101.png" alt="BYPL">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.bsesdelhi.com/web/brpl" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.isuw.in/public/uploads/utility/1641110129.png" alt="BRPL">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.tatapower.com/" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.isuw.in/public/uploads/utility/1641110147.png" alt="Tata Power">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.noidapower.com/" target="_blank" rel="noopener noreferrer">
                        <img src="images/2025/NPCL1.png" alt="NPCL">
                    </a>
                </div>
            </div>

            <h5 class="section-heading">Platinum Partners</h5>
            <div class="partners-grid grid-3">
                <div class="logo-card">
                    <a href="https://www.gevernova.com/" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.isuw.in/public/uploads/partner/GE_Vernova_Standard_RGB_Evergreen.jpg" alt="GE Vernova">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.impresa.ai/" target="_blank" rel="noopener noreferrer">
                        <img src="images/2025/Impressa.png" alt="Impressa">
                    </a>
                </div>
            </div>

            <h5 class="section-heading">Silver Partners</h5>
            <div class="partners-grid grid-3">
                <div class="logo-card">
                    <a href="https://lora-alliance.org/" target="_blank" rel="noopener noreferrer">
                        <img src="images/2025/LoRaAlliance.png" alt="LoRa Alliance">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://yitran.com/" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.isuw.in/public/uploads/partner/yitran-logo-PNG-250.png" alt="Yitran">
                    </a>
                </div>
            </div>

            <h5 class="section-heading">Technology Partners</h5>
            <div class="partners-grid grid-3">
                <div class="logo-card">
                    <a href="https://fluentgrid.com/" target="_blank" rel="noopener noreferrer">
                        <img src="images/2025/Fluentgrid.png" alt="FluentGrid">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://cyanconnode.com/" target="_blank" rel="noopener noreferrer">
                        <img src="images/2025/cyanconnode.png" alt="Cyanconnode">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://radius.co.in/" target="_blank" rel="noopener noreferrer">
                        <img src="images/2025/radius.png" alt="Radius">
                    </a>
                </div>
            </div>

            <h5 class="section-heading">Country Partners</h5>
            <div class="partners-grid grid-3">
                <div class="logo-card">
                    <a href="https://www.gov.uk/government/organisations/foreign-commonwealth-development-office" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/public/uploads/partner/UK-Gov.png" alt="UK Government">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.trade.gov/india" target="_blank" rel="noopener noreferrer">
                        <img src="images/2025/us-commercial.png" alt="US Commercial">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.smartgrid.com.br/eng" target="_blank" rel="noopener noreferrer">
                        <img src="images/2025/LATAM.png" alt="Smart Grid">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.indiabrazilchamber.org/home" target="_blank" rel="noopener noreferrer">
                        <img src="images/2025/IBCoC.png" alt="India Brazil Chamber">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <img src="images/2025/pjci.png" alt="PJCI">
                    </a>
                </div>
            </div>

            <h5 class="section-heading">Bronze Partners</h5>
            <div class="partners-grid grid-3">
                <div class="logo-card">
                    <a href="https://edx.com/" target="_blank" rel="noopener noreferrer">
                        <img src="images/2025/edxWireless.jpeg" alt="EDX">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.powerxchange.io/" target="_blank" rel="noopener noreferrer">
                        <img src="images/2025/PowerXchange.jpeg" alt="PowerXchange">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.ti.com/" target="_blank" rel="noopener noreferrer">
                        <img src="images/2025/ti.png" alt="TI">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://wi-sun.org/" target="_blank" rel="noopener noreferrer">
                        <img src="images/2025/WiSun.png" alt="Wi-Sun">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.phoenixcontact.com/en-in/" target="_blank" rel="noopener noreferrer">
                        <img src="images/2025/Phoenix.svg" alt="Phoenix Contact">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.landisgyr.com/" target="_blank" rel="noopener noreferrer">
                        <img src="images/2025/Landis.png" alt="Landis Gyr">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://export.business.gov.au/find-export-markets/market-explorer-tool/market-explorer-results/all/all/ind" target="_blank" rel="noopener noreferrer">
                        <img src="images/2025/nationalbrand.png" alt="National Brand">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://eppeltone.in/" target="_blank" rel="noopener noreferrer">
                        <img src="images/2025/Eppeltone.png" alt="Eppeltone">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://kimbal.io/" target="_blank" rel="noopener noreferrer">
                        <img src="images/2025/Kimbal.jpeg" alt="Kimbal">
                    </a>
                </div>
            </div>

            <h5 class="section-heading">Knowledge Partners</h5>
            <div class="partners-grid grid-3">
                <div class="logo-card">
                    <a href="https://www.cdac.in/" target="_blank" rel="noopener noreferrer">
                        <img src="images/2025/C-DAC.jpg" alt="C-DAC">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://ulse.org/" target="_blank" rel="noopener noreferrer">
                        <img src="images/2025/ulse.png" alt="ULSE">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.iexindia.com/" target="_blank" rel="noopener noreferrer">
                        <img src="images/2025/IEX.png" alt="IEX">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.epri.com/" target="_blank" rel="noopener noreferrer">
                        <img src="images/2025/EPRI.png" alt="EPRI">
                    </a>
                </div>
            </div>

            <p></p>

            <div class="k_cheading">
                <h1>ISUW 2024 <span class="k_greencolor">KEY PARTNERS</span></h1>
                <img src="/public/uploads/images/kborder_bottom.png" alt="">
            </div>

            <h5 class="section-heading">Host Utilities</h5>
            <div class="partners-grid grid-4">
                <div class="logo-card">
                    <a href="https://www.tatapower.com/" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.isuw.in/public/uploads/utility/1641110147.png" alt="Tata Power">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.tatapower-ddl.com/" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.isuw.in/public/uploads/utility/1641110211.png" alt="Tata Power DDL">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.bsesdelhi.com/web/bypl#loaded" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.isuw.in/public/uploads/utility/1641110101.png" alt="BYPL">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.bsesdelhi.com/web/brpl" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.isuw.in/public/uploads/utility/1641110129.png" alt="BRPL">
                    </a>
                </div>
            </div>

            <h5 class="section-heading">Co-Host Utility</h5>
            <div class="partners-grid grid-3">
                <div class="logo-card">
                    <a href="https://uppcl.org/uppcl/hi/" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.isuw.in/public/uploads/utility/UPPCL.png" alt="UPPCL">
                    </a>
                </div>
            </div>

            <h5 class="section-heading">Platinum Partners</h5>
            <div class="partners-grid grid-3">
                <div class="logo-card">
                    <a href="https://www.sew.ai/" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.isuw.in/uploads/images/sew-water.png" alt="SEW">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.gevernova.com/" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.isuw.in/public/uploads/partner/GE_Vernova_Standard_RGB_Evergreen.jpg" alt="GE Vernova">
                    </a>
                </div>
            </div>

            <h5 class="section-heading">Gold Partner</h5>
            <div class="partners-grid grid-3">
                <div class="logo-card">
                    <a href="https://www.larsentoubro.com/corporate/products-and-services/construction/power-transmission-distribution/" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/public/uploads/exhibitor/lt.png" alt="L&T">
                    </a>
                </div>
            </div>

            <h5 class="section-heading">Welcome Reception Partner</h5>
            <div class="partners-grid grid-3">
                <div class="logo-card">
                    <a href="https://www.hitachienergy.com/in/en" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.isuw.in/public/uploads/partner/HITACHI.PNG" alt="Hitachi Energy">
                    </a>
                </div>
            </div>

            <h5 class="section-heading">Lanyard Partner</h5>
            <div class="partners-grid grid-3">
                <div class="logo-card">
                    <a href="https://trilliant.com/" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.isuw.in/public/uploads/partner/trilliant.png" alt="Trilliant">
                    </a>
                </div>
            </div>

            <h5 class="section-heading">ISGF Innovation Awards Partner</h5>
            <div class="partners-grid grid-3">
                <div class="logo-card">
                    <a href="https://www.nedo.go.jp/english/" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.isuw.in/public/uploads/images/nedo-logo-2B306DA519-seeklogo.com.png" alt="NEDO">
                    </a>
                </div>
            </div>

            <h5 class="section-heading">Silver Partners</h5>
            <div class="partners-grid grid-4">
                <div class="logo-card">
                    <a href="https://www.g3-plc.com/" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/uploads/partner/1641569652.png" alt="G3 PLC">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.oracle.com/in/utilities/" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/images/2026/Oracle_Energy-and-Water_rgb.png" alt="Oracle">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://wi-sun.org/" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/uploads/partner/1641569692.png" alt="Wi-Sun">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://yitran.com/" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/public/uploads/partner/yitran-logo-PNG-250.png" alt="Yitran">
                    </a>
                </div>
            </div>

            <h5 class="section-heading">Country Partners</h5>
            <div class="partners-grid grid-3">
                <div class="logo-card">
                    <a href="https://www.giz.de/en/worldwide/368.html" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/public/uploads/exhibitor/giz.png" alt="GIZ">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.cecp-eu.in/" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/public/uploads/partner/EU-FIRST.PNG" alt="EU">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.cecp-eu.in/" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/public/uploads/partner/EU-SECOND.jpg" alt="EU">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.gov.uk/government/organisations/foreign-commonwealth-development-office" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/public/uploads/partner/UK-Gov.png" alt="UK Government">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.indiabrazilchamber.org/home" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/public/uploads/partner/I-B CoC.png" alt="India Brazil">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.smartgrid.com.br/" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/public/uploads/partner/LATAM.png" alt="Smart Grid">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://sarepenergy.net/" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/public/uploads/partner/usaid.png" alt="USAID">
                    </a>
                </div>
            </div>

            <h5 class="section-heading">Bronze Partners</h5>
            <div class="partners-grid grid-3">
                <div class="logo-card">
                    <a href="https://www.itron.com/" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/public/uploads/partner/itron.png" alt="Itron">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.auto-grid.com/" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/public/uploads/partner/autogrid.png" alt="AutoGrid">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.wirepas.com/" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/public/uploads/partner/wirepas.png" alt="Wirepas">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.cuculus.com/" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/public/uploads/exhibitor/1676736585.png" alt="Cuculus">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.tekuncorked.com/" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/public/uploads/partner/Tekuncorked.jpg" alt="Tekuncorked">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.trillectric.com/" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/public/uploads/exhibitor/Trillectric.png" alt="Trillectric">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://kimbal.io/" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/public/uploads/partner/Tagline logo.png" alt="Kimbal">
                    </a>
                </div>
            </div>

            <h5 class="section-heading">Knowledge Partner</h5>
            <div class="partners-grid grid-3">
                <div class="logo-card">
                    <a href="https://ulse.org/" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/public/uploads/partner/UL Standards.png" alt="ULSE">
                    </a>
                </div>
            </div>

            <h5 class="section-heading">ISGF Innovation Awards Knowledge Partner</h5>
            <div class="partners-grid grid-3">
                <div class="logo-card">
                    <a href="https://www.gov.uk/government/organisations/foreign-commonwealth-development-office" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/public/uploads/partner/UK-Gov.png" alt="UK Government">
                    </a>
                </div>
            </div>

            <h5 class="section-heading">Session Partners</h5>
            <div class="partners-grid grid-3">
                <div class="logo-card">
                    <a href="https://recindia.nic.in/" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.isuw.in/public/uploads/partner/recindia.png" alt="REC India">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.cdac.in/" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.isuw.in/public/uploads/partner/CDAC.jpg" alt="C-DAC">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.giz.de/en/worldwide/368.html" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/public/uploads/exhibitor/giz.png" alt="GIZ">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.iexindia.com/" target="_blank" rel="noopener noreferrer">
                        <img src="https://isuw.in/public/uploads/partner/el.png" alt="Ministry of Power">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.cecp-eu.in/" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/public/uploads/partner/EU-FIRST.PNG" alt="EU">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.cecp-eu.in/" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/public/uploads/partner/EU-SECOND.jpg" alt="EU">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://sarepenergy.net/" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/public/uploads/partner/usaid.png" alt="USAID">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.intellismartinfra.in/" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/public/uploads/partner/intellismart.PNG" alt="IntelliSmart">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.seci.co.in/" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/public/uploads/partner/download.png" alt="SECI">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.go15.org/" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/public/uploads/partner/GO15_LOGO-copie.png" alt="GO15">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.hitachienergy.com/in/en" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.isuw.in/public/uploads/partner/HITACHI.PNG" alt="Hitachi">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://cercind.gov.in/" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/public/uploads/partner/cerc.PNG" alt="CERC">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://beeindia.gov.in/en" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/public/uploads/partner/bureo-new.png" alt="BEE">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.apuea.org/" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.isuw.in/public/uploads/exhibitor/e-notes_p5_apuea-logo_may17.png" alt="APUEA">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.gov.uk/government/organisations/foreign-commonwealth-development-office" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/public/uploads/partner/UK-Gov.png" alt="UK Government">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://cdri.world/" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/public/uploads/partner/CDRI_Logo.jpg" alt="CDRI">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://www.pfcindia.com/" target="_blank" rel="noopener noreferrer">
                        <img src="http://isuw.in/public/uploads/partner/1200px-Power_Finance_Corporation_Logo.svg (1).png" alt="PFC">
                    </a>
                </div>
            </div>

            <h5 class="section-heading">Flagship Partners</h5>
            <div class="partners-grid grid-2">
                <div class="logo-card">
                    <a href="https://g3-alliance.com/" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.isuw.in/uploads/partner/1641569652.png" alt="G3 Alliance">
                    </a>
                </div>
                <div class="logo-card">
                    <a href="https://yitran.com/" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.isuw.in/public/uploads/partner/yitran-logo-PNG-250.png" alt="Yitran">
                    </a>
                </div>
            </div>

            <p style="margin-top: 40px;"></p>

            <div style="text-align: center; margin: 30px 0;">
                <p style="font-size: 16px;">
                    <a href="http://www.isuw.in/key-partners-2023/" class="getstartedd">KEY PARTNERS 2023</a>
                </p>
                <p style="font-size: 16px;">
                    <a href="http://www.isuw.in/key-partners/" class="getstartedd">KEY PARTNERS 2022</a>
                </p>
                <p style="font-size: 16px;">
                    <a href="http://www.isuw.in/key-partners-2021/" class="getstartedd">KEY PARTNERS 2021</a>
                </p>
            </div>

        </div>
    </div>
</div>




@endsection