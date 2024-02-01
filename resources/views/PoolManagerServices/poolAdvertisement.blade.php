<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pool Events</title>
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
                    <li><a href="/poolManager/services">Services</a></li>
                    <li><a href="http://vxl6814.uta.cloud/">Blog</a></li>
                    <li><a href="/contactus">Contact Us</a></li>
                    <li><a href="/feedback">Feedback</a></li>
                    <li><a href="/login">Logout</a></li>
            </ul>
        </div>
    </nav>
    <div class="advertisementHeader">
        <img class="adv-head-image" src="https://cdn.pixabay.com/photo/2015/11/02/18/32/water-1018808__480.jpg">
        <h2 class="htext">Pool Events</h2>
    </div>

    <div class="adv-container3">
        <p class="eventHeading">Events</p>
    </div>
   
    <div class="container4">
        <div class="events">
            <div class="Slides">
                <figure>
                    <img class="background-image" src="https://cdobible.org/wp-content/uploads/2022/07/pool-party.jpg" style="width:100%;" >
                    <figcaption style="text-align:center;"><h1 class="txt">Pool Party</h1></figcaption>  
                </figure>
            </div>
            <div class="Slides">
                <figure>
                    <img class="background-image" src="https://media.istockphoto.com/id/532267082/photo/friends-playing-volleyball-in-a-pool.jpg?s=170667a&w=0&k=20&c=ts-HeKnIpevQLMUWhirBM4HuYvZIbJDvjiugWiUUU4Q=" style="width:100%">
                    <figcaption style="text-align:center;"><h1 class="txt">Pool Volley Ball</h1></figcaption>  
                </figure> 
            </div>  
            <div class="Slides">
                <figure>
                    <img class="background-image" src="https://www.hastingswaterworks.com/wp-content/uploads/2018/06/pool-party-ideas.jpg" style="width:100%">
                    <figcaption style="text-align:center;"><h1 class="txt">Pool Dance</h1></figcaption>  
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