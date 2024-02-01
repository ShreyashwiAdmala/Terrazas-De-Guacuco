<?php $counter=0; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Terrazas de Guacuco</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../../css/style.css"/>
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
                    <li><a href="/apartmentManagerServices">Services</a></li>
                    <li><a href="http://vxl6814.uta.cloud/">Blog</a></li>
                    <li><a href="/contactus">Contact Us</a></li>
                    <li><a href="/feedback">Feedback</a></li>
                    <li><a href="/login">Logout</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <h2>Services Requested</h2>
        </div>
        <div class="div">
            <a href="/apartmentManager/Cabin/createServiceReq">Create &nbsp;<i class='fa fa-plus'></i></a>
        </div>
        <table>
            <tr>
                <th>S.No</th>
                <th>Service Requested</th>
                <th>Resident Name</th>
                <th>Email Id</th>
                <th>Apartment Number</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            @foreach($CabinServicesRequested as $CabinServicesRequested)
                <tr>
                    <td><?php $counter=$counter+1; echo $counter ?></td>
                    <td>{{$CabinServicesRequested->servicesRequested}}</td>
                    <td>{{$CabinServicesRequested->residentName}}</td>
                    <td>{{$CabinServicesRequested->emailId}}</td>
                    <td>{{$CabinServicesRequested->apartmentNumber}}</td>
                    <td>{{$CabinServicesRequested->status}}</td>
                    <td> &nbsp;<a href="/apartmentManager/Cabin/editServiceReq?servicesRequested={{$CabinServicesRequested->servicesRequested}}&residentName={{$CabinServicesRequested->residentName}}&emailId={{$CabinServicesRequested->emailId}}&apartmentNumber={{$CabinServicesRequested->apartmentNumber}}&status={{$CabinServicesRequested->status}}"><i class='fa fa-edit' ></i></a>&nbsp;
                        <a href="/apartmentManager/Cabin/deleteServiceReq?emailId={{$CabinServicesRequested->emailId}}"><i class='fa fa-trash-o'></i></a>
                    </td>
                </tr>
                @endforeach
        </table>
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