<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>
        <link href="https://fonts.cdnfonts.com/css/gistesy" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/nickainley" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <style>
        * {
            box-sizing: border-box;
        }
    </style>

    <body>
        <nav class="nav-bar">
            <div class="project-title-name"><a href="/">Terrazas de Guacuco</a></div>
            <div class="nav-bar-pages">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    @if(session('user_role') == '')
                    <li><a href="/services">Services</a></li>
                    @endif
                    @if(session('user_role') == "PoolManager")
                    <li><a href="/poolManager/services">Services</a></li>
                    @endif
                    @if(session('user_role') == "Visitor")
                    <li><a href="/VisitorServices/visitorServices">Services</a></li>
                    @endif
                    @if(session('user_role') == "Resident")
                    <li><a href="/resident/services">Services</a></li>
                    @endif
                    @if(session('user_role') == "ApartmentManager")
                    <li><a href="/apartmentManagerServices">Services</a></li>
                    @endif
                    @if(session('user_role') == "GardenManager")
                    <li><a href="/gardenManager/services">Services</a></li>
                    @endif
                    @if(session('user_role') == "VisitorManager")
                    <li><a href="/VisitorManagerServices/visitorManagerServices">Services</a></li>
                    @endif
                    @if(session('user_role') == "superAdmin")
                    <li><a href="/SuperAdminServices">Services</a></li>
                    @endif
                    @if(session('user_role') == "SecurityManager")
                    <li><a href="/SecurityManagerServices/securityManagerServices">Services</a></li>
                    @endif
                    @if(session('user_role') == "TennisManager")
                    <li><a href="/tennisManager/services">Services</a></li>
                    @endif
                    @if(session('user_role') == "BuildingManager")
                    <li><a href="/buildingManager/buildingManagerServices">Services</a></li>
                    @endif
                    <li><a href="http://vxl6814.uta.cloud/">Blog</a></li>
                    <li><a href="/contactus">Contact Us</a></li>
                    <li><a href="/feedback">Feedback</a></li>
                    @if(session('user_role') == '')
                    <li><a href="/register">Register/Login</a></li>
                    @endif
                    @if(session('user_role') != '')
                    <li><a href="/login">Logout</a></li>
                    @endif
                </ul>
            </div>
        </nav>

        <div class="about-container">
            <h1>ABOUT US</h1>
        </div>

        <div class="col2">
            <img src="https://www.druryhotels.com/Images/home/fall-2022/DPHORLDS-HomePage.jpg" style="width:100%">
            <div>
                <h2 class="tg">Terrazas de Guacuco</h2>
                <p class="w">Welcome to Terrazaz de guacuco.is a huge complex, it has 367 residential units classified as
                        Studios,Town Houses, and cabins. It has two swimming pools, several gardens, tennis courts and
                    several walking trials.
                </p>
            </div>
        </div>

        <div class="about-container3">
            <p class="about-amenities-heading">Amenities</p>
        </div>

        <div class="about-row1">
            <div class="about-column3">
                <img src="https://www.hardrockhotelcasinolasvegas.com/-/media/project/shrss/hri/casinos/hard-rock/las-vegas/amenities/section-landing/gallery/private-oasis.jpg?rev=9c052ca81de8457cb8a58bb800015ef5&hash=E3F485BB9CC17A1A4A4F36A3A8C9E6D5"
                    style="width:100%">
                <h2 class="sp">Swimming Pool</h2>
            </div>
            <div class="about-column3">
                <img src="https://web-assets.playfinder.com/wp-content/uploads/2017/12/27164007/Grass-Court-synthetic-tennis_2-632x421.jpg"
                    style="width:100%">
                <h2 class="tl">Tennis Lawn</h2>
            </div>
            <div class="about-column3">
                <img src="https://cdn.britannica.com/42/91642-050-332E5C66/Keukenhof-Gardens-Lisse-Netherlands.jpg"
                    style="width:100%">
                <h2 class="g">Garden</h2>
            </div>
            <div class="about-column3">
                <img src="https://thumbs.dreamstime.com/b/covered-walking-path-business-park-silicon-valley-sunnyvale-south-san-francisco-bay-area-149590931.jpg"
                    style="width:100%">
                <h2 class="g">Walking Trails</h2>
            </div>
            <div class="about-column3">
                <img src="https://profiles.sulekha.com/mstore/41000298/albums/default/thumbnailfull/security-guard.jpg"
                    style="width:100%">
            <h2 class="g">High Security</h2>
            </div>
        </div>

        <div class="footer">
            <p class="w3-padding w3-xxlarge w3-text-white">
                <a href="https://www.instagram.com/terrazasdeguacuco/"><i class="fa fa-instagram">&nbsp;&nbsp;</i></a>
                <a href="https://www.facebook.com/profile.php?id=100091919480216"><i class="fa fa-facebook">&nbsp;&nbsp;</i></a>
                <a href="https://twitter.com/TDeGuacuco"><i class="fa fa-twitter"></i></a>
            </p>
            <ul>
                <li><a href="/">HOME &nbsp; | &nbsp;</a></li>
                <li><a href="/about">ABOUT &nbsp; | &nbsp;</a></li>
                <li><a href="http://vxl6814.uta.cloud/">BLOG &nbsp; | &nbsp;</a></li>
                <li><a href="/contactus">CONTACT &nbsp; | &nbsp;</a></li>
                <li><a href="/maps">LOCATIONS</a></li>
            </ul>
            <p> Terrazas de Guacuco @ 2023. All rights reserved</p>
        </div>
    </body>
</html>