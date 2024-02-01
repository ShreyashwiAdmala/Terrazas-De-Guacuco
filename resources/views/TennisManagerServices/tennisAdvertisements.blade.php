<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tennis Events</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link href="https://fonts.cdnfonts.com/css/gistesy" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/nickainley" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
</head>

<body>
    <nav class="nav-bar">
        <div class="project-title-name"><a href="/">Terrazas de Guacuco</a></div>
        <div class="nav-bar-pages">
            <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/tennisManager/services">Services</a></li>
                    <li><a href="http://vxl6814.uta.cloud/">Blog</a></li>
                    <li><a href="/contactus">Contact Us</a></li>
                    <li><a href="/feedback">Feedback</a></li>
                    <li><a href="/login">Logout</a></li>
            </ul>
        </div>
    </nav>
        <div class="advertisementHeader">
            <img class="adv-head-image" src="https://reviewed-com-res.cloudinary.com/image/fetch/s--UJ2sGByA--/b_white,c_limit,cs_srgb,f_auto,fl_progressive.strip_profile,g_center,q_auto,w_972/https://reviewed-production.s3.amazonaws.com/1597356287543/GettyImages-1171084311.jpg">
            <h2 class="htext">Tennis Events</h2>
        </div>

        <div class="adv-container3">
            <p class="eventHeading">Events</p>
        </div>
   
          <div class="container4">
    <div class="events">
        <div class="Slides">
            <figure>
        <img class="background-image" src="https://thumbs.dreamstime.com/b/senior-young-man-shake-hands-padel-tennis-match-glad-positive-smiling-171983054.jpg" style="width:100%;" >
        <figcaption style="text-align:center;"><h1 class="txt">Men's Match</h1></figcaption>  
    </figure>
          </div>
        <div class="Slides">
            <figure>
        <img class="background-image" src="https://www.si.com/.image/t_share/MTk2NjUxMTYzMzQ3NTkzMTgz/melodie-collard-and-julia-adams-unc.jpg" style="width:100%">
    <figcaption style="text-align:center;"><h1 class="txt">Women's Match</h1></figcaption>  
        </figure> 
    </div>  
        <div class="Slides">
            <figure>
        <img class="background-image" src="https://media.istockphoto.com/id/496037009/photo/shaking-hands-after-a-tennis-match.jpg?s=612x612&w=0&k=20&c=QPkrKmEAdmHrAq4q0a4nNoNW0YECnymfUxLEuMd1aV0=" style="width:100%">
        <figcaption style="text-align:center;"><h1 class="txt">Mixed Match</h1></figcaption>  
    </figure>
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
    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("Slides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) { myIndex = 1 }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
    </script>
</body>

</html>