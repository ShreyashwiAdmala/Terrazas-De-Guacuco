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
                    <li><a href="/resident/services">Services</a></li>
                    <li><a href="http://vxl6814.uta.cloud/">Blog</a></li>
                    <li><a href="/contactus">Contact Us</a></li>
                    <li><a href="/feedback">Feedback</a></li>
                    <li><a href="/login">Logout</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h2>Register Vehicle</h2>
    </div>
    <br />
    <center><a class="timings-button" href="/resident/createVehicleRegistration"><i class='fa fa-plus'></i></a>&nbsp;</center><br/>
    <form class="vehicleRegister-form" method="post" action="">
        @foreach($regVehicle as $regVehicle)
        <label>Vehicle Make: {{$regVehicle->make}}</label><br />
        <label>Vehicle Model: {{$regVehicle->model}}</label><br />
        <label>Vehicle License Plate: {{$regVehicle->licensePlate}}</label><br />
        <a href="/resident/editVehicleRegistration?make={{$regVehicle->make}}&model={{$regVehicle->model}}&licensePlate={{$regVehicle->licensePlate}}"><i class='fa fa-edit' ></i></a>&nbsp;
        <a href="/resident/deleteVehicleRegistration?licensePlate={{$regVehicle->licensePlate}}"><i class='fa fa-trash-o'></i></a><br/><br/>
        @endforeach
    </form>

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