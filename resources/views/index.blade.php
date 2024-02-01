<!DOCTYPE html>
<html>

    <head>
        <title>Terrazas de Guacuco</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://fonts.cdnfonts.com/css/gistesy" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <div>
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
            <div class="home-bg">
                <div>
                    <div class="home-container1">
                        <h1 class="font1">Welcome to Terrazas de Guacuco</h1>
                    </div>
                    <div class="home-container2">
                        <span>
                            <h1 class="font2">We believe in Minimalism. Less is More.</h1>
                        </span>
                        <span>
                            <h1 class="font2">With 364 residential units.</h1>
                        </span>
                    </div>
                    <div class="home-container3">
                        <div class="home-inline">
                            <div class="apt-container">
                                <img src="images/cabin.jpeg" alt="Cabin image not found" class="home-inline-image" />
                                <h1>Cabins</h1>
                            </div>
                            <div class="apt-container">
                                <img src="images/townhouse.jpg" alt="Town House image not found"
                                    class="home-inline-image" />
                                <h1>Town Houses</h1>
                            </div>
                            <div class="apt-container">
                                <img src="images/studio.jpg" alt="Studio image not found" class="home-inline-image" />
                                <h1>Studios</h1><br /><br /><br />
                            </div>
                        </div>
                    </div>
                    <div class="home-container4">
                        <div class="services-container1">
                            <h1>THE GOOD PART</h1>
                        </div>
                        <div class="icon-container">
                            <ul>
                                <li><img src="images/cctv.png" width="180px" class="home-img">
                                    <h4>24/7 Security</h4>
                                </li>
                                <li><img src="images/court.png" width="180px" class="home-img">
                                    <h4>Tennis Court</h4>
                                </li>
                                <li><img src="images/info.png" width="180px" class="home-img">
                                    <h4>24/7 Info Desk</h4>
                                </li>
                                <li><img src="images/sp.png" width="180px" class="home-img">
                                    <h4>Pool</h4>
                                </li>
                                <li><img src="images/team.png" width="180px" class="home-img">
                                    <h4>Managers</h4>
                                </li><br />
                                <li><img src="images/gym.png" width="180px" class="home-img">
                                    <h4>Gym</h4>
                                </li>
                            </ul>
                        </div>
                        <br /><br /><br />
                        <div class="services-container1">
                            <h1>Come Visit Us</h1>
                        </div>
                        <div>
                            <form class="contact-form">
                                <span class="contact-inline">
                                    <span class="contact-spacing">
                                        <input type="text" name="lastName" id="lastName" placeholder="Enter Last Name" />
                                    </span>
                                    <span class="contact-spacing">
                                        <input type="text" name="firstName" id="firstName" placeholder="Enter First Name" /><br />
                                    </span>
                                </span>
                                <span class="contact-inline">
                                    <span class="contact-spacing">
                                        <input type="text" name="emailId" id="emailId" placeholder="abc@gmail.com" />
                                    </span>
                                    <span class="contact-spacing">
                                        <input type="text" name="phoneNumber" id="phoneNumber" placeholder="+18888888888" /><br />
                                    </span>
                                </span>
                                <button type="submit" value="Submit" name="submit" id="submit">Submit</button>
                            </form>

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
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>