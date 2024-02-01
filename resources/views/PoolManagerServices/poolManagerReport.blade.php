<?php $counter=0; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Terrazas de Guacuco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body>
    <nav class="nav-bar">
        <div class="project-title-name"><a href="/">Terrazas de Guacuco</a></div>
        <div class="nav-bar-pages">
            <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/poolManager/services">Services</a></li>
                    <li><a href="http://vxl6814.uta.cloud/">Blog</a></li>
                    <li><a href="/contactus">Contact Us</a></li>
                    <li><a href="/feedback">Feedback</a></li>
                    <li><a href="/login">Logout</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h2>Report Dashboard</h2>
    </div>
    <div class="report-row">
        <div class="report-column">
            <img src="../images/barChartPoolManager.png" alt="report image not found" class="report-column" />
        </div>
        <div class="report-column">
            <img src="../images/pieChartPoolManager.png" alt="report image not found" class="report-column" />
        </div>
    </div>
    <div class="report-data">
        <h3>Get to know more about Pool Events</h3>
    </div>
    <div class="table-responsive">
        <table>
            <tr>
                <th>S.No</th>
                <th>Pool Events</th>
                <th>Event Id</th>
                <th>Match Date</th>
                <th>Schedule</th>
            </tr>
            @foreach($poolEvents as $poolEvent)
            <tr>
                <td><?php $counter=$counter+1; echo $counter ?></td>
                <td>{{$poolEvent->poolEvents}}</td>
                <td>{{$poolEvent->eventId}}</td>
                <td>{{$poolEvent->matchDate}}</td>
                <td>{{$poolEvent->time}}</td>
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