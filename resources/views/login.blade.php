<!DOCTYPE html>
<html>
    <head>
    <title>Terrazas de Guacuco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="nav-bar">
            <div class="project-title-name"><a href="/">Terrazas de Guacuco</a></div>
            <div class="nav-bar-pages">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="http://vxl6814.uta.cloud/">Blog</a></li>
                    <li><a href="/contactus">Contact Us</a></li>
                    <li><a href="/feedback">Feedback</a></li>
                    <li><a href="/register">Register/Login</a></li>
                </ul>
            </div>
        </nav>
        <div class="login-container">
            <div class="row">
                <div class="w3-half">
                    <img src="../images/hotel.png" alt="image not found" class="image-login-responsive" />
                </div>
                <div class="w3-half">
                    <div class="register-page-column">
                        <div>
                            <h2 class="login-heading">
                                Login
                            </h2>
                        </div>
                        <div>
                            <h5 class="login-sub-heading">
                                Sign in to continue
                            </h5>
                        </div>
                        <div>
                            <h5 class="login-sub-heading">
                                Forgot Password? &nbsp; <a href="/forgotPassword">Get Notified!!!</a><br/>
                            </h5>
                        </div><br/><br/>
                        <form class="login-form" name="loginForm" action="/login/storeLogin" method="post">
                            @csrf
                            <div class="form-outline mb-4">
                                <input type="email" id="emailId" name="emailId" class="form-control form-control-lg"
                                    placeholder="Enter a valid email address" value="{{old('emailId')}}"/>
                                    @if ($errors->has('emailId'))
                                    <span class="field-error">{{ $errors->first('emailId') }}</span><br/>
                                    @endif
                            </div><br/>
                            
                            <div class="form-outline mb-3">
                            <input type="password" id="password" name="password" class="form-control form-control-lg"
                                placeholder="Enter password" value="{{old('password')}}"/>
                                @if ($errors->has('password'))
                                <span class="field-error">{{$errors->first('password')}}</span><br/>
                                @endif
                            </div>
                            
                            <div class="text-center text-lg-start mt-4 pt-2">
                                 <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Login" name="submit" id="submit">Login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="/register"
                                    class="link-danger">Register</a></p>
                        </div>
                        </form>
                    </div>
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
    </body>
</html>