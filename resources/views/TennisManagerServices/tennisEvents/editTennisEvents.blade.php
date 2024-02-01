<?php $counter=0; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Terrazas de Guacuco</title>
    <link rel="stylesheet" href="../css/style.css">
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
                    <li><a href="/tennisManager/services">Services</a></li>
                    <li><a href="http://vxl6814.uta.cloud/">Blog</a></li>
                    <li><a href="/contactus">Contact Us</a></li>
                    <li><a href="/feedback">Feedback</a></li>
                    <li><a href="/login">Logout</a></li>
            </ul>
        </div>
    </nav>
    <!-- <div class="container">
        <h2>Edit Tennis Events</h2>
    </div>
    <div class="container1">   
        <form method="post" action="/tennisManager/updateTennisEvents?eventId={{$eventId}}">
            @csrf
            <label>Tennis Event Id: {{$eventId}}</label><br/>
            <label>Enter Tennis Events:</label><br />
            <input type="text" name="tennisEvents" value="{{$tennisEvents}}">
            <label>Enter Match Date:</label><br />
            <input type="date" name="matchDate" value="{{$matchDate}}"/><br />                  
            <label>Enter Time:</label><br />
            <input type="time" name="time" value="{{$time}}"/><br />             
            <label>Enter Status:</label><br />
            <input type="text" name="status" value="{{$status}}"/><br />
            <button type="submit">Submit</button>&nbsp;
            <button type="cancel" onclick="window.location.href='{{ url('/tennisManager/tennisEvents') }}'">Cancel</button>&nbsp;
        </form>
    </div> -->
    <div class="contus-container">
        <h2>Edit Tennis Events</h2>
    </div>
        <br /><br /><br/>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10">
                <form method="post" action="/tennisManager/updateTennisEvents?eventId={{$eventId}}">
                    @csrf
                    <div class="form-group row">
                        <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Tennis Event Id: {{$eventId}}</label><br/>
                    </div><br/>
                    <div class="form-group row">
                        <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Enter Tennis Events:</label><br />
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="tennisEvents" value="{{$tennisEvents}}"><br/>
                        </div>
                        @if ($errors->has('tennisEvents'))
                        <span class="field-error">{{ $errors->first('tennisEvents') }}</span><br/>
                        @endif
                    </div><br/>
                    <div class="form-group row">
                        <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Enter Match Date:</label><br />
                        <div class="col-sm-8">
                            <input type="date" class="form-control" name="matchDate" value="{{$matchDate}}"/><br /> 
                        </div>
                        @if ($errors->has('matchDate'))
                        <span class="field-error">{{ $errors->first('matchDate') }}</span><br/>
                        @endif  
                    </div> 
                    <div class="form-group row">              
                        <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Enter Time:</label><br />
                        <div class="col-sm-8">
                            <input type="time" class="form-control" name="time" value="{{$time}}"/><br />  
                        </div>
                        @if ($errors->has('time'))
                        <span class="field-error">{{ $errors->first('time') }}</span><br/>
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
                            <button type="cancel" onclick="window.location.href='{{ url('/tennisManager/tennisEvents') }}'" class="btn btn-outline-secondary btn-lg">Cancel</button>&nbsp;
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