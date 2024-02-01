<!DOCTYPE Html>
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
            <h2>FeedBack</h2>
        </div>
        <div className='contact-form'>
            <p>Thank you for your response!</p><br />
            <a type='submit' href="/">Back to home</a>
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