<?php $counter=0; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Terrazas de Guacuco</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../css/style.css">
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
            <h2>Manage Services</h2>
        </div>
        <div class="div">
            <a href="/apartmentManager/Cabin/createManageService">Create &nbsp;<i class='fa fa-plus'></i></a>
        </div>
        <table>
            <tr>
                <th>S.No</th>
                <th>Service Type</th>
                <th>Service Handler Name</th>
                <th>Email Id</th>
                <th>Actions</th>
            </tr>
            @foreach($CabinManageServices as $CabinManageServices)
                <tr>
                    <td><?php $counter=$counter+1; echo $counter ?></td>
                    <td>{{$CabinManageServices->serviceType}}</td>
                    <td>{{$CabinManageServices->serviceHandlerName}}</td>
                    <td>{{$CabinManageServices->emailId}}</td>
                    <td> &nbsp;<a href="/apartmentManager/Cabin/editManageService?serviceType={{$CabinManageServices->serviceType}}&serviceHandlerName={{$CabinManageServices->serviceHandlerName}}&emailId={{$CabinManageServices->emailId}}"><i class='fa fa-edit' ></i></a>&nbsp;
                        <a href="/apartmentManager/Cabin/deleteManageService?emailId={{$CabinManageServices->emailId}}"><i class='fa fa-trash-o'></i></a>
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