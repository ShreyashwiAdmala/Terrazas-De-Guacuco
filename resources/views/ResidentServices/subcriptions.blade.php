<!DOCTYPE html>
<html>

<head>
  <title>My subscriptions</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
                    <li><a href="/resident/services">Services</a></li>
                    <li><a href="http://vxl6814.uta.cloud/">Blog</a></li>
                    <li><a href="/contactus">Contact Us</a></li>
                    <li><a href="/feedback">Feedback</a></li>
                    <li><a href="/login">Logout</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <h2>Subscriptions</h2>
  </div>
  <div class="subcription-image">
    <span class="container1">
      <span class="subcription-heading">Get to know more about Pool Events and Timings:</span>
      <ul>
        <li><a href="/poolManager/poolAdvertisements">Events </a></li>
        <li><a href="/resident/poolSubcription">Events Schedule</a></li>
        <li><a href="/resident/poolTimings">Timings</a></li>
    </span>
  </div>
  <div class="subcription-image">
    <span class="container1">
    <span class="subcription-heading">Get to know more about Garden Events and Timings:</span>
      <ul>
        <li><a href="/gardenManager/gardenAdvertisements">Events </a></li>
        <li><a href="/resident/gardenSubcription">Events Schedule</a></li>
        <li><a href="/resident/gardenTimings">Timings</a></li>

      </ul>
    </span>
  </div>

  <div class="subcription-image">
    <span class="container1">
    <span class="subcription-heading">Get to know more about Tennis Events and Timings:</span>
    <ul>
      <li><a href="/tennisManager/tennisAdvertisements">Events </a></li>
      <li><a href="/resident/tennisSubcription">Events Schedule</a></li>
      <li><a href="/resident/tennisTimings">Timings</a></li>
    </ul>
    </span>
  </div>
  <div class="subcription-image">
    <span class="container1">
    <span class="subcription-heading">Current Subcriptions are:</span>
    @foreach($subResident as $subResident)
    <ul>
    <li>Pool Subscription:&nbsp; {{$subResident->poolSubcription}}</li>
      <li>Garden Subscription:&nbsp;{{$subResident->gardenSubcription}}</li>
      <li>Tennis Subscription:&nbsp;{{$subResident->tennisSubcription}}</li>
    </ul>
    @endforeach
    <span class="subcription-heading">To subcribe/unsubcribe on any of the above events refer this link -> </span>
      <a class="subcription-heading" href="/resident/eventSubcription">Subcriptions</a>
    </span>
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