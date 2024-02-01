<!DOCTYPE html>
<html>
    <head>
        <title>Terrazas de Guacuco</title>
        <!-- <meta charset="UTF-8"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
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
                        <li><a href="/register">Register/Login</a></li>
                    </ul>
                </div>
            </nav>
            <div class="login-container">
                <div class="row">
                    <div class="w3-half">
                        <img src="images/hotel.png" alt="image not found" class="image-login-responsive" />
                    </div>
                    <div class="w3-half">
                        <div class="register-page-column">
                            <div>
                                <h2 class="login-heading">
                                    Forgot Password?
                                </h2>
                            </div>
                            <form class="login-form">
                                <div class="form-group">
                                    <label for="Email1">Enter Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="text-center text-lg-start mt-4 pt-2">
                                    <button type="button" class="btn btn-primary btn-lg"
                                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Send</button>
                                </div>
                            </form>
                        </div>
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
        </div>
    </body>
</html>