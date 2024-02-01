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
                    <li><a href="/VisitorManagerServices/visitorManagerServices">Services</a></li>
                    <li><a href="http://vxl6814.uta.cloud/">Blog</a></li>
                    <li><a href="/contactus">Contact Us</a></li>
                    <li><a href="/feedback">Feedback</a></li>
                    <li><a href="/login">Logout</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h2>Handle Requests</h2>
    </div>
    <!-- <div class="div">
        <button>Create &nbsp;<i class='fa fa-plus'></i></button>
    </div> -->
    <div class="container1">
        <table>
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Email ID</th>
                <th>Incident Type</th>
                <th>Contact Number</th>
                <th>Query</th>
                <th>Actions</th>
            </tr>
            @foreach($handleRequest as $handleRequest)
            <tr>
                <td><?php $counter=$counter+1; echo $counter ?></td>
                <td>{{$handleRequest->name}}</td>
                <td>{{$handleRequest->emailId}}</td>
                <td>{{$handleRequest->incidentType}}</td>
                <td>{{$handleRequest->phnumber}}</td>
                <td>{{$handleRequest->query}}</td>
                <td> &nbsp;<a href="/VisitorManagerServices/deleteHandleRequest?name={{$handleRequest->name}}&emailId={{$handleRequest->emailId}}&incidentType={{$handleRequest->incidentType}}&phnumber={{$handleRequest->phnumber}}&query={{$handleRequest->query}}"><i class='fa fa-trash-o' ></i></a>&nbsp;
            </tr>
            @endforeach
        </table>
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