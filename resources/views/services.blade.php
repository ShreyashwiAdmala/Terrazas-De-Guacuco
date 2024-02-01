<!DOCTYPE html>
<html>
    <head>
        <title>Terrazas de Guacuco</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
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
                    <li><a href="/register">Register/Login</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <h2>Services</h2>
        </div>
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTP0hOwEkdq7bzGlXA91Pf3SBHVq0Aikl4mYULTsUfG57yVL58RRzNlrGRCtil_VYgoJr8&usqp=CAU"
                        alt="Studios apt image not found" class="apt-image">
                </div>
                <div class="flip-card-back">
                    <h1><a href="login.html">POOL</a></h1>
                    <p>MANAGED BY POOL MANAGER</p>
                    <p>GREAT PLACE TO ENJOY WATER EVENTS</p>
                </div>
            </div>
        </div>
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="https://www.pngitem.com/pimgs/m/11-119725_garden-icon-png-transparent-png.png"
                        alt="Town house apt image not found" class="apt-image">
                </div>
                <div class="flip-card-back">
                    <h1><a href="login.html">GARDEN</a></h1>
                    <p>MANAGED BY GARDEN MANAGERr</p>
                    <p>GREAT PLACE TO ENJOY NATURE</p>
                </div>
            </div>
        </div>
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6SjQl8gK_2q_yn_mBlVQoTmueaH6X1gdWDQ&usqp=CAU"
                        alt="Cabin APT image not found" class="apt-image">
                </div>
                <div class="flip-card-back">
                    <h1><a href="login.html">SECURITY</a></h1>
                    <p>MANAGED BY SECURITY MANAGER</p>
                    <p>GREAT PLACE TO STAY SAFE</p>
                </div>
            </div>
        </div>
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="images/parking.jpeg" alt="Cabin APT image not found" class="apt-image">
                </div>
                <div class="flip-card-back">
                    <h1><a href="login.html">PARKING</a></h1>
                    <p>MANAGED BY BUILDING MANAGER</p>
                    <p>GREAT PLACE AND SAFE PLACE TO PARK VECHICLES</p>
                </div>
            </div>
        </div>
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStFKKUIILNPkKqZ8vOkIxerBtlQqi14KASvhmgyp5_ZxTGcM9WDRYj_eZxbbHTOEtPbhk&usqp=CAU"
                        alt="Cabin APT image not found" class="apt-image">
                </div>
                <div class="flip-card-back">
                    <h1><a href="login.html">TENNIS</a></h1>
                    <p>MANAGED BY BUILDING MANAGER</p>
                    <p>GREAT PLACE TO PLAY TENNIS</p>
                </div>
            </div>
        </div>
        <div class="footer">
            <p class="w3-padding w3-xxlarge w3-text-white"><i class="fa fa-instagram">&nbsp;&nbsp;</i><i
                class="fa fa-facebook">&nbsp;&nbsp;</i><i class="fa fa-twitter"></i></p>
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