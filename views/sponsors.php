<!DOCTYPE html>
<html>

<head>
    <title>Sponsors</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- BootStrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/2fb39e755e.js" crossorigin="anonymous"></script>

    <!-- CSS Pages -->
    <link rel="stylesheet" type="text/css" href="/public/css/style.css?v=1.0.0" />
    <link rel="stylesheet" type="text/css" href="/public/css/sponsors.css?v=1.0.0" />
    <link rel="stylesheet" type="text/css" href="/public/css/footer.css?v=1.0.0" />
    <link rel="stylesheet" type="text/css" href="/public/css/navbar.css?v=2023.12.1" />

    <!--Favicon -->
    <link rel="icon" href="/public/favicon.ico" />
</head>

<body>
    <!-- Navbar -->
    <?php include "../views/includes/navbar.html"; ?>

    <!--Body -->
    <div class="allcontent">
        <h1 id="toptitle">OUR <span class="ieee-blue">SPONSORS</span></h1>
        <div class="allsponsors text-center">
            <div class="sponsorsbox" style="border-color: #C0C0C0">
                <div class="sponsorimages">
                    <a href="https://www.intel.com/content/www/us/en/homepage.html" target="_blank">
                        <img style="max-width: 280px; margin: 20px 20px" src="/public/images/company-logos/intel.svg" />
                    </a>
                </div>
                <div class="tiersbox" id="label" style="background-color: #C0C0C0">
                    <h1>SILVER</h1>
                </div>
            </div>
            <div class="sponsorsbox" style="border-color: #CD7F32">
                <div class="sponsorsimages">
                <a href="https://www.sce.com/" target="_blank">
                        <img style="max-width: 280px; margin: 20px 20px" src="/public/images/company-logos/southern_california_edison.svg" />
                    </a>
                    <a href="https://www.lockheedmartin.com/" target="_blank">
                        <img style="max-width: 280px; margin: 20px 20px" src="/public/images/company-logos/lockheed_martin.svg" />
                    </a>
                    <a href="https://www.boeing.com/" target="_blank">
                        <img style="max-width: 280px; margin: 20px 20px" src="/public/images/company-logos/boeing.svg" />
                    </a>
                    <a href="https://www.ti.com/" target="_blank">
                        <img style="max-width: 280px; margin: 20px 20px" src="/public/images/company-logos/texas_instruments.svg" />
                    </a>
                </div>
                <div class="tiersbox" id="label" style="background-color: #CD7F32">
                    <h1>BRONZE</h1>
                </div>
            </div>
        </div>

        <h1 id="titles" align="left" style="margin-top: 30px; margin-bottom: 20px">
            FEATURES OF <span class="ieee-blue">SPONSORING</span>
        </h1>
        <ul class="benefits-list">
            <li>
                Priority status and multiple events (info-sessions, tech-talks, etc.)
                per year (as per package)
            </li>
            <li>
                Priority access to award winning event organization, management and
                publicity
            </li>
            <li>Advertising your job/internship openings through us</li>
            <li>
                Reaching out to 1000+ mailing list members and 400+ club members for
                publicity
            </li>
            <li>
                Getting involved with one of the largest engineering student groups in
                UCLA
            </li>
            <li>Being advertised at various state-wide engineering competitions</li>
            <li>
                Being a generous contributor to the development of young engineers
            </li>
            <li>
                Getting all this for free! <b>Donations to us are tax-deductible</b>
            </li>
        </ul>

        <br />

        <h1 id="titles" align="left" style="margin-top: 40px; margin-bottom: 20px">
            BECOMING A <span class="ieee-blue">SPONSOR</span>
        </h1>
        <div class="tierscontainer">
            <div class="tiers-wrapper">
                <div class="tiersbox" id="box">
                    <h1 id="tier">WORKSHOP</h1>
                    <p id="price">$500</p>
                </div>
            </div>
            <div class="tiers-wrapper">
                <div class="tiersbox" id="box">
                    <h1 id="tier">PROJECT</h1>
                    <p id="price">$500+</p>
                </div>
            </div>
            <div class="tiers-wrapper">
                <div class="tiersbox" id="box" style="background-color: #CD7F32">
                    <h1 id="tier">BRONZE</h1>
                    <p id="price">$1500 - $2499</p>
                </div>
            </div>
            <div class="tiers-wrapper">
                <div class="tiersbox" id="box" style="background-color: #C0C0C0">
                    <h1 id="tier">SILVER</h1>
                    <p id="price">$2500 - $3499</p>
                </div>
            </div>
            <div class="tiers-wrapper">
                <div class="tiersbox" id="box" style="background-color: #ffbf00">
                    <h1 id="tier">GOLD</h1>
                    <p id="price">$3500+</p>
                </div>
            </div>
        </div>
        <div class="interestbox">
            <p>
                View and download our sponsorship brochure
                <a href="/public/files/SponsorshipBrochure2025.pdf" target="_blank">here</a>!<br />
                Contact our current corporate relations officer at
                <a href="mailto:corporate@ieeebruins.com">corporate@ieeebruins.com</a>
                for more information.
            </p>
        </div>
    </div>

    <!-- Footer -->
    <?php include "../views/includes/footer.html"; ?>
</body>

</html>