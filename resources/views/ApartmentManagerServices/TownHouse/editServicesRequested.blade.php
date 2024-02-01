<?php $counter=0; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Terrazas de Guacuco</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.min.css">
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
    <div class="contus-container">
        <h2>Edit Services Requested</h2>
    </div>
    <br /><br /><br/>
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <form method="post" action="/apartmentManager/TownHouse/updateServicesRequested?emailId={{$emailId}}">
                @csrf
                <div class="form-group row">
                    <label for="exampleInputEmail1" class="col-sm-4 col-form-label">TownHouse Email Id: {{$emailId}}</label><br/>
                </div><br/>
                <div class="form-group row">
                    <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Enter Services Requested:</label><br />
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="servicesRequested" value="{{$servicesRequested}}"><br/>
                    </div>
                    @if ($errors->has('servicesRequested'))
                    <span class="field-error">{{ $errors->first('servicesRequested') }}</span><br/>
                    @endif
                </div><br/>
                <div class="form-group row">
                    <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Enter Resident Name:</label><br />
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="residentName" value="{{$residentName}}"/><br /> 
                    </div>
                    @if ($errors->has('residentName'))
                    <span class="field-error">{{ $errors->first('residentName') }}</span><br/>
                    @endif  
                </div> 
                <div class="form-group row">             
                    <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Enter Apartment Number:</label><br />                        
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="apartmentNumber" value="{{$apartmentNumber}}"/><br />
                    </div>
                    @if ($errors->has('apartmentNumber'))
                    <span class="field-error">{{ $errors->first('apartmentNumber') }}</span><br/>
                    @endif
                </div>
                <div class="form-group row">             
                    <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Enter Status:</label><br />
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="status" value="{{$status}}"/><br />
                    </div>
                    @if ($errors->has('status'))
                    <span class="field-error">{{ $errors->first('status') }}</span><br/>
                    @endif
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-outline-primary btn-lg">Submit</button>&nbsp;
                        <button type="cancel" onclick="window.location.href='{{ url('/apartmentManager/TownHouse/servicesRequested') }}'" class="btn btn-outline-secondary btn-lg">Cancel</button>&nbsp;
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
