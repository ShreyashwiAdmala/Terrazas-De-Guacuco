<!DOCTYPE Html>
<html>
    <head>
        <title>Terrazas de Guacuco</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>
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
                    @if(session('user_role') == '')
                    <li><a href="/services">Services</a></li>
                    @endif
                    @if(session('user_role') == "PoolManager")
                    <li><a href="/poolManager/services">Services</a></li>
                    @endif
                    @if(session('user_role') == "Visitor")
                    <li><a href="/VisitorServices/visitorServices">Services</a></li>
                    @endif
                    @if(session('user_role') == "Resident")
                    <li><a href="/resident/services">Services</a></li>
                    @endif
                    @if(session('user_role') == "ApartmentManager")
                    <li><a href="/apartmentManagerServices">Services</a></li>
                    @endif
                    @if(session('user_role') == "GardenManager")
                    <li><a href="/gardenManager/services">Services</a></li>
                    @endif
                    @if(session('user_role') == "VisitorManager")
                    <li><a href="/VisitorManagerServices/visitorManagerServices">Services</a></li>
                    @endif
                    @if(session('user_role') == "superAdmin")
                    <li><a href="/SuperAdminServices">Services</a></li>
                    @endif
                    @if(session('user_role') == "SecurityManager")
                    <li><a href="/SecurityManagerServices/securityManagerServices">Services</a></li>
                    @endif
                    @if(session('user_role') == "TennisManager")
                    <li><a href="/tennisManager/services">Services</a></li>
                    @endif
                    @if(session('user_role') == "BuildingManager")
                    <li><a href="/buildingManager/buildingManagerServices">Services</a></li>
                    @endif
                    <li><a href="http://vxl6814.uta.cloud/">Blog</a></li>
                    <li><a href="/contactus">Contact Us</a></li>
                    <li><a href="/feedback">Feedback</a></li>
                    @if(session('user_role') == '')
                    <li><a href="/register">Register/Login</a></li>
                    @endif
                    @if(session('user_role') != '')
                    <li><a href="/login">Logout</a></li>
                    @endif
                </ul>
            </div>
        </nav>
        <div class="container">
            <h2>FeedBack</h2>
        </div><br/><br/><br/><br/>
        <center>
        <div className='feedback'>
            <form name="feedback-form" method="post" action="/feedbackStore">
                @csrf
                <div className="contact-form">
                    <div className='feed-lable'>
                        <label>How was your experience with our website?</label>
                    </div>
                    <select name="answer1" id="answer1" value="{{old('answer1')}}">
                        <option value="" name="" id=" ">Select Role</option>
                        <option value="Excellent">Excellent</option>
                        <option value="Good">Good</option>
                        <option value="Fair">Fair</option>
                        <option value="Poor">Poor</option>
                    </select><br />
                </div><br/>
                <div className="contact-form">
                    <div className='feed-lable'>
                        <label>How likely are you to recommend our website to a friend or colleague?</label>
                    </div>
                    <select name="answer2" id="answer2" value="{{old('answer2')}}">
                        <option value="" name="" id=" ">Select Role</option>
                        <option value="Excellent">Excellent</option>
                        <option value="Good">Good</option>
                        <option value="Fair">Fair</option>
                        <option value="Poor">Poor</option>
                    </select><br />
                </div><br/>
                <div className="contact-form">
                    <div className='feed-lable'>
                        <label>How was your experience with our customer service?</label>
                    </div>
                    <select name="answer3" id="answer3" value="{{old('answer3')}}">
                        <option value="" name="" id=" ">Select Role</option>
                        <option value="Excellent">Excellent</option>
                        <option value="Good">Good</option>
                        <option value="Fair">Fair</option>
                        <option value="Poor">Poor</option>
                    </select><br />
                </div><br/>
                <div className="contact-form">
                    <div className='feed-lable'>
                        <label>How likely are you to visit us again in the future?</label>
                    </div>
                    <select name="answer4" id="answer4" value="{{old('answer4')}}">
                        <option value="" name="" id=" ">Select Role</option>
                        <option value="Excellent">Excellent</option>
                        <option value="Good">Good</option>
                        <option value="Fair">Fair</option>
                        <option value="Poor">Poor</option>
                    </select><br />
                </div><br/>
                <div className='contact-form'>
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
</center><br/><br/><br/><br/>
        <div class="footer">
            <p class="w3-padding w3-xxlarge w3-text-white">
            <a href="https://www.instagram.com/terrazasdeguacuco/"><i class="fa fa-instagram">&nbsp;&nbsp;</i></a>
                <a href="https://www.facebook.com/profile.php?id=100091919480216"><i class="fa fa-facebook">&nbsp;&nbsp;</i></a>
                <a href="https://twitter.com/TDeGuacuco"><i class="fa fa-twitter"></i></a>
                </p>
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