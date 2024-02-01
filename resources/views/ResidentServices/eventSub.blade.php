<!DOCTYPE html>
<html>

<head>
    <title>Terrazas de Guacuco</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <style>
        body {
    background: url('https://img.freepik.com/premium-photo/abstract-blur-luxury-hotel-lobby-reception-background_1339-164667.jpg') no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
    font-family: sans-serif;
  }
  </style>

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
    <div class="login-container">
        <div class="contact-heading">
            <h2>SUBSCRIBE TO SERVICES</h2>
        </div>
    </div>
    <br /><br /><br/>
    <div class="container-sm">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <form method="post" action="/resident/updateEventSubcription">
                @csrf
                <div class="d-flex justify-content-center"> 
                    <div class="w-75 p-3 p-sm-4 dropdown-menu-right"> 
                        <span>Select pool subcription:</span>
                        <select class="form-control" name="poolSubcription" id="poolSubcription" value="{{old('poolSubcription')}}"> 
                            <option value="" name=" " id=" ">Select Subcription</option>
                            <option value="Subscribe">Subscribe</option>
                            <option value="UnSubscribe">UnSubscribe</option>
                        </select> 
                    </div> <br/>
                    @if ($errors->has('poolSubcription'))
                    <span class="field-error">{{ $errors->first('poolSubcription') }}</span><br/>
                    @endif
                </div>
                <div class="d-flex justify-content-center"> 
                    <div class="w-75 p-3 p-sm-4 dropdown-menu-right"> 
                        <span>Select garden subcription:</span>
                        <select class="form-control" name="gardenSubcription" id="gardenSubcription" value="{{old('gardenSubcription')}}"> 
                            <option value="" name=" " id=" ">Select Subcription</option>
                            <option value="Subscribe">Subscribe</option>
                            <option value="UnSubscribe">UnSubscribe</option>
                        </select> 
                    </div> <br/>
                    @if ($errors->has('gardenSubcription'))
                    <span class="field-error">{{ $errors->first('gardenSubcription') }}</span><br/>
                    @endif
                </div>
                <div class="d-flex justify-content-center"> 
                    <div class="w-75 p-3 p-sm-4 dropdown-menu-right"> 
                        <span>Select tennis subcription:</span>
                        <select class="form-control" name="tennisSubcription" id="tennisSubcription" value="{{old('tennisSubcription')}}"> 
                            <option value="" name=" " id=" ">Select Subcription</option>
                            <option value="Subscribe">Subscribe</option>
                            <option value="UnSubscribe">UnSubscribe</option>
                        </select> <br/>
                    </div> 
                    @if ($errors->has('tennisSubcription'))
                    <span class="field-error">{{ $errors->first('tennisSubcription') }}</span><br/>
                    @endif
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form> 
            <br/><br/>
        </div>
    </div>
    <br /><br /><br /><br/><br/><br/><br/><br/>
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