<?php $counter=0; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Terrazas de Guacuco</title>
    <link rel="stylesheet" href="../css/style.css">
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
                    <li><a href="/resident/services">Services</a></li>
                    <li><a href="http://vxl6814.uta.cloud/">Blog</a></li>
                    <li><a href="/contactus">Contact Us</a></li>
                    <li><a href="/feedback">Feedback</a></li>
                    <li><a href="/login">Logout</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h2>Edit Registered Vehicle</h2>
    </div>
    <div class="container1">   
        <form method="post" action="/resident/updateVehicleRegistration?licensePlate={{$licensePlate}}">
            @csrf
            <label>License Plate: {{$licensePlate}}</label><br/>
            <label>Enter Vehicle Make:</label><br />
            <input type="text" name="make" value="{{$make}}"><br/>
            <label>Enter Vehicle Model:</label><br />
            <input type="text" name="model" value="{{$model}}"><br/>
            <button type="submit">Submit</button>&nbsp;
            <!-- <button type="cancel" onclick="window.location.href='{{ url('/resident/vehicleRegistration') }}'">Cancel</button>&nbsp; -->
        </form>
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