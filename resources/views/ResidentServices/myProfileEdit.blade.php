<!DOCTYPE html>
<html>
<head>
    <title>Terrazas de Guacuco</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css"/>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
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
        <br /><br /><br/>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10">
                <form method="post" action="/resident/updateMyProfile?emailId={{$emailId}}">
                    @csrf
                    <div class="form-group row">
                        <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Name: {{$name}}</label><br/>
                    </div><br/>
                    <div class="form-group row">
                        <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Email Id: {{$emailId}}</label><br/>
                    </div><br/>
                    <div class="form-group row">
                        <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Enter Contact Number:</label><br />
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="phnumber" value="{{$phnumber}}"><br/>
                        </div>
                        @if ($errors->has('phnumber'))
                        <span class="field-error">{{ $errors->first('phnumber') }}</span><br/>
                        @endif
                    </div><br/>
                    <div class="form-group row">
                        <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Enter Driving License Number:</label><br />
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="dlnumber" value="{{$dlnumber}}"/><br /> 
                        </div>
                        @if ($errors->has('dlnumber'))
                        <span class="field-error">{{ $errors->first('dlnumber') }}</span><br/>
                        @endif  
                    </div> 
                    <div class="form-group row">              
                        <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Enter Car Number Plate:</label><br />
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="carnumplate" value="{{$carnumplate}}"/><br />  
                        </div>
                        @if ($errors->has('carnumplate'))
                        <span class="field-error">{{ $errors->first('carnumplate') }}</span><br/>
                        @endif    
                    </div> 
                    <div class="form-group row">
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-outline-primary btn-lg">Submit</button>&nbsp;
                            <button type="cancel" onclick="window.location.href='{{ url('/visitor/myProfile') }}'" class="btn btn-outline-secondary btn-lg">Cancel</button>&nbsp;
                        </div>
                    </div>
                </form>
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
</body>

</html>