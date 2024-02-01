<!DOCTYPE html>
<html>

<head>
    <title>Terrazas de Guacuco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
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
                    <li><a href="/VisitorServices/visitorServices">Services</a></li>
                    <li><a href="http://vxl6814.uta.cloud/">Blog</a></li>
                    <li><a href="/contactus">Contact Us</a></li>
                    <li><a href="/feedback">Feedback</a></li>
                    <li><a href="/login">Logout</a></li>xw
            </ul>
        </div>
    </nav>
    <div class="container">
        <h2>My Profile</h2>
    </div>
    <div class="center">
        @foreach($visitorProfile as $visitorProfile)
            <p><b>Name:</b>{{$visitorProfile->name}}</p>
            <p><b>Email:</b>{{$visitorProfile->emailId}}</p>
            <p><b>Phone Number:{{$visitorProfile->phnumber}}</p>
            <p><b>DL Number:</b>{{$visitorProfile->dlnumber}}</p>
            <p><b>Car Numberplate:</b> {{$visitorProfile->carnumplate}}&nbsp;<a class="profile-button" href="/visitor/editMyProfile?name={{$visitorProfile->name}}&emailId={{$visitorProfile->emailId}}&phnumber={{$visitorProfile->phnumber}}&dlnumber={{$visitorProfile->dlnumber}}&carnumplate={{$visitorProfile->carnumplate}} "><i class='fa fa-edit'></i></a></p>
        @endforeach
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