<!DOCTYPE html>
<html>
    <head>
        <title>Terrazas de Guacuco</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <div class="contus-container">
            <h2>Have any questions?</h2>
        </div>
        <div class="container-contactus ">
        <form id="contactForm mx-auto" data-sb-form-api-token="API_TOKEN" class="login-form" method="post" action="/VisitorServices/requestRaiseIncidentStore">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="name">Name</label>
                <input class="form-control" id="name" name="name" type="text" placeholder="Name" value="{{old('name')}}" />
                @if ($errors->has('name'))
                <span class="field-error">{{ $errors->first('name') }}</span><br/>
                @endif
            </div>
            <div class="mb-3">
                <label class="form-label" for="emailAddress">Email Address</label>
                <input class="form-control" id="emailId" name="emailId" type="email" placeholder="John@gmail.com" value="{{old('emailId')}}" />
                @if ($errors->has('emailId'))
                <span class="field-error">{{ $errors->first('emailId') }}</span><br/>
                @endif
            </div>
            <div class="mb-3">
                <label class="form-label" for="name">Incident Type</label>
                <input class="form-control" id="incidentType" name="incidentType" type="text" placeholder="Incident Type" value="{{old('incidentType')}}" />
                @if ($errors->has('incidentType'))
                <span class="field-error">{{ $errors->first('incidentType') }}</span><br/>
                @endif
            </div>
            <div class="mb-3">
                <label class="form-label" for="name">Phone Number</label>
                <input class="form-control" id="phnumber" name="phnumber" type="text" placeholder="+1234567898" value="{{old('phnumber')}}" />
                @if ($errors->has('phnumber'))
                <span class="field-error">{{ $errors->first('phnumber') }}</span><br/>
                @endif
            </div>
            <div class="mb-3">
                <label class="form-label" for="message">Enter your query</label>
                <textarea class="form-control" id="query" name="query" type="text" placeholder="Enter Query Description" style="height: 10rem;" value="{{old('query')}}"></textarea>
                @if ($errors->has('query'))
                <span class="field-error">{{ $errors->first('query') }}</span><br/>
                @endif
            </div>
            <div class="text-center text-lg-start mt-4 pt-2">
                <button type="submit" clsass="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Submit</button>
            </div>
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
    </body>
</html>